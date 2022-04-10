function getRestaurantInfo(restaurantId) {
  $.ajax({
    url: "test.php",
    type: 'POST',
    dataType: "json",
    data: {id:restaurantId},
    success: function(data) {
      $("#rest_name").html(data.name);
      $("#rest_description").html(data.description);
      var pasedData = JSON.parse(data);
      var marker_lat = parseFloat(pasedData.lat);
      var marker_lng = parseFloat(pasedData.lng);
      var map = new naver.maps.Map(document.getElementById('map'), {
        zoom: 10,
        center: new naver.maps.LatLng(marker_lat, marker_lng)
      });
      console.log(parsedData.lat);
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
