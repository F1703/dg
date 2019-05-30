<?php
date_default_timezone_set("America/Argentina/Tucuman");
echo get_real_ip()." ".date("d-m-Y H:i:s");

function get_real_ip(){
    if (isset($_SERVER["REMOTE_ADDR"]))
    {
        return $_SERVER["REMOTE_ADDR"];
    }
}

?>