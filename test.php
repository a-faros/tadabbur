<?php
$i = 1; // while Statement
while ($i < 6) { echo $i; $i++;} echo "loop1".PHP_EOL;

$j = 1; // while with break Statement, stops at 3
while ($j < 6) { if ($j == 3) break; echo $j; $j++;} echo "loop2".PHP_EOL;

$k = 0; // while with continue Statement, skips at 3
while ($k < 6) { $k++; if ($k == 3) continue; echo $k;} echo "loop3".PHP_EOL;

$l = 0; // do ... while with continue Statement, skips at 3
do { $l++; if ($l == 3) continue; echo $l;} while ($l < 6); echo "loop4".PHP_EOL;

for ($x = 0; $x <= 10; $x++) { // for loops
    echo "The number is: $x ".PHP_EOL;
  }

  $colors = array("red", "green", "blue", "yellow");

  foreach ($colors as $x) { // foreach loops
    echo "$x ".PHP_EOL;
  }
?>