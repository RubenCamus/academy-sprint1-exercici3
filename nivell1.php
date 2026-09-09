<?php
declare(strict_types = 1 );

// $arr = [10, 20, 0, 1000, 999];

// for($i = 0; $i < count($arr); $i++) {
//     echo "Item $i is: $arr[$i]";
//     echo PHP_EOL;
// }
//

$secArray = ["pep", 300, true, "abc", "str", 99];

echo count($secArray);
echo PHP_EOL;
array_splice($secArray, 1, 1);
var_dump($secArray);
echo PHP_EOL;
echo count($secArray);
var_dump($secArray);
?>
