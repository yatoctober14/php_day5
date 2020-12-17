<?php

$connection = mysqli_connect('localhost','root','','fatwa');

		if(mysqli_connect_errno())
		{
			$errorMessage = "Database connection failed : ". mysqli_connect_error() . " and mysql error number : ".mysqli_connect_errno();
			exit($errorMessage);
		}
		
		$qurey = "SELECT * FROM specialize";
		
		$results = mysqli_query($connection, $qurey);
		if($results == false)
		{
			exit ("query failed may be your syntax is wrong");
		}		
		
		$specializes = [];
		while($record = mysqli_fetch_assoc($results))
		{
			//echo "<br>";
			//echo "{$record["id"]}, {$record["name_ar"]}, {$record["name_en"]}"."<br>";
			array_push($specializes,$record);
		}
		
		mysqli_free_result($results);
		mysqli_close($connection);

?>
<!DOCTYPE html>
<html lang="ar">
<head>
    <title>الصفحة الرئيسية | فتاوى سؤال وجواب</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/fontawesome/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="assets/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" type="text/css" href="assets/fontawesome-free-5.0.1/css/fontawesome-all.css">
    <link rel="stylesheet" type="text/css" href="assets/OwlCarousel2-2.2.1/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="assets/OwlCarousel2-2.2.1/owl.theme.default.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/responsive.css">
    <link rel="stylesheet" type="text/css" href="assets/icofont/icofont.min.css">
    <link rel="stylesheet" type="text/css" href="assets/aos/aos.css">
    <link rel="stylesheet" type="text/css" href="assets/venobox/venobox.css">
    <link rel="shortcut icon" type="image/x-icon" href="css/images/favicon.ico">
    <link rel="icon" type="image/x-icon" href="css/images/favicon.ico">
</head>
<body>

