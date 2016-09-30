<?php 


    function fecha(){
      $time = time();
      return date("d-m-Y (H:i:s)", $time);
    };


	$ip = "192.168.1.101";
	$arrayIp = explode(".",$ip);
	$texto = implode("", $arrayIp);
	$archivo = $texto . ".txt";
	$fp = "estados/" . $archivo;
	echo $fp;

	echo "<br>";
    //{"firstName":"John", "lastName":"Doe"}
    $res = "Up";
    $fecha = fecha();
    $textoJSON = "{".json_encode("estado").":".json_encode($res).",".json_encode("date").":".json_encode($fecha)."}";
    echo $textoJSON;


 ?>


