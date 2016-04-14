var map;

window.onload = function() {  
  map = document.getElementById("map");
}

function startListening() {
  source = new EventSource("geolocation.php");
  source.onmessage = receiveMessage;
}

function stopListening() {
  source.close();
}

var lat = 0;
var lng = 0;
var resultLatLngSplit;
function receiveMessage(event) {
  resultLatLngSplit = event.data;
  var arrayLatLng = resultLatLngSplit.split(' ');
  lat = arrayLatLng[0];
  lng = arrayLatLng[1];
  initMap();
}

function initMap() {
  var myLatLng = {
  	lat: Number(lat), 
  	lng: Number(lng)
  };

  var map = new google.maps.Map(document.getElementById('map'), {
    zoom: 10,
    center: myLatLng
  });

  var image = 'img/car.png';
  var marker = new google.maps.Marker({
    position: myLatLng,
    map: map,
    icon: image
  });
}


