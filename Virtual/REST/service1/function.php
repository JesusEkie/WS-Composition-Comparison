<?php 

function perim($long,$larg)
{
   $p=2*($larg + $long);
   return $p;

}


function check($long,$larg){
	//true pour carre - false pour rectangle
	if($long==$larg) return true ;else false;
}

 ?>