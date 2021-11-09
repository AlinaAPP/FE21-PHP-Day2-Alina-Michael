<?php
//Create a function that calculates the area and volume of a box.
$width;
$height;
$depth;

function box($width, $height, $depth) {
    $area = $width * $height;
    $volume  = $width * $height * $depth;
    $result = [$area, $volume];
    return $result;
}
$result_fct = box (7,2,5);
echo "The area of the box is: $result_fct[0]<br> The volume of the box is: $result_fct[1]";
?>