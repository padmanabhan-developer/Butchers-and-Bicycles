/*

You can loop over the Array like this:

for(var i = 0; i < json.length; i++) {
    var obj = json[i];

    console.log(obj.id);
}
Or like this (suggested from Eric) be careful with IE support

json.forEach(function(obj) { console.log(obj.id); });

*/

var dealerdata = [{
    "Address": "Globe House, 37 Bermondsey Street, SE1 3JW London, England, Ben Jaconelli",
    "Website": "www.fullycharged.com",
    "Name": "Fully Charged",
    "Latitude": 51.502451,
    "dealer_id":1,
    "Longitude": -0.082464
}, {
    "Address": "Puolikuu 1b26, 02210 Espoo, Finland",
    "Website": "www.tavarapyora-asiantuntija.fi",
    "Name": "Kultaiset Pojat Oy",
    "Latitude": 60.176894,
    "dealer_id":2,
    "Longitude": 24.724853
}, {
    "Address": "74 rue Salomon Reinach, 69007 Lyon, France",
    "Website": "www.lyoncyclechic.fr/",
    "Name": "Lyon Cycle Chic",
    "Latitude": 45.730425,
    "dealer_id":3,
    "Longitude": 4.839938
}, {
    "Address": "47 avenue de Versailles, 75016 PARIS, France",
    "Website": "www.les-cyclistes-branches.com",
    "Name": "Les Cyclistes Branches",
    "Latitude": 48.848428,
    "dealer_id":4,
    "Longitude": 2.275097
}, {
    "Address": "4 route d'Ingersheim, 68000 Colmar, France",
    "Website": "www.lulucycles.com",
    "Name": "LULU CYCLES",
    "Latitude": 48.081864,
    "dealer_id":5,
    "Longitude": 7.352921
}, {
    "Address": "70Boulevard Montaigne, 29200, Brest, France, Att. Etienne Boquien",
    "Website": "http://hobbycycles.com/",
    "Name": "Hobby Cycles",
    "Latitude": 48.40412,
    "dealer_id":6,
    "Longitude": -4.480609
}, {
    "Address": "Gallusanlage 7, 60329 Frankfurt Am Main, Germany",
    "Website": "www.bikeboutique.bike",
    "Name": "Bike Boutique",
    "Latitude": 50.10967,
    "dealer_id":7,
    "Longitude": 8.67084
}, {
    "Address": "Langenbrücker Strasse 12, 23909 Ratzeburg, Germany",
    "Website": "www.koech2rad.de",
    "Name": "Koech2rad",
    "Latitude": 53.698963,
    "dealer_id":8,
    "Longitude": 10.77106
}, {
    "Address": "Louisenstraße 19, 01099 Dresden, Germany",
    "Website": "www.meissner-raeder.de",
    "Name": "MEIßNER RAEDER",
    "Latitude": 51.06752,
    "dealer_id":9,
    "Longitude": 13.74998
}, {
    "Address": "“The Station”, Grindelberg 62, , 20144 Hamburg, Germany",
    "Website": "www.twowheelsgood.org",
    "Name": "Two Wheels Good",
    "Latitude": 53.57475,
    "dealer_id":10,
    "Longitude": 9.9779
}, {
    "Address": "Hofholzallee 223, 24109 Kiel, Germany.",
    "Website": "www.rueckenwind-kiel.de/",
    "Name": "Fahrradladen Rückenwind",
    "Latitude": 54.31669,
    "dealer_id":11,
    "Longitude": 10.06669
}, {
    "Address": "Lippestrasse 13, 46282 Dorsten, Germany.",
    "Website": "www.puntavelo.de",
    "Name": "Punta Velo GmbH",
    "Latitude": 51.661755,
    "dealer_id":12,
    "Longitude": 6.963257
}, {
    "Address": "Design & E-Mobility GmbH, Kastanienallee 64, 10119 Berlin, Germany.",
    "Website": "www.wingwheels.de",
    "Name": "WingWheels",
    "Latitude": 52.53461,
    "dealer_id":13,
    "Longitude": 13.40609
}, {
    "Address": "innovative Elektrofahrzeuge, Vahrenwalder Straße 50, 30165 Hannover.",
    "Website": "www.obc-hannover.com",
    "Name": "OrangeBikeConcept - Hannover",
    "Latitude": 52.39,
    "dealer_id":14,
    "Longitude": 9.735
}, {
    "Address": "Konsul-Smidt-Str. 26, 28217 Bremen, Germany.",
    "Website": "www.greenmobility-nord.de",
    "Name": "Greenmobility Nord",
    "Latitude": 53.091524,
    "dealer_id":15,
    "Longitude": 8.790941
}, {
    "Address": "Kolbstraße 21, 70180 Stuttgart, Germany.",
    "Website": "www.hyggelig-bikes.de",
    "Name": "Hyggelig Bikes",
    "Latitude": 48.76473,
    "dealer_id":16,
    "Longitude": 9.17105
}, {
    "Address": "Schleißheimer Straße 106, 80797 München, Germany.",
    "Website": "www.velocompany.de",
    "Name": "Velo Company",
    "Latitude": 48.15696,
    "dealer_id":17,
    "Longitude": 11.56247
}, {
    "Address": "12a Magennis Place, Pearse Street, Dublin 2, Ireland.",
    "Website": "www.greenaer.ie",
    "Name": "Greenaer",
    "Latitude": 53.343927,
    "dealer_id":18,
    "Longitude": -6.248247
}, {
    "Address": "Edisonstraat 6, 7903 An Hogeveen, The Netherlands.",
    "Website": "www.skootz.nl",
    "Name": "Skootz",
    "Latitude": 52.737727,
    "dealer_id":19,
    "Longitude": 6.494388
}, {
    "Address": "Uiterwaardenstraat 171, 1079 Amsterdam, Holland.",
    "Website": "www.drbeyk.nl",
    "Name": "DrBeyk",
    "Latitude": 52.342729,
    "dealer_id":20,
    "Longitude": 4.901569
}, {
    "Address": "Laan van Nieuw Oost-indië 108, 2593 BZ - Den haag, The Netherlands.",
    "Website": "www.juizz.nl",
    "Name": "JUIZZ - Den Haag",
    "Latitude": 52.085343,
    "dealer_id":21,
    "Longitude": 4.338432
}, {
    "Address": "Overtoom 201-203, 1054 HT - Amsterdam, The Netherlands.",
    "Website": "www.juizz.nl",
    "Name": "JUIZZ - Amsterdam",
    "Latitude": 52.361294,
    "dealer_id":22,
    "Longitude": 4.870435
}, {
    "Address": "Biltstraat 94-96, 3572 BH - Utrecht, The Netherlands.",
    "Website": "www.juizz.nl",
    "Name": "JUIZZ - Utrecht",
    "Latitude": 52.095456,
    "dealer_id":23,
    "Longitude": 5.130973
}, {
    "Address": "Mariniersweg 38, 3011 NP - Rotterdam, The Netherlands.",
    "Website": "www.juizz.nl",
    "Name": "JUIZZ - Rotterdam",
    "Latitude": 51.923316,
    "dealer_id":24,
    "Longitude": 4.489719
}, {
    "Address": "Leusderweg 21, 3811 NK Amersfoort, The Netherlands.",
    "Website": "www.fietsboetiek.nu/",
    "Name": "Vive le velo",
    "Latitude": 52.149591,
    "dealer_id":25,
    "Longitude": 5.384062
}, {
    "Address": "53 b Davis Crescent, 1023 Newmarket, New Zealand.",
    "Website": "bikesandbarbers.co.nz ",
    "Name": "Bikes and Barbers",
    "Latitude": -36.86722,
    "dealer_id":26,
    "Longitude": 174.777569
}, {
    "Address": "124 ocean view road, 1081 waiheke island, New Zealand.",
    "Website": "www.ecyclesnz.com",
    "Name": "Onya bikes Waiheke",
    "Latitude": -36.782519,
    "dealer_id":27,
    "Longitude": 175.00957
}, {
    "Address": "61 queen street, Blenheim, New Zealand.",
    "Website": "www.avantiplus.co.nz",
    "Name": "Avanti+ ",
    "Latitude": -41.513947,
    "dealer_id":28,
    "Longitude": 173.955851
}, {
    "Address": "Henrik Wergelands gate 9, 4612 Kristiansand, Norge.",
    "Website": "http://www.gnordby.no/",
    "Name": "EVO / G.  Nordby",
    "Latitude": 58.146451,
    "dealer_id":29,
    "Longitude": 7.990215
}, {
    "Address": "Verkstedv. 1, 0277 Oslo, Norge.",
    "Website": "www.evo-konsept.no",
    "Name": "EVO Elsykler Skøyen",
    "Latitude": 59.916798,
    "dealer_id":30,
    "Longitude": 10.664616
}, {
    "Address": "Randabergveien 372, 4070 Randaberg, Norge.",
    "Website": "www.sykkelcenteret.no",
    "Name": "EVO / Sykkelcenteret",
    "Latitude": 58.999259,
    "dealer_id":31,
    "Longitude": 5.619085
}, {
    "Address": "Innelvegen 2, 9107 KVALØYA, Norge.",
    "Website": "www.evo-konsept.no",
    "Name": "EVO Elsykler Tromsø",
    "Latitude": 69.623556,
    "dealer_id":32,
    "Longitude": 18.51826
}, {
    "Address": "Storgata 18, 1670 Fredrikstad, Norge.",
    "Website": "www.evo-konsept.no",
    "Name": "Gaarder Sykkelsport",
    "Latitude": 59.220537,
    "dealer_id":33,
    "Longitude": 10.934701
}, {
    "Address": "Blødekjær 26, 4838 Arendal, Norge.",
    "Website": "www.evo-konsept.no",
    "Name": "Sykkelsport AS",
    "Latitude": 58.465829,
    "dealer_id":34,
    "Longitude": 8.760764
}, {
    "Address": "ul. Klimczaka 22D/3, 02-797 Warszawa, Poland.",
    "Website": "www.waterfall.pl",
    "Name": "Waterfall",
    "Latitude": 52.129871,
    "dealer_id":35,
    "Longitude": 21.078331
}, {
    "Address": "133 Granton Road, EH5 3NJ Edinburgh, Scotland.",
    "Website": "www.electriccyclecompany.com/",
    "Name": "Electriccycle Company",
    "Latitude": 55.976138,
    "dealer_id":36,
    "Longitude": 3.215744
}, {
    "Address": "Valencia 33 , Pol. Ind. Son Bugadelles , Mallorca , 07180 Santa Ponsa, Spain.",
    "Website": "www.yeswebike.es",
    "Name": "Yes We Bike",
    "Latitude": 39.502945,
    "dealer_id":37,
    "Longitude": 2.471542
}, {
    "Address": "Stangavagen 10, 12844 Bagarmossen, Sweden.",
    "Website": "www.ladcyklar.se",
    "Name": "Ekern & Gamla Enskede Ladcyklar",
    "Latitude": 59.274388,
    "dealer_id":38,
    "Longitude": 18.133849
}, {
    "Address": "Seminariegatan 2, 413 13 Göteborg, Sweden.",
    "Website": "www.elcykelbutiken.se",
    "Name": "ELCYKELBUTIKEN I GÖTEBORG",
    "Latitude": 57.69193,
    "dealer_id":39,
    "Longitude": 11.95624
}, {
    "Address": "Solbackevägen 1 , 611 36 Nyköping , Sverige.",
    "Website": "www.velobloom.com",
    "Name": "Velobloom",
    "Latitude": 58.756695,
    "dealer_id":40,
    "Longitude": 17.020444
}, {
    "Address": "Kasernenstrasse 32, 4058 Basel, Switzerland.",
    "Website": "www.obstundgemuese.org",
    "Name": "OBST & GEMÜSE jam GmbH",
    "Latitude": 47.562772,
    "dealer_id":41,
    "Longitude": 7.591588
}, {
    "Address": "Luzernerstrasse 4, 6010 Kriens, Switzerland.",
    "Website": "www.velociped.ch",
    "Name": "Velociped",
    "Latitude": 47.033651,
    "dealer_id":42,
    "Longitude": 8.278101
}, {
    "Address": "Avenue de Grandson 48, 1400 Yverdon-les-Bains, Switzerland.",
    "Website": "www.vo-cycles.ch",
    "Name": "Version Originale Cycles Sàrl",
    "Latitude": 46.788094,
    "dealer_id":43,
    "Longitude": 6.630968
}, {
    "Address": "407 SE Ivon St., 97202 Portland, OR, USA, Joel Grover.",
    "Website": "www.splendidcycles.com",
    "Name": "Splendid Cycles",
    "Latitude": 45.504333,
    "dealer_id":44,
    "Longitude": -122.66168
}, {
    "Address": "72 Maple St, 12508 Beacon, NY, USA.",
    "Website": "http://www.peoplesbicycle.com/",
    "Name": "Peoples Bicycle",
    "Latitude": 41.508739,
    "dealer_id":45,
    "Longitude": -73.96545
}, {
    "Address": "917 Bryant Street, CA 94103 San Francisco, USA.",
    "Website": "www.viebikes.com",
    "Name": "Vie Bikes",
    "Latitude": 37.773799,
    "dealer_id":46,
    "Longitude": -122.404935
}, {
    "Address": "Bahnhofstrasse 17, 9020 Klagenfurt, Austria.",
    "Website": "www.mountainbiker.at",
    "Name": "Mountainbiker Klagenfurt",
    "Latitude": 46.623627,
    "dealer_id":47,
    "Longitude": 14.310749
}, {
    "Address": "Hafnerstraße 4, 4020 Linz, Austria.",
    "Website": "www.gerrad.at/",
    "Name": "GerRad",
    "Latitude": 48.300266,
    "dealer_id":48,
    "Longitude": 14.284316
}, {
    "Address": "Am Hundsturm 1, 1050 Vienna, Austria.",
    "Website": "www.heavypedals.at",
    "Name": "Heavy Pedals",
    "Latitude": 48.187509,
    "dealer_id":49,
    "Longitude": 16.346922
}, {
    "Address": "Place Jourdan - Pedestrian street, Chaussée de Wavre 354, B-1040 Etterbeek, Belgium.",
    "Website": "www.auguidonvert.com",
    "Name": "Au Guidon Vert",
    "Latitude": 50.83657,
    "dealer_id":50,
    "Longitude": 4.380102
}, {
    "Address": "Teofiel Van auwenbergslei 101-103, 2900 Schoten, Belgium.",
    "Website": "www.bakfietsinfo.be",
    "Name": "Bakfiestinfo.be - (Mobo Sevice)",
    "Latitude": 51.249753,
    "dealer_id":51,
    "Longitude": 4.497706
}, {
    "Address": "Sint-Markoenstraat 21a, 9032 Wondelgem, Belgium.",
    "Website": "www.cyclart.be",
    "Name": "CYCLART",
    "Latitude": 51.090315,
    "dealer_id":52,
    "Longitude": 3.715077
}, {
    "Address": "Paternosterstraat 16, 3010 Leuven, Belgium.",
    "Website": "www.fietslab.be",
    "Name": "Het Fietslab",
    "Latitude": 50.884365,
    "dealer_id":53,
    "Longitude": 4.719001
}, {
    "Address": "5165 Notre-Dame Ouest, H4C 1T4 Montreal, QC, Canada.",
    "Website": "www.velolifestyle.com/",
    "Name": "Allo Velo Inc.",
    "Latitude": 45.469669,
    "dealer_id":54,
    "Longitude": -73.592918
}, {
    "Address": "Slagtehusgade 5A, 1715 Copenhagen, Denmark.",
    "Website": "www.butchersandbicycles.com",
    "Name": "Butchers & Bicycles",
    "Latitude": 55.669071,
    "dealer_id":55,
    "Longitude": 12.560568
}, {
    "Address": "21/2 Chaplin Drive, Lane Cove, NEW SOUTH WALES 2066, ph 1300 300 607.",
    "Website": "www.eurocycles.com.au",
    "Name": "Eurocycles",
    "Latitude": -33.810497,
    "dealer_id":56,
    "Longitude": 151.148186
}, {
    "Address": "Shop 5/4 Eberneezer Place, Adelaide, SOUTH AUSTRALIA 5000, ph 08 82320158,",
    "Website": "www.treadlybikeshop.com.au",
    "Name": "Treadly Bike shop",
    "Latitude": -34.922962,
    "dealer_id":57,
    "Longitude": 138.609272
}, {
    "Address": "70 Payneha Rd, Stepney, SOUTH AUSTRALIA 5069, ph 08 8362 2609.",
    "Website": "www.internationalcycles.com.au",
    "Name": "International Cycles",
    "Latitude": -34.911737,
    "dealer_id":58,
    "Longitude": 138.626333
}, {
    "Address": "201 Hyde Street, Yarraville, VICTORIA 3013, ph 03 9687 7042.",
    "Website": "www.psbikes.com.au",
    "Name": "PS Bikes",
    "Latitude": -37.818231,
    "dealer_id":59,
    "Longitude": 144.896725
}, {
    "Address": "Electric Bike Centre, Shop 2, 5 Lamington Street, New Farm, QUEENSLAND 4005, ph 1300 883 413",
    "Website": "www.electricbikecentre.com.au",
    "Name": "Brisbane",
    "Latitude": -27.464345,
    "dealer_id":60,
    "Longitude": 153.049241
}];

