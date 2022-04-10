function getRestaurantInfo(restaurantId) {
  $.ajax({
    url: "test.php",
    type: 'POST',
    dataType: "json",
    data: {id:restaurantId},
    success: function(data) {
      $("#rest_name").html(data.name);
      $("#rest_description").html(data.description);
      map.setCenter(new google.maps.LatLng(parseFloat(data[0].lat), parseFloat(data[0].lng)));
    }
  });
}



//   $.ajax({
//     url: "test.php",
//     type: 'POST',
//     dataType: "json",
//     data: {id: restaurantId},
//     success: function(data) {
//       console.log(data);
//       // $("#rest_name").html(data.name);
//       // $("#rest_description").html(data.description);
//       // $("#latlng").html(data.lat);
//       // var marker_lat = data.lat;
//       // var marker_lng = data.lng;
//       // var map = new naver.maps.Map(document.getElementById('map'), {
//       //   zoom: 10,
//       //   center: new naver.maps.LatLng(-33.92, 151.25),
//       //   mapTypeId: naver.maps.MapTypeId.ROADMAP
//     //   });
//    }
//   });
// }
