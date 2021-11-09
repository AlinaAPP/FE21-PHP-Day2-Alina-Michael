<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Temperature</title>
</head>
<body>
<?php
// Create a function that can convert °F in °C and show the result on the screen

    $value;
    function temperature($value) {
        /* $result = number_format(($value-32)*5/9, 2); */ // I set 2 nr after the comma
        /* $result = ceil(($value-32)*5/9); */
        $result = floor(($value-32)*5/9);
        return $result;
    }

    $temp=temperature(56);

    switch($temp) {
        case (0<$temp && $temp<=5):
            echo "Today is very cold: $temp °C";
            break;
        case (6<$temp && $temp<=15):
            echo "Today is cold: $temp °C";
            break;
        case (16<$temp && $temp<=20):
            echo "Today is pleasant: $temp °C";
            break;
        case ($temp>21):
            echo "Today is hot: $temp °C";
            break;
        default:
        echo 'Temperature is not set!';
    }

?>
</body>
</html>

