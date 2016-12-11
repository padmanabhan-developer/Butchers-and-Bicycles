<?php

class dealerData{
	public function getDealerInfo($id){
		$dealerInfo = array();
		if(isset($id) && $id!=''){
			$dealerInfo = array(
				'name'=>$this->dealers_worldwide[$id]['name'],
				'address'=>$this->dealers_worldwide[$id]['address'],
				'latitude'=>$this->dealers_worldwide[$id]['latitude'],
				'longitude'=>$this->dealers_worldwide[$id]['longitude'],
				'website'=>$this->dealers_worldwide[$id]['website'],
			);			
		}
		elseif(!isset($id) || $id==''){
			foreach($this->dealers_worldwide as $dealer){
				$dealerInfo = array(
					'name'=>$dealer['name'],
					'address'=>$dealer['address'],
					'latitude'=>$dealer['latitude'],
					'longitude'=>$dealer['longitude'],
					'website'=>$dealer['website'],
				);
			}
		}

		return $dealerInfo;
	}

	private $dealers_worldwide = array(
	  0 => 
	   array(
	     "address" => "Globe House, 37 Bermondsey Street, SE1 3JW London, England, Ben Jaconelli",
	     "website" => "www.fullycharged.com",
	     "name" => "Fully Charged",
	     "latitude" => 51.502451000000001,
	     "longitude" => -0.082463999999999996,
	  ),
	  1 => 
	   array(
	     "address" => "Puolikuu 1b26, 02210 Espoo, Finland",
	     "website" => "www.tavarapyora-asiantuntija.fi",
	     "name" => "Kultaiset Pojat Oy",
	     "latitude" => 60.176893999999997,
	     "longitude" => 24.724853,
	  ),
	  2 => 
	   array(
	     "address" => "74 rue Salomon Reinach, 69007 Lyon, France",
	     "website" => "www.lyoncyclechic.fr/",
	     "name" => "Lyon Cycle Chic",
	     "latitude" => 45.730424999999997,
	     "longitude" => 4.8399380000000001,
	  ),
	  3 => 
	   array(
	     "address" => "47 avenue de Versailles, 75016 PARIS, France",
	     "website" => "www.les-cyclistes-branches.com",
	     "name" => "Les Cyclistes Branches",
	     "latitude" => 48.848427999999998,
	     "longitude" => 2.2750970000000001,
	  ),
	  4 => 
	   array(
	     "address" => "4 route d'Ingersheim, 68000 Colmar, France",
	     "website" => "www.lulucycles.com",
	     "name" => "LULU CYCLES",
	     "latitude" => 48.081864000000003,
	     "longitude" => 7.3529210000000003,
	  ),
	  5 => 
	   array(
	     "address" => "70Boulevard Montaigne, 29200, Brest, France, Att. Etienne Boquien",
	     "website" => "http://hobbycycles.com/",
	     "name" => "Hobby Cycles",
	     "latitude" => 48.404119999999999,
	     "longitude" => -4.4806090000000003,
	  ),
	  6 => 
	   array(
	     "address" => "Gallusanlage 7, 60329 Frankfurt Am Main, Germany",
	     "website" => "www.bikeboutique.bike",
	     "name" => "Bike Boutique",
	     "latitude" => 50.109670000000001,
	     "longitude" => 8.6708400000000001,
	  ),
	  7 => 
	   array(
	     "address" => "Langenbrücker Strasse 12, 23909 Ratzeburg, Germany",
	     "website" => "www.koech2rad.de",
	     "name" => "Koech2rad",
	     "latitude" => 53.698962999999999,
	     "longitude" => 10.77106,
	  ),
	  8 => 
	   array(
	     "address" => "Louisenstraße 19, 01099 Dresden, Germany",
	     "website" => "www.meissner-raeder.de",
	     "name" => "MEIßNER RAEDER",
	     "latitude" => 51.067520000000002,
	     "longitude" => 13.749980000000001,
	  ),
	  9 => 
	   array(
	     "address" => "“The Station”, Grindelberg 62, , 20144 Hamburg, Germany",
	     "website" => "www.twowheelsgood.org",
	     "name" => "Two Wheels Good",
	     "latitude" => 53.574750000000002,
	     "longitude" => 9.9779,
	  ),
	  10 => 
	   array(
	     "address" => "Hofholzallee 223, 24109 Kiel, Germany.",
	     "website" => "www.rueckenwind-kiel.de/",
	     "name" => "Fahrradladen Rückenwind",
	     "latitude" => 54.316690000000001,
	     "longitude" => 10.066689999999999,
	  ),
	  11 => 
	   array(
	     "address" => "Lippestrasse 13, 46282 Dorsten, Germany.",
	     "website" => "www.puntavelo.de",
	     "name" => "Punta Velo GmbH",
	     "latitude" => 51.661754999999999,
	     "longitude" => 6.9632569999999996,
	  ),
	  12 => 
	   array(
	     "address" => "Design & E-Mobility GmbH, Kastanienallee 64, 10119 Berlin, Germany.",
	     "website" => "www.wingwheels.de",
	     "name" => "WingWheels",
	     "latitude" => 52.534610000000001,
	     "longitude" => 13.406090000000001,
	  ),
	  13 => 
	   array(
	     "address" => "innovative Elektrofahrzeuge, Vahrenwalder Straße 50, 30165 Hannover.",
	     "website" => "www.obc-hannover.com",
	     "name" => "OrangeBikeConcept - Hannover",
	     "latitude" => 52.390000000000001,
	     "longitude" => 9.7349999999999994,
	  ),
	  14 => 
	   array(
	     "address" => "Konsul-Smidt-Str. 26, 28217 Bremen, Germany.",
	     "website" => "www.greenmobility-nord.de",
	     "name" => "Greenmobility Nord",
	     "latitude" => 53.091524,
	     "longitude" => 8.7909410000000001,
	  ),
	  15 => 
	   array(
	     "address" => "Kolbstraße 21, 70180 Stuttgart, Germany.",
	     "website" => "www.hyggelig-bikes.de",
	     "name" => "Hyggelig Bikes",
	     "latitude" => 48.76473,
	     "longitude" => 9.1710499999999993,
	  ),
	  16 => 
	   array(
	     "address" => "Schleißheimer Straße 106, 80797 München, Germany.",
	     "website" => "www.velocompany.de",
	     "name" => "Velo Company",
	     "latitude" => 48.156959999999998,
	     "longitude" => 11.562469999999999,
	  ),
	  17 => 
	   array(
	     "address" => "12a Magennis Place, Pearse Street, Dublin 2, Ireland.",
	     "website" => "www.greenaer.ie",
	     "name" => "Greenaer",
	     "latitude" => 53.343927000000001,
	     "longitude" => -6.2482470000000001,
	  ),
	  18 => 
	   array(
	     "address" => "Edisonstraat 6, 7903 An Hogeveen, The Netherlands.",
	     "website" => "www.skootz.nl",
	     "name" => "Skootz",
	     "latitude" => 52.737727,
	     "longitude" => 6.4943879999999998,
	  ),
	  19 => 
	   array(
	     "address" => "Uiterwaardenstraat 171, 1079 Amsterdam, Holland.",
	     "website" => "www.drbeyk.nl",
	     "name" => "DrBeyk",
	     "latitude" => 52.342728999999999,
	     "longitude" => 4.9015690000000003,
	  ),
	  20 => 
	   array(
	     "address" => "Laan van Nieuw Oost-indië 108, 2593 BZ - Den haag, The Netherlands.",
	     "website" => "www.juizz.nl",
	     "name" => "JUIZZ - Den Haag",
	     "latitude" => 52.085343000000002,
	     "longitude" => 4.3384320000000001,
	  ),
	  21 => 
	   array(
	     "address" => "Overtoom 201-203, 1054 HT - Amsterdam, The Netherlands.",
	     "website" => "www.juizz.nl",
	     "name" => "JUIZZ - Amsterdam",
	     "latitude" => 52.361294000000001,
	     "longitude" => 4.8704349999999996,
	  ),
	  22 => 
	   array(
	     "address" => "Biltstraat 94-96, 3572 BH - Utrecht, The Netherlands.",
	     "website" => "www.juizz.nl",
	     "name" => "JUIZZ - Utrecht",
	     "latitude" => 52.095455999999999,
	     "longitude" => 5.130973,
	  ),
	  23 => 
	   array(
	     "address" => "Mariniersweg 38, 3011 NP - Rotterdam, The Netherlands.",
	     "website" => "www.juizz.nl",
	     "name" => "JUIZZ - Rotterdam",
	     "latitude" => 51.923316,
	     "longitude" => 4.489719,
	  ),
	  24 => 
	   array(
	     "address" => "Leusderweg 21, 3811 NK Amersfoort, The Netherlands.",
	     "website" => "www.fietsboetiek.nu/",
	     "name" => "Vive le velo",
	     "latitude" => 52.149591000000001,
	     "longitude" => 5.3840620000000001,
	  ),
	  25 => 
	   array(
	     "address" => "53 b Davis Crescent, 1023 Newmarket, New Zealand.",
	     "website" => "bikesandbarbers.co.nz ",
	     "name" => "Bikes and Barbers",
	     "latitude" => -36.867220000000003,
	     "longitude" => 174.777569,
	  ),
	  26 => 
	   array(
	     "address" => "124 ocean view road, 1081 waiheke island, New Zealand.",
	     "website" => "www.ecyclesnz.com",
	     "name" => "Onya bikes Waiheke",
	     "latitude" => -36.782519000000001,
	     "longitude" => 175.00957,
	  ),
	  27 => 
	   array(
	     "address" => "61 queen street, Blenheim, New Zealand.",
	     "website" => "www.avantiplus.co.nz",
	     "name" => "Avanti+ ",
	     "latitude" => -41.513947000000002,
	     "longitude" => 173.955851,
	  ),
	  28 => 
	   array(
	     "address" => "Henrik Wergelands gate 9, 4612 Kristiansand, Norge.",
	     "website" => "http://www.gnordby.no/",
	     "name" => "EVO / G.  Nordby",
	     "latitude" => 58.146450999999999,
	     "longitude" => 7.9902150000000001,
	  ),
	  29 => 
	   array(
	     "address" => "Verkstedv. 1, 0277 Oslo, Norge.",
	     "website" => "www.evo-konsept.no",
	     "name" => "EVO Elsykler Skøyen",
	     "latitude" => 59.916798,
	     "longitude" => 10.664616000000001,
	  ),
	  30 => 
	   array(
	     "address" => "Randabergveien 372, 4070 Randaberg, Norge.",
	     "website" => "www.sykkelcenteret.no",
	     "name" => "EVO / Sykkelcenteret",
	     "latitude" => 58.999259000000002,
	     "longitude" => 5.6190850000000001,
	  ),
	  31 => 
	   array(
	     "address" => "Innelvegen 2, 9107 KVALØYA, Norge.",
	     "website" => "www.evo-konsept.no",
	     "name" => "EVO Elsykler Tromsø",
	     "latitude" => 69.623555999999994,
	     "longitude" => 18.518260000000001,
	  ),
	  32 => 
	   array(
	     "address" => "Storgata 18, 1670 Fredrikstad, Norge.",
	     "website" => "www.evo-konsept.no",
	     "name" => "Gaarder Sykkelsport",
	     "latitude" => 59.220537,
	     "longitude" => 10.934701,
	  ),
	  33 => 
	   array(
	     "address" => "Blødekjær 26, 4838 Arendal, Norge.",
	     "website" => "www.evo-konsept.no",
	     "name" => "Sykkelsport AS",
	     "latitude" => 58.465828999999999,
	     "longitude" => 8.760764,
	  ),
	  34 => 
	   array(
	     "address" => "ul. Klimczaka 22D/3, 02-797 Warszawa, Poland.",
	     "website" => "www.waterfall.pl",
	     "name" => "Waterfall",
	     "latitude" => 52.129871000000001,
	     "longitude" => 21.078330999999999,
	  ),
	  35 => 
	   array(
	     "address" => "133 Granton Road, EH5 3NJ Edinburgh, Scotland.",
	     "website" => "www.electriccyclecompany.com/",
	     "name" => "Electriccycle Company",
	     "latitude" => 55.976137999999999,
	     "longitude" => 3.2157439999999999,
	  ),
	  36 => 
	   array(
	     "address" => "Valencia 33 , Pol. Ind. Son Bugadelles , Mallorca , 07180 Santa Ponsa, Spain.",
	     "website" => "www.yeswebike.es",
	     "name" => "Yes We Bike",
	     "latitude" => 39.502944999999997,
	     "longitude" => 2.4715419999999999,
	  ),
	  37 => 
	   array(
	     "address" => "Stangavagen 10, 12844 Bagarmossen, Sweden.",
	     "website" => "www.ladcyklar.se",
	     "name" => "Ekern & Gamla Enskede Ladcyklar",
	     "latitude" => 59.274388000000002,
	     "longitude" => 18.133849000000001,
	  ),
	  38 => 
	   array(
	     "address" => "Seminariegatan 2, 413 13 Göteborg, Sweden.",
	     "website" => "www.elcykelbutiken.se",
	     "name" => "ELCYKELBUTIKEN I GÖTEBORG",
	     "latitude" => 57.691929999999999,
	     "longitude" => 11.956239999999999,
	  ),
	  39 => 
	   array(
	     "address" => "Solbackevägen 1 , 611 36 Nyköping , Sverige.",
	     "website" => "www.velobloom.com",
	     "name" => "Velobloom",
	     "latitude" => 58.756695000000001,
	     "longitude" => 17.020444000000001,
	  ),
	  40 => 
	   array(
	     "address" => "Kasernenstrasse 32, 4058 Basel, Switzerland.",
	     "website" => "www.obstundgemuese.org",
	     "name" => "OBST & GEMÜSE jam GmbH",
	     "latitude" => 47.562772000000002,
	     "longitude" => 7.5915879999999998,
	  ),
	  41 => 
	   array(
	     "address" => "Luzernerstrasse 4, 6010 Kriens, Switzerland.",
	     "website" => "www.velociped.ch",
	     "name" => "Velociped",
	     "latitude" => 47.033650999999999,
	     "longitude" => 8.2781009999999995,
	  ),
	  42 => 
	   array(
	     "address" => "Avenue de Grandson 48, 1400 Yverdon-les-Bains, Switzerland.",
	     "website" => "www.vo-cycles.ch",
	     "name" => "Version Originale Cycles Sàrl",
	     "latitude" => 46.788094000000001,
	     "longitude" => 6.6309680000000002,
	  ),
	  43 => 
	   array(
	     "address" => "407 SE Ivon St., 97202 Portland, OR, USA, Joel Grover.",
	     "website" => "www.splendidcycles.com",
	     "name" => "Splendid Cycles",
	     "latitude" => 45.504333000000003,
	     "longitude" => -122.66168,
	  ),
	  44 => 
	   array(
	     "address" => "72 Maple St, 12508 Beacon, NY, USA.",
	     "website" => "http://www.peoplesbicycle.com/",
	     "name" => "Peoples Bicycle",
	     "latitude" => 41.508738999999998,
	     "longitude" => -73.965450000000004,
	  ),
	  45 => 
	   array(
	     "address" => "917 Bryant Street, CA 94103 San Francisco, USA.",
	     "website" => "www.viebikes.com",
	     "name" => "Vie Bikes",
	     "latitude" => 37.773798999999997,
	     "longitude" => -122.40493499999999,
	  ),
	  46 => 
	   array(
	     "address" => "Bahnhofstrasse 17, 9020 Klagenfurt, Austria.",
	     "website" => "www.mountainbiker.at",
	     "name" => "Mountainbiker Klagenfurt",
	     "latitude" => 46.623626999999999,
	     "longitude" => 14.310748999999999,
	  ),
	  47 => 
	   array(
	     "address" => "Hafnerstraße 4, 4020 Linz, Austria.",
	     "website" => "www.gerrad.at/",
	     "name" => "GerRad",
	     "latitude" => 48.300266000000001,
	     "longitude" => 14.284316,
	  ),
	  48 => 
	   array(
	     "address" => "Am Hundsturm 1, 1050 Vienna, Austria.",
	     "website" => "www.heavypedals.at",
	     "name" => "Heavy Pedals",
	     "latitude" => 48.187508999999999,
	     "longitude" => 16.346921999999999,
	  ),
	  49 => 
	   array(
	     "address" => "Place Jourdan - Pedestrian street, Chaussée de Wavre 354, B-1040 Etterbeek, Belgium.",
	     "website" => "www.auguidonvert.com",
	     "name" => "Au Guidon Vert",
	     "latitude" => 50.836570000000002,
	     "longitude" => 4.3801019999999999,
	  ),
	  50 => 
	   array(
	     "address" => "Teofiel Van auwenbergslei 101-103, 2900 Schoten, Belgium.",
	     "website" => "www.bakfietsinfo.be",
	     "name" => "Bakfiestinfo.be - (Mobo Sevice)",
	     "latitude" => 51.249752999999998,
	     "longitude" => 4.497706,
	  ),
	  51 => 
	   array(
	     "address" => "Sint-Markoenstraat 21a, 9032 Wondelgem, Belgium.",
	     "website" => "www.cyclart.be",
	     "name" => "CYCLART",
	     "latitude" => 51.090314999999997,
	     "longitude" => 3.715077,
	  ),
	  52 => 
	   array(
	     "address" => "Paternosterstraat 16, 3010 Leuven, Belgium.",
	     "website" => "www.fietslab.be",
	     "name" => "Het Fietslab",
	     "latitude" => 50.884365000000003,
	     "longitude" => 4.7190009999999996,
	  ),
	  53 => 
	   array(
	     "address" => "5165 Notre-Dame Ouest, H4C 1T4 Montreal, QC, Canada.",
	     "website" => "www.velolifestyle.com/",
	     "name" => "Allo Velo Inc.",
	     "latitude" => 45.469669000000003,
	     "longitude" => -73.592917999999997,
	  ),
	  54 => 
	   array(
	     "address" => "Slagtehusgade 5A, 1715 Copenhagen, Denmark.",
	     "website" => "www.butchersandbicycles.com",
	     "name" => "Butchers & Bicycles",
	     "latitude" => 55.669071000000002,
	     "longitude" => 12.560568,
	  ),
	  55 => 
	   array(
	     "address" => "21/2 Chaplin Drive, Lane Cove, NEW SOUTH WALES 2066, ph 1300 300 607.",
	     "website" => "www.eurocycles.com.au",
	     "name" => "Eurocycles",
	     "latitude" => -33.810496999999998,
	     "longitude" => 151.14818600000001,
	  ),
	  56 => 
	   array(
	     "address" => "Shop 5/4 Eberneezer Place, Adelaide, SOUTH AUSTRALIA 5000, ph 08 82320158,",
	     "website" => "www.treadlybikeshop.com.au",
	     "name" => "Treadly Bike shop",
	     "latitude" => -34.922961999999998,
	     "longitude" => 138.609272,
	  ),
	  57 => 
	   array(
	     "address" => "70 Payneha Rd, Stepney, SOUTH AUSTRALIA 5069, ph 08 8362 2609.",
	     "website" => "www.internationalcycles.com.au",
	     "name" => "International Cycles",
	     "latitude" => -34.911737000000002,
	     "longitude" => 138.62633299999999,
	  ),
	  58 => 
	   array(
	     "address" => "201 Hyde Street, Yarraville, VICTORIA 3013, ph 03 9687 7042.",
	     "website" => "www.psbikes.com.au",
	     "name" => "PS Bikes",
	     "latitude" => -37.818230999999997,
	     "longitude" => 144.896725,
	  ),
	  59 => 
	   array(
	     "address" => "Electric Bike Centre, Shop 2, 5 Lamington Street, New Farm, QUEENSLAND 4005, ph 1300 883 413",
	     "website" => "www.electricbikecentre.com.au",
	     "name" => "Brisbane",
	     "latitude" => -27.464345000000002,
	     "longitude" => 153.04924099999999,
	  ),
	);

}