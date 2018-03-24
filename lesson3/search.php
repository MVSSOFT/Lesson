<?php
//echo phpinfo();// Talis e texekutyunner dzer serveri masin
$array = ["html", "css","js","php", "mysql", "laravel"];
$name = "js";

echo array_search($name, $array);// veradarcnum e dirqy
echo "<br>";
echo in_array($name, $array);// veradarcnum e true kam false
?>