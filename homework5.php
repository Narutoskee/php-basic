<!DOCTYPE html>
<html>

<head>
    <title>Дз.3. Вывод анонса текста</title>
    <meta charset="utf-8" />
</head>

<body>

<h1>Программа вывода анонса новости</h1>

<form method='POST' action='homework5.php'>
    <label>Количество символов анонса</label><br>
    <input name='sign' type='text' value="" /><br><br>
    <textarea placeholder="Введите полный текст" rows="10" cols="45" name="text"></textarea><br>
    <input type='submit' value='Отправить' />
</form>

<?php



$text = $_POST ["text"];
$sign = $_POST ["sign"];

echo "<h3>Исходный текст</h3> <br>". $text;

echo "<br>";
echo "<br>";

$prev = substr($text, 0, $sign);

$anons = substr($prev, 0, strrpos($prev, ' '));

$anons = rtrim($anons, "!,.-");

echo "<h3>Анонс</h3>";
echo $anons . "<i>...</i>";

?>

</body>

</html>
