<?php require_once  './init.php';?>
<?php require_once  './db_connection.php';?>
<?php 

?>

<section id="new-arrival" class="new-arrival product-carousel py-5 position-relative overflow-hidden">
    <div class="container">
      <div class="d-flex flex-wrap text-end justify-content-between align-items-center mt-5 mb-3">
        <h4 class="text-uppercase w-100 float-end color-blue">التحديثات اليومية</h4>
      </div>

      <div class="row" style='direction:rtl'>
        <div class="col-lg-8 col-12 mb-3">
          <?php 
            $get = 'select * from daily_updates  order by id DESC limit 1';
            $query = mysqli_query($db_connection,$get);
            $x=0;
            $all = [];
            while($row = mysqli_fetch_assoc($query)){
              $x++;
              $link = 'index.php?page=daily_updates&id='.$row['id'];
              $all[] = $row['title'];
          ?>
            <a href="index.php?page=daily_updates&id=<?php echo $row['id']?>">
              <img src="uploads/<?php echo $row['img']?>" alt="categories" class="product-image img-fluid" style='width:500px;height:500px;object-fit:cover'>
            </a>
            <a href="index.php?page=daily_updates&id=<?php echo $row['id']?>">
                <h5 class="h5 mt-3 text-end color-blue"><?php echo $row['title']?></h5>
            </a>
            <p>
              <?php echo strlen($row['description']) > 100 ? substr($row['description'],0,100).'...<a href="'.$link.'">اقرأ المزيد</a>' : $row['description']?>
            </p>
          <?php }?>
        </div>
        <div class="col-lg-4 col-12 mb-3">
          <?php 
              $get = 'select * from daily_updates  order by id DESC limit 18446744073709551615 OFFSET 1';
              $query = mysqli_query($db_connection,$get);
              $x=0;
              $all = [];
              while($row = mysqli_fetch_assoc($query)){
                $x++;
                $all[] = $row['title'];
                $link = 'index.php?page=daily_updates&id='.$row['id'];
            ?>
              <div class="row mb-5">
                <div class="col-8">
                  <a href="index.php?page=daily_updates&id=<?php echo $row['id']?>">
                    <img src="uploads/<?php echo $row['img']?>" alt="categories" class="product-image img-fluid" style='width:200px;height:200px;object-fit:cover'>
                  </a>
                </div>
                <div class="col-4">
                  <a href="index.php?page=daily_updates&id=<?php echo $row['id']?>">
                      <h5 class="h5 mt-3 text-end color-blue"><?php echo $row['title']?></h5>
                  </a>
                  <p>
                    <?php echo strlen($row['description']) > 100 ? substr($row['description'],0,100).'...<a href="'.$link.'">اقرأ المزيد</a>' : $row['description']?>
             
                  </p>
                </div>
              </div>
              
             
            <?php }?>
        </div>
      </div>
<!-- 
      <div class="row" style='direction:rtl'>
        <?php 
          $get = 'select * from daily_updates  order by id DESC';
          $query = mysqli_query($db_connection,$get);
          $x=0;
          $all = [];
          while($row = mysqli_fetch_assoc($query)){
            $x++;
            $all[] = $row['title'];
            if($x == 1){
        ?>
        <div class="col-lg-8 col-12 mb-3">
            <div class="product-item image-zoom-effect link-effect">
              <div class="row">
                <div class="col-lg-8 col-12 mb-2">
                  <a href="index.php?page=daily_updates&id=<?php echo $row['id']?>">
                    <img src="uploads/<?php echo $row['img']?>" alt="categories" class="product-image img-fluid">
                  </a>
                </div>
                <div class="col-lg-4 col-12 mb-2">
                  <a href="index.php?page=daily_updates&id=<?php echo $row['id']?>">
                    <h5 class="h5 mt-3 text-end color-blue"><?php echo $row['title']?></h5>
                  </a>
                  <p>
                    <?php echo $row['description']?>
                  </p>
                </div>
              </div>
            </div>
        </div>
        <div class="col-lg-4 col-12 mb-3">
        <?php }else{?>
            <div class="product-item image-zoom-effect link-effect">
              <div class="image-holder position-relative">
                <a href="index.php?page=daily_updates&id=<?php echo $row['id']?>">
                  <img src="uploads/<?php echo $row['img']?>" alt="categories" class="product-image img-fluid">
                </a>
               
                <a href="index.php?page=daily_updates&id=<?php echo $row['id']?>">
                  <h5 class="h5 text-end color-blue"><?php echo $row['title']?></h5>
                </a>
              </div>
            </div>
            <?php }?>
        </div>
      <?php }?>
    </div> -->
  </section>

  <div style="
    background-color: #f74b4b;
    color: #ffffff;
    padding: 10px;
    position: fixed;
    bottom: 0;
    width: 100%;
  ">
    <div class="row">
      <div class="col-9" style='text-align: right;'>
        <marquee direction="right" scrollamount="10" class='pt-1'><?php echo implode(' | ',$all)?></marquee>
      </div>
      
      <div class="col-3" style='text-align: right;'>
        <h5 class='text-white mx-3 pt-1'>خبر عاجل</h5>
      </div>
    </div>
  </div>

 
