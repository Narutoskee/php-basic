<?php
echo "<table border='1' cellspacing='0' cellpadding='3'>";

$cols = 10;
$rows = 10;
$color = "#7375FF";

for ($r=1; $r <= $rows ; $r++) {
    echo "<tr>";
    for ($c=1; $c <= $cols ; $c++) {
        if (($r+$c)%11 ==0) {
            echo "<td style='background-color: $color;'>".$r * $c."</td>";
        } else {
            echo "<td>".$r * $c."</td>";
        }

    }
    echo "</tr>";
}
echo "</table>";
