<?php 
  $hash = password_hash("eliyas123", PASSWORD_DEFAULT);

  if (password_verify("eliyas123", $hash)) {
    echo "Your logged in!";
  }
  else {
    echo "invalid password";
  }
?>



