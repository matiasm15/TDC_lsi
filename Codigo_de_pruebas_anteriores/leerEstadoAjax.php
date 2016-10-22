<?php


  $ip = file_get_contents('php://input');
  $arrayIp = explode(".",$ip);
  $nombreArchivo = implode("", $arrayIp);
  $archivo = $nombreArchivo . ".txt";
  $rutaArchivo = "estados/" . $archivo;
  $res = file_get_contents($rutaArchivo);
  echo $res;

?>