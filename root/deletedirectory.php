<?php
$dir = $_GET['dir'];
rmdir($dir);
header("location: ./index.php");
?>

<?php
$dir = $_GET['dir'];
unlink($dir);
header("location: ./index.php");
?>
