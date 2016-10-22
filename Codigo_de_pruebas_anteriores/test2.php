<?php 
		$ip = "127.0.0.1";
        $comando = "ping -c 1 " . $ip . " > /dev/null ; echo $?";
        $errorCode_ping = shell_exec($comando);

        if ($errorCode_ping == 0) {
        	echo "OK";
        } else {
        	echo "ERROR";
        }
 ?>