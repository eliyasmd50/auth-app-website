<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <input type="radio" name="credit_card" value="visa">
        visa<br>
        <input type="radio" name="credit_card" value="Master card">
        Master Card <br>
        <input type="radio" name="credit_card" value="Rupay">
        Rupay <br>
        <input type="submit" name="confirm" value="confirm"><br>
    </form>
</body>
</html>

<?php

    if(isset($_POST["confirm"])){

        $credit_card = null;

        if (isset($_POST["credit_card"])){
            $credit_card = $_POST["credit_card"];
        }

        switch($credit_card){
            case "visa":
                echo "You have selected Visa";
                break;
            case "Master card":
                echo "You have selected Master card";
                break;
            case "Rupay":
                echo"You have selected Rupay";
                break;
            default:
                echo "Please make a selection";
                break;
        }


    }

?>