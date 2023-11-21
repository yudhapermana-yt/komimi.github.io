<?php
    extract($_REQUEST);
    
	$file=fopen("hapus/config2.txt","a");

    fwrite($file,"vless://$1@162.159.134.42:80?path=%2Fbuy-vless-ws-pm-telegram-at-synricha&security=none&encryption=none&host=cpanel.iptunnels.com&type=ws#0012+Cpanel+vless-ws");
    fwrite($file, "\n");
    fwrite($file,"vless://$2@162.159.134.42:80?path=%2Fbuy-vless-ws-pm-telegram-at-synricha&security=none&encryption=none&host=cpanel.iptunnels.com&type=ws#0012+Cpanel+vless-ws");
    fwrite($file, "\n");
    fclose($file);
    header("location: index.php");
 ?>
