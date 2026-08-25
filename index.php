<?php
declare(strict_types=1);

/**
 * =====================================================================
 *   CLOAKER PHP — Standalone Edition (UnknownShield)
 *   Campanha: TESTE DE 1 DIA CLIENTE MARCELO (a9ffe15bdbb0a395)
 *   Gerado em: 2026-08-25T19:42:31Z
 *
 *   ESTRUTURA PADRÃO:
 *     /seu-projeto/
 *       ├── index.php              (este arquivo)
 *       ├── pagina/index.html  <- MONEY (humanos)
 *       ├── noticia/index.html   <- SAFE (bots / revisor)
 *       ├── rate_limit/            (criada automaticamente)
 *       └── logs/                  (criada automaticamente)
 * =====================================================================
 */

/* ===================== CONFIGURAÇÕES DA CAMPANHA ===================== */
$campaign_active     = true;
$campaign_banned_ips = array (
  0 => '108.177.2.0/27',
  1 => '108.177.2.32/27',
  2 => '108.177.2.64/27',
  3 => '108.177.2.96/27',
  4 => '108.177.2.128/27',
  5 => '108.177.2.160/27',
  6 => '108.177.2.192/27',
  7 => '108.177.2.224/27',
  8 => '192.178.16.0/27',
  9 => '192.178.16.32/27',
  10 => '192.178.16.64/27',
  11 => '192.178.16.96/27',
  12 => '192.178.16.128/27',
  13 => '192.178.16.160/27',
  14 => '192.178.16.192/27',
  15 => '192.178.16.224/27',
  16 => '192.178.17.0/27',
  17 => '209.85.238.0/27',
  18 => '209.85.238.32/27',
  19 => '209.85.238.64/27',
  20 => '209.85.238.96/27',
  21 => '209.85.238.128/27',
  22 => '209.85.238.160/27',
  23 => '209.85.238.192/27',
  24 => '209.85.238.224/27',
  25 => '66.249.87.0/27',
  26 => '66.249.87.32/27',
  27 => '66.249.87.64/27',
  28 => '66.249.87.96/27',
  29 => '66.249.87.128/27',
  30 => '66.249.87.160/27',
  31 => '66.249.87.192/27',
  32 => '66.249.87.224/27',
  33 => '66.249.89.0/27',
  34 => '66.249.89.32/27',
  35 => '66.249.89.64/27',
  36 => '66.249.89.96/27',
  37 => '66.249.89.128/27',
  38 => '66.249.89.160/27',
  39 => '66.249.89.192/27',
  40 => '66.249.89.224/27',
  41 => '66.249.90.0/27',
  42 => '66.249.90.32/27',
  43 => '66.249.90.64/27',
  44 => '66.249.90.96/27',
  45 => '66.249.90.128/27',
  46 => '66.249.90.160/27',
  47 => '66.249.90.192/27',
  48 => '66.249.90.224/27',
  49 => '66.249.91.0/27',
  50 => '66.249.91.32/27',
  51 => '66.249.91.64/27',
  52 => '66.249.91.96/27',
  53 => '66.249.91.128/27',
  54 => '66.249.91.160/27',
  55 => '66.249.91.192/27',
  56 => '66.249.91.224/27',
  57 => '66.249.92.0/27',
  58 => '66.249.92.32/27',
  59 => '66.249.92.64/27',
  60 => '66.249.92.96/27',
  61 => '66.249.92.128/27',
  62 => '66.249.92.160/27',
  63 => '66.249.92.192/27',
  64 => '66.249.92.224/27',
  65 => '72.14.199.32/27',
  66 => '72.14.199.64/27',
  67 => '72.14.199.96/27',
  68 => '72.14.199.128/27',
  69 => '72.14.199.160/27',
  70 => '72.14.199.192/27',
  71 => '72.14.199.224/27',
  72 => '74.125.148.0/27',
  73 => '74.125.148.32/27',
  74 => '74.125.148.64/27',
  75 => '74.125.148.96/27',
  76 => '74.125.148.128/27',
  77 => '74.125.148.160/27',
  78 => '74.125.148.192/27',
  79 => '74.125.148.224/27',
  80 => '74.125.149.0/27',
  81 => '74.125.149.32/27',
  82 => '74.125.149.64/27',
  83 => '74.125.149.96/27',
  84 => '74.125.149.128/27',
  85 => '74.125.149.160/27',
  86 => '74.125.149.192/27',
  87 => '74.125.149.224/27',
  88 => '74.125.150.0/27',
  89 => '74.125.150.32/27',
  90 => '74.125.150.64/27',
  91 => '74.125.150.96/27',
  92 => '74.125.150.128/27',
  93 => '74.125.150.160/27',
  94 => '74.125.150.192/27',
  95 => '74.125.151.0/27',
  96 => '74.125.151.32/27',
  97 => '74.125.151.64/27',
  98 => '74.125.151.96/27',
  99 => '74.125.151.128/27',
  100 => '74.125.151.160/27',
  101 => '74.125.151.192/27',
  102 => '74.125.151.224/27',
  103 => '74.125.216.0/27',
  104 => '74.125.216.32/27',
  105 => '74.125.216.64/27',
  106 => '74.125.216.96/27',
  107 => '74.125.216.128/27',
  108 => '74.125.216.160/27',
  109 => '74.125.216.192/27',
  110 => '74.125.216.224/27',
  111 => '74.125.217.0/27',
  112 => '74.125.217.32/27',
  113 => '74.125.217.64/27',
  114 => '74.125.217.96/27',
  115 => '74.125.217.128/27',
  116 => '74.125.217.160/27',
  117 => '74.125.217.192/27',
  118 => '74.125.217.224/27',
  119 => '74.125.218.0/27',
  120 => '74.125.218.32/27',
  121 => '74.125.218.64/27',
  122 => '74.125.218.96/27',
  123 => '74.125.218.128/27',
  124 => '74.125.218.160/27',
  125 => '74.125.218.192/27',
  126 => '74.125.218.224/27',
  127 => '74.125.219.0/27',
  128 => '74.125.219.32/27',
  129 => '74.125.219.64/27',
  130 => '74.125.219.96/27',
  131 => '74.125.219.128/27',
  132 => '74.125.219.160/27',
  133 => '74.125.219.192/27',
  134 => '74.125.219.224/27',
  135 => '2001:4860:4801:2008::/64',
  136 => '2001:4860:4801:200c::/64',
  137 => '2001:4860:4801:200d::/64',
  138 => '2001:4860:4801:2010::/64',
  139 => '2001:4860:4801:2011::/64',
  140 => '2001:4860:4801:2012::/64',
  141 => '2001:4860:4801:2013::/64',
  142 => '2001:4860:4801:2014::/64',
  143 => '2001:4860:4801:2015::/64',
  144 => '2001:4860:4801:2016::/64',
  145 => '2001:4860:4801:2017::/64',
  146 => '2001:4860:4801:2018::/64',
  147 => '2001:4860:4801:2019::/64',
  148 => '2001:4860:4801:201a::/64',
  149 => '2001:4860:4801:201b::/64',
  150 => '2001:4860:4801:201c::/64',
  151 => '2001:4860:4801:201d::/64',
  152 => '2001:4860:4801:201e::/64',
  153 => '2001:4860:4801:201f::/64',
  154 => '2001:4860:4801:2020::/64',
  155 => '2001:4860:4801:2021::/64',
  156 => '2001:4860:4801:2022::/64',
  157 => '2001:4860:4801:2023::/64',
  158 => '2001:4860:4801:2024::/64',
  159 => '2001:4860:4801:2025::/64',
  160 => '2001:4860:4801:2026::/64',
  161 => '2001:4860:4801:2027::/64',
  162 => '2001:4860:4801:2028::/64',
  163 => '2001:4860:4801:2029::/64',
  164 => '2001:4860:4801:202a::/64',
  165 => '2001:4860:4801:202b::/64',
  166 => '2001:4860:4801:202c::/64',
  167 => '2001:4860:4801:202d::/64',
  168 => '2001:4860:4801:202e::/64',
  169 => '2001:4860:4801:202f::/64',
  170 => '2001:4860:4801:2030::/64',
  171 => '2001:4860:4801:2031::/64',
  172 => '2001:4860:4801:2032::/64',
  173 => '2001:4860:4801:2033::/64',
  174 => '2001:4860:4801:2034::/64',
  175 => '2001:4860:4801:2035::/64',
  176 => '2001:4860:4801:2036::/64',
  177 => '2001:4860:4801:2037::/64',
  178 => '2001:4860:4801:2038::/64',
  179 => '2001:4860:4801:2039::/64',
  180 => '2001:4860:4801:203a::/64',
  181 => '2001:4860:4801:203b::/64',
  182 => '2001:4860:4801:203c::/64',
  183 => '2001:4860:4801:203d::/64',
  184 => '2001:4860:4801:203e::/64',
  185 => '2001:4860:4801:203f::/64',
  186 => '2001:4860:4801:2040::/64',
  187 => '2001:4860:4801:2041::/64',
  188 => '2001:4860:4801:2042::/64',
  189 => '2001:4860:4801:2044::/64',
  190 => '2001:4860:4801:2045::/64',
  191 => '2001:4860:4801:2046::/64',
  192 => '2001:4860:4801:2047::/64',
  193 => '2001:4860:4801:2048::/64',
  194 => '2001:4860:4801:2049::/64',
  195 => '2001:4860:4801:204a::/64',
  196 => '2001:4860:4801:204b::/64',
  197 => '2001:4860:4801:204c::/64',
  198 => '2001:4860:4801:204d::/64',
  199 => '2001:4860:4801:204e::/64',
  200 => '2001:4860:4801:2050::/64',
  201 => '2001:4860:4801:2051::/64',
  202 => '2001:4860:4801:2052::/64',
  203 => '2001:4860:4801:2053::/64',
  204 => '2001:4860:4801:2054::/64',
  205 => '2001:4860:4801:2055::/64',
  206 => '2001:4860:4801:2056::/64',
  207 => '2001:4860:4801:2060::/64',
  208 => '2001:4860:4801:2061::/64',
  209 => '2001:4860:4801:2062::/64',
  210 => '2001:4860:4801:2063::/64',
  211 => '2001:4860:4801:2064::/64',
  212 => '2001:4860:4801:2065::/64',
  213 => '2001:4860:4801:2066::/64',
  214 => '2001:4860:4801:2067::/64',
  215 => '2001:4860:4801:2068::/64',
  216 => '2001:4860:4801:2069::/64',
  217 => '2001:4860:4801:206a::/64',
  218 => '2001:4860:4801:206b::/64',
  219 => '2001:4860:4801:206c::/64',
  220 => '2001:4860:4801:206d::/64',
  221 => '2001:4860:4801:206e::/64',
  222 => '2001:4860:4801:206f::/64',
  223 => '2001:4860:4801:2070::/64',
  224 => '2001:4860:4801:2071::/64',
  225 => '2001:4860:4801:2072::/64',
  226 => '2001:4860:4801:2073::/64',
  227 => '2001:4860:4801:2074::/64',
  228 => '2001:4860:4801:2075::/64',
  229 => '2001:4860:4801:2076::/64',
  230 => '2001:4860:4801:2077::/64',
  231 => '2001:4860:4801:2078::/64',
  232 => '2001:4860:4801:2079::/64',
  233 => '2001:4860:4801:207a::/64',
  234 => '2001:4860:4801:207b::/64',
  235 => '2001:4860:4801:207c::/64',
  236 => '2001:4860:4801:207d::/64',
  237 => '2001:4860:4801:207e::/64',
  238 => '2001:4860:4801:207f::/64',
  239 => '2001:4860:4801:2080::/64',
  240 => '2001:4860:4801:2081::/64',
  241 => '2001:4860:4801:2082::/64',
  242 => '2001:4860:4801:2083::/64',
  243 => '2001:4860:4801:2084::/64',
  244 => '2001:4860:4801:2085::/64',
  245 => '2001:4860:4801:2086::/64',
  246 => '2001:4860:4801:2087::/64',
  247 => '2001:4860:4801:2088::/64',
  248 => '2001:4860:4801:2090::/64',
  249 => '2001:4860:4801:2091::/64',
  250 => '2001:4860:4801:2092::/64',
  251 => '2001:4860:4801:2093::/64',
  252 => '2001:4860:4801:2094::/64',
  253 => '2001:4860:4801:2095::/64',
  254 => '2001:4860:4801:2096::/64',
  255 => '2001:4860:4801:2097::/64',
  256 => '2001:4860:4801:20a0::/64',
  257 => '2001:4860:4801:20a1::/64',
  258 => '2001:4860:4801:20a2::/64',
  259 => '2001:4860:4801:20a3::/64',
  260 => '2001:4860:4801:20a4::/64',
  261 => '2001:4860:4801:20a5::/64',
  262 => '2001:4860:4801:20a6::/64',
  263 => '2001:4860:4801:20b0::/64',
  264 => '2001:4860:4801:20b1::/64',
  265 => '2001:4860:4801:20b2::/64',
  266 => '2001:4860:4801:20b3::/64',
  267 => '2001:4860:4801:20b4::/64',
  268 => '2001:4860:4801:20b5::/64',
  269 => '2001:4860:4801:20b6::/64',
);

