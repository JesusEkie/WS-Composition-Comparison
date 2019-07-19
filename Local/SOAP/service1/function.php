<?php 

function perim($long,$larg)
{
   $p=2*($larg + $long);
   return $p;

}


function check($long,$larg){
	 $type="";
	//true pour carre - false pour rectangle
	if($long==$larg) $type= "carre" ;else $type="rectangle";
	
	return $type;
}



 ?>
