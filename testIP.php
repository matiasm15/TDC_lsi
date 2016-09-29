<?php 

	$ip = "192.168.1.101";
	$arrayIp = explode(".",$ip);
	$texto = implode("", $arrayIp);
	$archivo = $texto . ".txt";
	$fp = "estados/" . $archivo;
	echo $fp;

 ?>