$SAFE_URL  = 'php://local/noticia';
$MONEY_URL = 'php://local/pagina';

$MONEY_PATH = 'pagina';
$SAFE_PATH  = 'noticia';

/* ===================== TELEMETRIA ===================== */
$INGEST_URL   = 'https://unknownshield.cloud/api_standalone.php';
$INGEST_TOKEN = 'usk_admin_token_123';

/* ===================== REGRAS (vindas do painel) ===================== */
$blocked_countries     = array (
);
$allowed_countries     = array (
  0 => 'BR',
);
$require_geo           = true;

$require_referer       = false;
$blocked_referers      = array (
  0 => 'ads.google.com',
  1 => 'adwords.google.com',
  2 => 'partners.google.com',
  3 => 'support.google.com',
  4 => 'adscertain.google.com',
  5 => 'adstransparency.google.com',
  6 => 'googleads.g.doubleclick.net',
  7 => 'tpc.googlesyndication.com',
  8 => 'www.googleadservices.com',
  9 => 'googleadservices.com',
  10 => 'ads-internal.google.com',
  11 => 'review.google.com',
  12 => 'quality.google.com',
  13 => 'bowery.google.com',
  14 => 'google.com/ads',
  15 => 'google.com/quality',
  16 => 'google.com/review',
);

