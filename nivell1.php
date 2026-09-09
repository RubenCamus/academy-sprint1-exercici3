<?php
declare(strict_types = 1 );

// $arr = [10, 20, 0, 1000, 999];

// for($i = 0; $i < count($arr); $i++) {
//     echo "Item $i is: $arr[$i]";
//     echo PHP_EOL;
// }
//

// $secArray = ["pep", 300, true, "abc", "str", 99];

// echo count($secArray);
// echo PHP_EOL;
// array_splice($secArray, 1, 1);
// var_dump($secArray);
// echo PHP_EOL;
// echo count($secArray);
// var_dump($secArray);
//

function checkCharacter(array $arr, string $char) {
    $counter = 0;
    for($i = 0; $i < count($arr); $i++) {
        if(str_contains($arr[$i], $char)) {
            $counter++;
            if ($counter == count($arr)) {
                echo "Character in every word";
                return true;
            }
        } else {
            echo "Character not in every word";
            return false;
        }
    }
}
checkCharacter(["holaa", "patata", "bonito"], "a");
?>
