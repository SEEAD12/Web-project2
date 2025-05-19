
<div class="preloader text-white fs-6 text-uppercase overflow-hidden"></div>
<nav class="navbar navbar-expand-lg bg-light text-uppercase fs-6 p-3 border-bottom align-items-start">
  <div class="container-fluid">
    <div class="row justify-content-between align-items-start w-100">
      <div class="col-auto">
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
          aria-controls="offcanvasNavbar">
          <span class="navbar-toggler-icon"></span>
        </button>

        <ul class="navbar-nav justify-content-start flex-grow-1 gap-1 gap-md-5 pe-3 nav-pc">
          <?php if(isset($_SESSION['email'])){?>
            <li class="nav-item ">
            <a class="nav-link active" href="#" id="Home" data-bs-toggle=""
              aria-haspopup="true" aria-expanded="false"><?php echo get_user('name')?></a>
            </li>
            <li class="nav-item ">
              <a class="nav-link active" href="logout.php" id="Home" data-bs-toggle=""
                aria-haspopup="true" aria-expanded="false">تسجيل الخروج</a>
            </li>
          <?php }else{?>
            <li class="nav-item ">
            <a class="nav-link active color-blue" href="index.php?page=login" id="Home" data-bs-toggle=""
              aria-haspopup="true" aria-expanded="false">تسجيل الدخول</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link active color-blue" href="index.php?page=create_account" id="Home" data-bs-toggle=""
              aria-haspopup="true" aria-expanded="false">إنشاء حساب</a>
          </li>
          <?php }?>
        </ul>
      </div>
      
      <div class="col-auto">
        <div class="offcanvas offcanvas-end d-inline-block" tabindex="-1" id="offcanvasNavbar"
          aria-labelledby="offcanvasNavbarLabel">
          <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasNavbarLabel">القائمة</h5>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
              aria-label="Close"></button>
          </div>

          <div class="offcanvas-body">
            <ul class="navbar-nav justify-content-start flex-grow-1 gap-1 gap-md-5 pe-3">
              
              <li class="nav-item ">
                <a class="nav-link active" href="index.php?page=interactive_stories" id="Home" data-bs-toggle=""
                  aria-haspopup="true" aria-expanded="false">قصص تفاعلية</a>
              </li>
              <li class="nav-item ">
                <a class="nav-link active" href="index.php?page=daily_updates" id="Home" data-bs-toggle=""
                  aria-haspopup="true" aria-expanded="false">تحديثات يومية</a>
              </li>
              <li class="nav-item ">
                <a class="nav-link active" href="index.php?page=gallery" id="Home" data-bs-toggle=""
                  aria-haspopup="true" aria-expanded="false">معرض الشهداء</a>
              </li>
              <li class="nav-item ">
                <a class="nav-link active" href="index.php?page=day" id="Home" data-bs-toggle=""
                  aria-haspopup="true" aria-expanded="false">يوم في حياة</a>
              </li>

              
              <li class="nav-item ">
                <a class="nav-link active" href="index.php?page=home" id="Home" data-bs-toggle=""
                  aria-haspopup="true" aria-expanded="false">الرئيسية</a>
              </li>
              
              <span class='nav-mobile d-none'>
                <?php if(isset($_SESSION['email'])){?>
                  <li class="nav-item ">
                  <a class="nav-link active" href="#" id="Home" data-bs-toggle=""
                    aria-haspopup="true" aria-expanded="false"><?php echo get_user('name')?></a>
                  </li>
                  <li class="nav-item ">
                    <a class="nav-link active" href="logout.php" id="Home" data-bs-toggle=""
                      aria-haspopup="true" aria-expanded="false">تسجيل الخروج</a>
                  </li>
                <?php }else{?>
                  <li class="nav-item ">
                  <a class="nav-link active color-blue" href="index.php?page=login" id="Home" data-bs-toggle=""
                    aria-haspopup="true" aria-expanded="false">تسجيل الدخول</a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link active color-blue" href="index.php?page=create_account" id="Home" data-bs-toggle=""
                    aria-haspopup="true" aria-expanded="false">إنشاء حساب</a>
                </li>
                <?php }?>
              </span>
              
            </ul>
          </div>
        </div>
        <strong class='mx-2 d-inline-block'><a href="index.php?page=home">
          <img src="images/logo.png" style="width:50px">
        </a></strong>
      </div>
  </div>
</nav>