function makeMap() {
  var snazzyMap = JSON.parse(wpGlobals.mapOptions);
  var map = new google.maps.Map(document.getElementById('the-map'), {
      center : new google.maps.LatLng(-36.8270405,-73.04618959999999),
      zoom : 15,
      mapTypeId : google.maps.MapTypeId.ROADMAP,
      disableDefaultUI: true,
      styles : snazzyMap
  });
  var marker = new google.maps.Marker({
      position : new google.maps.LatLng(-36.8270405,-73.04618959999999)
  });
  marker.setMap(map);
}
google.maps.event.addDomListener(window, 'load', makeMap);