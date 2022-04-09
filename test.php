<?php
  require ("connection.php");

  if(isset($_POST['id'])){
    $sql = "SELECT * FROM rest_lists WHERE id={$_POST['id']}";

    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);
    echo $row['spec'];
   };
?>
