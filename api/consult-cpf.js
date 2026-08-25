const https = require('https');

export default async function handler(req, res) {
    // Configurar CORS
    res.setHeader('Access-Control-Allow-Credentials', true);
    res.setHeader('Access-Control-Allow-Origin', '*'); // Em produção, mude para seu domínio
    res.setHeader('Access-Control-Allow-Methods', 'GET,OPTIONS,PATCH,DELETE,POST,PUT');
    res.setHeader(
        'Access-Control-Allow-Headers',
        'X-CSRF-Token, X-Requested-With, Accept, Accept-Version, Content-Length, Content-MD5, Content-Type, Date, X-Api-Version'
    );

    if (req.method === 'OPTIONS') {
        res.status(200).end();
        return;
    }

    if (req.method !== 'POST') {
        return res.status(405).json({ error: 'Method Not Allowed' });
    }

    try {
        const { cpf } = req.body;
        if (!cpf) {
            return res.status(400).json({ error: 'CPF required' });
        }

        const cleanCpf = cpf.replace(/\D/g, '');
        // SECURITY: Using environment variable. 
        const token = process.env.LEGENDARY_API_TOKEN || 'YOUR_LEGENDARY_API_TOKEN_HERE';

        console.log(`[API] Consultando CPF: ${cleanCpf}`);

        const options = {
            hostname: 'legendaryapi.online',
            path: `/${token}/${cleanCpf}`,
            method: 'GET',
            headers: {
                'Accept': 'application/json'
            }
        };

        const apiResponse = await new Promise((resolve, reject) => {
            const apiReq = https.request(options, (apiRes) => {
                let data = '';
                apiRes.on('data', (chunk) => { data += chunk; });
                apiRes.on('end', () => {
                    resolve({
                        statusCode: apiRes.statusCode,
                        data: data
                    });
                });
            });

            apiReq.on('error', (e) => reject(e));
            apiReq.end();
        });

        // Parse response to ensure valid JSON
        try {
            const jsonResponse = JSON.parse(apiResponse.data);
            return res.status(apiResponse.statusCode).json(jsonResponse);
        } catch (e) {
            // Forward raw text if not JSON, or handle error
            return res.status(apiResponse.statusCode).send(apiResponse.data);
        }

    } catch (error) {
        console.error('[API] Erro:', error);
        return res.status(500).json({ error: 'Internal Server Error' });
    }
}
