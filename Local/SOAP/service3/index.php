<?php 
	
  	//php
	require 'lib/nusoap.php';
	require 'function.php';
	require 'conf.php';

	$server= new nusoap_server();
	$server->configureWSDL("soap","urn:soap");


	$server->register(
		"volume", //name of function in  file function.php
		$array = array(
		"long" =>"xsd:intger",
		"larg" =>"xsd:intger",
		"hauteur" =>"xsd:intger",
		"type" =>"xsd:intger",), //input
		$array = array('return' =>'xsd:json') //outpout

	);
		$HTTP_RAW_POST_DATA = isset($HTTP_RAW_POST_DATA) ? $HTTP_RAW_POST_DATA : '';
		$server->service($HTTP_RAW_POST_DATA);





 ?>