$allowed_devices       = array (
  0 => 'mobile',
);

$require_click_id      = true;
$required_utm_params   = array (
);

$session_velocity_limit = 0;
$velocity_window        = 60;

$block_bots                 = true;
$block_reverse_dns_dc       = true;
$block_google_ip            = true;
$block_header_inconsistency = true;
$block_fingerprint          = true;

$block_google_reviewer          = true;
$block_ads_review_params        = true;
$block_lang_device_mismatch     = true;
$block_google_zip_tunnel        = true;
$block_google_ua_broad          = true;
$block_google_internal_referers = true;

/* ===================== LISTAS INTERNAS ===================== */
$hostnameBlocklist = [
    'amazonaws.com', 'digitalocean', 'avast', 'avg', 'ovh.net',
    'hetzner', 'linode', 'vultr.com', 'contabo.net', 'scaleway.com',
    'leaseweb', 'hostinger', 'datacenter', 'vps', 'dedicated', 'server',
    'azure', 'googleusercontent.com', 'oraclecloud', 'colo.',
];

$userAgentBlocklist = [
    'bot', 'crawler', 'spider', 'scrapy', 'httpclient', 'curl', 'wget',
    'puppeteer', 'playwright', 'selenium', 'phantomjs', 'headless',
    'semrush', 'ahrefs', 'screaming', 'python-requests', 'go-http',
    'java/', 'okhttp', 'facebookexternalhit', 'mediapartners',
];

/* ===================== FUNÇÕES ===================== */

if (!function_exists('str_contains')) {
    function str_contains(string $haystack, string $needle): bool {
        return $needle === '' || strpos($haystack, $needle) !== false;
    }
}

if (!function_exists('str_starts_with')) {
    function str_starts_with(string $haystack, string $needle): bool {
        return $needle === '' || strncmp($haystack, $needle, strlen($needle)) === 0;
    }
}

