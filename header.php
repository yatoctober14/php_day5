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
                            <a href="admin.php" target="_blank">لوحة التحكم</a>
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