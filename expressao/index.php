<?php
$string = "15/06/2022";
$padrao = "/^[0-9]{2}\/[0-9]{2}\/[0-9]{4}$/";

if(preg_match($padrao,$string)){
	echo "valido!\n";
	echo $string;
	
}else{
	echo "invalido";
}
