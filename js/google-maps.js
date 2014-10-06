
var lat = 0;
var lng = 0;

function initialize() {
    var myLatLng = new google.maps.LatLng(lat, lng);
    var bounds = new google.maps.LatLngBounds();
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
    
    var projetos = [
            {name: "Ponte Orinoquia", description: "Ciudad Guayana, Venezuela", image: "portfolio-c1.jpg", position: "8.276281, -62.899754", target: "ori"},
            {name: "Sede Petrobrás", description: "Vitória - ES, Brasil", image: "portfolio-b1.jpg", position: "-20.296263, -40.299730", target: "ptb"},
            {name: "Projeto Águas Limpas", description: "Vitória - ES, Brasil", image: "portfolio-c1.jpg", position: "-20.303268, -40.319875", target: "agl"},
            {name: "Ponte Vasco da Gama", description: "Lisboa, Portugal", image: "portfolio-vg1.jpg", position: "38.758156, -9.037735", target: "vgm"},
            {name: "Terceira Ponte", description: "Vitória - ES, Brasil", image: "portfolio-t1.jpg", position: "-20.325067, -40.283130", target: "tc1"},
            {name: "Metro SP - Linha 5", description: "São Paulo - SP, Brasil", image: "portfolio-metro.jpg", position: "-23.659790, -46.768897", target: "met"},
            {name: "Ponte Florentino Avidos", description: "Colatina - ES, Brasil", image: "portfolio-colatina.jpg", position: "-19.531184, -40.631124", target: "col"},
            {name: "Linha Vermelha", description: "Rio de Janeiro - RJ, Brasil", image: "portfolio-linhavermelha.jpg", position: "-22.805602, -43.295304", target: "lvr"},
            {name: "Mercado Abastecedor da Região de Lisboa", description: "São Julião do Tojal - Portugal", image: "portfolio-marl.jpg", position: "38.867432, -9.106789", target: "mrl"}
        ];
    var infoWindow = new google.maps.InfoWindow(), marker, i;
    
    for(i = 0; i < projetos.length; i++){
        var input = projetos[i].position;
        var latlngStr = input.split(",",2);
        var lat = parseFloat(latlngStr[0]);
        var lng = parseFloat(latlngStr[1]);
        
        var position = new google.maps.LatLng(lat, lng);
        bounds.extend(position);
        marker = new google.maps.Marker({
            position: position,
            map: map,
            title: projetos[i].name
        });
        google.maps.event.addListener(marker, 'click', (function(marker, i) {
            return function() {
                infoWindow.setContent(projetos[i].name);
                infoWindow.open(map, marker);
            }
        })(marker, i));
        map.fitBounds(bounds);
    }
}

google.maps.event.addDomListener(window, 'load', initialize);