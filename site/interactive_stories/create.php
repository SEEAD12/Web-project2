<?php 
require_once  './init.php';
require_once  './db_connection.php';            
?>
<?php 
    $sent= false;
    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        
        
        $img   = $_FILES['file'];
        $title = $_POST['title'];
        $description = $_POST['description'];

        if (isset($img) && $img['error'] === UPLOAD_ERR_OK) {
            $uploadDir = "./uploads/";
            $fileTmpPath = $img['tmp_name']; // Temporary file path
            $fileName = $img['name']; // Original file name
            $fileExtension = pathinfo($fileName, PATHINFO_EXTENSION); // File extension
    
            // Generate a unique file name to avoid overwriting
            $newFileName = uniqid() . '.' . $fileExtension;

            // Destination path for the uploaded file
            $destPath = $uploadDir . $newFileName;

            // Move the file from the temporary location to the destination
            move_uploaded_file($fileTmpPath, $destPath);

            $get = 'insert into interactive_stories set img="'.$newFileName.'" , title="'.$title.'" , description="'.$description.'" , created_by="'.$_SESSION['email'].'" , approved="false"';
            $query = mysqli_query($db_connection,$get);
            $sent = true;
            // echo '<script>window.location="index.php?page=interactive_stories&create=true"</script>';
        }

    }
?>
<div class="container mt-2" style='direction:rtl'>
    <h4>
        <a href="index.php?page=interactive_stories" class='back'>
            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 48 48">
                <g fill="none" stroke="currentColor" stroke-linejoin="round" stroke-width="4">
                    <path d="M24 44c11.046 0 20-8.954 20-20S35.046 4 24 4S4 12.954 4 24s8.954 20 20 20Z" />
                    <path stroke-linecap="round" d="m21 33l9-9l-9-9" />
                </g>
            </svg>  
        </a>  
        إنشاء جديد
    </h4>
    <form action="index.php?page=interactive_stories&create=true" method="post" class='mt-5 w-50' enctype='multipart/form-data'>
        <?php if($sent){?>
            <div class="alert alert-primary">
                تم الإنشاء بنجاح و الآن بانتظار موافقة الأدمن
            </div>
        <?php }?>
        <div class="mb-3">
            <label for="">الصورة</label>
            <input type="file" required name="file" id="" class="form-control" accept='.jpg,.jpeg,.png'>
        </div>
        <div class="mb-3">
            <label for="">العنوان</label>
            <input type="text" required name="title" id="" class="form-control">
        </div>
        <div class="mb-3">
            <label for="">النص</label>
            <textarea  required name="description" class="form-control" rows="5"></textarea>
        </div>
        <button class='btn btn-primary'>إنشاء</button>
    </form>
</div>