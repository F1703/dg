<?php
date_default_timezone_set("America/Argentina/Tucuman");
echo get_real_ip()." ".date("d-m-Y H:i:s");

function get_real_ip(){
 $ip = null;
    if (isset($_SERVER["HTTP_CLIENT_IP"]))
    {
        $ip = $_SERVER["HTTP_CLIENT_IP"];
    }
    elseif (isset($_SERVER["HTTP_X_FORWARDED_FOR"]))
    {
        $ip =  $_SERVER["HTTP_X_FORWARDED_FOR"];
    }
    elseif (isset($_SERVER["HTTP_X_FORWARDED"]))
    {
        $ip = $_SERVER["HTTP_X_FORWARDED"];
    }
    elseif (isset($_SERVER["HTTP_FORWARDED_FOR"]))
    {
        $ip = $_SERVER["HTTP_FORWARDED_FOR"];
    }
    elseif (isset($_SERVER["HTTP_FORWARDED"]))
    {
        $ip = $_SERVER["HTTP_FORWARDED"];
    }
    else
    {
        $ip = $_SERVER["REMOTE_ADDR"];
    }
}


?>