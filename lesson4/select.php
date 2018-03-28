<!DOCTYPE html>
<html lang="en">
<?php include("connect.php"); ?>
<body>
<?php
if(mysqli_connect_errno($link) == NULL)
{
    $sql = "SELECT * 
            FROM groups";
    $result = mysqli_query($link,$sql);  

    /*
    $row = mysqli_fetch_array($result);
    //echo $row[0]." ".$row[1]."<br>";
    echo $row["id"]." ".$row["name"]."<br>";
    $row = mysqli_fetch_array($result);
    //  echo $row[0]." ".$row[1]."<br>";
    echo $row["id"]." ".$row["name"]."<br>";
    $row = mysqli_fetch_array($result);
    echo $row["id"]." ".$row["name"]."<br>";
    $row = mysqli_fetch_array($result);
    echo $row["id"]." ".$row["name"]."<br>";
    echo "</hr>";
    */
    while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)) 
    {
            
        foreach ($row as $field) {
            echo $field." ";
        }
        echo "<br>";
        //echo $row["Name"]." ".$row["Lname"]."<br>";
    }
    mysqli_close($link);
}
?>   

</body>

</html>