<div class="super_container">

    <div class="top-header py-2">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-lg-4 col-md-3 col-sm-7 mt-lg-0 mt-md-2 mt-sm-2 text-lg-right text-md-right text-sm-right top-data">
                    <a class="text-color call" href="https://wa.me/+201011836243"
                       target="_blank"><strong>للتواصل</strong> 01011836243</a>
                    &nbsp; &nbsp; <span class="line">|</span>
                    <ul class="list-inline d-inline top-social">
                        <li class="list-inline-item mx-0"><a class="d-inline-block p-2 text-color instagram icon"
                                                             href="https://www.instagram.com/yewess97/" target="_blank">
                            <i class="fab fa-instagram"></i></a></li>
                        <li class="list-inline-item mx-0"><a class="d-inline-block p-2 text-color linkedin icon"
                                                             href="https://www.linkedin.com/in/yewess97/"
                                                             target="_blank">
                            <i class="fab fa-linkedin"></i></a></li>
                        <li class="list-inline-item mx-0"><a class="d-inline-block p-2 text-color twitter icon"
                                                             href="https://twitter.com/yewess97" target="_blank">
                            <i class="fab fa-twitter"></i></a></li>
                        <li class="list-inline-item mx-0"><a class="d-inline-block p-2 text-color facebook icon"
                                                             href="https://www.facebook.com/YousufAymooni"
                                                             target="_blank">
                            <i class="fab fa-facebook"></i></a></li>
                    </ul>
                </div>
                <div class="col-lg-5 col-md-5 text-center date">
                    <p>الأربعاء 17 ربيع الآخر 1442 - 2 ديسمبر 2020</p>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-5 text-lg-left text-md-left text-sm-left modals">
                    <ul class="list-inline">
                        <li class="list-inline-item"><a
                                class="p-sm-2 py-2 px-0 d-inline-block top-login" href="#"
                                data-toggle="modal" data-target="#loginModal">تسجيل الدخول</a></li>
                        <span class="line2">|</span>
                        <li class="list-inline-item"><a
                                class="p-sm-2 py-2 px-0 d-inline-block top-register" href="#"
                                data-toggle="modal" data-target="#signupModal">التسجيل</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>


    <!--Header-->
    <header class="header d-flex flex-row">
        <div class="header_content d-flex flex-row col-12">
            <!--Logo-->
            <div class="logo_container">
                <a href="index.html">
                    <div class="logo">
                        <img src="images/logo.png" alt="fatawa_logo">
                    </div>
                </a>
            </div>

            <!--Main navigation-->
            <nav class="main_nav_container col-10">
                <div class="main_nav">
                    <ul class="main_nav_list text-right">
                        <li class="main_nav_item">
                            <a href="index.html">الرئيسية</a>
                        </li>
                        <li class="main_nav_item dropdown">
                            <a class="dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                أقسام الفتاوى
                            </a>
                            <div class="dropdown-menu text-right" aria-labelledby="navbarDropdownMenuLink"
                                 data-aos="fade-down" data-aos-duration=".2s">
								 <?php foreach($specializes as $specialize): ?>
                                <a class="dropdown-item" href="#"><?php echo $specialize['name_ar']; ?></a>
								<?php endforeach ?>
                            </div>
                        </li>
                        <li class="main_nav_item">
                            <a href="#">عنـــــا</a>
                        </li>
                        <li class="main_nav_item">
                            <a href="#">للتواصل معنــا</a>
                        </li>
                        <li class="main_nav_item">
                            <a href="admin.html" target="_blank">لوحة التحكم</a>
                        </li>
                    </ul>
                </div>
                <div class="main_nav_item dropdown language">
                    <span class="ml-1" style="font-size: 1.1rem; color: #817e74"><i
                            class="fas fa-globe-africa"></i></span>
                    <a class="dropdown-toggle" href="#" id="navbarDropdownMenu" role="button"
                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        اللــــــغــــة
                    </a>
                    <div class="dropdown-menu text-right" aria-labelledby="navbarDropdownMenu"
                         data-aos="fade-down" data-aos-duration=".2s">
                        <a class="dropdown-item" href="#">العربية</a>
                        <a class="dropdown-item" href="#">English</a>
                    </div>
                </div>
                <div style="direction: rtl" class="search-form">
                    <form class="form-inline" style="margin-right: 2rem">
                        <input class="form-control ml-3 nav-search-item" type="search"
                               placeholder="ابـــحـــث عـــن سؤالـــــك"
                               style="width: 57%; height: 8vh; padding-right: 1.2rem">
                        <button class="btn btn-primary btn-circle btn-md my-2 my-sm-0" type="submit">
                            <i class="fas fa-search fa-flip-horizontal"></i>
                        </button>
                    </form>
                </div>
            </nav>
        </div>

        <!--Hamburger-->
        <div class="hamburger_container">
            <i class="fas fa-bars trans_200"></i>
        </div>

    </header>

    <!--Menu-->
    <div class="menu_container menu_mm">

        <!--Menu close button-->
        <div class="menu_close_container">
            <div class="menu_close"></div>
        </div>

        <!--Menu items-->
        <div class="menu_inner menu_mm">
            <div class="menu menu_mm">

                <ul class="menu_list menu_mm">
                    <li class="menu_item menu_mm"><a href="index.html">الرئيسية</a></li>
                    <li class="menu_item menu_mm">
                        <a class="dropdown-toggle" href="#" id="navbarDropdown" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            أقسام الفتاوى
                        </a>
                        <div class="dropdown-menu text-right menu-dropdown-list" aria-labelledby="navbarDropdown"
                             data-aos="fade-down" data-aos-duration=".2s">
							 <?php foreach($specializes as $specialize): ?>
                            <a class="dropdown-item" href="#"><?php echo $specialize['name_ar']; ?></a>
							<?php endforeach ?>
                        </div>
                    </li>
                    <li class="menu_item menu_mm"><a href="#">عنـــــا</a></li>
                    <li class="menu_item menu_mm"><a href="#">للتواصل معنــا</a></li>
                    <li class="menu_item menu_mm"><a href="admin.html" target="_blank">لوحة التحكم</a></li>
                    <li class="menu_item menu_mm">
                        <a class="dropdown-toggle" href="#" id="navbarDropdownMenuLanguage" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            اختر اللغة
                        </a>
                        <div class="dropdown-menu text-right menu-dropdown-list"
                             aria-labelledby="navbarDropdownMenuLanguage"
                             data-aos="fade-down" data-aos-duration=".2s">
                            <a class="dropdown-item" href="#">العربية</a>
                            <a class="dropdown-item" href="#">English</a>
                        </div>
                    </li>
                    <li>
                        <!--Menu search form-->
                        <div style="direction: rtl" class="col-12 mt-lg-4 text-center">
                            <form class="form-inline mr-lg-0">
                                <input class="form-control ml-3 nav-search-item" type="search"
                                       placeholder="ابـــحـــث عـــن سؤالـــــك"
                                       style="width: 78%; height: 6vh; padding-right: 1.2rem; font-size: 1.5rem; margin-right: 17px;">
                                <button class="btn btn-primary btn-circle btn-sm my-2 my-sm-0" type="submit">
                                    <i class="fas fa-search fa-flip-horizontal"></i>
                                </button>
                            </form>
                        </div>
                    </li>
                </ul>

                <!--Menu social-->
                <div class="col-12 text-center mr-0 menu_social_container menu_mm">
                    <ul class="menu_social menu_mm">
                        <li class="menu_social_item menu_mm">
                            <a href="https://www.linkedin.com/in/yewess97/" target="_blank">
                                <div class="footer_contact_icon">
                                    <img src="images/linkedin.svg" alt="menu_contact_icon">
                                </div>
                            </a>
                        </li>
                        <li class="menu_social_item menu_mm">
                            <a href="https://www.instagram.com/yewess97/" target="_blank">
                                <div class="footer_contact_icon">
                                    <img src="images/instagram.svg" alt="menu_contact_icon">
                                </div>
                            </a>
                        </li>
                        <li class="menu_social_item menu_mm">
                            <a href="https://twitter.com/yewess97" target="_blank">
                                <div class="footer_contact_icon">
                                    <img src="images/twitter.svg" alt="menu_contact_icon">
                                </div>
                            </a>
                        </li>
                        <li class="menu_social_item menu_mm">
                            <a href="https://www.facebook.com/YousufAymooni" target="_blank">
                                <div class="footer_contact_icon">
                                    <img src="images/facebook.svg" alt="menu_contact_icon">
                                </div>
                            </a>
                        </li>

                    </ul>
                </div>

            </div>
        </div>
    </div>

    <!-- Register Modal -->
    <div class="modal fade" id="signupModal" tabindex="-1" role="dialog" aria-hidden="true" style="direction: rtl">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content border-0 p-4">
                <div class="modal-header border-0">
                    <h3 style="font-family: Cairo">التسجيـــل</h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"
                            style="margin-left: -.5em;">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <hr class="w-25 mt-0">
                <div class="modal-body">
                    <div class="login">
                        <form action="#" class="row form-register" method="post"
                              style="direction: rtl; text-align: right">
                            <div class="col-6">
                                <label class="col-12">الاسم بالكامل
                                    <input type="text" class="form-control mb-3" id="signupName" name="signupName"
                                           required="required" data-error="برجاء كتابة الاسم الثلاثي بالكامل">
                                </label>
                            </div>
                            <div class="col-6">
                                <label class="col-12">النوع
                                    <select class="input form-control mb-3" style="cursor: pointer" required
                                            id="signupGender" name="signupGender">
                                        <option value="" disabled selected hidden></option>
                                        <option value="male">ذكر</option>
                                        <option value="female">أنثى</option>
                                    </select>
                                </label>
                            </div>
                            <div class="col-6">
                                <label class="col-12">تاريخ الميلاد
                                    <input type="date" class="form-control mb-3" id="signupBirth" name="signupBirth"
                                           required="required" data-error="برجاء كتابة تاريخ الميلاد">
                                </label>
                            </div>
                            <div class="col-6">
                                <label class="col-12">الحالة الاجتماعية
                                    <select class="input form-control mb-3" aria-required="true" style="cursor: pointer"
                                            required id="signupStatus" name="signupStatus">
                                        <option value="" disabled selected hidden></option>
                                        <option value="single">أعزب/عزباء</option>
                                        <option value="married">متزوج/متزوجة</option>
                                        <option value="engaged">مخطوب/مخطوبة</option>
                                        <option value="engaged">أرمل/أرملة</option>
                                        <option value="engaged">مطلّق/مطلّقة</option>
                                    </select>
                                </label>
                            </div>
                            <div class="col-6">
                                <label class="col-12">الايميل
                                    <input type="email" class="form-control mb-3" id="signupEmail" name="signupEmail"
                                           required="required" data-error="برجاء كتابة الايميل">
                                </label>
                            </div>
                            <div class="col-6">
                                <label class="col-12">تأكيد الايميل
                                    <input type="email" class="form-control mb-3" id="signupConfirmEmail"
                                           name="signupConfirmEmail"
                                           required="required" data-error="برجاء كتابة الايميل مرة أخرى">
                                </label>
                            </div>
                            <div class="col-6">
                                <label class="col-12">كلمة السر
                                    <input type="password" class="form-control mb-3" id="signupPassword"
                                           name="signupPassword"
                                           required="required" data-error="برجاء كتابة كلمة السر">
                                </label>
                            </div>
                            <div class="col-6">
                                <label class="col-12">تأكيد كلمة السر
                                    <input type="password" class="form-control mb-3" id="signupConfirmPassword"
                                           name="signupConfirmPassword"
                                           required="required" data-error="برجاء كتابة كلمة السر مرة أخرى">
                                </label>
                            </div>
                            <div class="col-6">
                                <label class="col-12">الدولة
                                    <select class="input form-control mb-3 country" aria-required="true" style="cursor: pointer"
                                            required id="signupCountry" name="signupCountry"></select>
                                </label>
                            </div>
                            <div class="col-6">
                                <label class="col-12">الموبايل
                                    <input type="text" class="form-control mb-3" id="signupPhone"
                                           name="signupPhone"
                                           required="required" data-error="برجاء كتابة الموبايل">
                                </label>
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary">التسجيل</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!--Login Modal-->
    <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-hidden="true" style="direction: rtl">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content border-0 p-4">
                <div class="modal-header border-0">
                    <h3 style="font-family: Cairo">تسجيل الدخول</h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"
                            style="margin-left: -.5em;">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <hr class="w-25 mt-0">
                <div class="modal-body">
                    <form action="#" class="row form-register" method="post"
                          style="direction: rtl; text-align: right">
                        <div class="col-12">
                            <label class="col-12">الايميل
                                <input type="email" class="form-control mb-3" id="loginEmail" name="signupEmail"
                                       required="required" data-error="برجاء كتابة الايميل">
                            </label>
                        </div>
                        <div class="col-12">
                            <label class="col-12">كلمة السر
                                <input type="password" class="form-control mb-3" id="loginPassword"
                                       name="signupPassword"
                                       required="required" data-error="برجاء كتابة كلمة السر">
                            </label>
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary">تسجيل الدخول</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!--Home-->
    <div class="home">

        <!--Hero Slider-->
        <div class="hero_slider_container">
            <div class="hero_slider owl-carousel">

                <!--Hero Slide 1-->
                <div class="hero_slide">
                    <img src="images/carousel1.jpg" class="hero_slide_background carousel1 img-fluid">
                    <div class="overlay" style="opacity: .1;"></div>
                </div>

                <!--Hero Slide 2-->
                <div class="hero_slide">
                    <img src="images/carousel2.jpg" class="hero_slide_background carousel2 img-fluid">
                    <div class="overlay"></div>
                    <div class="hero_slide_container d-flex flex-column align-items-center justify-content-center">
                        <div class="hero_slide_content text-center">
                            <h1 style="line-height: 2em">احصل على <span>إجابات</span>
                                لأسئلتك الآن!</h1>
                        </div>
                    </div>
                </div>

                <!--Hero Slide 3-->
                <div class="hero_slide">
                    <img src="images/carousel3.jpg" class="hero_slide_background carousel3 img-fluid">
                    <div class="overlay"></div>
                    <div class="hero_slide_container d-flex flex-column align-items-center justify-content-center">
                        <div class="hero_slide_content text-center">
                            <h1 style="width: 70%; line-height: 2em">فتاوى دينية صحيحة وموثوقة</h1>
                        </div>
                    </div>
                </div>

            </div>

            <div class="hero_slider_right hero_slider_nav trans_200 rounded-circle"><span class="trans_200"><i
                    class="fas fa-chevron-right"></i></span></div>
            <div class="hero_slider_left hero_slider_nav trans_200 rounded-circle"><span class="trans_200"><i
                    class="fas fa-chevron-left"></i></span></div>
        </div>

    </div>

    <!--Hero boxes-->
    <div class="hero_boxes">
        <div class="hero_boxes_inner">
            <div class="container">
                <div class="row">

                    <!--Hero box1-->
                    <div class="col-lg-4 hero_box_col" data-aos="fade-down" data-aos-duration="1500">
                        <div class="hero_box d-flex flex-row align-items-center justify-content-start">
                            <img src="images/open-book.svg" class="svg" alt="">
                            <div class="hero_box_content">
                                <h2 class="hero_box_title text-center">تعرّف على دينك بشكل صحيح</h2>
                            </div>
                        </div>
                    </div>

                    <!--Hero box2-->
                    <div class="col-lg-4 hero_box_col" data-aos="fade-down" data-aos-duration="2200">
                        <div class="hero_box d-flex flex-row align-items-center justify-content-start">
                            <img src="images/chat.svg" class="svg" alt="">
                            <div class="hero_box_content">
                                <h2 class="hero_box_title">تعلّم كيف ترد على الشبهات</h2>
                            </div>
                        </div>
                    </div>

                    <!--Hero box3-->
                    <div class="col-lg-4 hero_box_col" data-aos="fade-down" data-aos-duration="3000">
                        <div class="hero_box d-flex flex-row align-items-center justify-content-start">
                            <img src="images/life.svg" class="svg" alt="">
                            <div class="hero_box_content">
                                <h2 class="hero_box_title">كن مدركًا لمختلف آفاق الحياة</h2>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <!--Section cards-->
    <div class="popular page_section" style="direction: rtl">
        <div class="container">
            <div class="row fatwa_boxes">
				<?php $i=0;  foreach($specializes as $specialize): ?>
                <!--Fatwa card-->
                <div class="col-lg-4 fatwa_box" data-aos="<?php $i++; if($i%2 == 0) {echo "fade-left";} else {echo "fade-right";} ?> " data-aos-duration="1300">
                    <div class="card p-0 hover-shadow">
                        <a href="#"><img class="card-img-top" src="<?php echo $specialize['image']; ?>" alt="aqida_image"></a>
                        <div class="card-body">
                            <a href="#">
                                <h4 class="card-info card-title"><?php echo $specialize['name_ar']; ?></h4>
                            </a>
                            <p class="card-text"><?php echo $specialize['description_ar']; ?></p>
                            <a href="#" class="btn btn-primary btn-sm">شاهد القسم</a>
                        </div>
                    </div>
                </div>
				<?php endforeach ?>

                <!--Fatwa card2-->
                <div class="col-lg-4 fatwa_box" data-aos="zoom-in" data-aos-duration="2000">
                    <div class="card p-0 hover-shadow">
                        <a href="#"><img class="card-img-top" src="images/tafseer.jpg" alt="aqida_image"></a>
                        <div class="card-body">
                            <a href="#">
                                <h4 class="card-info card-title">الـــتـــفـــســـيـــر</h4>
                            </a>
                            <p class="card-text">التفسير هو مجموعة من المعرفة التي تهدف إلى توضيح المعنى الحقيقي للقرآن
                                و أوامره و نواهيه و مناسبات الوحي ووقائع نزوله . يعتمد هذا البحث عن المعاني والمرادات
                                حول القرآن</p>
                            <a href="#" class="btn btn-primary btn-sm">شاهد القسم</a>
                        </div>
                        <div class="author_box d-flex flex-row align-items-center">
                            <div class="fatwa_author_image">
                                <img src="images/aqida-author.jpg" alt="author_image" class="img-fluid">
                            </div>
                            <div class="fatwa_author_name">الأستاذ ايمن أحمد، <span>متخصص التفسير</span></div>
                        </div>
                    </div>
                </div>

                <!--Fatwa card3-->
                <div class="col-lg-4 fatwa_box" data-aos="fade-right" data-aos-duration="1300">
                    <div class="card p-0 hover-shadow">
                        <a href="#"><img class="card-img-top" src="images/hadith.jpg" alt="aqida_image"></a>
                        <div class="card-body">
                            <a href="#">
                                <h4 class="card-info card-title">الحديـــث الشريـــف</h4>
                            </a>
                            <p class="card-text">الحديث النبوي الشريف هو كل ما قاله النبي محمد -صلَّ الله عليه وسلم-، أي
                                كل ما ورد عنه من قول أو فعل أو تقرير أو صفة خلقية أو صفة خلقية أو سيرة وردت عنه، سواء
                                كانت قبل البعثة أم بعدها</p>
                            <a href="#" class="btn btn-primary btn-sm">شاهد القسم</a>
                        </div>
                        <div class="author_box d-flex flex-row align-items-center">
                            <div class="fatwa_author_image">
                                <img src="images/aqida-author.jpg" alt="author_image" class="img-fluid">
                            </div>
                            <div class="fatwa_author_name long">الأستاذ أحمد محمد، <span>متخصص الحديث الشريف</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!--Fatwa card4-->
                <div class="col-lg-4 fatwa_box" data-aos="fade-left" data-aos-duration="1300">
                    <div class="card p-0 hover-shadow">
                        <a href="#"><img class="card-img-top" src="images/fiqh.jpg" alt="aqida_image"></a>
                        <div class="card-body">
                            <a href="#">
                                <h4 class="card-info card-title">الــــفــــقــــه</h4>
                            </a>
                            <p class="card-text">الْفِقْهُ في اللغة: الْفَهْمُ للشيء والعلم به، وفهم الأحكام الدقيقة
                                والمسائل الغامضة، وهو في الأصل مطلق الفهم، وغلب استعماله في العرف مخصوصا بعلم الشريعة؛
                                لشرفها على سائر العلوم</p>
                            <a href="#" class="btn btn-primary btn-sm">شاهد القسم</a>
                        </div>
                        <div class="author_box d-flex flex-row align-items-center">
                            <div class="fatwa_author_image">
                                <img src="images/aqida-author.jpg" alt="author_image" class="img-fluid">
                            </div>
                            <div class="fatwa_author_name">الأستاذ محمد عويس، <span>متخصص الفقه</span></div>
                        </div>
                    </div>
                </div>

                <!--Fatwa card5-->
                <div class="col-lg-4 fatwa_box" data-aos="zoom-in" data-aos-duration="2000">
                    <div class="card p-0 hover-shadow">
                        <a href="#"><img class="card-img-top" src="images/seerah.jpg" alt="aqida_image"></a>
                        <div class="card-body">
                            <a href="#">
                                <h4 class="card-info card-title">السيـــرة النبويـــة</h4>
                            </a>
                            <p class="card-text" style="margin-bottom: 57px">السيرة النبوية تعني مجموع ما ورد لنا من
                                وقائع حياة النبي صلَّ الله عليه وسلم، وصفاته الخُلقية والخَلقية مضافا إليها غزواته
                                وسراياه</p>
                            <a href="#" class="btn btn-primary btn-sm">شاهد القسم</a>
                        </div>
                        <div class="author_box d-flex flex-row align-items-center">
                            <div class="fatwa_author_image">
                                <img src="images/aqida-author.jpg" alt="author_image" class="img-fluid">
                            </div>
                            <div class="fatwa_author_name long">الأستاذ محمد يوسف، <span>متخصص السيرة النبوية</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!--Fatwa card6-->
                <div class="col-lg-4 fatwa_box" data-aos="fade-right" data-aos-duration="1300">
                    <div class="card p-0 hover-shadow">
                        <a href="#"><img class="card-img-top" src="images/tarbiyah.jpg" alt="aqida_image"></a>
                        <div class="card-body">
                            <a href="#">
                                <h4 class="card-info card-title">التربيـــــة الإسلاميـــــة</h4>
                            </a>
                            <p class="card-text">التربية الاسلامية تعبير يقصد به تنشئة الفرد المسلم والمجتمع الاسلامي،
                                تنشئة متكاملة يراعى فيها الجانب الروحي والمادي، في ضوء الرؤية الاسلامية الشاملة</p>
                            <a href="#" class="btn btn-primary btn-sm">شاهد القسم</a>
                        </div>
                        <div class="author_box d-flex flex-row align-items-center">
                            <div class="fatwa_author_image">
                                <img src="images/aqida-author.jpg" alt="author_image" class="img-fluid">
                            </div>
                            <div class="fatwa_author_name long">الأستاذ عبدالله أحمد،
                                <span>متخصص التربية الإسلامية</span></div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>


    <!--Register & Search form-->
    <div class="register">
        <div class="container-fluid">
            <div class="row row-eq-height">

                <div class="col-lg-6 nopadding">

                    <!--Register-->
                    <div class="register_section d-flex flex-column align-items-center justify-content-center">
                        <div class="register_content text-center">
                            <h1 class="register_title">بادر بالتسجيل الآن وتعرّف على مختلف الأسئلة والأجوبة
                                الإسلامية</h1>
                            <p class="register_text">موقع فتاوى يوفر اسئلة وأجوبة في مختلف أقسام الدين الإسلامي ليفتح لك
                                آفاقًا جديدة في التعلّم</p>
                            <div class="button_1 register_button mx-auto trans_200" data-toggle="modal"
                                 data-target="#signupModal"><a href="#">سجل</a>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-lg-6 nopadding">

                    <!--Search-->
                    <div class="search_section d-flex flex-column align-items-center justify-content-center">
                        <div class="search_background" style="background-image:url(images/search_background.jpg)"></div>
                        <div class="overlay" style="opacity: 0.15"></div>
                        <div class="search_content text-center">
                            <h1 class="search_title">ارسل لنــا سؤالك</h1>
                            <form id="search_form" class="search_form" action="" method="post">
                                <input id="search_form_title" class="search_form_title input_field" type="text" placeholder="موضــــوع الســــؤال"
                                       required="required" data-error="يرجى إدخال موضوع السؤال" style="font-family: DroidArabicNaskh">
                                <select id="search_form_category" class="search_form_category input_field" type="text"
                                        required="required" data-error="اختر قسم السؤال">
                                    <option value="section-fatwa" disabled selected hidden>اختر القسم</option>
                                    <option value="aqidah">العقيدة</option>
                                    <option value="tafseer">التفسير</option>
                                    <option value="hadith">الحديث الشريف</option>
                                    <option value="fiqh">الفقه</option>
                                    <option value="seerah">السيرة النبوية</option>
                                    <option value="tarbiyah">التربية الإسلامية</option>
                                </select>
                                <textarea id="search_form_question" class="search_form_question" type="text"
                                          placeholder="اكتب سؤالك هنا" required="required"
                                          data-error="البعض من السؤال مطلوب" style="font-family: DroidArabicNaskh"></textarea>
                                <button id="search_submit_button" type="submit" class="search_submit_button trans_200"
                                        value="Submit">ارسل
                                </button>
                            </form>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>

    <!--Footer-->
    <footer class="footer">
        <div class="container">

            <!--Newsletter-->
            <div class="newsletter">
                <div class="row">
                    <div class="col">
                        <div class="section_title text-center">
                            <h1>شارك في تحديثات موقع فتاوى</h1>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col text-center">
                        <div class="newsletter_form_container mx-auto">
                            <form action="" method="post">
                                <div class="newsletter_form d-flex flex-md-row flex-column flex-xs-column align-items-center justify-content-center">
                                    <input id="newsletter_email" class="newsletter_email" type="email"
                                           placeholder="الايميل" required="required"
                                           data-error="يرجى إدخال الايميل بشكل صحيح">
                                    <button id="newsletter_submit" type="submit" class="newsletter_submit_btn trans_300"
                                            value="Submit">اشتـــــرك
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>

            <!--Footer content-->
            <div class="col-lg-12 footer_content">
                <div class="row">

                    <!--Footer Column - About-->
                    <div class="col-lg-4 footer_col">
                        <div class="footer_column_title">من نحن</div>
                        <div class="footer_column_content">
                            <ul>
                                <li class="footer_list_item"><a href="#">حول الموقع</a></li>
                            </ul>
                        </div>
                    </div>

                    <!--Footer Column - Menu-->
                    <div class="col-lg-4 footer_col">
                        <div class="footer_column_title">روابط سريعة</div>
                        <div class="footer_column_content">
                            <ul>
                                <li class="footer_list_item"><a href="#">الرئيسية</a></li>
                                <li class="footer_list_item"><a href="#">العقيدة</a></li>
                                <li class="footer_list_item"><a href="#">التفسير</a></li>
                                <li class="footer_list_item"><a href="#">الحديث الشريف</a></li>
                                <li class="footer_list_item"><a href="#">السيرة النبوية</a></li>
                                <li class="footer_list_item"><a href="#">الفقه</a></li>
                                <li class="footer_list_item"><a href="#">التربية الإسلامية</a></li>
                                <li class="footer_list_item"><a href="#">عنا</a></li>
                                <li class="footer_list_item"><a href="#">تواصل معنا</a></li>
                            </ul>
                        </div>
                    </div>

                    <!--Footer Column - Contact-->
                    <div class="col-lg-4 footer_col">
                        <div class="footer_column_title">للتواصل</div>
                        <div class="footer_column_content">
                            <ul>
                                <li class="footer_contact_item">
                                    <div class="footer_contact_icon">
                                        <img src="images/location.svg" alt="footer_location_icon">
                                    </div>
                                    <a href="#" style="font-size: .8rem">شارع المهندسين المتفرع من شارع الجمهورية</a>
                                </li>
                                <li class="footer_contact_item">
                                    <div class="footer_contact_icon">
                                        <img src="images/phone.svg" alt="footer_contact_icon">
                                    </div>
                                    <a href="https://wa.me/+201011836243" target="_blank">01011836243</a>
                                </li>
                                <li class="footer_contact_item">
                                    <div class="footer_contact_icon">
                                        <img src="images/email.svg" alt="footer_contact_icon">
                                    </div>
                                    <a href="#" target="_blank">fatawa@support.com</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>

            <!--Footer copyright-->
            <div class="footer_bar d-flex flex-column flex-sm-row align-items-center">
                <div class="footer_copyright col-6">
                    <span>&copy; جميع الحقوق محفوظة لدى <i class="fa fa-heart" aria-hidden="true"> </i><a
                            href="https://www.facebook.com/YousufAymooni" target="_blank">يوسف ايمن</a> <script>document.write(new Date().getFullYear());</script></span>
                </div>
                <div class="footer_social ml-sm-auto col-6">
                    <ul class="menu_social text-lg-left">
                        <li class="menu_social_item"><a href="https://www.linkedin.com/in/yewess97/"
                                                        style="color: #4a4afa">
                            <i class="fab fa-linkedin-in"></i></a>
                        </li>
                        <li class="menu_social_item"><a href="https://www.instagram.com/yewess97/"
                                                        style="color: #ec0000">
                            <i class="fab fa-instagram"></i></a>
                        </li>
                        <li class="menu_social_item"><a href="https://twitter.com/yewess97" style="color: #01b4de">
                            <i class="fab fa-twitter"></i></a>
                        </li>
                        <li class="menu_social_item"><a href="https://www.facebook.com/YousufAymooni"
                                                        style="color: #0024ee">
                            <i class="fab fa-facebook-f"></i></a>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
    </footer>

</div>

<a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

<!--Scripts-->
<script type="text/javascript" src="js/jquery-3.5.1.min.js"></script>
<script type="text/javascript" src="js/popper.min.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="assets/greensock/TweenMax.min.js"></script>
<script type="text/javascript" src="assets/greensock/TimelineMax.min.js"></script>
<script type="text/javascript" src="assets/scrollmagic/ScrollMagic.min.js"></script>
<script type="text/javascript" src="assets/greensock/animation.gsap.min.js"></script>
<script type="text/javascript" src="assets/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script type="text/javascript" src="assets/easing/easing.js"></script>
<script type="text/javascript" src="assets/aos/aos.js"></script>
<script type="text/javascript" src="assets/venobox/venobox.min.js"></script>
<script type="text/javascript" src="assets/filterizr/jquery.filterizr.min.js"></script>
<script type="text/javascript" src="js/custom.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<script>
    AOS.init();
</script>
<!--End Scripts-->
</body>
</html>