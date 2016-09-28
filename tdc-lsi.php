<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TLC-LSI</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

    <style>
    	.margen-medio{
    		margin: 70px 50px 50px 50px;
    	}

    	.margen-grande{
    		margin: 100px 100px 100px 100px;
    	}

    	.encabezado-tabla {
  			background-color: #6699ff;

  			border-style: solid; 
  			border-width: 2px;
		}

    </style>


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
            $res = "Up!"; // Color Verde
        }elseif(!($recibidos4) && !($recibidos0) && !($inaccesible)) {
          //Si hubo perdida parcial de paquetes, entra aca
          $res = "Unknown!"; // Color Amarillo
        }else{
          //Si hubo perdida total de paquetes / el host es inaccesible, entra aca
            $res = "Down!"; // Color Rojo
        };

         return $res;
      };
  ?>


  <?php

    function fecha(){
      $time = time();
      echo date("d-m-Y (H:i:s)", $time);
    };

?>

</head>
<body>
	<div class="container-fluid " style="border-style: solid; border-width: 5px; ">
		

		<h1 class="text-center margen-medio">Tablero de Control - LSI</h1>

		<div class="table-responsive margen-grande">
			<table class="table table-striped table-hover table-bordered">
  				<thead> 
  					<tr class="encabezado-tabla">
  						<th class="text-center col-xs-3">Dispositivo</th>
  						<th class="text-center col-xs-3">Direccion IP</th>
  						<th class="text-center col-xs-3">Estado</th>
  						<th class="text-center col-xs-3">Ultima Actualizacion</th>
  					</tr>
  				</thead>
  				<tbody>
  					<tr>
  						<th class="text-center col-xs-3">ROUTER-LSI</th>
  						<td class="text-center col-xs-3">192.168.1.20</td>
  						<td class="text-center col-xs-3"><strong>  <?php echo estado("192.168.1.20"); ?>  </strong></td>
  						<td class="text-center col-xs-3"><?php fecha(); ?></td>
  					</tr>

  					<tr>
  						<th class="text-center col-xs-3">ROUTER-REDES</th>
  						<td class="text-center col-xs-3">192.168.1.21</td>
  						<td class="text-center col-xs-3"><strong>  <?php echo estado("192.168.1.21"); ?>  </strong></td>
  						<td class="text-center col-xs-3"><?php fecha(); ?></td>
  					</tr>

  					<tr>
  						<th class="text-center col-xs-3">ROUTER-4TO</th>
  						<td class="text-center col-xs-3">192.168.1.22</td>
  						<td class="text-center col-xs-3"><strong>  <?php echo estado("192.168.1.22"); ?>  </strong></td>
  						<td class="text-center col-xs-3"><?php fecha(); ?></td>
  					</tr>

  					  <tr>
  						<th class="text-center col-xs-3">ROUTER-1RO-2DO</th>
  						<td class="text-center col-xs-3">192.168.1.23</td>
  						<td class="text-center col-xs-3"><strong>  <?php echo estado("192.168.1.23"); ?>  </strong></td>
  						<td class="text-center col-xs-3"><?php fecha(); ?></td>
  					</tr>

  					 <tr>
  						<th class="text-center col-xs-3">ROUTER-PEDRO</th>
  						<td class="text-center col-xs-3">192.168.1.24</td>
  						<td class="text-center col-xs-3"><strong>  <?php echo estado("192.168.1.24"); ?>  </strong></td>
  						<td class="text-center col-xs-3"><?php fecha(); ?></td>
  					</tr>

  					  <tr>
  						<th class="text-center col-xs-3">ROUTER-LSI2</th>
  						<td class="text-center col-xs-3">192.168.1.25</td>
  						<td class="text-center col-xs-3"><strong>  <?php echo estado("192.168.1.25"); ?>  </strong></td>
  						<td class="text-center col-xs-3"><?php fecha(); ?></td>
  					</tr>

  					  <tr>
  						<th class="text-center col-xs-3">SrvLsi-01</th>
  						<td class="text-center col-xs-3">192.168.1.35</td>
  						<td class="text-center col-xs-3"><strong>  <?php echo estado("192.168.1.35"); ?>  </strong></td>
  						<td class="text-center col-xs-3"><?php fecha(); ?></td>
  					</tr>

   					<tr>
  						<th class="text-center col-xs-3">SrvLsi-02</th>
  						<td class="text-center col-xs-3">192.168.1.45</td>
  						<td class="text-center col-xs-3"><strong>  <?php echo estado("192.168.1.45"); ?>  </strong></td>
  						<td class="text-center col-xs-3"><?php fecha(); ?></td>
  					</tr>

   					<tr>
  						<th class="text-center col-xs-3">PrefecturaVM</th>
  						<td class="text-center col-xs-3">192.168.1.55</td>
  						<td class="text-center col-xs-3"><strong>  <?php echo estado("192.168.1.55"); ?>  </strong></td>
  						<td class="text-center col-xs-3"><?php fecha(); ?></td>
  					</tr>

   					<tr>
  						<th class="text-center col-xs-3">SrvRedes</th>
  						<td class="text-center col-xs-3">192.168.1.72</td>
  						<td class="text-center col-xs-3"><strong>  <?php echo estado("192.168.1.72"); ?>  </strong></td>
  						<td class="text-center col-xs-3"><?php fecha(); ?></td>
  					</tr> 

            <tr>
              <th class="text-center col-xs-3">miCompu</th>
              <td class="text-center col-xs-3">192.168.10.100</td>
              <td class="text-center col-xs-3"><strong>  <?php echo estado("192.168.10.100"); ?>  </strong></td>
              <td class="text-center col-xs-3"><?php fecha(); ?></td>
            </tr> 

            <tr>
              <th class="text-center col-xs-3">otraCompu</th>
              <td class="text-center col-xs-3">192.168.10.111</td>
              <td class="text-center col-xs-3"><strong>  <?php echo estado("192.168.10.111"); ?>  </strong></td>
              <td class="text-center col-xs-3"><?php fecha(); ?></td>
            </tr>  

  				</tbody>
			</table>
		</div>


	</div>
	<script src="js/jquery-1.11.3.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>