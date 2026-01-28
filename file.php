<?php
$a = fopen("example.txt", "r");

while (($line = fgets($a)) != NULL) {
    echo $line . "<br>";
}

fclose($a);
?>
