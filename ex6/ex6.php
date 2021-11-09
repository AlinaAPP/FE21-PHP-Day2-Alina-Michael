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
    <form action="ex6.php"  method ="POST">
        <div>
            First Name: <input type="text" name="first_name" />
        </div>
        <div>
            Last name: <input type ="text" name="last_name" />
        </div>
        <div>
            Age: <input type ="text" name="age" />
        </div>
        <div>
            Hobbies: <input type ="text" name="hobbies" />
        </div>
        <div>
            <input  type="submit" name="submit"  />
        </div> 
    </form>
    <?php
    if( isset($_POST['submit']))
    {
        if( strlen($_POST["first_name"])>5 && $_POST["last_name"] && $_POST["age"])
        {
           echo 
           "<div style='color:green'>$_POST[first_name]</div>
            <div>$_POST[last_name]</div>
            <div>$_POST[age]</div>
           ";
            /* echo $_POST["first_name"];
            echo $_POST["last_name"];
            echo $_POST["age"]; */
           
        } elseif( strlen($_POST["first_name"])<=5 && $_POST["last_name"] && $_POST["age"])
        {
            echo 
            "   <div style='color:red'>$_POST[first_name]</div>
                <div>$_POST[last_name]</div>
                <div>$_POST[age]</div>
            ";
        } else 
        {
            echo "Please fill in!";
        }
    }
    ?>
</body>
</html>