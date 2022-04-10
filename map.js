function initMap() {
  var mapOptions = {
      center: new google.maps.LatLng(37.547797, 127.029887),
      zoom: 13
  };

  var map = new google.maps.Map(document.getElementById('map'), mapOptions);
}
