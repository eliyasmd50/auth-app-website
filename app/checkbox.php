<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <input type="checkbox" name="foods[]" value="Biriyani">
        Biriyani <br>
        <input type="checkbox" name="foods[]" value="Chicken Pakoda">
        Chicken pakoda <br>
        <input type="checkbox" name="foods[]" value="Beef pakoda">
        Beef Pakoda <br>
        <input type="submit" name="submit"><br>
    </form>
</body>
</html>

<?php
    // if (isset($_POST["submit"])){
    //     if (isset($_POST["biriyani"])){
    //         echo "You like biriyani <br>";
    //     }
    //     if (isset($_POST["ck"])){
    //         echo "You like ck <br>";
    //     }
    //     if (isset($_POST["bf"])){
    //         echo "You like bf <br>";
    //     }
    //     if (empty($_POST["biriyani"])){
    //         echo "You notlike biriyani <br>";
    //     }
    //     if (empty($_POST["ck"])){
    //         echo "You not like ck <br>";
    //     }
    //     if (empty($_POST["bf"])){
    //         echo "You not like bf <br>";
    //     }
    // }

    $foods = $_POST["foods"];

    foreach ($foods as $food){
        echo "You Like {$food} <br>";
    }

?>