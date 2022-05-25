<?php
print_r($_FILES);

if (isset($_POST['submit'])){
    $file = $_FILES['uploadFile']["name"];
    print_r($file);
    $fileName = $_FILES['uploadFile']['name'];
    $fileTmpName = $_FILES['uploadFile']['tmp_name'];
    $fileSize = $_FILES['uploadFile']['size'];
    $fileError = $_FILES['uploadFile']['error'];
    $fileType = $_FILES['uploadFile']['type'];

    $fileExt= explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));

    $allowed = array('jpg', 'jpeg', 'png', 'pdf');

    if(in_array($fileActualExt, $allowed)) {
        if($fileError === 0){
            if ($fileSize < 500000){
                $fileNameNew = $uniqid('', true).".".$fileActualExt;
                $fileDestination = readdir($dir).'/'.$fileNameNew;
                move_uploaded_file($fileTmpName, $fileDestination);
                header("Location: index.php?uploadsuccess");
            }
            else{
                echo "Your file is to big";
            }

        } else {
            echo "there was an error uploading your file!";
        }
    }else{
        echo "You cannot upload files of this type!";
    }
}