<?php
 
require 'vendor/autoload.php';
require 'function.php';
require 'conf.php';
$app = new Slim\App();
 
$app->get('/surface/{type}/{long}/{larg}/{hauteur}', function ($request, $response, $args) {
	global $server3;

	//$volume= volume($args['long'],$args['larg'],$args['hauteur'],$args['type']);
	$surface= surface($args['long'],$args['larg'],$args['type']);
	
	
	$server3_url = $server3.'/volume/'.$args['type'].'/'.$args['long'].'/'.$args['larg'].'/'.$args['hauteur'];
 	$json = file_get_contents($server3_url);
	$obj = json_decode($json);
	
	$data = array('volume' => $obj->volume,'surface' => $surface);	
	$response->getBody()->write(json_encode($data));
return $response->withHeader('Content-Type', 'application/json;charset=utf-8');

});
 
$app->run();