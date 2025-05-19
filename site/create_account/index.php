<?php 
 
    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        $create = "insert into users set name='".$_POST['name']."' , email='".$_POST['email']."' , password='".$_POST['password']."'";
        mysqli_query($db_connection,$create);
        $_SESSION['email'] = $_POST['email'];
        echo '<script>window.location="index.php?page=home"</script>';
    }
?>
<?php require_once  './init.php';?>
<?php require_once  './db_connection.php';?>
<style>
    body{
        background:#e9e9e9
    }
    label{
        font-size:13px !important;
    }
</style>

<div class="container">
    <div class='mt-5 xs row'>
        <div class="col-lg-6 col-12 mb-2" style='
            padding: 29px;
            border-left: 1px solid #cecece;
            height: 60vh;
        '>
            <h5 class='text-center'>إنشاء حساب</h5>
            <form action="index.php?page=create_account" method="post">
                <div class="mb-3">
                    <label for="">الاسم</label>
                    <input type="text" required name="name" id="" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="">البريد الالكتروني</label>
                    <input type="email" required name="email" id="" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="">كلمة المرور</label>
                    <input type="password" required name="password" id="" class="form-control">
                </div>

                <button class='btn bg-blue w-100'>إنشاء</button>
                <a href="index.php?page=login" class='d-block text-center'> لديك حساب , تسجيل الدخول ؟</a>
            </form>
        </div>

        <div class="col-lg-6 col-12 mb-2">
            <ul class='mt-4'>
                <li class='row'>
                    <div class="col-1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="33" height="33" viewBox="0 0 24 24">
                            <g fill="none" fill-rule="evenodd">
                                <path d="m12.593 23.258l-.011.002l-.071.035l-.02.004l-.014-.004l-.071-.035q-.016-.005-.024.005l-.004.01l-.017.428l.005.02l.01.013l.104.074l.015.004l.012-.004l.104-.074l.012-.016l.004-.017l-.017-.427q-.004-.016-.017-.018m.265-.113l-.013.002l-.185.093l-.01.01l-.003.011l.018.43l.005.012l.008.007l.201.093q.019.005.029-.008l.004-.014l-.034-.614q-.005-.018-.02-.022m-.715.002a.02.02 0 0 0-.027.006l-.006.014l-.034.614q.001.018.017.024l.015-.002l.201-.093l.01-.008l.004-.011l.017-.43l-.003-.012l-.01-.01z" />
                                <path fill="currentColor" d="M10.92 2.868a1.25 1.25 0 0 1 2.16 0l2.795 4.798l5.428 1.176a1.25 1.25 0 0 1 .667 2.054l-3.7 4.141l.56 5.525a1.25 1.25 0 0 1-1.748 1.27L12 19.592l-5.082 2.24a1.25 1.25 0 0 1-1.748-1.27l.56-5.525l-3.7-4.14a1.25 1.25 0 0 1 .667-2.055l5.428-1.176zM12 4.987L9.687 8.959a1.25 1.25 0 0 1-.816.592l-4.492.973l3.062 3.427c.234.262.347.61.312.959l-.463 4.573l4.206-1.854a1.25 1.25 0 0 1 1.008 0l4.206 1.854l-.463-4.573a1.25 1.25 0 0 1 .311-.959l3.063-3.427l-4.492-.973a1.25 1.25 0 0 1-.816-.592z" />
                            </g>
                        </svg>
                    </div>
                    <div class="col-11">
                        <strong>حساب واحد</strong>
                        <p>
                            بحساب واحد يمكنك الوصول الى بشكل غير محدود إلى خدماتنا
                        </p>
                    </div>
                </li>
                <li class='row'>
                    <div class="col-1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="33" height="33" viewBox="0 0 24 24">
                            <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-width="1.5">
                                <path d="M4 19V5a2 2 0 0 1 2-2h13.4a.6.6 0 0 1 .6.6v13.114M6 17h14M6 21h14" />
                                <path stroke-linejoin="round" d="M6 21a2 2 0 1 1 0-4" />
                                <path d="M9 7h6" />
                            </g>
                        </svg>
                    </div>
                    <div class="col-11">
                        <strong>تابع الموضوعات</strong>
                        <p>
                            استكشف الأحداث و الأخبار الاخيرة
                        </p>
                    </div>
                </li>
                <li class='row'>
                    <div class="col-1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="33" height="33" viewBox="0 0 24 24">
                            <path fill="currentColor" d="M14 14.252v2.09A6 6 0 0 0 6 22H4a8 8 0 0 1 10-7.749M12 13c-3.315 0-6-2.685-6-6s2.685-6 6-6s6 2.685 6 6s-2.685 6-6 6m0-2c2.21 0 4-1.79 4-4s-1.79-4-4-4s-4 1.79-4 4s1.79 4 4 4m6 6v-3h2v3h3v2h-3v3h-2v-3h-3v-2z" />
                        </svg>
                    </div>
                    <div class="col-11">
                        <strong>مخصص لك</strong>
                        <p>
                            اخترنا لك بعض المواضيع الهامة بعناية
                        </p>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>