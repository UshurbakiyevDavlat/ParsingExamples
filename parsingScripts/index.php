<?php
require_once __DIR__ . '/../bootstrap.php';

// Get the target URL
$target_url = getenv('TARGET_URL');

if (!$target_url) {
    die('TARGET_URL not set in the .env file.');
}

// Fetch the content from the target site
$content = file_get_contents($target_url);

// $pattern = '#<h1[^>]*>(.+?)</h1>#su';
$pattern = '#<h2[^>]*>(.+?)</h2>#su';

// preg_match($pattern, $content, $matches);
preg_match_all($pattern, $content, $matches, PREG_PATTERN_ORDER);

var_dump($matches[1]);
