<?php require_once  './init.php';?>
<?php require_once  './db_connection.php';?>

<section id="related-products" style='direction:rtl' class="related-products product-carousel py-5 position-relative overflow-hidden">
    <div class="container">
      <div class="d-flex flex-wrap justify-content-between align-items-center mt-5 mb-3">
        <h4 class="text-uppercase color-blue">معرض الشهداء</h4>
        <!-- <a href="javascript:void(0)" class="btn-link">View All Products</a> -->
      </div>
      <div class="swiper product-swiper open-up" data-aos="zoom-out">
        <div class="swiper-wrapper d-flex">
        <?php 
            $get = 'select * from gallery  order by id DESC';
            $query = mysqli_query($db_connection,$get);
            while($row = mysqli_fetch_assoc($query)){
              $link = 'index.php?page=gallery&id='.$row['id'];
          ?>
          <div class="swiper-slide">
            <div class="product-item image-zoom-effect link-effect">
              <div class="image-holder">
                <a href="<?php echo $link?>">
                  <img src="uploads/<?php echo $row['img']?>" alt="product" class="product-image img-fluid">
                </a>
                <div class="product-content">
                  <h5 class="text-uppercase fs-5 mt-3 text-end">
                    <a href="<?php echo $link?>" class='color-blue'><?php echo $row['title']?></a>
                    <p style='font-size: 11px;color: #877f7f;'><?php echo strlen($row['description']) > 100 ? substr($row['description'],0,100).'...<a href="'.$link.'">اقرأ المزيد</a>' : $row['description']?></p>
                  </h5>
                  <!-- <a href="javascript:void(0)" class="text-decoration-none" data-after="Add to cart"><span>$95.00</span></a> -->
                </div>
              </div>
            </div>
          </div>
          <?php }?>
        </div>
        <div class="swiper-pagination"></div>
      </div>
      <div class="icon-arrow icon-arrow-left"><svg width="50" height="50" viewBox="0 0 24 24">
          <use xlink:href="#arrow-left"></use>
        </svg></div>
      <div class="icon-arrow icon-arrow-right"><svg width="50" height="50" viewBox="0 0 24 24">
          <use xlink:href="#arrow-right"></use>
        </svg></div>
    </div>
  </section>
