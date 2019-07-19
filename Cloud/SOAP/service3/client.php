<?php 

	require 'lib/nusoap.php';
	require 'function.php';
	require 'conf.php';

	$client= new nusoap_client($server3."/index.php?wsdl");

    global $server3;

	
	
	$long=$_GET["long"];
	$larg=$_GET["larg"];
	$hauteur=$_GET["hauteur"];
	$type=$_GET["type"];

	 $volume = $client->call('volume' ,
		array("long" =>$long,
			  "larg" =>$larg,
			  "hauteur" =>$hauteur,
		      "type" =>"$type"));
	//var_dump($volume);
	 $data = array('volume' => $volume);	
	//var_dump($data);
	header('Content-Type: application/json');
	echo json_encode($data);
 ?>