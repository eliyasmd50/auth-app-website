<?php
  $db_server = "localhost";
  $db_user = "root";
  $db_pass = "";
  $db_name = "bussinessdb";
  $conn = "";


  try {
    $conn = mysqli_connect($db_server, 
                          $db_user, 
                          $db_pass,  
                          $db_name );

    // echo "Connection Established <br>";
  }
  catch(mysqli_sql_exception) {
    echo "could not connect <br>";
  }

?>