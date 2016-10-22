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
  						<td class="ip-address text-center col-xs-3">192.168.1.20</td>
  						<td class="estado text-center col-xs-3"></td>
  						<td class="text-center col-xs-3"></td>
  					</tr>

            <tr>
              <th class="text-center col-xs-3">ROUTER-REDES</th>
              <td class="ip-address text-center col-xs-3">192.168.1.21</td>
              <td class="estado text-center col-xs-3"></td>
              <td class="text-center col-xs-3"></td>
            </tr>

            <tr>
              <th class="text-center col-xs-3">ROUTER-4TO</th>
              <td class="ip-address text-center col-xs-3">192.168.1.22</td>
              <td class="estado text-center col-xs-3"></td>
              <td class="text-center col-xs-3"></td>
            </tr>

              <tr>
              <th class="text-center col-xs-3">ROUTER-1RO-2DO</th>
              <td class="ip-address text-center col-xs-3">192.168.1.23</td>
              <td class="estado text-center col-xs-3"></td>
              <td class="text-center col-xs-3"></td>
            </tr>

             <tr>
              <th class="text-center col-xs-3">ROUTER-PEDRO</th>
              <td class="ip-address text-center col-xs-3">192.168.1.24</td>
              <td class="estado text-center col-xs-3"></td>
              <td class="text-center col-xs-3"></td>
            </tr>

              <tr>
              <th class="text-center col-xs-3">ROUTER-LSI2</th>
              <td class="ip-address text-center col-xs-3">192.168.1.25</td>
              <td class="estado text-center col-xs-3"></td>
              <td class="text-center col-xs-3"></td>
            </tr>

              <tr>
              <th class="text-center col-xs-3">SrvLsi-01</th>
              <td class="ip-address text-center col-xs-3">192.168.1.35</td>
              <td class="estado text-center col-xs-3"></td>
              <td class="text-center col-xs-3"></td>
            </tr>

            <tr>
              <th class="text-center col-xs-3">SrvLsi-02</th>
              <td class="ip-address text-center col-xs-3">192.168.1.45</td>
              <td class="estado text-center col-xs-3"></td>
              <td class="text-center col-xs-3"></td>
            </tr>

            <tr>
              <th class="text-center col-xs-3">PrefecturaVM</th>
              <td class="ip-address text-center col-xs-3">192.168.1.55</td>
              <td class="estado text-center col-xs-3"></td>
              <td class="text-center col-xs-3"></td>
            </tr>

            <tr>
              <th class="text-center col-xs-3">SrvRedes</th>
              <td class="ip-address text-center col-xs-3">192.168.1.72</td>
              <td class="estado text-center col-xs-3"></td>
              <td class="text-center col-xs-3"></td>
            </tr> 

  				</tbody>
			</table>
		</div>


	</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>

  <script type="text/javascript">
    $(document).ready(function() {
      $.each($('tr'), function(key, value) {
        $ip = $(value).find(".ip-address").text();

        $.ajax({
          type: "POST",
          url: "leerEstadoAjax.php",
          data: $ip
        }).done(function(data) {
          $(value).find(".estado").text(data);
        });
      })
    })
  </script>
</body>
</html>