<?php
$dir = $_GET['dir'];
rmdir($dir);
header("location: ./index.php");
?>

