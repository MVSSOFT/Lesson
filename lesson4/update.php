<!DOCTYPE html>
<html lang="en">
<?php include("connect.php"); ?>
<body>
<?php
$id = 1;
$name = "albert";
if(mysqli_connect_errno($link) == NULL)
{
$sql = "UPDATE groups 
        SET name='$name' 
        WHERE id=$id";    
    $result = mysqli_query($link,$sql);     
    
    if($result)
    {
        echo "Sucsessfully updated";
    }
    else
    {
        echo mysqli_error($link);
        
    }
}
else
{
    echo mysqli_connect_error();
}
?>   

</body>

</html>