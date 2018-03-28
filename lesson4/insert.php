<!DOCTYPE html>
<html lang="en">
<?php include("connect.php"); ?>
<body>
<?php
$name = "albert";
if(mysqli_connect_errno($link) == NULL)
{
     $sql = "INSERT INTO groups55
              (`name`) 
        VALUES('$name')";
    $result = mysqli_query($link,$sql);

    if($result){
        header("Location: select.php");
    }else{
        echo "error";
    }
    
    mysqli_close($link);
}
?>   

</body>

</html>