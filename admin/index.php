<?php
    if(!isset($_COOKIE['login'])){
        echo '<script>window.location="login.php"</script>';
    } 
    require_once  '../init.php';
    require_once  '../db_connection.php';
?>
<!DOCTYPE html>
<html lang="en" dir='rtl'>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../vendors/bootstrap/bootstrap.rtl.css">
    <link rel="stylesheet" href="../vendors/swiper/swiper.min.css">
    <link rel="stylesheet" href="../css/custom.css">
    <title>حياة تحت الحصار</title>
</head>
<body>
    
    <?php 

            
        if(!isset($_GET['page'])){
            echo '<script>window.location="index.php?page=interactive_stories"</script>';
        }

        if(isset($_GET['action'])){
            $path = './'.$_GET['page'].'/'.$_GET['action'].'.php';
        }else{
            $path = './'.$_GET['page'].'/index.php';
        }
        
        if(file_exists($path)){
            require './components/navbar.php'; 
        
            require $path;
        }else{
            $functions->abort(404);
        }
        
    ?>

<script src="../vendors/bootstrap/bootstrap.min.js"></script>
<script src="../vendors/jquery/jquery.min.js"></script>
<script src="../vendors/sweetalert/sweetalert.min.js"></script>
<script src="../vendors/swiper/swiper.min.js"></script>
<script src="../js/main.js"></script>
</body>
</html>