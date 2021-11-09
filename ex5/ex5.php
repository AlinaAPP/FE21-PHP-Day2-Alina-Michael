<?php
//Create a function that will return the number of minutes, in hours and minutes.
$min;
function minutes($min) {
    if ($min >= 60) 
        {
            $h = floor($min/60) ? floor($min/60) : '';
            $m = $min%60 ? $min%60 : '';
            echo "$h hour(s) and $m minute(s)" ;
        } 
    else
        {
            echo "your number should be at least 60.";
        }
    
}
minutes(200); // output 3 hour(s) and 20 minute(s)
?>