<?php
    $a = [
         ["asas"=>"asdf","asas1"=>"dddddd"]
        ,["sasa"=>"assddf","sasas1"=>"asdfd"]
    ];
    $b = [
         "val1"=>["asas"=>"asdf","asas1"=>"asdfdasdf"]
        ,"val2"=>["sasa"=>"assddf","sasas1"=>"asdfd"]
    ];
    echo $a[0]["asas1"];
    echo "<br>";
    echo $b["val1"]["asas1"];
?>