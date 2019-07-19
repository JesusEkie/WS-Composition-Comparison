<?php
 
require 'vendor/autoload.php';
require 'function.php';
require 'conf.php';
 
$app = new Slim\App();
 
$app->get('/compare/{long}/{larg}/{hauteur}', function ($request, $response, $args) {
	global $server2;
	if($args['long']==$args['larg']) $type= "carre" ;else $type="rectangle";
	$server2_url = $server2.'/surface/'.$type.'/'.$args['long'].'/'.$args['larg'].'/'.$args['hauteur'];
 	$json = file_get_contents($server2_url);
	$obj = json_decode($json);
	echo "le volume du ".$type." est de : ".$obj->volume;
	echo "<br>";
	echo "la surface du ".$type." est de : ".$obj->surface;



});
 
$app->run();