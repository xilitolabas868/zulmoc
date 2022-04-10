function getRestaurantInfo(restaurantId) {
  $.ajax({
    url: "test.php",
    type: 'POST',
    dataType: "json",
    data: {id:restaurantId},
    success: function(data) {
      $("#rest_name").html(data.name);
      $("#rest_description").html(data.description);
      var mapOptions = {
          center: new google.maps.LatLng(data.lat, data.lng),
          zoom: 11
      };
      var map = new google.maps.Map(document.getElementById('map'), mapOptions);
    }
  });
}
