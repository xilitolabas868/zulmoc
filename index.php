<?php
  require('connection.php');
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Zulmoc</title>
  </head>
  <body>

    <center>
      <h1><a href="./index.php">Zulmoc! 즐겁게 먹자!</a></h1>
    </center>

    <div class="container">
      <div class="row">
        <div class="col">
          <ul>
            <li id="category_lists" type="button" class="btn btn-success btn-sm my-1"><a class="link-light" href="./index.php?id=1">Beef</a></li>
            <li id="category_lists" type="button" class="btn btn-success btn-sm my-1"><a class="link-light" href="./index.php?id=2">Pork</a></li>
            <li id="category_lists" type="button" class="btn btn-success btn-sm my-1"><a class="link-light" href="./index.php?id=3">Chicken</a></li>
            <li id="category_lists" type="button" class="btn btn-success btn-sm my-1"><a class="link-light" href="./index.php?id=4">Seafood</a></li>
            <li id="category_lists" type="button" class="btn btn-success btn-sm my-1"><a class="link-light" href="./index.php?id=5">Noodles</a></li>
            <li id="category_lists" type="button" class="btn btn-success btn-sm my-1"><a class="link-light" href="./index.php?id=6">Bread</a></li>
            <li id="category_lists" type="button" class="btn btn-success btn-sm my-1"><a class="link-light" href="./index.php?id=7">Meal</a></li>
            <li id="category_lists" type="button" class="btn btn-success btn-sm my-1"><a class="link-light" href="./index.php?id=8">Table</a></li>
            <li id="category_lists" type="button" class="btn btn-success btn-sm my-1"><a class="link-light" href="./index.php?id=9">Course</a></li>
          </ul>
        </div>
      </div>
      <div class="row">
        <div class="col-4">
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
        </div>
        <div class="col-8">
          <h2 id="rest_name">Hello</h2>
          <div id="rest_description">Description</div>
        </div>
      </div>
      <div class="row">
        <div class="col">
          <div class="d-grid gap-2" id="map" style="height: 400px;"></div>
        </div>
      </div>
    </div>


    <script  src="https://code.jquery.com/jquery-latest.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script type="text/javascript" src="map.js"></script>
    <script type="text/javascript" src="get_spec.js"></script>
    <script
      <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD6oCC5xmB5Zo6N9UaGRctpJlgPLeMivK4&callback=initMap&libraries=places,geometry&solution_channel=GMP_QB_locatorplus_v4_cA" async defer></script>
    </script>

  </body>
</html>
