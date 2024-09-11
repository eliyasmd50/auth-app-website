<?php
//variables
    $name = "Eliyas";
    $food = "Biriyani";

    $price = 115.5;

    $extra_raitha_price = 5;
    $quantity = 3;

    $need_extra_raitha = true;
    $need_chicken_fry = false;

    echo"Hello {$name} you ordered {$quantity} plate of {$food} parcel and extra raitha {$need_extra_raitha} <br>";

    $total = $quantity * $price + $quantity * $extra_raitha_price;

    echo"Total amount = \${$total}";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Website</title>
</head>
<body>
  <br>
  <button>Order Now</button>
</body>
</html>