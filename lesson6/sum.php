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
        $sql = "SELECT SUM(`Salary`) as sum, 
            COUNT(`ID`) as count,
            AVG(`Salary`) as max  
            FROM `Employees`;";
        $result = mysqli_query($link,$sql);     
        $row = mysqli_fetch_array($result,MYSQLI_ASSOC);

        echo $row["sum"];
        echo "<br>";
        echo $row["count"];
        echo "<br>";
        echo $row["max"];
        
        mysqli_close($link);
    }

?>
</body>
</html>