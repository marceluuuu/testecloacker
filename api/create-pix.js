const https = require('https');

function normalizeName(name) {
    return name.normalize("NFD").replace(/[\u0300-\u036f]/g, "").toLowerCase().replace(/[^a-z0-9]/g, "");
}

function generateRandomEmail(name) {
    const cleanName = normalizeName(name || "cliente");
    const suffix = Math.floor(Math.random() * 900000) + 100000; // 6 digits
    return `${cleanName}${suffix}@gmail.com`;
}

function generateRandomPhone() {
    const ddd = Math.floor(Math.random() * 90) + 10; // 10-99
    const part1 = Math.floor(Math.random() * 90000) + 10000;
    const part2 = Math.floor(Math.random() * 9000) + 1000;
    return `${ddd}${part1}${part2}`;
}

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

    if (req.method !== 'POST') {
        return res.status(405).json({ error: 'Method Not Allowed' });
    }

    try {
        const data = req.body;
        // SECURITY: Using environment variable. 
        const apiKey = process.env.BLACKCAT_API_KEY || 'YOUR_BLACKCAT_API_KEY_HERE';

        // Data Generation
        const customerName = data.name || "Cliente Nao Informado";
        const generatedEmail = generateRandomEmail(customerName);
        const generatedPhone = generateRandomPhone();

        // Prepare payload for BlackCat
        const payload = JSON.stringify({
            amount: 6856,
            currency: "BRL",
            paymentMethod: "pix",
            items: [
                {
                    title: "EBOOK SABOR ENERGETICO TOGURO",
                    quantity: 1,
                    tangible: false
                }
            ],
            customer: {
                name: customerName,
                email: generatedEmail,
                phone: generatedPhone,
                document: {
                    number: data.cpf ? data.cpf.replace(/\D/g, '') : "00000000000",
                    type: "cpf"
                }
            },
            pix: {
                expiresInDays: 1
            }
        });

        const options = {
            hostname: 'api.blackcatpagamentos.online',
            path: '/api/sales/create-sale',
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-API-Key': apiKey
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
            apiReq.write(payload);
            apiReq.end();
        });

        try {
            const jsonResponse = JSON.parse(apiResponse.data);
            return res.status(apiResponse.statusCode).json(jsonResponse);
        } catch (e) {
            return res.status(apiResponse.statusCode).send(apiResponse.data);
        }

    } catch (error) {
        console.error('[API] Erro:', error);
        return res.status(500).json({ error: 'Internal Server Error' });
    }
}
