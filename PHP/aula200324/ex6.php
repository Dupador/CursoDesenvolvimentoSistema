<?php
echo "<table border='1'>";
echo "<tr><th>Valor</th><th>Caractere</th></tr>";

for ($i = 0; $i <= 255; $i++) {
    echo "<tr>";
    echo "<td>$i</td>";
    echo "<td>" . chr($i) . "</td>";
    echo "</tr>";
}

echo "</table>";
?>
