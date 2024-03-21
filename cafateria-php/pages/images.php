
<?php

$image = $_FILES['uploadFile']['name'];                    //image
    $temp_name = $_FILES['uploadFile']['tmp_name'];
    $target_directory = "upload/";
    $image_path = $target_directory . time() . $image;
    
    // Move uploaded file to target directory
    if(move_uploaded_file($temp_name, $image_path)){
        echo "File uploaded successfully.";
    } else {
        echo "Error uploading file.";
    }
    ?>