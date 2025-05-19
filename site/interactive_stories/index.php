<?php require_once  './init.php';?>
<?php require_once  './db_connection.php';?>
<section id="billboard" class="bg-light py-5">
    <div class="container" style='direction:rtl'>
      <div class="row justify-content-center">
        <h1 class="section-title text-center mt-4 color-blue" data-aos="fade-up">قصص تفاعلية</h1>
        <?php if(isset($_SESSION['email'])){?>
          <div class='text-center'>
            <a href="index.php?page=interactive_stories&create=true" data-aos="fade-up" style='width:100px' class='bg-blue btn btn-primary'>إنشاء</a>
          </div>
        <?php }?>
        <div class="col-md-6 text-center" data-aos="fade-up" data-aos-delay="300">
          <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe voluptas ut dolorum consequuntur, adipisci
            repellat! Eveniet commodi voluptatem voluptate, eum minima, in suscipit explicabo voluptatibus harum,
            quibusdam ex repellat eaque!</p> -->
        </div>
      </div>
      <div class="row" data-aos="fade-up" data-aos-delay="600">
        <?php 
          $get = 'select * from interactive_stories where approved="true" order by id DESC';
          $query = mysqli_query($db_connection,$get);
          while($row = mysqli_fetch_assoc($query)){
        ?>
          <div class="banner-item image-zoom-effect col-lg-4 mb-4 col-12">
            <div class="image-holder">
              <a href="#">
                <img src="uploads/<?php echo $row['img']?>" alt="product" class="img-fluid" style='width:400px;height:400px;object-fit:cover'>
              </a>
            </div>
            <div class="banner-content py-4">
              <h5 class="element-title text-uppercase text-end">
                <a href="index.php?page=interactive_stories&id=<?php echo $row['id']?>" class="item-anchor color-blue"><?php echo $row['title']?></a>
              </h5>
              <p class='text-end'><?php echo $row['description']?></p>
            </div>
          </div>
        <?php }?>
      </div>
    </div>
  </section>
