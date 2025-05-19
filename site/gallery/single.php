<?php 
require_once  './init.php';
require_once  './db_connection.php';

$get = 'select * from gallery where id="'.$_GET['id'].'"';
$query = mysqli_query($db_connection,$get);
$row = mysqli_fetch_assoc($query);              
?>
<div class="container" style='direction:rtl'>
    <img src="uploads/<?php echo $row['img']?>" class="w-75 mt-5 d-block">
    <p class='mt-1'>اسم الشهيد : <?php echo $row['title']?></p>
    <p class='mt-1'>العمر : <?php echo $row['age']?></p>
    <p class='mt-1'>المدينة : <?php echo $row['country']?></p>
    <p class='mt-1'>تاريخ الوفاة : <?php echo $row['date']?></p>

    <p class='mt-1'><?php echo $row['description']?></p>
</div>