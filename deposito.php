<?php

date_default_timezone_set("America/Argentina/Tucuman");
$d = fopen("deposito.log","w+");
$real_ip = get_real_ip();
fputs($d,$real_ip);
fputs($d,"\r\n");
fputs($d,date("Y-m-d H:i:s"));
fclose($d);


function get_real_ip(){
    if (isset($_SERVER["HTTP_CLIENT_IP"])){
        return $_SERVER["HTTP_CLIENT_IP"];
    }
    elseif (isset($_SERVER["HTTP_X_FORWARDED_FOR"])){
        return $_SERVER["HTTP_X_FORWARDED_FOR"];
    }
    elseif (isset($_SERVER["HTTP_X_FORWARDED"])){
        return $_SERVER["HTTP_X_FORWARDED"];
    }
    elseif (isset($_SERVER["HTTP_FORWARDED_FOR"])){
        return $_SERVER["HTTP_FORWARDED_FOR"];
    }
    elseif (isset($_SERVER["HTTP_FORWARDED"])){
        return $_SERVER["HTTP_FORWARDED"];
    }
    else{
        return $_SERVER["REMOTE_ADDR"];
    }
}
 
echo $real_ip;
?>