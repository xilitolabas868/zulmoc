<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <script src="zulmoc.js"></script>
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
  </body>
</html>
