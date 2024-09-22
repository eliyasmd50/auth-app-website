<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <label for="">Radius:</label>
        <input type="number" name="radius">
        <input type="submit" value="Total">
    </form><br>
</body>
</html>

<?php
    $radius = (float)$_POST["radius"];
    $circumferenece = null;
    $area = null;
    $volume = null;

    $circumferenece = 2 * pi() * $radius;
    $circumferenece = round($circumferenece, 2);

    $area = pi() * pow($radius, 2);
    $area = round($area, 2);

    $volume = 4/3 * pi() * pow($radius, 3);
    $volume = round($volume, 2);

    echo "Circumference = {$circumferenece}cm <br>";
    echo "Area = {$area}cm^2 <br>";
    echo "Volume = {$volume}cm^3";
?>