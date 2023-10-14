<?php
$target_url = 'http://testsite.local:8000/';

// Fetch the content from the target site
$content = file_get_contents($target_url);

$pattern = '#<h1>(.+?)</h1>#su';

preg_match($pattern, $content, $matches);

var_dump($matches);
