<?php
echo date("Y/d/m");
echo "<br>";
$date = mktime(11, 14, 54, 8, 12, 2014);
echo date("Y/d/M h:m:s",$date);
echo "<br>";
$dateFromString = strtotime("2015/12/01");
echo $dateFromString;
echo "<br>";
$newTime = $dateFromString+25*24*60*60;
echo date("Y/d/M",$newTime);
?>