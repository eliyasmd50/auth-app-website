<?php 
    $age = 21;
    $is_eligible = null;

    if ($age >= 18) {
        echo "You are eligible to enter the site <br>";  
        $is_eligible  = true;
    }
    if ($is_eligible) {
        echo "You'r allowed to consume the content of this site";
    }
?>

<?php 
    $hours = 50;
    $weekly_pay = null;
    $rate = 15;
    
    if($hours <= 0){
        $weekly_pay = 0;
    }
    elseif ($hours <= 40) {
        $weekly_pay= $hours * $rate;
    }
    else{
        $weekly_pay = ($rate * 40) + (($hours - 40) * ($rate * 1.5));
    }

    echo "your weekly pay is \${$weekly_pay}";

?>