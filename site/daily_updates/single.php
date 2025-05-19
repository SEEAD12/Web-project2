<?php 
require_once  './init.php';
require_once  './db_connection.php';

$get = 'select * from daily_updates where id="'.$_GET['id'].'"';
$query = mysqli_query($db_connection,$get);
$row = mysqli_fetch_assoc($query);      


$get = 'select * from comments where type="stories" and post_id="'.$_GET['id'].'"';
$query_c = mysqli_query($db_connection,$get);

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    if($_POST['comment'] !== ''){
        $insert   = "insert into comments set type='stories' , user_email='".$_SESSION['email']."' , post_id='".$_GET['id']."' , comment='".$_POST['comment']."'";
        $query = mysqli_query($db_connection,$insert);
    }
}


?>
<div class="container mt-3" style='direction:rtl'>
    <img src="uploads/<?php echo $row['img']?>" class="w-75 d-block">
    <h5 class='mt-1'><?php echo $row['title']?></h5>
    <p class='mt-1'><?php echo $row['description']?></p>

    <hr>
    <h4 class="h4">التعليقات</h4>
    <?php if(mysqli_num_rows($query_c) > 0){?>
        <?php while($x = mysqli_fetch_assoc($query_c)){
            $get_user = 'select * from users where email="'.$x['user_email'].'"';
            $query_user = mysqli_query($db_connection,$get_user);
            $user = mysqli_fetch_assoc($query_user);  
            ?>
            <div class="d-flex mb-3">
                <div class='ms-2 d-inline-block text-success'>
                    <svg xmlns="http://www.w3.org/2000/svg" width="33" height="33" viewBox="0 0 24 24">
                        <g fill="none" stroke="currentColor" stroke-linecap="round">
                            <path d="M19.727 20.447c-.455-1.276-1.46-2.403-2.857-3.207S13.761 16 12 16s-3.473.436-4.87 1.24s-2.402 1.931-2.857 3.207" />
                            <circle cx="12" cy="8" r="4" />
                        </g>
                    </svg>
                </div>
                <div class="d-inline-block ">
                    <?php echo $user['email']?>
                    <p><?php echo $x['comment']?></p>
                </div>
            </div>
            <hr>
        <?php }?>
    <?php }else{?>
        <p>لا يوجد تعلقيات</p>
    <?php }?>

    <?php if(isset($_SESSION['email'])){?>
        <form method='POST' action='index.php?page=daily_updates&id=<?php echo $_GET['id']?>'>
            <label for="">اكتب تعليق</label>
            <textarea required name="comment" class='form-control' rows='10' id=""></textarea>
            <button class='btn btn-primary mt-2'>إرسال</button>
        </form>
    <?php }?>
</div>