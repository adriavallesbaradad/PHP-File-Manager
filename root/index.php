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
<input type="submit" value="Create">
</form>
<?php
$path = ".";
$dir = opendir($path) or die ("Unable to open directory");
while($file = readdir($dir))
{
    if($file =="." || $file ==".." || $file =="index.php" || $file == "createdirectory.php" || $file == "deletedirectory.php"){
    continue;
    echo "<a href='$file'>$file</a><a href='deletedirectory.php?dir=file'></a><br>";
}
    }
closedir($dir);

?>
</body>
</html>




























