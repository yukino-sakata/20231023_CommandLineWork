<?php
$Fizz = "Fizz";
$Buzz = "Buzz";
$FizzBuzz = "FizzBuzz";

for ( $i == 1 ; $i <= 15 ; $i++ ) {
    if ($i % 3 == 0 && $i % 5 == 0) {
        echo $FizzBuzz . "<br />";
    }   else if ($i % 3 == 0) {
        echo $Fizz . "<br />";
    }   else if ($i % 5 == 0) {
        echo $Buzz . "<br />";
    }   else {
        echo $i . "<br />"; }

                                                }
for ($j = 1 ; $j <= 5 ; $j++ ) {
    for ($k = 1 ; $k <=5 ; $k++ ) {
        echo "⚫︎";
    }
    echo "<br />";
}

?>