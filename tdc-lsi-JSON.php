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
  						<td id="ip0" class="text-center col-xs-3">192.168.1.20</td>
  						<td id="estado0" class="text-center col-xs-3"></td>
  						<td id="fecha0"  class="text-center col-xs-3"></td>
  					</tr>

  					<tr>
  						<th class="text-center col-xs-3">ROUTER-REDES</th>
  						<td id="ip1" class="text-center col-xs-3">192.168.1.21</td>
  						<td id="estado1" class="text-center col-xs-3"></td>
  						<td id="fecha1"  class="text-center col-xs-3"></td>
  					</tr>

  					<tr>
  						<th class="text-center col-xs-3">ROUTER-4TO</th>
  						<td id="ip2" class="text-center col-xs-3">192.168.1.22</td>
  						<td id="estado2" class="text-center col-xs-3"></td>
  						<td id="fecha2"  class="text-center col-xs-3"></td>
  					</tr>

  					  <tr>
  						<th class="text-center col-xs-3">ROUTER-1RO-2DO</th>
  						<td id="ip3" class="text-center col-xs-3">192.168.1.23</td>
  						<td id="estado3" class="text-center col-xs-3"></td>
  						<td id="fecha3"  class="text-center col-xs-3"></td>
  					</tr>

  					 <tr>
  						<th class="text-center col-xs-3">ROUTER-PEDRO</th>
  						<td id="ip4" class="text-center col-xs-3">192.168.1.24</td>
  						<td id="estado4" class="text-center col-xs-3"></td>
  						<td id="fecha4"  class="text-center col-xs-3"></td>
  					</tr>

  					  <tr>
  						<th class="text-center col-xs-3">ROUTER-LSI2</th>
  						<td id="ip5" class="text-center col-xs-3">192.168.1.25</td>
  						<td id="estado5" class="text-center col-xs-3"></td>
  						<td id="fecha5"  class="text-center col-xs-3"></td>
  					</tr>

  					  <tr>
  						<th class="text-center col-xs-3">SrvLsi-01</th>
  						<td id="ip6" class="text-center col-xs-3">192.168.1.35</td>
  						<td id="estado6" class="text-center col-xs-3"></td>
  						<td id="fecha6"  class="text-center col-xs-3"></td>
  					</tr>

   					<tr>
  						<th class="text-center col-xs-3">SrvLsi-02</th>
  						<td id="ip7" class="text-center col-xs-3">192.168.1.45</td>
  						<td id="estado7" class="text-center col-xs-3"></td>
  						<td id="fecha7"  class="text-center col-xs-3"></td>
  					</tr>

   					<tr>
  						<th class="text-center col-xs-3">PrefecturaVM</th>
  						<td id="ip8" class="text-center col-xs-3">192.168.1.55</td>
  						<td id="estado8" class="text-center col-xs-3"></td>
  						<td id="fecha8"  class="text-center col-xs-3"></td>
  					</tr>

   					<tr>
  						<th class="text-center col-xs-3">SrvRedes</th>
  						<td id="ip9" class="text-center col-xs-3">192.168.172</td>
  						<td id="estado9" class="text-center col-xs-3"></td>
  						<td id="fecha9"  class="text-center col-xs-3"></td>
  					</tr> 

  				</tbody>
			</table>
		</div>


	</div>
	
  

  <script>

     function traerJSON(archivo,identificador){
      var xmlhttp = new XMLHttpRequest();
      var url = "estados/" + archivo;
      xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
          var objetoJS = JSON.parse(this.responseText);
          var idEstado = "estado" + identificador;
          var idFecha  = "fecha"  + identificador;
          document.getElementById(idEstado).innerHTML = objetoJS["estado"];
          document.getElementById(idFecha).innerHTML = objetoJS["date"];
        }
      };
      xmlhttp.open("GET", url, true);
      xmlhttp.send();
    }

  
    traerJSON("192168120.txt", "0");
    traerJSON("192168121.txt", "1");
    traerJSON("192168122.txt", "2");
    traerJSON("192168123.txt", "3");
    traerJSON("192168124.txt", "4");
    traerJSON("192168125.txt", "5");
    traerJSON("192168135.txt", "6");
    traerJSON("192168145.txt", "7");
    traerJSON("192168155.txt", "8");
    traerJSON("192168172.txt", "9");

  </script>


</body>
</html>