<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
<?php

    $anaun = "Gago";
    $azganun = "Magoyan";
    //ՄԱՍ 1 ՓՈՓՈԽԱԿԱՆՆԵՐ
    //Տողերի միացումը (կոնկատենացիան) արվում է կետով, ոչ թե + նշանով
    $lriv = $anaun." ".$azganun."<br>";
    echo $lriv;
    //Երկուսանոց չակերտների ներսում գրված փոփոխականը փոխարինվում է իր արժեքով
    $a = "բարև $anaun";
    echo $a;
    echo "<br>";
    //մեկանոց չակերտների մեջ գրված փոփոխականը չի փոխարինվում իր արժեքով
    $b = 'բարև $anaun';
    echo $b;
    echo "<br>";
    
    $cars = [1,"BMW",false];   
    echo "<pre>";
    var_dump($cars);
    echo "</pre>";
?>
<?php
    //ՄԱՍ 2 ՓՈՓՈԽԱԿԱՆՆԵՐ Գլոբալ
    //PHP-ում գլոբալ փոփոխականը օգտագործելիս պիտի արվի հատուկ նշում
    function myfunction($a)
    {
        global $b;
        return  $a;
    }
    $a = 100;

    function funct() {
        global $a;
        $a = 56;
        echo "<h4>$a</h4>";
    }

    funct();
    echo "<h2>$a</h2>";
    echo "<br>";
    //ՄԱՍ 3 ՓՈՓՈԽԱԿԱՆՆԵՐ ստատիկ
    function myOtherFunction($a)
    {
        static $b; //Ստատիկ փոփոխականը իր արժեքով չի վերանում ֆունկցիայի աշխատանքի ավարտից հետո 
        $c = $a;
        return $a;
    }

    function keep_track() {
        STATIC $count = 0;
        $count++;
        print $count;
        print "<br />";
    }
   
    keep_track();
    keep_track();
    keep_track();

    //ՄԱՍ 4 հաստատուններ, չփոփոխվող փոփոխականներ ։)
    define("GREETING","Hello you! How are you today?");
    echo constant("GREETING");

?>


</body>
</html>