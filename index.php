<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <script src="zulmoc.js"></script>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
    <script type="text/javascript" src="https://openapi.map.naver.com/openapi/v3/maps.js?ncpClientId=8u4miwdm7j"></script>
    <link rel="stylesheet" href="zulmoc.css">
    <title>즐겁게 먹자, 즐먹! Zulmoc</title>
  </head>
  <body>
    <center><a href="http://localhost:8888/zulmoc/index.php">Zulmoc!</a></center>
    <nav>
        <ol>
          <?php
            echo file_get_contents("list.txt");
          ?>
        </ol>
    </nav>

    <article>
      <?php
        if( empty($_GET['id']) == false ) {
          echo file_get_contents($_GET['id'].".txt");
        }
      ?>
    </article>

    <div id="map" style="width:100%;height:400px;"></div>

    <script>
      var mapOptions = {
          center: new naver.maps.LatLng(37.3595704, 127.105399),
          zoom: 10
      };

      var map = new naver.maps.Map('map', mapOptions);
    </script>
  </body>
</html>
