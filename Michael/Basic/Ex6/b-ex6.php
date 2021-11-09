<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>B-Ex6</title>
    <style>
        .long-name {
            color: green;
        }

        .short-name {
            color: red;
        }
    </style>
</head>

<body>
    <form action="b-ex6.php" method="POST">
        <input type="text" name="f_name" placeholder="Your first name">
        <br>
        <input type="text" name="s_name" placeholder="Your surname">
        <br>
        <input type="number" name="age" placeholder="Your age">
        <br>
        <input type="text" name="hobbies" placeholder="hobbies">
        <br>
        <input type="submit" name="submit">
    </form>
    <?php
    if (isset($_POST["submit"])) {
        if ($_POST["f_name"] && $_POST["s_name"] && $_POST["age"] && $_POST["hobbies"]) {
            if (strlen($_POST["f_name"] . $_POST["s_name"]) > 5) {
                echo "<div class=\"long-name\"><h2>Your first name is {$_POST["f_name"]} </h2></div>
    <div class=\"long-name\"><h2>Your second name is {$_POST["s_name"]} </h2></div>
    <div class=\"long-name\"><h2>You are {$_POST["age"]} years old</h2></div>
    <div class=\"long-name\"><h2>Your hobby is {$_POST["hobbies"]}</h2></div>";
            } else {
                echo  "<div class=\"short-name\"><h2>Your first name is {$_POST["f_name"]} </h2></div>
    <div class=\"short-name\"><h2>Your second name is {$_POST["s_name"]} </h2></div>
    <div class=\"short-name\"><h2>You are {$_POST["age"]} years old</h2></div>
    <div class=\"short-name\"><h2>Your hobby is {$_POST["hobbies"]}</h2></div>";
            }
        } else echo "<h2>Please fill out every field.</h2>";
    }
    ?>
</body>

</html>