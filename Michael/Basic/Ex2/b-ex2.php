<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>B-Ex2</title>
</head>

<body>
    <form action="b-ex2.php" method="GET">
        <input type="number" name="f_number" placeholder="Numerator">
        <br>
        <input type="number" name="s_number" placeholder="Denominator">
        <br>
        <input type="submit" name="submit">
    </form>
    <?php
    function divide($a, $b)
    {
        if ($b === 0) {
            return 'No division by zero allowed!';
        } else {
            return $a / $b;
        }
    }
    if (isset($_GET["submit"])) {
        if ($_GET["f_number"] && $_GET["s_number"]) {
            $res = divide($_GET["f_number"], $_GET["s_number"]);
            echo "<h3>Result: {$res}</h3>";
        } elseif ($_GET["f_number"]) {
            echo "<h3>Please define a second number</h3>";
        } elseif ($_GET["s_number"]) {
            echo "<h3>Please define a first number</h3>";
        }
    }
    ?>
</body>

</html>