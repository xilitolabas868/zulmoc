<?php
  require('connection.php');
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
    <script type="text/javascript" src="https://openapi.map.naver.com/openapi/v3/maps.js?ncpClientId=8u4miwdm7j"></script>
    <script  src="http://code.jquery.com/jquery-latest.min.js"></script>;;
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
        $filtered_id = mysqli_real_escape_string($conn, $_GET['id']);
        $sql = "SELECT rest_lists.id,name FROM rest_lists WHERE rest_lists.category={$filtered_id}";
        $result = mysqli_query($conn, $sql);
          while( $row = mysqli_fetch_assoc($result)){
            echo '<li><a onclick="getRestaurantInfo('. $row['id'] .')" href="javascript:void(0);">'.$row['name'].'</a></li>'."\n";
          }
      ?>
    </article>

    <div id="map" style="width:50%;height:200px;"></div>

    <div id="rest_images">Images</div>
    <div id="rest_description">Description</div>

    </div>

    <script type="text/javascript" src="map.js"></script>
    <script type="text/javascript" src="get_spec.js"></script>
  </body>
</html>
