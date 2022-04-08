<?php
  $hostname = "u6354r3es4optspf.cbetxkdyhwsb.us-east-1.rds.amazonaws.com:3306";
  $admin_id = "iybbv1l9qr3o0pij";
  $admin_pw = "kpw0l5fhpvn7008p";
  $db_name = "l2wzwrr3fajedz53";
  $conn = mysqli_connect($hostname, $admin_id, $admin_pw);
  mysqli_select_db($conn, $db_name);
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
    <script type="text/javascript" src="https://openapi.map.naver.com/openapi/v3/maps.js?ncpClientId=8u4miwdm7j"></script>
    <script src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
    <link rel="stylesheet" href="zulmoc.css?after">
    <title>Zulmoc</title>
  </head>
  <body>

    <center>
      <h1><a href="./index.php">Zulmoc!</a></h1>
    </center>

    <nav>
      <ol>
        <li id="category_lists"><a href="./index.php?id=1">Beef</a></li>
        <li id="category_lists"><a href="./index.php?id=2">Pork</a></li>
        <li id="category_lists"><a href="./index.php?id=3">Chicken</a></li>
        <li id="category_lists"><a href="./index.php?id=4">Seafood</a></li>
        <li id="category_lists"><a href="./index.php?id=5">Noodles</a></li>
        <li id="category_lists"><a href="./index.php?id=6">Bread</a></li>
        <li id="category_lists"><a href="./index.php?id=7">Meal</a></li>
        <li id="category_lists"><a href="./index.php?id=8">Table</a></li>
        <li id="category_lists"><a href="./index.php?id=9">Course</a></li>
      </ol>
    </nav>

    <article id="lists_of_one_category">
      <?php
      $sql = "SELECT rest_lists.name FROM rest_lists WHERE rest_lists.category=".$_GET['id'];
      $result = mysqli_query($conn, $sql);
        while( $row = mysqli_fetch_assoc($result)){
          echo '<li><a href="XXXXXXXXXXXXX'.$row['id'].'">'.$row['name'].'</a></li>'."\n";
        }
      ?>
    </article>

    <div id="map" style="width:50%;height:200px;"></div>

    <div id="rest_images">Images</div>
    <div id="rest_description">Description</div>

    </div>

    <script type="text/javascript" src="map.js"></script>
  </body>
</html>
