<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex1</title>
</head>

<body>
    <form action="b-ex1.php" method="POST">
        <label for="f_name">Your first name:</label>
        <input type="text" name="f_name">
        <br>
        <label for="s_name">Your surname</label>
        <input type="text" name="s_name">
        <br>
        <input type="submit" name="submit">
    </form>
    <?php
    if (isset($_POST["submit"])) {
        if ($_POST["f_name"] && $_POST["s_name"]) {
            echo "<h3>Welcome {$_POST["f_name"]} {$_POST["s_name"]} </h3>";
        } elseif ($_POST["f_name"]) {
            echo "<h3>Please insert your surname</h3>";
        } elseif ($_POST["s_name"]) {
            echo "<h3>Please insert your first name</h3>";
        }
    }
    ?>
</body>

</html>