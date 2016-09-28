<?php
 $ping = shell_exec("ping 192.168.10.110");

 $recibidos = strpos($ping, "recibidos = 4");
 $inaccesible = strpos($ping, "Host de destino inaccesible");

 if ($recibidos && !($inaccesible)) {
   ?> Up! <?php
  }else {
   ?> Down! <?php
  } 
?>