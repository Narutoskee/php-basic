<?php

$text = "Vestibulum eu nisi sed erat iaculis tempor. Pellentesque sit amet rutrum ipsum, sed vehicula dolor. Vivamus in tristique nisl. Nullam ac tempus lorem, pretium imperdiet est. Cras facilisis ex lorem, convallis eleifend metus egestas interdum. Sed libero dolor, venenatis ac feugiat id, varius vitae nunc. Sed a orci magna. Fusce maximus porta est eget porttitor. Sed quis lectus nec eros mattis iaculis. Cras ultricies suscipit tortor quis sagittis. Nam dolor libero, faucibus nec diam ac, laoreet viverra eros. Mauris felis ipsum, commodo id purus vitae, rutrum tincidunt libero. Donec vehicula malesuada augue eu vulputate. Mauris tincidunt enim vitae purus laoreet rhoncus. Vestibulum semper aliquam scelerisque. Maecenas sit amet nisi a dui bibendum ultricies.";

echo "<h3>Исходный текст</h3> <br>". $text;

echo "<br>";
echo "<br>";

$prev = substr($text, 0, 200);

$anons = substr($prev, 0, strrpos($prev, ' '));

$anons = rtrim($anons, "!,.-");

echo "<h3>Анонс</h3>";
echo $anons . "<i> Читать далее...</i>";