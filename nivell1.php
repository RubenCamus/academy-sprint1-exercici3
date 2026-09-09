<?php
declare(strict_types = 1 );

$arr = [10, 20, 0, 1000, 999];

for($i = 0; $i < count($arr); $i++) {
    echo "Item $i is: $arr[$i]";
    echo PHP_EOL;
}
?>
