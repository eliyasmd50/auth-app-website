<?php 
    function hypotenaus($a, $b){
        $result = sqrt($a ** 2 + $b ** 2);
        return $result;
    }
    echo hypotenaus(3,3) . "<br>";
    echo hypotenaus(4,5) . "<br>";
?>