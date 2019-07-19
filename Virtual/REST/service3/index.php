<?php
 
require 'vendor/autoload.php';
require 'function.php';
require 'conf.php';
 
$app = new Slim\App();
 
$app->get('/volume/{type}/{long}/{larg}/{hauteur}', function ($request, $response, $args) {
	
	$volume= volume($args['long'],$args['larg'],$args['hauteur'],$args['type']);
	//$surface= surface($args['long'],$args['larg'],$args['type']);
	
	$data = array('volume' => $volume);	
	$response->getBody()->write(json_encode($data));
return $response->withHeader('Content-Type', 'application/json;charset=utf-8');

});
 
$app->run();