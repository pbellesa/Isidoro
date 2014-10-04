
var lat = 0;
var lng = 0;

function initialize() {
    var myLatLng= new google.maps.LatLng(lat, lng);
    var mapOptions = {
        disableDefaultUI: true,
        draggable: false,
        zoomControl: true,
        zoomControlOptions: {
            position: google.maps.ControlPosition.LEFT_CENTER,
            style: google.maps.ZoomControlStyle.LARGE
        },
        center: myLatLng,
        mapTypeId: google.maps.MapTypeId.ROADMAP,
        zoom: 3,
        scrollwheel: false
    };

    var map = new google.maps.Map(document.getElementById("map-canvas"), mapOptions);

}

google.maps.event.addDomListener(window, 'load', initialize);