<?php 
  include("database.php");

  $username = "Thor";
  $password = "midavenger";
  $hash = password_hash("$password", PASSWORD_DEFAULT);

  $sql = "INSERT INTO users (user, password) 
                      VALUES ('$username', '$hash')";

  try {
    mysqli_query($conn, $sql);
    echo "User is now registered";
  }
  catch(mysqli_sql_exception) {
    echo "user is not registered";
  }

  

  mysqli_close($conn);
?>



