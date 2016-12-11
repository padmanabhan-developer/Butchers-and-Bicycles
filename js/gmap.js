function initMap(){
    var mapDiv = document.getElementById('map');
    var myLatLng = [{lat: 57.554365, lng: 18.480604}, {lat: 51.503454, lng: 15.480604}, {lat: 53.554365, lng: 16.480604}];
    // var myLatLng = {lat: 57.554365, lng: 18.480604};

    var map = new google.maps.Map(mapDiv, {
        center: {lat: 52.605842, lng: 10.222253},
        scrollwheel: true,
        zoom: 3
    });
    var markers = [];
    // var iconBase = 'images';
    var iconBase = 'https://maps.google.com/mapfiles/kml/shapes/';

    for(i=0 ; i<myLatLng.length; i++){
            var dynamicLatLng = myLatLng[i]
            var marker = new google.maps.Marker({
              position: dynamicLatLng,
              map: map,
              // icon: iconBase + 'marker.png',
              icon: iconBase + 'info-i_maps.png'
            });
            marker.addListener('click', function() {
            $(".map_infowindow").hide();
            $(".map_infowindow").fadeIn(500);
            });
            markers.push(marker);
    }
    var markerCluster = new MarkerClusterer(map, markers);
    markerCluster.gridSize = 10;
    markerCluster.maxZoom = 2;
    markerCluster.setGridSize(20);
    markerCluster.setMaxZoom(3);
    // markerCluster.fitMapToMarkers(true);
    console.log(markerCluster.getGridSize());
    map.set('styles',[
        {
            "featureType": "all",
            "elementType": "labels.text.fill",
            "stylers": [
                {
                    "saturation": 36
                },
                {
                    "color": "#333333"
                },
                {
                    "lightness": 40
                }
            ]
        },
        {
            "featureType": "all",
            "elementType": "labels.text.stroke",
            "stylers": [
                {
                    "visibility": "on"
                },
                {
                    "color": "#ffffff"
                },
                {
                    "lightness": 16
                }
            ]
        },
        {
            "featureType": "all",
            "elementType": "labels.icon",
            "stylers": [
                {
                    "visibility": "off"
                }
            ]
        },
        {
            "featureType": "administrative",
            "elementType": "geometry.fill",
            "stylers": [
                {
                    "color": "#fefefe"
                },
                {
                    "lightness": 20
                }
            ]
        },
        {
            "featureType": "administrative",
            "elementType": "geometry.stroke",
            "stylers": [
                {
                    "color": "#fefefe"
                },
                {
                    "lightness": 17
                },
                {
                    "weight": 1.2
                }
            ]
        },
        {
            "featureType": "administrative",
            "elementType": "labels",
            "stylers": [
                {
                    "visibility": "simplified"
                }
            ]
        },
        {
            "featureType": "administrative.country",
            "elementType": "geometry",
            "stylers": [
                {
                    "visibility": "on"
                },
                {
                    "hue": "#ff0000"
                },
                {
                    "lightness": "-30"
                }
            ]
        },
        {
            "featureType": "landscape",
            "elementType": "geometry",
            "stylers": [
                {
                    "color": "#dedede"
                },
                {
                    "lightness": 20
                }
            ]
        },
        {
            "featureType": "poi",
            "elementType": "geometry",
            "stylers": [
                {
                    "color": "#f5f5f5"
                },
                {
                    "lightness": 21
                }
            ]
        },
        {
            "featureType": "poi.park",
            "elementType": "geometry",
            "stylers": [
                {
                    "color": "#dedede"
                },
                {
                    "lightness": 21
                }
            ]
        },
        {
            "featureType": "road.highway",
            "elementType": "geometry.fill",
            "stylers": [
                {
                    "color": "#ffffff"
                },
                {
                    "lightness": 17
                }
            ]
        },
        {
            "featureType": "road.highway",
            "elementType": "geometry.stroke",
            "stylers": [
                {
                    "color": "#ffffff"
                },
                {
                    "lightness": 29
                },
                {
                    "weight": 0.2
                }
            ]
        },
        {
            "featureType": "road.arterial",
            "elementType": "geometry",
            "stylers": [
                {
                    "color": "#ffffff"
                },
                {
                    "lightness": 18
                }
            ]
        },
        {
            "featureType": "road.local",
            "elementType": "geometry",
            "stylers": [
                {
                    "color": "#ffffff"
                },
                {
                    "lightness": 16
                }
            ]
        },
        {
            "featureType": "transit",
            "elementType": "geometry",
            "stylers": [
                {
                    "color": "#f2f2f2"
                },
                {
                    "lightness": 19
                }
            ]
        },
        {
            "featureType": "water",
            "elementType": "geometry",
            "stylers": [
                {
                    "color": "#e9e9e9"
                },
                {
                    "lightness": 17
                }
            ]
        },
        {
            "featureType": "water",
            "elementType": "geometry.fill",
            "stylers": [
                {
                    "lightness": "-30"
                },
                {
                    "weight": "3.80"
                },
                {
                    "saturation": "0"
                }
            ]
        },
        {
            "featureType": "water",
            "elementType": "geometry.stroke",
            "stylers": [
                {
                    "visibility": "on"
                }
            ]
        },
        {
            "featureType": "water",
            "elementType": "labels",
            "stylers": [
                {
                    "visibility": "off"
                }
            ]
        }
]);


/*var marker = new google.maps.Marker({
  position: myLatLng,
  map: map,
  icon: iconBase + 'info-i_maps.png'
});*/


      }

