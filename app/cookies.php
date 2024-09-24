<?php
    setcookie("fav_food", "biriyani", time() - 0, "/");
    setcookie("fav_drink", "Tea", time() + (86400 *2), "/");
    setcookie("fav_dress", "Football jersey", time() + (86400 *2), "/");

    // foreach($_COOKIE as $key => $value){
    //     echo "your {$key} is {$value} <br>";
    // }

    if (isset($_COOKIE["fav_food"])){
        echo "BUy some {$_COOKIE["fav_food"]}";
    }
    else {
        echo "i don't know your faviorite food";
    }
?>