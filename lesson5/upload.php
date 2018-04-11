<?php
//TODO նայել http://www.w3schools.com/php/php_file_upload.asp
if(count($_FILES))
{
     echo "<pre>";
     var_dump($_FILES);
     echo "</pre>"; 
     //DOCS pathinfo http://php.net/manual/en/function.pathinfo.php
     $ext = pathinfo($_FILES["myfile"]["name"],PATHINFO_EXTENSION);
     //time-ը օգտագործում ենք որպիսի ֆայլի անունը չկրկնվի
     $target_file = "uploads/".time().".".$ext;
     move_uploaded_file($_FILES["myfile"]["tmp_name"], $target_file);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="file" name="myfile">
        <input type="submit" value="Upload">
    </form>
</body>
</html>