<?php
date_default_timezone_set("America/Argentina/Tucuman");
header("Location: ".get_real_ip());
die();
// echo get_real_ip();
// echo get_real_ip()." ".date("d-m-Y H:i:s");

function get_real_ip(){
  if(isset($_SERVER["HTTP_X_FORWARDED_FOR"])){
    $proxy = explode(",",$_SERVER["HTTP_X_FORWARDED_FOR"]);
    $client = trim(end($proxy));
    return $client;
  }else{
    return $_SERVER["REMOTE_ADDR"];
  }
}

?>
