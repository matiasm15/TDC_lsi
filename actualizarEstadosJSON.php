<?php 

 function fecha(){
      $time = time();
      return date("d-m-Y (H:i:s)", $time);
    };


 function actualizarEstado($ip)
      {
        $aux = "ping ";
        $comando = $aux . $ip;

        set_time_limit(30); //resetea el tiempo de ejecutcion de el script cada vez que se ejecuta esta funcion
        $ping = shell_exec($comando);

        $recibidos4 = strpos($ping, "recibidos = 4");
        $recibidos0 = strpos($ping, "recibidos = 0");
        $inaccesible= strpos($ping, "Host de destino inaccesible");


        if ($recibidos4 && !($inaccesible)) {
          //Entra aca si se reciben los 4 paquetes, 
          //y ninguno de los paquetes es respuesta del gateway con la leyenda "Host de destino inaccesible"
          $res = "Up"; // Color Verde
        }elseif(!($recibidos4) && !($recibidos0) && !($inaccesible)) {
          //Si hubo perdida parcial de paquetes, entra aca
          $recibidos = strpos($ping, "recibidos =");
          $recibidosNumero = $ping[$recibidos + 12];
          $res = "Up (". $recibidosNumero . "/4)"; // Color Amarillo
        }else{
          //Si hubo perdida total de paquetes / el host es inaccesible, entra aca
          $res = "Down"; // Color Rojo
        };


        $fecha = fecha();
    	$textoJSON = "{".json_encode("estado").":".json_encode($res).",".json_encode("date").":".json_encode($fecha)."}";

        $arrayIp = explode(".",$ip);
  	  	$nombreArchivo = implode("", $arrayIp);
  	  	$archivo = $nombreArchivo . ".txt";
    	//$rutaArchivo = "estados/" . $archivo;
    	$rutaArchivo = "C:/xampp/htdocs/TDC_lsi/estados/" . $archivo;


        $fp = fopen($rutaArchivo,"w");
        fwrite($fp,$textoJSON);
        fclose($fp);
        return 0;
      };
 


 	$IP0 = "192.168.1.20";
	$IP1 = "192.168.1.21";
	$IP2 = "192.168.1.22";
 	$IP3 = "192.168.1.23";
	$IP4 = "192.168.1.24";
	$IP5 = "192.168.1.25";
	$IP6 = "192.168.1.35";
	$IP7 = "192.168.1.45";
	$IP8 = "192.168.1.55";
	$IP9 = "192.168.1.72";


	actualizarEstado($IP0);
	actualizarEstado($IP1);
	actualizarEstado($IP2);
	actualizarEstado($IP3);
	actualizarEstado($IP4);
	actualizarEstado($IP5);
	actualizarEstado($IP6);
	actualizarEstado($IP7);
	actualizarEstado($IP8);
	actualizarEstado($IP9);


 ?>