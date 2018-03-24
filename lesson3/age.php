<?php
//Նախորդ դասի ինքնուրույն վարժություններից
if(count($_GET)>0) //count - զանգվածում անդամների քանակ
{
    $bd = $_GET["birthdate"];
    if(!is_null($bd))  //is_null ստուգում է արժեքը NULL է արդյոք
    {
        $bdD = strtotime($bd);
        $age = (time() - $bdD)/60/60/24/365;  
        $welcomeString="";
        if($age>16){
            $welcomeString="Բարիլույս";
        }
        else{
            $welcomeString="Փախար այ անչափահաս";
        }
    }
}
?>
<html>
    <head>Տարիքի հաշվարկ</head>
    <body>
        <form action="" method="get">
            <input type="date" name="birthdate">
            <input type="submit" name="go">
            <?php 
                if($welcomeString){
                    echo $welcomeString;
                }
            ?>
        </form>
    </body>
</html>