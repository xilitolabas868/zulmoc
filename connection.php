<?php
  $hostname = "u6354r3es4optspf.cbetxkdyhwsb.us-east-1.rds.amazonaws.com:3306";
  $admin_id = "iybbv1l9qr3o0pij";
  $admin_pw = "kpw0l5fhpvn7008p";
  $db_name = "l2wzwrr3fajedz53";
  $conn = mysqli_connect($hostname, $admin_id, $admin_pw);
  mysqli_select_db($conn, $db_name);
?>
