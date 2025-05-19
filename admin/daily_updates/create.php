<?php 
    require_once  '../controllers/dailyUpdatesController.php';
    use Controllers\dailyUpdatesController;
    $dailyUpdatesController = new dailyUpdatesController();

    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        $res = $dailyUpdatesController->insert($_FILES['file'] , $_POST['title'], $_POST['description']);
    }
?>
<div class="container mt-2">
    <h4>
        <a href="index.php?page=daily_updates" class='back'>
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
            <label for="">العنوان</label>
            <input type="text" required name="title" id="" class="form-control">
        </div>
        <div class="mb-3">
            <label for="">الوصف</label>
            <textarea required name="description" rows="5" class="form-control"></textarea>
        </div>
        <button class='btn btn-primary'>إنشاء</button>
    </form>
</div>