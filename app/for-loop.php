<?php 
    for ($i = 10; $i > 0; $i-=2){
        echo "{$i} <br>";
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <label for="">Enter the number to count to:</label><br>
        <input type="number" name="counter"><br>
        <input type="submit" value="start"><br>
    </form>
</body>
</html>

<?php 
    $counter = $_POST["counter"];
    $total = 0;

    for ($i = 1; $i <= $counter; $i++) {
        $total = $total + $i;
    }

    echo"The total of the given counter {$counter} is {$total}";
?>