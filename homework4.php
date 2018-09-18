<?php

$cols = 10;
$rows = 10;
$color1 = "#7375FF";
$color2 = "FFE573";

echo "<table border='1' cellspacing='0' cellpadding='3'>";

for ($r=1; $r <= $rows ; $r++) {
    echo "<tr>";
    for ($c=1; $c <= $cols ; $c++) {
        if (($r-$c)%11==0) {
            echo "<td style='background-color: $color1;'>".$r * $c."</td>";
        }
        elseif (($r+$c)%11==0){
            echo "<td style='background-color: $color2;'>".$r * $c."</td>";
        }
        else {
            echo "<td>".$r * $c."</td>";
        }

    }
    echo "</tr>";
}
echo "</table>";
