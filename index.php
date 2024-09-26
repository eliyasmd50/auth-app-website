<?php
  include('database.php');

  $sql = "SELECT * FROM users";
  $result = mysqli_query($conn, $sql); //obejects will be stored/returned

  if (mysqli_num_rows($result) > 0){
    // $rows = mysqli_fetch_assoc($result);//associate arrays will be stored/returned

    while($rows = mysqli_fetch_assoc($result)){
      foreach($rows as $key => $value) {
        echo "$key = $value <br>";
      }
    }
  }
  else {
    echo "No user found";
  }
?>