<?php

    function estado($ip)
      {
      	$aux = "ping ";
      	$comando = $aux . $ip;

        $ping = shell_exec($comando);

        $recibidos4 = strpos($ping, "recibidos = 4");
        $recibidos0 = strpos($ping, "recibidos = 0");
        $inaccesible = strpos($ping, "Host de destino inaccesible");

        if ($recibidos4 && !($inaccesible)) {
        	//Entra aca si se reciben los 4 paquetes, 
        	//y ninguno de los paquetes es respuesta del gateway con la leyenda "Host de destino inaccesible"
            $res = "Up!"; // Color Verde
        }elseif(!($recibidos4) && !($recibidos0)) {
        	//Si hubo perdida parcial de paquetes, entra aca
        	$res = "Unknown!"; // Color Amarillo
        }else{
        	//Si hubo perdida total de paquetes / el host es inaccesible, entra aca
            $res = "Down!"; // Color Rojo
        };

         return $res;
      };y


    function fecha(){
      $time = time();
      echo date("d-m-Y (H:i:s)", $time);
    };


fecha();

$ip1 = "192.168.10.111";
$ip2 = "192.168.10.100";

echo estado($ip1);
echo estado($ip2);

echo estado("");

?>

<?php echo estado(""); ?>
<?php fecha(); ?>


  <?php

    function estado($ip)
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
          $res = "Unknown"; // Color Amarillo
        }else{
          //Si hubo perdida total de paquetes / el host es inaccesible, entra aca
            $res = "Down"; // Color Rojo
        };

         return $res;
      };
  ?>



  
<?php 

function leerEstado($ip)
  {
    $arrayIp = explode(".",$ip);
    $nombreArchivo = implode("", $arrayIp);
    $archivo = $nombreArchivo . ".txt";
    $rutaArchivo = "estados/" . $archivo;
    $texto = file_get_contents($rutaArchivo);
    return $texto;
  }

 ?>


  <?php

    function fecha(){
      $time = time();
      echo date("d-m-Y (H:i:s)", $time);
    };

?>