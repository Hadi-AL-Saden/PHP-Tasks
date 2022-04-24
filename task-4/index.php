<?php


if (!empty($_SERVER['HTTP_CLIENT_IP']))
{
    $ip_address = $_SERVER['HTTP_CLIENT_IP'] ;
}
 elseif (!empty($_SERVER['HTTP_x_FORWARDED_FOR']))
{
    $ip_address = $_SERVER['HTTP_x_FORWARDED_FOR'] ;
}
else {
    # code...
    {
        $ip_address = $_SERVER['REMOTE_ADDR'] ;
    }
}
echo $ip_address;
?>