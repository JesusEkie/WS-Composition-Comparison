<?php 

function surface($long,$larg,$type)
{	$s=0;
	if($type=="carre"){
		$s= $long*$long;
	}
	else if ($type=="rectangle"){
		$s= $long*$larg;
		
	}
	return $s;

}


function volume($long,$larg,$hauteur,$type)
{
	$s=0;
	if($type=="carre"){
		$s= $long*$long*$long;
		
	}
	else if ($type=="rectangle"){
		$s= $long*$larg*$hauteur;
		
	}
	return $s;

}


function getvalue($name){
 return $_GET[".$name."];
}
 ?>
