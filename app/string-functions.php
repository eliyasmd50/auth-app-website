<?php 
    // $username = "Mohamed Eliyas sulthan";
    $username = array("Mohamed", "Eliyas", "Sulthan");
    $phone = "123-345-3456";

    // $username = strtolower($username);
    // $username = strtoupper($username);
    // $username = trim($username);
    // $username = str_pad($username, 20, "0");
    // $phone = str_replace("-", "", $phone);
    // $username = strrev($username);
    // $username = str_shuffle($username);
    // $equal = strcmp($username, "MohamedEliyas");
    // $count = strlen($phone);
    // $index = strpos($username, " ");
    // $firstname = substr($username, 0, $index);
    // $lastname = substr($username, $index);
    // $firstname = explode(" ", $username);
    $username = implode( " ", $username);


    echo $username;

    // foreach($firstname as $name){
    //     echo $name . "<br>";
    // }
?>