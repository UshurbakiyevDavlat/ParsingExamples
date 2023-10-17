<?php
require_once __DIR__ . '/../bootstrap.php';

// Get the target URL
$target_url = getenv('TARGET_URL');

if (!$target_url) {
    die('TARGET_URL not set in the .env file.');
}

// Фетчим контент с сайта
$content = file_get_contents($target_url);

// Паттерны регулярок для поиска
// $pattern = '#<h1[^>]*>(.+?)</h1>#su';
// $pattern = '#<h2[^>]*>(.+?)</h2>#su';
// $pattern = '#<header[^>]*>(.+?)</header>#su';
// $pattern = '#<footer[^>]*>(.+?)</footer>#su';
//  $pattern = '#<title[^>]*>(.+?)</title>#su';
//  $pattern = '#<body[^>]*>(.+?)</body>#su';
//  $pattern = '#<main[^>]*>(.+?)</main>#su'; // К примеру паттерн для получения содержимого тега main


  /*
   *
   * Пусть нам нужно спарсить все абзацы из тега main. Сделаем это в два этапа:
   * сначала получим содержимое тега main, а потом внутри этого содержимого будем искать абзацы.Итак, первый этап.
   * Пусть текст всей страницы хранится в переменной $str1. Давайте получим содержимое тега main:
   */
//     preg_match($pattern, $content, $matches);
//     $str2 = $matches[1];
//
// //Теперь в полученном тексте найдем все абзацы:
// preg_match_all($pattern, $content, $matches2, PREG_PATTERN_ORDER);
//
// var_dump($matches2[1]);

//Спарсите все теги h2 из тега aside:
$pattern = '#<aside[^>]*>(.+?)</aside>#su';
$pattern2 = '#<h2[^>]*>(.+?)</h2>#su';
preg_match($pattern, $content, $matches); // получаем все в теге aside
$str2 = $matches[1];
preg_match_all($pattern2, $str2, $matches2, PREG_PATTERN_ORDER); // получаем все в теге h2
var_dump($matches2[1]);