function ipCIDRCheck(string $IP, string $CIDR): bool {
    if (strpos($CIDR, '/') === false) {
        return $IP === $CIDR;
    }
    list ($net, $mask) = explode('/', $CIDR);
    if (filter_var($IP, FILTER_VALIDATE_IP, FILTER_FLAG_IPV4)) {
        if (!filter_var($net, FILTER_VALIDATE_IP, FILTER_FLAG_IPV4)) return false;
        $ip_dec = ip2long($IP);
        $net_dec = ip2long($net);
        $mask_dec = -1 << (32 - $mask);
        return ($ip_dec & $mask_dec) === ($net_dec & $mask_dec);
    } elseif (filter_var($IP, FILTER_VALIDATE_IP, FILTER_FLAG_IPV6)) {
        if (!filter_var($net, FILTER_VALIDATE_IP, FILTER_FLAG_IPV6)) return false;
        $ip_bin = inet_pton($IP);
        $net_bin = inet_pton($net);
        if ($ip_bin === false || $net_bin === false) return false;
        $mask = (int)$mask;
        $bytes = (int)($mask / 8);
        $bits = $mask % 8;
        for ($i = 0; $i < $bytes; $i++) {
            if ($ip_bin[$i] !== $net_bin[$i]) return false;
        }
        if ($bits > 0) {
            $mask_int = 0xff << (8 - $bits);
            if ((ord($ip_bin[$bytes]) & $mask_int) !== (ord($net_bin[$bytes]) & $mask_int)) return false;
        }
        return true;
    }
    return false;
}

function isIpBanned(string $ip, array $banned_list): bool {
    foreach ($banned_list as $banned) {
        if (ipCIDRCheck($ip, $banned)) return true;
    }
    return false;
}

function client_ip(): string {
    foreach (['HTTP_CF_CONNECTING_IP','HTTP_X_REAL_IP','HTTP_X_FORWARDED_FOR','REMOTE_ADDR'] as $h) {
        if (!empty($_SERVER[$h])) return trim(explode(',', $_SERVER[$h])[0]);
    }
    return '';
}

function checkVelocity(string $ip): bool {
    global $session_velocity_limit, $velocity_window;
    if ($session_velocity_limit <= 0 || $ip === '') return false;

    $dir = __DIR__ . '/rate_limit';
    if (!is_dir($dir)) @mkdir($dir, 0755, true);

    $file = $dir . '/' . md5($ip) . '.txt';
    $data = ['count' => 0, 'time' => time()];
    if (is_file($file)) {
        $raw = @file_get_contents($file);
        $j = $raw ? json_decode($raw, true) : null;
        if (is_array($j)) $data = $j;
    }

    if (time() - ($data['time'] ?? 0) > $velocity_window) {
        $data = ['count' => 1, 'time' => time()];
    } else {
        $data['count'] = ($data['count'] ?? 0) + 1;
    }

    @file_put_contents($file, json_encode($data));
    return ($data['count'] ?? 0) > $session_velocity_limit;
}

function getDeviceType(string $ua): string {
    return preg_match('/(android|iphone|ipod|ipad|mobile|blackberry|windows phone)/i', $ua) ? 'mobile' : 'desktop';
}

function isBadBotUA(string $ua): bool {
    global $userAgentBlocklist;
    $ua = strtolower($ua);
    foreach ($userAgentBlocklist as $bad) {
        if ($bad !== '' && str_contains($ua, $bad)) return true;
    }
    return false;
}

function isBlockedHostname(string $hostname): bool {
    global $hostnameBlocklist;
    if ($hostname === '' || $hostname === ($_SERVER['REMOTE_ADDR'] ?? '')) return false;
    $hostname = strtolower($hostname);
    foreach ($hostnameBlocklist as $blocked) {
        if (str_contains($hostname, $blocked)) return true;
    }
    return false;
}

function isGenuineGoogleBot(string $ip, string $hostname): bool {
    $userAgent = strtolower($_SERVER['HTTP_USER_AGENT'] ?? '');
    if (!str_contains($userAgent, 'googlebot') && !str_contains($userAgent, 'adsbot')) {
        return false;
    }
    if (!preg_match('/(?:googlebot\.com|google\.com)$/i', $hostname)) {
        return false;
    }
    if (!function_exists('gethostbynamel')) return false;
    $resolvedIps = @gethostbynamel($hostname);
    if ($resolvedIps === false || !in_array($ip, $resolvedIps, true)) {
        return false;
    }
    return true;
}

