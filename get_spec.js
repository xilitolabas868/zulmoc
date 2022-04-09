// function getResturantInfo(name){
//   fetch(name).then(function(response){
//     response.text().then(function(text){
//       document.querySelector('#rest_description').innerHTML = text;
//     })
//   });
// }


function getRestaurantInfo(restaurantId) {

  $.ajax({
    url: "test.php",
    type: 'POST',
    data: {id: restaurantId},
    success: function(response) {
      alert(response);
      // $("#rest_description").html(response);
    }
  });
}
