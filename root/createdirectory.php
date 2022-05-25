<?php

 $dir = $_POST['name'];

 mkdir($dir,777);

 

 header("location: ./index.php");

 ?>