function cloaker_log(string $decision, string $reason = '', array $extra = []): void {
    $dir = __DIR__ . '/logs';
    if (!is_dir($dir)) @mkdir($dir, 0755, true);
    $ht = $dir . '/.htaccess';
    if (!is_file($ht)) @file_put_contents($ht, "Require all denied\nDeny from all\n");

    $status = ($decision === 'allow_money') ? 'ALLOW' : 'BLOCK';

    $ua = $GLOBALS['ua'] ?? '';
    $clickIds = array_filter([
        'gclid'   => $_GET['gclid']   ?? null,
        'gbraid'  => $_GET['gbraid']  ?? null,
        'wbraid'  => $_GET['wbraid']  ?? null,
        'fbclid'  => $_GET['fbclid']  ?? null,
        'msclkid' => $_GET['msclkid'] ?? null,
        'ttclid'  => $_GET['ttclid']  ?? null,
    ]);
    $utm = array_filter([
        'utm_source'   => $_GET['utm_source']   ?? null,
        'utm_medium'   => $_GET['utm_medium']   ?? null,
        'utm_campaign' => $_GET['utm_campaign'] ?? null,
        'utm_term'     => $_GET['utm_term']     ?? null,
        'utm_content'  => $_GET['utm_content']  ?? null,
    ]);

    $fmtKv = function(array $arr): string {
        if (empty($arr)) return '-';
        $parts = [];
        foreach ($arr as $k => $v) $parts[] = $k . '=' . $v;
        return implode(', ', $parts);
    };
    $fmtExtra = function(array $arr): string {
        if (empty($arr)) return '-';
        $parts = [];
        foreach ($arr as $k => $v) {
            if (is_array($v)) $v = json_encode($v, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
            $parts[] = $k . '=' . $v;
        }
        return implode(' | ', $parts);
    };

    $lines = [];
    $lines[] = '======================================================================';
    $lines[] = '[' . date('Y-m-d H:i:s') . '] ' . $status . ' (' . $decision . ')';
    $lines[] = 'Motivo      : ' . ($reason !== '' ? $reason : '-');
    $lines[] = 'IP          : ' . ($GLOBALS['ip']       ?? '-');
    $lines[] = 'Pais        : ' . ($GLOBALS['country']  ?? '-');
    $lines[] = 'Hostname    : ' . ($GLOBALS['hostname'] ?? '-');
    $lines[] = 'Device      : ' . ($ua !== '' ? getDeviceType($ua) : '-');
    $lines[] = 'User-Agent  : ' . ($ua !== '' ? $ua : '-');
    $lines[] = 'Referer     : ' . (($GLOBALS['referer'] ?? '') !== '' ? $GLOBALS['referer'] : '-');
    $lines[] = 'URI         : ' . ($_SERVER['REQUEST_URI']    ?? '-');
    $lines[] = 'Metodo      : ' . ($_SERVER['REQUEST_METHOD'] ?? '-');
    $lines[] = 'Click IDs   : ' . $fmtKv($clickIds);
    $lines[] = 'UTM         : ' . $fmtKv($utm);
    $lines[] = 'Accept-Lang : ' . ($_SERVER['HTTP_ACCEPT_LANGUAGE'] ?? '-');
    $lines[] = 'Accept-Enc  : ' . ($_SERVER['HTTP_ACCEPT_ENCODING'] ?? '-');
    $lines[] = 'Sec-CH-UA   : ' . ($_SERVER['HTTP_SEC_CH_UA']       ?? '-');
    $lines[] = 'CF-IP       : ' . ($_SERVER['HTTP_CF_CONNECTING_IP']?? '-');
    $lines[] = 'XFF         : ' . ($_SERVER['HTTP_X_FORWARDED_FOR'] ?? '-');
    if (!empty($extra)) $lines[] = 'Extra       : ' . $fmtExtra($extra);
    $lines[] = ''; 

    $file = $dir . '/access-' . date('Y-m-d') . '.log';
    @file_put_contents($file, implode("\n", $lines) . "\n", FILE_APPEND | LOCK_EX);
}

function track_visit(string $decision, ?string $reason, array $reasons = [], int $risk = 0): void {
    global $INGEST_URL, $INGEST_TOKEN;

    $logDir = __DIR__ . '/logs';
    if (!is_dir($logDir)) @mkdir($logDir, 0755, true);
    $ingestLog = $logDir . '/ingest.log';
    $stamp = '[' . date('Y-m-d H:i:s') . '] ';

    if (empty($INGEST_URL) || empty($INGEST_TOKEN)) {
        @file_put_contents($ingestLog, $stamp . "SKIP url/token vazio\n", FILE_APPEND | LOCK_EX);
        return;
    }

    $payload = json_encode([
        'token'         => $INGEST_TOKEN,
        'slug'          => 'a9ffe15bdbb0a395',
        'decision'      => $decision,
        'reason'        => $reason,
        'block_reasons' => $reasons,
        'risk_score'    => $risk,
        'ip'            => $GLOBALS['ip']      ?? ($_SERVER['REMOTE_ADDR'] ?? null),
        'country'       => $GLOBALS['country'] ?? ($_SERVER['HTTP_CF_IPCOUNTRY'] ?? null),
        'user_agent'    => $_SERVER['HTTP_USER_AGENT'] ?? null,
        'referer'       => $_SERVER['HTTP_REFERER'] ?? null,
    ]);

    if (function_exists('curl_init')) {
        $ch = curl_init($INGEST_URL);
        curl_setopt_array($ch, [
            CURLOPT_POST              => true,
            CURLOPT_POSTFIELDS        => $payload,
            CURLOPT_HTTPHEADER        => ['Content-Type: application/json', 'Expect:'],
            CURLOPT_RETURNTRANSFER    => true,
            CURLOPT_TIMEOUT           => 5,
            CURLOPT_CONNECTTIMEOUT    => 4,
            CURLOPT_FOLLOWLOCATION    => true,
            CURLOPT_SSL_VERIFYPEER    => false,
            CURLOPT_SSL_VERIFYHOST    => 0,
            CURLOPT_USERAGENT         => 'CloakerIngest/1.0',
        ]);
        $resp = @curl_exec($ch);
        $code = (int) @curl_getinfo($ch, CURLINFO_HTTP_CODE);
        $err  = @curl_error($ch);
        @curl_close($ch);
        $line = $stamp . "CURL decision=$decision code=$code err=" . ($err ?: '-') . " resp=" . substr((string)$resp, 0, 200) . "\n";
        @file_put_contents($ingestLog, $line, FILE_APPEND | LOCK_EX);
    } else {
        $ctx = stream_context_create(['http' => [
            'method'        => 'POST',
            'header'        => "Content-Type: application/json\n",
            'content'       => $payload,
            'timeout'       => 5,
            'ignore_errors' => true,
        ], 'ssl' => ['verify_peer' => false, 'verify_peer_name' => false]]);
        $resp = @file_get_contents($INGEST_URL, false, $ctx);
        $line = $stamp . "STREAM decision=$decision ok=" . ($resp !== false ? '1' : '0') . " resp=" . substr((string)$resp, 0, 200) . "\n";
        @file_put_contents($ingestLog, $line, FILE_APPEND | LOCK_EX);
    }
}

function normalizeConfiguredPath(string $base): string {
    $base = trim(str_replace('\\', '/', $base));
    $base = preg_replace('/[?#].*$/', '', $base) ?? $base;
    while (strncmp($base, './', 2) === 0) { $base = substr($base, 2); }
    return rtrim($base, '/');
}

function isAbsoluteConfiguredPath(string $path): bool {
    return $path !== '' && (str_starts_with($path, '/') || preg_match('#^[A-Za-z]:/#', $path) === 1);
}

function addPageCandidates(array &$files, string $root): void {
    $root = rtrim(str_replace('\\', '/', trim($root)), '/');
    if ($root === '') return;

    $real = realpath($root);
    $target = $real !== false ? $real : $root;

    if (preg_match('#\.(php|phtml|html|htm)$#i', $target)) {
        $files[] = $target;
        return;
    }

    foreach (['index.php', 'index.html', 'index.htm'] as $f) {
        $files[] = rtrim($target, '/') . '/' . $f;
    }
}

function resolveBaseCandidates(string $base): array {
    $base = normalizeConfiguredPath($base);
    if ($base === '') return [];

    $roots = [];
    $roots[] = __DIR__ . '/' . $base;

    $files = [];
    foreach ($roots as $root) {
        addPageCandidates($files, $root);
    }
    return array_values(array_unique($files));
}

function buildBaseHref(string $targetFile): string {
    $scheme = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https' : 'http';
    $host   = $_SERVER['HTTP_HOST'] ?? ($_SERVER['SERVER_NAME'] ?? '');
    if ($host === '') return '';
    
    // Calcula o base URI a partir de __DIR__ para suportar hospedagens compartilhadas
    $scriptDir = realpath(__DIR__);
    $targetDir = realpath(dirname($targetFile));
    
    // Descobre onde o index.php está rodando no browser
    $scriptName = $_SERVER['SCRIPT_NAME'] ?? '';
    $baseUri = rtrim(str_replace('\\', '/', dirname($scriptName)), '/');
    if ($baseUri === '/' || $baseUri === '\\') $baseUri = '';
    
    $path = $baseUri . '/';
    // Se a página alvo estiver DENTRO da pasta do script, anexa esse caminho
    if ($scriptDir && $targetDir && str_starts_with($targetDir, $scriptDir)) {
        $rel = str_replace('\\', '/', substr($targetDir, strlen($scriptDir)));
        $path = $baseUri . '/' . trim($rel, '/') . '/';
    }
    
    // Remove duplicatas de barras, exceto após http(s)://
    $path = preg_replace('#/+#', '/', $path);
    
    return $scheme . '://' . $host . $path;
}

function injectBaseHref(string $html, string $baseHref): string {
    if ($baseHref === '' || stripos($html, '<base ') !== false) return $html;
    $tag = '<base href="' . htmlspecialchars($baseHref, ENT_QUOTES) . '">';
    if (preg_match('/<head[^>]*>/i', $html)) {
        return preg_replace('/(<head[^>]*>)/i', '$1' . $tag, $html, 1) ?? $html;
    }
    if (preg_match('/<html[^>]*>/i', $html)) {
        return preg_replace('/(<html[^>]*>)/i', '$1<head>' . $tag . '</head>', $html, 1) ?? $html;
    }
    return $tag . $html;
}

function servePage(string $base, ?array &$tried = null): bool {
    if ($tried === null) { $tried = []; }
    foreach (resolveBaseCandidates($base) as $full) {
        $tried[] = $full;
        if (!is_file($full) || !is_readable($full)) continue;
        while (ob_get_level() > 0) { ob_end_clean(); }
        http_response_code(200);
        $ext = strtolower(pathinfo($full, PATHINFO_EXTENSION));
        $baseHref = buildBaseHref($full);
        
        if ($ext === 'html' || $ext === 'htm') {
            header('Content-Type: text/html; charset=utf-8');
            $html = @file_get_contents($full);
            if ($html !== false) {
                echo injectBaseHref($html, $baseHref);
            }
            return true;
        }
        try {
            ob_start();
            include $full;
            $out = ob_get_clean();
            $ct = '';
            foreach (headers_list() as $h) {
                if (stripos($h, 'content-type:') === 0) { $ct = strtolower($h); break; }
            }
            if ($ct === '' || str_contains($ct, 'text/html')) {
                if ($ct === '') header('Content-Type: text/html; charset=utf-8');
                echo injectBaseHref((string)$out, $baseHref);
            } else {
                echo (string)$out;
            }
            return true;
        } catch (Throwable $e) {
            while (ob_get_level() > 0) { ob_end_clean(); }
            continue;
        }
    }
    return false;
}

function renderEmergencyPage(string $targetUrl = '', array $tried = []): void {
    while (ob_get_level() > 0) { ob_end_clean(); }
    http_response_code(200);
    header('Content-Type: text/html; charset=utf-8');
    echo "<!doctype html><meta charset=utf-8><title>Carregando…</title>";
    echo "<h1>Página não encontrada</h1>";
}

function deny(string $reason, int $code = 403): void {
    global $SAFE_PATH, $SAFE_URL;
    cloaker_log('block', $reason);
    track_visit('block', $reason, [$reason], 100);
    $tried = [];
    if (servePage($SAFE_PATH, $tried)) exit;
    renderEmergencyPage($SAFE_URL ?? '', $tried);
    exit;
}

function ipInGoogleRange(string $ip): bool {
    $ranges = [
        '66.249.', '64.233.', '72.14.', '74.125.', '173.194.', '209.85.',
        '216.239.', '34.64.', '35.190.', '35.191.', '35.235.', '130.211.',
    ];
    foreach ($ranges as $r) { if (str_starts_with($ip, $r)) return true; }
    return false;
}

function hasInconsistentHeaders(): bool {
    $missing = 0;
    if (empty($_SERVER['HTTP_ACCEPT']))          $missing++;
    if (empty($_SERVER['HTTP_ACCEPT_LANGUAGE'])) $missing++;
    if (empty($_SERVER['HTTP_ACCEPT_ENCODING'])) $missing++;
    return $missing >= 2;
}

function hasFingerprintMismatch(string $ua): bool {
    $ua = strtolower($ua);
    $ch = strtolower($_SERVER['HTTP_SEC_CH_UA'] ?? '');
    if ($ch === '') return false;
    if (str_contains($ch, 'chrome') && !str_contains($ua, 'chrome')) return true;
    if (str_contains($ch, 'edge')   && !str_contains($ua, 'edg'))    return true;
    return false;
}

$googleReviewerHostPatterns = [
    'corp.google.com', 'bowery', 'reviewer', 'quality', 'ads-quality',
    'google.com/adsbot', '.gcp-', 'google-private', 'ggl-emea',
    'rate-limited-proxy'
];

function isGoogleReviewer(string $ip, string $hostname): bool {
    global $googleReviewerHostPatterns;
    if ($hostname === '' || $hostname === $ip) return false;
    $hn = strtolower($hostname);
    foreach ($googleReviewerHostPatterns as $pat) {
        if (str_contains($hn, $pat)) return true;
    }
    if (function_exists('gethostbynamel')) {
        $resolved = @gethostbynamel($hostname);
        if ($resolved !== false && in_array($ip, $resolved, true)) {
            return strpos($hn, 'google') !== false;
        }
    }
    return false;
}

function isAdsReviewSession(): bool {
    $query = $_GET;
    $referer = strtolower($_SERVER['HTTP_REFERER'] ?? '');
    $reviewIndicators = ['adtest', 'review', 'quality', 'preview', 'gclid_test', '_gl', 'fb_debug', 'adsbot'];
    foreach ($reviewIndicators as $term) {
        if (isset($query[$term]) || str_contains($referer, $term)) {
            return true;
        }
    }
    return false;
}

function hasLanguageDeviceMismatch(): bool {
    global $country;
    $ua = $_SERVER['HTTP_USER_AGENT'] ?? '';
    $device = getDeviceType($ua);
    $lang = strtolower($_SERVER['HTTP_ACCEPT_LANGUAGE'] ?? '');
    if (empty($country)) $country = 'BR';
    if (str_contains($country, 'BR') && (str_contains($lang, 'en') || empty($lang)) && $device === 'desktop') {
        return true;
    }
    if (empty($lang) || $lang === 'en' || str_contains($lang, '*')) {
        return true;
    }
    return false;
}

function geoip_lookup($ip) {
    if (!$ip || filter_var($ip, FILTER_VALIDATE_IP) === false) return '';
    if (filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_NO_PRIV_RANGE | FILTER_FLAG_NO_RES_RANGE) === false) return '';

    $cacheDir = __DIR__ . '/rate_limit';
    if (!is_dir($cacheDir)) @mkdir($cacheDir, 0755, true);
    $cacheFile = $cacheDir . '/' . preg_replace('/[^a-f0-9:.]/i', '_', $ip) . '.txt';

    if (is_file($cacheFile)) {
        $cached = trim(@file_get_contents($cacheFile) ?: '');
        if ($cached !== '') return strtoupper($cached);
    }

    $country = '';
    $ctx = stream_context_create(['http' => ['timeout' => 2, 'ignore_errors' => true, 'user_agent' => 'Mozilla/5.0']]);
    $raw = @file_get_contents("http://ip-api.com/json/{$ip}?fields=countryCode", false, $ctx);
    if ($raw) {
        $j = @json_decode($raw, true);
        if (is_array($j) && !empty($j['countryCode'])) $country = strtoupper($j['countryCode']);
    }
    if ($country !== '') @file_put_contents($cacheFile, $country);
    return $country;
}

