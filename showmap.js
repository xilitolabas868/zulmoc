function showMap(_lat,_long)
{
  var map;

  var myLatLng = {lat: _lat, lng: _long};
  function initMap() {
    map = new naver.maps.Map(document.getElementById('map'), {
       center: {lat: _lat, lng: _long},
       zoom: 20
    });
    var marker = new naver.maps.Marker({
       position: myLatLng,
       map: map,
       title: 'Hello World!'
    });
  }
}
