<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>B-Ex 4</title>
</head>

<body>
    <form action="b-ex4.php" method="GET">
        <input type="number" name="length" placeholder="Enter length">
        <br>
        <input type="number" name="width" placeholder="Enter width">
        <br>
        <input type="number" name="dept" placeholder="Enter dept">
        <br>
        <input type="submit" name="submit">
    </form>
    <div>
        <?php
        function boxArea($a, $b, $c)
        {
            return 2 * ($a * $b + $a * $c + $b * $c);
        }
        function boxVol($a, $b, $c)
        {
            return $a * $b * $c;
        }
        if (isset($_GET["submit"])) {
            if ($_GET["length"] && $_GET["width"] && $_GET["dept"]) {
                $res1 = boxArea($_GET["length"], $_GET["width"], $_GET["dept"]);
                $res2 = boxVol($_GET["length"], $_GET["width"], $_GET["dept"]);
                echo "<h2>The surface of the box is {$res1}</h2>";
                echo "<h2>The volume of the box is {$res2}</h2>";
            } else {
                echo "<h3>Please fill out all fields.</h3>";
            }
        }
        ?>
    </div>
</body>

</html>