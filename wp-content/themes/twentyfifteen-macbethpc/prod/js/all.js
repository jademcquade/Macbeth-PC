// Google map 185 St Vincent Street, Glasgow
function initialize() {
  var myLatlng = new google.maps.LatLng(55.861862, -4.261878);
  var mapOptions = {
    zoom: 18,
    center: myLatlng,
    mapTypeId: google.maps.MapTypeId.ROADMAP
  };

  var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

  var contentString =
      '<div id="content">'+
        '<ul>' +
            '<li id="title">Macbeth Property Consultants</li>' +
            '<li>185 St Vincent Street</li>' +
            '<li>Glasgow</li>' +
            '<li>G2 5QD</li>' +
            '<li><span class="orange bold">T.</span> +44 (0)141 881 7171</li>' +
            '<li><span class="orange bold">E.</span> alan@macbethpc.com</li>' +
        '</ul>' +
      '</div>';

  var infowindow = new google.maps.InfoWindow({
      content: contentString
  });

  var marker = new google.maps.Marker({
      position: myLatlng,
      map: map
  });
  google.maps.event.addListener(marker, 'click', function() {
    infowindow.open(map,marker);
  });
}

google.maps.event.addDomListener(window, 'load', initialize);