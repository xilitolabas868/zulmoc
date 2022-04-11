function getRestaurantInfo(restaurantId) {
  $.ajax({
    url: "test.php",
    type: 'POST',
    dataType: "json",
    data: {id:restaurantId},
    success: function(data) {
      $("#rest_name").html(data.name);
      $("#rest_description").html(data.description);
      var imagesource = "/zulmoc/restaurant_images/" + data.image_path_1;
      // console.log(imagesource);
      $("#rest_images").attr("src", imagesource);
      var mapOptions = {
          center: new google.maps.LatLng(data.lat, data.lng),
          zoom: 17
      };
      var map = new google.maps.Map(document.getElementById('map'), mapOptions);
      new google.maps.Marker({
        position: new google.maps.LatLng(data.lat, data.lng),
        map,
        title: "Hello world",
      });
    }
  });
}