/* ===================== EXECUÇÃO PRINCIPAL ===================== */

$ip       = client_ip();
$hostname = $ip !== '' ? (@gethostbyaddr($ip) ?: '') : '';
$ua       = $_SERVER['HTTP_USER_AGENT'] ?? '';
$referer  = $_SERVER['HTTP_REFERER'] ?? '';
$country  = strtoupper($_SERVER['HTTP_CF_IPCOUNTRY'] ?? $_SERVER['HTTP_X_VERCEL_IP_COUNTRY'] ?? $_SERVER['HTTP_X_COUNTRY_CODE'] ?? '');
if ($country === '' && $ip !== '') {
    $country = geoip_lookup($ip);
}

$isGoogleBot = isGenuineGoogleBot($ip, $hostname);

$uaLower = strtolower($ua);
$looksLikeGoogleBot = (
    strpos($uaLower, 'googlebot') !== false ||
    strpos($uaLower, 'adsbot-google') !== false ||
    strpos($uaLower, 'mediapartners-google') !== false ||
    strpos($uaLower, 'google-inspectiontool') !== false ||
    strpos($uaLower, 'google-site-verification') !== false ||
    strpos($uaLower, 'google favicon') !== false ||
    strpos($uaLower, 'chrome-lighthouse') !== false ||
    strpos($uaLower, 'apis-google') !== false ||
    strpos($uaLower, 'feedfetcher-google') !== false ||
    strpos($uaLower, 'storebot-google') !== false
);

