<?php 
    require_once  '../controllers/loginController.php';
    use Controllers\loginController;
    $login = new loginController();

    $err = false;
    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        $res = $login->login($_POST['email'],$_POST['password']);

        if($res){
            echo '<script>window.location="index.php?page=interactive_stories"</script>';
        }else{
            $err = true;
        }
    }
?>
<!DOCTYPE html>
<html lang="en" dir='rtl'>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../vendors/bootstrap/bootstrap.rtl.css">
    <link rel="stylesheet" href="../vendors/swiper/swiper.min.css">
    <title>تسجيل الدخول</title>
</head>
<body>
    <style>
        body{
            background:#e9e9e9
        }
    </style>
<div class="card mx-auto" style='margin-top:30vh;width:40%'>
    <div class="card-header"> <h4>تسجيل الدخول</h4></div>
    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
        <div class="card-body">
            <?php if($err){?>
                <div class="alert alert-danger mb-3">
                    البريد الالكتروني او كلمة المرور غير صحيحة
                </div>
            <?php }?>
            <div class="mb-3">
                <label for="">البريد الالكتروني</label>
                <input type="email" required name="email" id="" class="form-control">
            </div>
            <div class="mb-3">
                <label for="">كلمة المرور</label>
                <input type="password" required name="password" id="" class="form-control">
            </div>
        </div>
        <div class="card-footer text-end">
            <button class='btn btn-primary'>تسجيل الدخول</button>
        </div>
    </form>
</div>
<script src="../vendors/bootstrap/bootstrap.min.js"></script>
<script src="../vendors/jquery/jquery.min.js"></script>
<script src="../vendors/sweetalert/sweetalert.min.js"></script>
<script src="../vendors/swiper/swiper.min.js"></script>
<script src="../js/main.js"></script>
</body>
</html>