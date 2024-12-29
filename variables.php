<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- Create Variables in PHP -->
    <h2 style="text-align: center;">Declare a variable</h2>
    <?php
    // Starts by declaring a variable with dollar sign ($) and come with varible name
    $Num1 = 5;
    $Num2 = 10;
    $Sum = $Num1 + $Num2;
    echo $Sum;


    $randomText = "Hello Aiman!";
    echo "<br>";
    echo "Hi There". " " . $randomText;

    var_dump("<br>". $randomText);
    ?>
</body>
</html>