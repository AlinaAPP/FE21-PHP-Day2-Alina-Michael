<?php

//ex2 Create a function which takes two integer parameters - divide them and output the result on the screen.
$a;
$b;
    function divide ($a, $b) {
        $c = $a/$b;
        return $c;
    }
    $c=divide(6,3);
    /* echo $c; */ // output 2

    echo '<pre>';
    var_dump($c);
    echo '</pre>';
?>
