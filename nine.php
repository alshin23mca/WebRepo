<?php
echo"<center>";
$indianPlayers = array("Jadeja", "yadav", "Sachin","Virat Kohli");
echo "<table border=1>";
echo "<tr><th>Indian Cricket Players</th></tr>";
foreach ($indianPlayers as $x) {
    echo "<tr><td>$x</td></tr>";
}
echo "</table>";
?>
