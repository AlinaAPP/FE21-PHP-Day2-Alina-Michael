<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <h1>FORM</h1>
    <form action="form.php"  method ="POST">
            Name: <input type="text"   name="name" />
            <br><br>
            Surname: <input type ="text"  name="surname" />
            <br><br>
            <input  type="submit"  name="submit"  />
            <br><br>
            </form>
    <?php
    if( isset($_POST['submit']))
    {
        if( $_POST["name"] && $_POST["surname"] )
        {
            echo "Welcome $_POST[name] $_POST[surname]<br>";
            
        } else {
            echo "please insert your name and surname." ;
        }
    }
    ?>
</body>
</html>