var dealerInfoBesideMap = '';
dealerdata.forEach(function(obj) { 
    // console.log(obj.Website);
    dealerInfoBesideMap += "<div class='map_infowindow' style='display:none' id='map-store-"+obj.id+"'>";
    dealerInfoBesideMap += "<div class='map_icon'><img src='mapmarker.png' alt='' /></div>";
    dealerInfoBesideMap += "<h4>COUNTRY</h4>";
    dealerInfoBesideMap += "<h5>"+obj.Name+"</h5>";
    dealerInfoBesideMap += "<h6>"+obj.Address+"</h6>";
    dealerInfoBesideMap += "<a href='#' class='map_link'>"+obj.Website+"</a>";
    dealerInfoBesideMap += "<div class='map_logo'><img src='images/side_logo.png' alt='' /></div></div>";
    }
);

var dealerData = "";
var myLatLng = new Array();

for(i=0;i<dealerData.length;i++){
  myLatLng[i] = {"lat":dealerData[i].Latitude, "lng":dealerData[i].Longitude};
}

// console.log(myLatLng);

// function initMap(){
window.initMap = function(){

    var mapDiv = document.getElementById('map');

    // var myLatLng = {lat: 57.554365, lng: 18.480604};

    var map = new google.maps.Map(mapDiv, {
        center: {lat: 52.605842, lng: 10.222253},
        scrollwheel: true,
        zoom: 4
    });
    var markers = [];
    // var iconBase = 'images';
    var iconBase = '';
    for(i=0 ; i<myLatLng.length; i++){
            var dynamicLatLng = myLatLng[i]
            var marker = new google.maps.Marker({
              position: dynamicLatLng,
              map: map,
              icon: iconBase + 'mapmarker.png'
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
            "featureType": "administrative.locality",
            "elementType": "labels.icon",
            "stylers": [
                {
                    "visibility": "on"
                },
                {
                    "color": "#858585"
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
                },
                // {
                //     "color":"#00264d"
                // }
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