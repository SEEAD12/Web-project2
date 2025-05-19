<?php 
    require_once  '../controllers/galleryController.php';
    use Controllers\galleryController;
    $galleryController = new galleryController();

    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        $res = $galleryController->insert($_FILES['file'] , $_POST['title'] , $_POST['description'], $_POST['country'], $_POST['age'], $_POST['date']);
    }
?>
<div class="container mt-2">
    <h4>
        <a href="index.php?page=gallery" class='back'>
            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 48 48">
                <g fill="none" stroke="currentColor" stroke-linejoin="round" stroke-width="4">
                    <path d="M24 44c11.046 0 20-8.954 20-20S35.046 4 24 4S4 12.954 4 24s8.954 20 20 20Z" />
                    <path stroke-linecap="round" d="m21 33l9-9l-9-9" />
                </g>
            </svg>  
        </a>  
        إنشاء جديد
    </h4>
    <form action="" method="post" class='mt-5 w-50' enctype='multipart/form-data'>
        <div class="mb-3">
            <label for="">الصورة</label>
            <input type="file" required name="file" id="" class="form-control" accept='.jpg,.jpeg,.png'>
        </div>
        <div class="mb-3">
            <label for="">اسم الشهيد</label>
            <input type="text" required name="title" id="" class="form-control">
        </div>
        <div class="mb-3">
            <label for="">العمر</label>
            <input type="number" required name="age" id="" class="form-control">
        </div>
        <div class="mb-3">
            <label for="">المدينة</label>
            <input type="text" required name="country" id="" class="form-control">
        </div>
        <div class="mb-3">
            <label for="">تاريخ الوفاة</label>
            <input type="date" required name="date" id="" class="form-control">
        </div>
        <div class="mb-3">
            <label for="">النص</label>
            <textarea  required name="description" class="form-control" rows="5"></textarea>
        </div>
        <button class='btn btn-primary'>إنشاء</button>
    </form>
</div>