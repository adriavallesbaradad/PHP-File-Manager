hola jdtojulian
<?php
// print_r($_FILES);
include 'index.php';
print_r($file);

if (isset($_POST['submit'])){
    $file2 = $_FILES['uploadFile']["name"];
    

    
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
            
            if ($fileSize < 50000000){
                $fileNameNew = uniqid('', true).".".$fileActualExt;
                include 'index.php';
                echo "$path";
                $fileDestination = $path.'/'.$fileName.' '.$fileSize.'kb'.' ';
                move_uploaded_file($fileTmpName, $fileDestination);
                header("Location: index.php?uploadsuccess");
            }
            else{
                echo "Your file is to big";
                header("Location: index.php?uploadfailed");
            }

        } else {
            echo "there was an error uploading your file!";
        }
    }else{
        echo "<p>You cannot upload files of this type!</p>";
        // header("Location: index.php?uploadfailed");
    }
}
