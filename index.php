<?php
  $conn = mysqli_connect("us-cdbr-east-05.cleardb.net", "bc195eb7a037e3", "3847ef2c");
  mysqli_select_db($conn, "heroku_1b40527361457ae");
  $sql = "SELECT rest_lists.name FROM rest_lists WHERE rest_lists.category=".$_GET["id"];
  $result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <script src="zulmoc.js"></script>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
    <script type="text/javascript" src="https://openapi.map.naver.com/openapi/v3/maps.js?ncpClientId=8u4miwdm7j"></script>
    <script src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
    <link rel="stylesheet" href="zulmoc.css?after">
    <title>즐겁게 먹자, 즐먹! Zulmoc</title>
  </head>
  <body>

    <center>
      <h1><a href="./index.php">즐먹!</a></h1>
    </center>

    <nav>
      <ol>
        <?php
          echo file_get_contents("list.txt");
        ?>
      </ol>
    </nav>

    <article id="lists_of_one_category">
      <?php
        while( $row = mysqli_fetch_assoc($result)){
          echo '<li><a href="http://localhost/index.php?id='.$row['name'].'">'.$row['name'].'</a></li>'."\n";
        }
      ?>
    </article>

    <div id="map" style="width:30%;height:400px;"></div>

    <script>
      var mapOptions = {
          center: new naver.maps.LatLng(37.3595704, 127.105399),
          zoom: 10
      };

      var map = new naver.maps.Map('map', mapOptions);
    </script>
  </body>
</html>
