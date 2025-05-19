<?php

namespace Controllers;

require_once  '../db_connection.php';

class dayController{
        
    public function insert($img,$title,$description = ''){
        global $db_connection ;

        if (isset($img) && $img['error'] === UPLOAD_ERR_OK) {
            $uploadDir = "../uploads/";
            $fileTmpPath = $img['tmp_name']; // Temporary file path
            $fileName = $img['name']; // Original file name
            $fileExtension = pathinfo($fileName, PATHINFO_EXTENSION); // File extension
    
            // Generate a unique file name to avoid overwriting
            $newFileName = uniqid() . '.' . $fileExtension;

            // Destination path for the uploaded file
            $destPath = $uploadDir . $newFileName;

            // Move the file from the temporary location to the destination
            move_uploaded_file($fileTmpPath, $destPath);

            $get = 'insert into day set img="'.$newFileName.'" , title="'.$title.'" , description="'.$description.'"';
            $query = mysqli_query($db_connection,$get);

            echo '<script>window.location="index.php?page=day"</script>';
        }
    }

}