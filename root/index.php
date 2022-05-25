<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File manager</title>
</head>
<body>

<h1>File manager</h1>

<form action="createdirectory.php" method="POST">
<label for="name">Enter the name of the folder</label>
<input type="text" name="name" id="name">
<input type="submit" name="submit" value="Create Directory">
</form>
<?php
$path = ".";
$dir = opendir($path) or die ("Unable to open directory");
$dir2 = scandir($path);
while($file = readdir($dir))
{
    if($file =="." || $file ==".." || $file =="index.php" || $file == "createdirectory.php" 
    || $file == "deletedirectory.php" || $file == "uploads" || $file == "upload.php"){
    // continue;
    // echo "found the same";
}
else {
    echo "<pre>";
    echo "<a href='$file' style='text-decoration: none; font-size: 20px;
    color:black'>$file</a> <a href='deletedirectory.php?dir=$file'><img src='../
assets/close.png' style='width:1%'></a> 
    <form method='POST' action='./upload.php' enctype='multipart/form-data'>
    <input type='file' name='uploadFile'>
    <input type='submit' name='submit'>Upload</input>
    </form>";}
    }



?>
</body>
</html>




























