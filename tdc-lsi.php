<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TDC-LSI</title>
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
<<<<<<< HEAD
=======
  						<th class="text-center col-xs-3" style='display:none;'>Direccion IP</th>
>>>>>>> origin/master
  						<th class="text-center col-xs-3">Estado</th>
  						<th class="text-center col-xs-3">Ultima Actualizacion</th>
  					</tr>
  				</thead>
  				<tbody>

    

          <?php

<<<<<<< HEAD
            $path = "hostsList.json";
            $data = file_get_contents($path);
            $json = json_decode($data, true);
            
            foreach ($json['hosts'] as $row) {
              echo "<tr>";
              echo   "<th class=\"text-center col-xs-3\">" . $row['host_name']   .   "</th>";
              echo   "<td class=\"text-center col-xs-3\">" . $row['host_state']  .   "</td>";
              echo   "<td class=\"text-center col-xs-3\">".  $row['host_date']   .   "</td>";
              echo "</tr>";
             } 
=======
            $path = "/hostsList.json";

            if (!file_exists($path))
                exit("File not found");

            $data = file_get_contents($path);
            $json = json_decode($data, true);
            



            
            foreach ($json['hosts'] as $row) {
              echo  "tr>";
              echo    "<th class=\"text-center col-xs-3\">"  $row['name']    "</th>";
              echo    "<td class=\"text-center col-xs-3\">"  $row['area']    "</td>";
              echo    "<td iclass=\"text-center col-xs-3\">" $row['people']  "</td>";
              echo  '</tr>';
             };
>>>>>>> origin/master

          ?> 

 

  				</tbody>
			</table>
		</div>


	</div>


</body>
</html>