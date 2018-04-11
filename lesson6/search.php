<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
<?php
    define("HOST", "localhost");
    define("DBUser", "root");
    define("DBPassword", "");
    define("DBName","less");
    $link = mysqli_connect(HOST, DBUser, DBPassword, DBName);   
    mysqli_set_charset($link,"utf8");
?>
<?php

    if(mysqli_connect_errno($link) == NULL)
    {
        $sql = "SELECT *
            FROM `Employees`
            WHERE `First Name` LIKE '%Զառա%'";
        $result = mysqli_query($link,$sql);     
        
        while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)) 
        {            
            echo $row["First Name"]." ".$row["Last Name"]."<br>";
        }
        mysqli_close($link);
    }

?>
</body>
</html>