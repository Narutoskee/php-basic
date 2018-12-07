<?php
/**
 * Created by PhpStorm.
 * User: snabweb
 * Date: 021 21.11.18
 * Time: 14:29
 */

$text = $_POST ["text"];
$sign = $_POST ["sign"];
echo "<h3>Исходный текст</h3> <br>". $text;

echo "<br>";
echo "<br>";

$prev = mb_substr($text, 0, $sign);

$anons = mb_substr($prev, 0, mb_strrpos($prev, ' '));

$anons = rtrim($anons, "!,.-");

echo "<h3>Анонс</h3>";
echo $anons . "<i>...</i>";
