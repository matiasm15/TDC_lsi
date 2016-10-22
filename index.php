


<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TDC-LSI</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="font-awesome-4.6.3/css/font-awesome.min.css">


    <style>
    	.margen-medio{
    		margin: 70px 50px 50px 10px;
    	}

    	.margen-grande{
    		margin: 10px 200px 200px 200px;
    	}

    	.encabezado-tabla{
  			background-color: #6699ff;

  			border-style: solid; 
  			border-width: 2px;
		}

      .table > tbody > tr > td.vert-align,.table > thead > tr > th.vert-align{
        vertical-align: middle;
        text-align: center;
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
  						<th class="vert-align col-xs-3">Dispositivo</th>
  						<th class="vert-align col-xs-3">Estado</th>
  						<th class="vert-align col-xs-3">Ultima Actualizacion</th>
  					</tr>
  				</thead>
  				<tbody>


          <?php
          
            $path = "hostsList.json";
            $data = file_get_contents($path);
            $json = json_decode($data, true);
            
            foreach ($json['hosts'] as $row) {
              echo "<tr>";
              echo   "<td class=\"vert-align col-xs-3\" >" . $row['host_name']    .   "</td>";
              echo   "<td class=\"vert-align col-xs-3\" >" . $row['host_state']   .   "</td>";
              echo   "<td class=\"vert-align col-xs-3\">" .  $row['host_date']   .   "</td>";
              echo "</tr>";
             } 

          ?> 

 

  				</tbody>
			</table>
		</div>


	</div>


</body>
</html>