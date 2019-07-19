<?php 

	require 'lib/nusoap.php';
	require 'function.php';
	require 'conf.php';

	$client= new nusoap_client($server2."/index.php?wsdl");

    global $server3;

	
	
	$long=$_GET["long"];
	$larg=$_GET["larg"];
	$hauteur=$_GET["hauteur"];
	
	$type=$_GET["type"];


	 $surface = $client->call('surface' ,
		array("long" =>$long,
			  "larg" =>$larg,
		      "type" =>$type));
	
	 $server3_url = $server3.'/volume/'.$type.'/'.$long.'/'.$larg.'/'.$hauteur;

    $json = file_get_contents($server3_url);
	$obj = json_decode($json);
	
	$data = array('volume' => $obj->volume,'surface' => $surface);	
	
	
	header('Content-Type: application/json');
	echo json_encode($data);
 ?>