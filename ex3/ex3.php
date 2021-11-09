<!-- ex3 Make a function that will accept 3 parameters, which are the grades from Math, Physics and English. -->
<?php
$math;
$physics;
$english;

function math($math, $physics, $english) {
    $sum = $math + $physics + $english;
    $avg = ($math + $physics + $english)/3;
    $result = [$sum, $avg];
    return $result;
}
$result_fct = math (3,4,5);
echo " Sum: $result_fct[0]<br> Average: $result_fct[1]";
?>