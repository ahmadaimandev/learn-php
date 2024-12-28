<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Hello World</h1>
    <!-- PHP Code Goes Here -->
    <?php
    // PHP Code Goes Inside Here
    echo "Hello World!";
    // Check PHP Version
    echo "<br>PHP Version: " . phpversion();
    ?>

    <!-- PHP Are Case Sensitive -->
    <!-- Will Get An Error because it treated as different variables -->
    <?php
    $color = "red";
        echo "My car is " . $color . "<br>";
        echo "My house is " . $COLOR . "<br>";
        echo "My boat is " . $coLOR . "<br>";
    ?>
</body>
</html>