if (!$isGoogleBot && !$looksLikeGoogleBot && isset($_COOKIE['human_session']) && $_COOKIE['human_session'] === '1') {
    cloaker_log('allow_money', 'Sessão humana já aprovada (cookie)', ['ip' => $ip]);
    track_visit('allow', 'human_session_cookie', [], 0);
    $tried = [];
    if (servePage($MONEY_PATH, $tried)) exit;
}

$googleZipIps = ['193.186.4.', '162.120.185.', '162.120.186.'];
$isGoogleZipProxy = false;
if ($ip !== '') {
    foreach ($googleZipIps as $__pfx) {
        if (strpos($ip, $__pfx) === 0) { $isGoogleZipProxy = true; break; }
    }
}
if ($block_google_zip_tunnel && $isGoogleZipProxy) {
    cloaker_log('google_zip_tunnel', 'Google ZIP Tunnel detectado', ['ip' => $ip]);
    track_visit('block', 'google_zip_tunnel', ['google_zip_tunnel'], 100);
    $tried = [];
    if (servePage($SAFE_PATH, $tried)) exit;
    exit;
}

if ($block_google_ua_broad && $looksLikeGoogleBot) {
    cloaker_log('google', 'UA identificado como bot/revisor do Google', ['matched_ua' => $uaLower]);
    track_visit('block', 'google_ua', ['google_ua'], 100);
    $tried = [];
    if (servePage($SAFE_PATH, $tried)) exit;
    exit;
}

