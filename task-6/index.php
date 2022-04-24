<?php
$url = 'https://www.w3schools.com/php/default.asp.';
$url=parse_url($url);
echo '<br><h1>Scheme : '.$url['scheme']."\n";

echo '<br><h1>Host : '.$url['host']."\n";

echo '<br><h1>Path : '.$url['path']."\n";
?>