<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Adv-Ex</title>
    <style>
        #converter {
            text-align: center;
        }

        .very-cold {
            color: #0045b5;
            height: 35rem;
            background-size: cover;
            background-position: center;
            background-image: url("https://images.pexels.com/photos/7099645/pexels-photo-7099645.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940");
            display: flex;
            justify-content: space-around;
            align-items: center;
        }

        .cold {
            color: #030170;
            height: 35rem;
            background-size: cover;
            background-position: center;
            background-image: url("https://images.pexels.com/photos/3572838/pexels-photo-3572838.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940");
            display: flex;
            justify-content: space-around;
            align-items: center;
        }

        .pleasant {
            color: #1a6e2c;
            height: 35rem;
            background-size: cover;
            background-position: center;
            background-image: url("https://images.pexels.com/photos/46164/field-of-rapeseeds-oilseed-rape-blutenmeer-yellow-46164.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940");
            display: flex;
            justify-content: space-around;
            align-items: center;
        }

        .warm {
            color: #07f19b;
            height: 35rem;
            background-size: cover;
            background-position: center;
            background-image: url("https://images.pexels.com/photos/46710/pexels-photo-46710.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940");
            display: flex;
            justify-content: space-around;
            align-items: center;
        }

        .hot {
            color: #f24100;
            height: 35rem;
            background-size: cover;
            background-position: center;
            background-image: url("https://images.pexels.com/photos/457881/pexels-photo-457881.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940");
            display: flex;
            justify-content: space-around;
            align-items: center;
        }
    </style>
</head>

<body>


    <main>
        <h1 class="text-center">Fahrenheit to Celsius Converter</h1>
        <div class="container">
            <form action="adv-ex.php" id="converter" method="GET">
                <label for="temp">Enter the temperature in Fahrenheit:</label>
                <br>
                <input type="number" name="temp" placeholder="Fahrenheit">
                <input type="submit" name="submit">
            </form>
            <?php
            function tempConv($temp)
            {
                return round(($temp - 32) * 5 / 9, 1);
            }
            if (isset($_GET["submit"])) {
                $temp = tempConv($_GET["temp"]);
                switch (true) {
                    case ($temp <= 5):
                        echo "<hr><div class=\"very-cold\"><h2>It is very cold! ({$temp} degrees Celsius)</h2></div>";
                        break;
                    case ((5 < $temp) && ($temp <= 10)):
                        echo "<hr><div class=\"cold\"><h2>It is cold! ({$temp} degrees Celsius)</h2></div>";
                        break;
                    case ((10 < $temp) && ($temp <= 15)):
                        echo "<hr><div class=\"pleasant\"><h2>It is pleasant! ({$temp} degrees Celsius)</h2></div>";
                        break;
                    case ((15 < $temp) && ($temp <= 20)):
                        echo "<hr><div class=\"warm\"><h2>It is warm! ({$temp} degrees Celsius)</h2></div>";
                        break;

                    default:
                        echo "<hr><div class=\"hot\"><h2>It is hot! ({$temp} degrees Celsius)</h2></div>";
                }
            } else {
                echo "<h2>Please insert a number.</h2>";
            }
            ?>
        </div>


    </main>

    <!-- script! -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>