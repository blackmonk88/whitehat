<?php

$valids = array();

// Put the keys to test into arr_server
$arr_server = array();

foreach($arr_server as $data){
	$addr = '33 MONROE ST, ROCKVILLE, MD 20850';
	$api_url = 'https://maps.googleapis.com/maps/api/place/findplacefromtext/xml?input='.urlencode($addr).'&inputtype=textquery&fields=formatted_address,name,geometry&key='.$data;
	$string = file_get_contents($api_url);
	$xml = simplexml_load_string($string);
	$status = $xml->status;
  if($status=='OK'){
		$valids[] = $data;
	}
}

// the correct keys ready
var_dump($valids);
