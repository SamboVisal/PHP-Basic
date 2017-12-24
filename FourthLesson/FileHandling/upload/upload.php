<?php
$target_dir = "uploads/";
$target_file = $target_dir.basename($_FILES["fileToUpload"]["name"]);
$uploadOK = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
//check if image file is a actual image or fake image
if(isset($_POST["submit"])){
    $check=getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if ($check!==false){
        echo "File is actual image ".$check["mime"].".";
        $uploadOK = 1;
    }else{
        echo "File is not image";
        $uploadOK = 0;
    }
}
?>