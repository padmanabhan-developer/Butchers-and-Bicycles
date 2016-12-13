<?php

$dealers_information_from_file = file_get_contents("js/dealer.json");
$dealers_worldwide = json_decode($dealers_information_from_file, TRUE);

function getDealerInfo($id = ''){
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