<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <label>Quantity of Biriyani:</label> <br>
        <input type="text" name="quantity">
        <input type="submit" value="Total">
    </form>
</body>
</html>

<?php
$item = "Biriyani";
$prize_of_biriyani = 121.55;
$total = null;
$quantity_of_biriyani = (float)$_POST["quantity"];

$total = $quantity_of_biriyani * $prize_of_biriyani;

echo "You have ordered {$quantity_of_biriyani} x {$item}/s <br>";
echo "Total prize is {$total}";
?>