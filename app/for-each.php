<?php
    $foods = array("Biriyani", "chicken 65", "tandoori", "grill", "mutton chops");

    // array_push($foods, "mutoon Biriyani");
    // array_pop($foods);
    // array_shift($foods);
    // $foods = array_reverse($foods);
    echo count($foods). "<br>";

    foreach ($foods as $food){
        echo "{$food} <br>";
    }
?>