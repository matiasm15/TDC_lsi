<?php 

	 function fecha(){
    	  $time = time();
      	  return date("d-m-Y (H:i:s)", $time);
     };

 ?>


<?php

	 $rutaArchivo = "hostsList.conf";
	 $fp = fopen($rutaArchivo,"r");


	 $preJSON = array();

	 while (!feof($fp)) {
	 	$row = fgets($fp);
	 	$row_array = explode(",",$row);

	 	if (sizeof($row_array) == 2) {

	 		$ip = $row_array[0];
	 		$comando = "ping -c 1 " . $ip . " > /dev/null ; echo $?";
	 		set_time_limit(30); //resetea el tiempo de ejecutcion de el script cada vez que se ejecuta esta funcion
        	$errorCode_ping = shell_exec($comando);
        	
        	if ($errorCode_ping != null && $errorCode_ping == 0) {
        		$host_state = '<img src="verde.png">';
        	} else {
        		$host_state = '<img src="rojo.png">';
        	}


	 		$host_name = $row_array[1];
	 		$host_name = str_replace("\r" , "" , $host_name);
	 		$host_name = str_replace("\n" , "" , $host_name);
	 		
	 		
	 		$miArray = array("ip"=>$ip,"host_name"=> $host_name, "host_state"=> $host_state,"host_date"=> fecha());
	 		
	 		$preJSON[] = $miArray;
	 	}
	 }

	 $json = json_encode($preJSON);
	 $textoJSON = '{"hosts":' . $json . "}";
	 fclose($fp);



	 $rutaArchivo = "hostsList.json";
	 $fp = fopen($rutaArchivo,"w");
     fwrite($fp,$textoJSON);
     fclose($fp);
     return 0;

 ?>