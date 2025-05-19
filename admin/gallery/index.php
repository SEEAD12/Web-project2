<?php 
    $get = 'select * from gallery order by id DESC';
    $query = mysqli_query($db_connection,$get);
?>

<div class="container mt-5">
    <div class="row">
        <div class="col-lg-6 col-12 mb-2">
            <h3 class="h3">معرض الشهداء</h3>
        </div>
        <div class="col-lg-6 col-12 mb-2 text-end">
            <a href="index.php?page=gallery&action=create" class='btn btn-primary'>إنشاء</a>
            <button class='btn btn-danger delete' data-table='gallery'>حذف</button>
        </div>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th class="text-primary" style='width:50px'>
                    <div class="form-check">
                        <input class="form-check-input chk_all" type="checkbox" value="">
                    </div>
                </th>
                <th>الصورة</th>
                <th>العنوان</th>
                <th>النص</th>
            </tr>
        </thead>
        <tbody>
            <?php while($row = mysqli_fetch_assoc($query)){?>
                <tr>
                    <td>
                        <div class="form-check">
                            <input class="form-check-input chk_item" type="checkbox" value="<?php echo $row['id']?>">
                        </div>
                    </td>
                    <td>
                        <img src="../uploads/<?php echo $row['img']?>" alt="">
                    </td>
                    <td><?php echo $row['title']?></td>
                    <td><?php echo $row['description']?></td>
                </tr>
            <?php }?>
        </tbody>
    </table>
</div>