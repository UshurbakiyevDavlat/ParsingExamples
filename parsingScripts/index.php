<?php
require_once __DIR__ . '/../bootstrap.php';

// Get the target URL
$target_url = getenv('TARGET_URL');

if (!$target_url) {
    die('TARGET_URL not set in the .env file.');
}

// Fetch the content from the target site
$content = file_get_contents($target_url);

$pattern = '#<h1>(.+?)</h1>#su';

preg_match($pattern, $content, $matches);

var_dump($matches[1]);
