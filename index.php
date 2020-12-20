<?php
	
	require_once('php/specializes.php');
	$specializes = get_all();
	
	
	
	require_once('header.php');
?>


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
                <div class="col-lg-4 fatwa_box" data-aos="<?php $i++; if($i%3 == 1) {echo "fade-left";} elseif($i%3 == 2){echo "zoom-in";} elseif($i%3 == 0){echo "fade-right";}?>" data-aos-duration="1300">
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