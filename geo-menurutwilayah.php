<?php
date_default_timezone_set('Asia/Jakarta');

// 1. Dapatkan IP Pengunjung
$ip = $_SERVER['REMOTE_ADDR'];

// 2. Ambil data lokasi negara via ip-api
$api_url = "http://ip-api.com/json/{$ip}?fields=country";
$response = @file_get_contents($api_url);
$data = json_decode($response, true);
$country = $data['country'] ?? 'Unknown';

// 3. Dapatkan User-Agent
$userAgent = $_SERVER['HTTP_USER_AGENT'] ?? '';

// 4. Daftar Bot yang Ingin Dideteksi
$bots = [
    'Googlebot',
    'Facebook Crawler',
    'Facebot',
    'facebookexternalhit',
];

// 5. Deteksi Bot
$isBot = false;
$botName = 'Unknown';

// Pemeriksaan User-Agent
foreach ($bots as $bot) {
    if (stripos($userAgent, $bot) !== false) {
        $isBot = true;
        $botName = $bot;
        break;
    }
}

// Pemeriksaan Reverse DNS
if (!$isBot) {
    $hostname = @gethostbyaddr($ip);
    if ($hostname && $hostname !== $ip) {
        if (
            stripos($hostname, 'googlebot.com') !== false ||
            stripos($hostname, 'crawl.google.com') !== false ||
            stripos($hostname, 'google.com') !== false ||
            stripos($hostname, 'AdsBot-Google') !== false ||
            stripos($hostname, 'adsbot') !== false
        ) {
            $forward_ip = gethostbyname($hostname);
            if ($forward_ip === $ip) {
                $isBot = true;
                $botName = 'GoogleBot (DNS Verified)';
                error_log("Bot detected via reverse DNS (Google, verified): $hostname");
            }
        } elseif (
            stripos($hostname, 'bing.com') !== false ||
            stripos($hostname, 'yandex.com') !== false ||
            stripos($hostname, 'baidu.com') !== false
        ) {
            $isBot = true;
            $botName = 'Other Bot (DNS)';
            error_log("Bot detected via reverse DNS (non-Google): $hostname");
        }
    }
}

// Pemeriksaan Header Tambahan
if (!$isBot && isset($_SERVER['HTTP_X_PURPOSE']) && $_SERVER['HTTP_X_PURPOSE'] === 'preview') {
    $isBot = true;
    $botName = 'Preview Bot';
}

// Log header untuk debugging
$httpAccept = $_SERVER['HTTP_ACCEPT'] ?? 'Not set';
error_log("HTTP_ACCEPT for IP $ip: $httpAccept");

// Log Bot yang Terdeteksi
$logLine = date('Y-m-d H:i:s') . " | IP: $ip | Country: $country | Bot: " . ($isBot ? 'Yes' : 'No') . " | Bot Name: $botName | UA: $userAgent\n";
file_put_contents('bot-log.txt', $logLine, FILE_APPEND | LOCK_EX);

// 6. Arahkan berdasarkan bot atau negara
if ($isBot) {
    if (file_exists('visitor-luar.php')) {
        include 'visitor-luar.php';
    } else {
        error_log("File visitor-luar.php tidak ditemukan");
        http_response_code(500);
        exit("Internal Server Error");
    }
} elseif ($country === 'Indonesia' && stripos($userAgent, 'Mobile') !== false) {
    if (file_exists('visitor-indonesia.php')) {
        include 'visitor-indonesia.php';
    } else {
        error_log("File visitor-indonesia.php tidak ditemukan");
        http_response_code(500);
        exit("Internal Server Error");
    }
} else {
    if (file_exists('visitor-luar.php')) {
        include 'visitor-luar.php';
    } else {
        error_log("File visitor-luar.php tidak ditemukan");
        http_response_code(500);
        exit("Internal Server Error");
    }
}