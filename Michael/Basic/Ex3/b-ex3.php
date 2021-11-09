<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>B-Ex 3</title>
</head>

<body>
    <form action="b-ex3.php" method="GET">
        <input type="number" name="math" placeholder="Your Math Grade">
        <br>
        <input type="number" name="physics" placeholder="Your Physics Grade">
        <br>
        <input type="number" name="english" placeholder="Your English Grade">
        <br>
        <input type="submit" name="submit">
    </form>
    <div>
        <?php
        function gradeSum($a, $b, $c)
        {
            return $a + $b + $c;
        }
        if (isset($_GET["submit"])) {
            if ($_GET["math"] && $_GET["physics"] && $_GET["english"]) {
                $res1 = gradeSum($_GET["math"], $_GET["physics"], $_GET["english"]);
                $res2 = $res1 / 3;
                echo "<h2>Sum: {$res1}</h2>";
                echo "<h2>Average: {$res2}</h2>";
            }
        }


        ?>
    </div>
</body>

</html>