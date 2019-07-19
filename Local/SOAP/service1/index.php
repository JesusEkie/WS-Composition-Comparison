<?php 
	
  	//php

	require 'lib/nusoap.php';
	require 'function.php';
	

	$server= new nusoap_server();
	$server->configureWSDL("soap","urn:soap");
	

	
	$server->register(
		"check", //name of function in  file function.php
		$array = array("long" =>"xsd:string","larg" =>"xsd:string"), //input
		$array = array('return' =>'xsd:intger') //outpout

	);
	
	$server->register(
		"perim", //name of function in  file function.php
		$array = array("long" =>"xsd:string","larg" =>"xsd:string"), //input
		$array = array('return' =>'xsd:string') //outpout

	);
	
	
		$HTTP_RAW_POST_DATA = isset($HTTP_RAW_POST_DATA) ? $HTTP_RAW_POST_DATA : '';
		$server->service($HTTP_RAW_POST_DATA);





 ?>