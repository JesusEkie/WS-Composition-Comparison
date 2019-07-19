<?php 

	require 'lib/nusoap.php';
	require 'conf.php';

	$client= new nusoap_client($server1."/index.php?wsdl");


	$long=$_GET["long"]; 
	$larg=$_GET["larg"];
	$hauteur=$_GET["hauteur"];

	
	$type = $client->call('check' ,array("long" =>$long,"larg" =>$larg));
	
			  
    
	$server2_url = $server2.'/surface/'.$type.'/'.$long.'/'.$larg.'/'.$hauteur;

    $json = file_get_contents($server2_url);
	$obj = json_decode($json);
	echo "le volume du ".$type." est de : ".$obj->volume;
	echo "<br>";
	echo "la surface du ".$type." est de : ".$obj->surface;

	
 ?>