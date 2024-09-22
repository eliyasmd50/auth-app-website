<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <label for="">Enter the country:</label>
        <input type="text" name= "country">
        <input type="submit" value="enter">
    </form>
</body>
</html>

<?php

//associate array
    // $country = $_POST["country"];

    $countrys = array("USA" => "Washington DC",
                    "South Korea"=> "Seoul",
                    "India" => "New Delhi",
                    "Japan" => "Kyoto");

    // foreach($countrys as $key => $value){
    //     if($key == $country) {
    //         echo "{$value} <br>";
    //     }
    // }

    $capital = $countrys[$_POST["country"]];
    echo "The capital is {$capital} <br>";

    // $countrys["USA"] = "los vegas";
    // $countrys["china"] = "Beijing";
    // array_pop($countrys);
    // array_shift($countrys);
    // $keys = array_keys($countrys);
    // $values = array_values($countrys);
    // $countrys = array_flip($countrys);
    // $countrys = array_reverse($countrys);

    // foreach($countrys as $keys => $values) {
    //     echo "{$keys} = {$values}<br>";
    // }
?>