


<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TDC-LSI</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="font-awesome-4.6.3/css/font-awesome.min.css">
    <script src="js/jquery-2.2.4.min.js"></script>

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

      .host.up .state .fa-circle {
        color: #00ff00;
      }

      .host.down .state .fa-circle {
        color: #ff0000;
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
  						<th class="vert-align col-xs-3">Última Actualización</th>
  					</tr>
  				</thead>
  				<tbody>

  				</tbody>
			</table>
		</div>


	</div>


</body>

<script type="text/javascript">
  function actualizar() {
    $.post({
      url: 'hostsList.json',
      dataType: 'json',
      success: function(response) {
        $('tbody').empty();

        var hosts = response.hosts;

        for (var i = 0; i < hosts.length; i++) {
          var tr = $('<tr>').addClass('host ' + hosts[i].state);

          var tdName = $('<td>').addClass('vert-align col-xs-3 name').text(hosts[i].name);
          var tdState = $('<td>').addClass('vert-align col-xs-3 state').html('<i class="fa fa-circle fa-3x"></i>');
          var tdDate = $('<td>').addClass('vert-align col-xs-3 date').text(hosts[i].date);

          tr.append(tdName);
          tr.append(tdState);
          tr.append(tdDate);

          $('tbody').append(tr);
        }
      }
    })
  }

  $(function() {
    actualizar();

    /* Actualiza la información cada 5 segundos. */
    setInterval(actualizar, 5000);
  });
</script>

</html>