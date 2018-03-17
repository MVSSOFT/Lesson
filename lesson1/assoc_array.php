<?php
//Ասսոցիատիվ զանգվածներ
$age = array(
            "Peter"=>"35"
          , "Ben"=>"37"
          , "Joe"=>"43"
          , "Boe"=>"100"
          , "Aoe1"=>"1"
          , "Aoe"=>"1000"
          );
//echo $age["Peter"];
echo $age["Peter"];
echo "<br>";
//Ասոցիատիվ զանգվածների վրա foreacher
foreach ($age as $key => $value) {
    echo $key."֊ը ".$value." տարեկան է <br>";
}
foreach ($age as $value) {
    echo $value." <br>";        
}
//Ասսոցիատիվ զանգվածների սորթավորում
/*
asort() - sort associative arrays in ascending order, according to the value
ksort() - sort associative arrays in ascending order, according to the key
arsort() - sort associative arrays in descending order, according to the value
krsort() - sort associative arrays in descending order, according to the key
*/
echo "<pre>";
var_dump($age);
echo "</pre>";
asort($age);
echo "<pre>";
var_dump($age);
echo "</pre>";
arsort($age);
echo "<pre>";
var_dump($age);
echo "</pre>";
ksort($age);
echo "<pre>";
var_dump($age);
echo "</pre>";
krsort($age);
echo "<pre>";
var_dump($age);
echo "</pre>";
?>