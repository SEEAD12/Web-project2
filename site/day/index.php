<?php require_once  './init.php';?>
<?php require_once  './db_connection.php';?>
<section class="collection bg-light position-relative py-5">
    <div class="container">
      <?php 
        $get = 'select * from day  order by id DESC';
        $query = mysqli_query($db_connection,$get);
        while($row = mysqli_fetch_assoc($query)){
      ?>
      <div class="row">
        <div class="collection-item d-flex flex-wrap my-5">
        <div class="col-md-6 column-container bg-white">
            <div class="collection-content p-5 m-0 m-md-5">
              <h5 class="element-title text-uppercase text-end"><?php echo $row['title']?></h5>
              <p class='text-end' Style='font-size:14px;line-height:30px'>
              <?php echo $row['description']?>
            </div>
          </div>
          <div class="col-md-6 column-container ">
            <div class="image-holder">
              <img src="uploads/<?php echo $row['img']?>" alt="collection" class="product-image w-100 img-fluid" style='object-fit:cover;height:650px'>
            </div>
          </div>
        </div>
      </div>
      <?php }?>
    </div>
  </section>

  

  <section class="video py-5 overflow-hidden">
    <div class="container-fluid">
      <div class="row">
        <div class="video-content open-up" data-aos="zoom-out">
          <div class="video-bg">
            <img src="images/gaza2.jpg" alt="video" class="video-image img-fluid w-100">
          </div>
          <div class="video-player">
            <a class="youtube" href="https://www.youtube.com/watch?si=U9SxfkBnZVyxTqG6&v=f0oy-NicIgE&feature=youtu.be">
              <svg width="24" height="24" viewBox="0 0 24 24">
                <use xlink:href="#play"></use>
              </svg>
              <!-- <img src="images/text-pattern.png" > -->
              <span alt="pattern" class="text-rotate">
                <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 48 48">
                  <g fill="none" stroke-linejoin="round" stroke-width="4">
                    <path fill="#2f88ff" stroke="#000" d="M24 44C35.0457 44 44 35.0457 44 24C44 12.9543 35.0457 4 24 4C12.9543 4 4 12.9543 4 24C4 35.0457 12.9543 44 24 44Z" />
                    <path fill="#43ccf8" stroke="#fff" d="M20 24V17.0718L26 20.5359L32 24L26 27.4641L20 30.9282V24Z" />
                  </g>
                </svg>
              </span>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>
  
 
