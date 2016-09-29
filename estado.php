<?php
  $ip = file_get_contents('php://input');
  $aux = "ping ";
  $comando = $aux . $ip;

  //set_time_limit(30); //resetea el tiempo de ejecutcion de el script cada vez que se ejecuta esta funcion
  $ping = shell_exec($comando);

  $recibidos4 = strpos($ping, "recibidos = 4");
  $recibidos0 = strpos($ping, "recibidos = 0");
  $inaccesible= strpos($ping, "Host de destino inaccesible");

  if ($recibidos4 && !($inaccesible)) {
    //Entra aca si se reciben los 4 paquetes, 
    //y ninguno de los paquetes es respuesta del gateway con la leyenda "Host de destino inaccesible"
      $res = "Up!"; // Color Verde
  }elseif(!($recibidos4) && !($recibidos0) && !($inaccesible)) {
    //Si hubo perdida parcial de paquetes, entra aca
    $res = "Unknown!"; // Color Amarillo
  }else{
    //Si hubo perdida total de paquetes / el host es inaccesible, entra aca
      $res = "Down!"; // Color Rojo
  };

  echo $res;
?>