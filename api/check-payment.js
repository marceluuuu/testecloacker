const https = require('https');

export default async function handler(req, res) {
    res.setHeader('Access-Control-Allow-Credentials', true);
    res.setHeader('Access-Control-Allow-Origin', '*');
    res.setHeader('Access-Control-Allow-Methods', 'GET,OPTIONS,PATCH,DELETE,POST,PUT');
    res.setHeader(
        'Access-Control-Allow-Headers',
        'X-CSRF-Token, X-Requested-With, Accept, Accept-Version, Content-Length, Content-MD5, Content-Type, Date, X-Api-Version'
    );

    if (req.method === 'OPTIONS') {
        res.status(200).end();
        return;
    }

    if (req.method !== 'GET') {
        return res.status(405).json({ error: 'Method Not Allowed' });
    }

    const { id } = req.query;

    if (!id) {
        return res.status(400).json({ error: 'Missing payment ID' });
    }

    // SECURITY: Using environment variable.
    const apiKey = process.env.BLACKCAT_API_KEY || 'YOUR_BLACKCAT_API_KEY_HERE';

    const options = {
        hostname: 'api.blackcatpagamentos.online',
        path: `/api/sales/${id}`,
        method: 'GET',
        headers: {
            'Content-Type': 'application/json',
            'X-API-Key': apiKey
        }
    };

    try {
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

        try {
            const jsonResponse = JSON.parse(apiResponse.data);
            return res.status(apiResponse.statusCode).json(jsonResponse);
        } catch (e) {
            return res.status(apiResponse.statusCode).send(apiResponse.data);
        }
    } catch (error) {
        console.error(error);
        return res.status(500).json({ error: 'Failed to contact payment gateway' });
    }
}