if ($block_google_reviewer && isGoogleReviewer($ip, $hostname)) {
    cloaker_log('google_reviewer', 'Reviewer/Quality Check detectado via hostname', ['hostname' => $hostname]);
    track_visit('block', 'google_reviewer', ['google_reviewer'], 100);
    $tried = [];
    if (servePage($SAFE_PATH, $tried)) exit;
    exit;
}

if ($block_ads_review_params && isAdsReviewSession()) {
    cloaker_log('ads_review_pattern', 'Parâmetros de revisão Google Ads detectados');
    track_visit('block', 'ads_review_pattern', ['ads_review_pattern'], 100);
    $tried = [];
    if (servePage($SAFE_PATH, $tried)) exit;
    exit;
}

if ($block_lang_device_mismatch && hasLanguageDeviceMismatch()) {
    cloaker_log('lang_device_mismatch', 'Mismatch de idioma/dispositivo detectado');
    track_visit('block', 'lang_device_mismatch', ['lang_device_mismatch'], 100);
    $tried = [];
    if (servePage($SAFE_PATH, $tried)) exit;
    exit;
}

/* ---------- HARD BLOCKS LOCAIS ---------- */

if (!$campaign_active)                                         deny("Campanha pausada.");
if ($ip !== '' && !empty($campaign_banned_ips) && isIpBanned($ip, $campaign_banned_ips)) deny("Acesso negado.");
if ($block_bots && isBadBotUA($ua))                            deny("Bot detectado.");
if ($block_reverse_dns_dc && $hostname !== $ip && isBlockedHostname($hostname)) deny("Provedor não autorizado.");
if ($block_google_ip && ipInGoogleRange($ip))                  deny("IP Google sem rDNS válido.");
if ($block_header_inconsistency && hasInconsistentHeaders())   deny("Cabeçalhos inconsistentes.");
if ($block_fingerprint && hasFingerprintMismatch($ua))         deny("Fingerprint incompatível.");
if (checkVelocity($ip))                                        deny("Muitas requisições.", 429);

// GeoIP
if ($country !== '') {
    if (!empty($blocked_countries) && in_array($country, $blocked_countries, true))                              deny("País bloqueado.");
    if (!empty($allowed_countries) && !in_array($country, $allowed_countries, true)) deny("País não permitido.");
} elseif ($require_geo && !empty($allowed_countries)) {
    deny("Localização não detectada.");
}

// Referer
if ($require_referer && $referer === '') deny("Referer obrigatório ausente.");
if ($referer !== '') {
    if (!empty($blocked_referers)) {
        foreach ($blocked_referers as $r) {
            if ($r !== '' && str_contains($referer, $r)) deny("Referer bloqueado.");
        }
    }
    $refHost = strtolower((string) parse_url($referer, PHP_URL_HOST));
    $googleInternalHosts = [
        'ads.google.com', 'adwords.google.com', 'adscertain.google.com',
        'adstransparency.google.com', 'googleads.g.doubleclick.net',
        'tpc.googlesyndication.com', 'www.googleadservices.com',
        'googleadservices.com', 'partners.google.com', 'support.google.com',
    ];
    if ($block_google_internal_referers && $refHost !== '' && in_array($refHost, $googleInternalHosts, true)) {
        deny("Referer interno do Google Ads.");
    }
}

// Device
$device = getDeviceType($ua);
if (!empty($allowed_devices) && !in_array($device, $allowed_devices, true)) deny("Dispositivo não suportado.");

// Click ID
$hasClickId = false;
foreach (['gclid','gbraid','wbraid','fbclid','msclkid','ttclid'] as $p) {
    if (!empty($_GET[$p])) { $hasClickId = true; break; }
}
if ($require_click_id && !$hasClickId) deny("Click ID obrigatório ausente.");

// UTMs obrigatórias
if (!empty($required_utm_params)) {
    foreach ($required_utm_params as $k) {
        if (empty($_GET[$k])) deny("UTM obrigatória ausente: $k");
    }
}

/* ===================== CARREGAMENTO DAS PÁGINAS ===================== */
$base = $isGoogleBot ? $SAFE_PATH : $MONEY_PATH;
$allowReason = $isGoogleBot ? 'googlebot_safe' : 'allow_money';
$tried = [];

$logged = false;

if (preg_match('#\.(png|jpg|jpeg|gif|svg|css|js|woff|ttf|ico|webp|json)$#i', $_SERVER['REQUEST_URI'] ?? '')) {
    if (servePage($base, $tried)) exit;
}

if (!$logged) {
    cloaker_log($allowReason, 'Passou em todos os filtros', ['path' => $base]);
    track_visit('allow', $allowReason, [], 0);
}

if (!$isGoogleBot && !headers_sent()) {
    setcookie('human_session', '1', time() + 86400, '/', '', !empty($_SERVER['HTTPS']), true);
}

if (servePage($base, $tried)) exit;
renderEmergencyPage($isGoogleBot ? $SAFE_URL : $MONEY_URL, $tried);
