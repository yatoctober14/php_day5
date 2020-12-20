<?php require_once('header.php'); ?>
    <!--Register users modal-->
    <div class="modal fade" id="signupModal" tabindex="-1" role="dialog" aria-hidden="true" style="direction: rtl">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content border-0 p-4">
                <div class="modal-header border-0">
                    <h3 style="font-family: Cairo">التسجيل (للمستخدمين)</h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"
                            style="margin-left: -.5em;">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <hr class="w-50 mt-0">
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
                                    <select class="input form-control mb-4 country" aria-required="true" style="cursor: pointer"
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
                            <div class="col-12 mb-4">
                                <label class="col-12 checkbox">أوافق على الشروط والأحكام
                                    <input type="checkbox" id="signupRemember"
                                           name="signupRemember" required="required">
                                    <span class="checkmark"></span>
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

    <!--Add admins modal-->
    <div class="modal fade" id="signupAdminModal" tabindex="-1" role="dialog" aria-hidden="true" style="direction: rtl">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content border-0 p-4">
                <div class="modal-header border-0">
                    <h3 style="font-family: Cairo">تسجيل شيخ</h3>
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
                                    <input type="text" class="form-control mb-3" id="signupAdminName" name="signupName"
                                           required="required" data-error="برجاء كتابة الاسم الثلاثي بالكامل">
                                </label>
                            </div>
                            <div class="col-6">
                                <label class="col-12">النوع
                                    <select class="input form-control mb-3" style="cursor: pointer" required
                                            id="signupAdminGender" name="signupGender">
                                        <option value="" disabled selected hidden></option>
                                        <option value="male">ذكر</option>
                                        <option value="female">أنثى</option>
                                    </select>
                                </label>
                            </div>
                            <div class="col-6">
                                <label class="col-12">تاريخ الميلاد
                                    <input type="date" class="form-control mb-3" id="signupAdminBirth"
                                           name="signupBirth"
                                           required="required" data-error="برجاء كتابة تاريخ الميلاد">
                                </label>
                            </div>
                            <div class="col-6">
                                <label class="col-12">الحالة الاجتماعية
                                    <select class="input form-control mb-3" aria-required="true" style="cursor: pointer"
                                            required id="signupAdminStatus" name="signupStatus">
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
                                    <input type="email" class="form-control mb-3" id="signupAdminEmail"
                                           name="signupEmail"
                                           required="required" data-error="برجاء كتابة الايميل">
                                </label>
                            </div>
                            <div class="col-6">
                                <label class="col-12">تأكيد الايميل
                                    <input type="email" class="form-control mb-3" id="signupAdminConfirmEmail"
                                           name="signupConfirmEmail"
                                           required="required" data-error="برجاء كتابة الايميل مرة أخرى">
                                </label>
                            </div>
                            <div class="col-6">
                                <label class="col-12">كلمة السر
                                    <input type="password" class="form-control mb-3" id="signupAdminPassword"
                                           name="signupPassword"
                                           required="required" data-error="برجاء كتابة كلمة السر">
                                </label>
                            </div>
                            <div class="col-6">
                                <label class="col-12">تأكيد كلمة السر
                                    <input type="password" class="form-control mb-3" id="signupAdminConfirmPassword"
                                           name="signupConfirmPassword"
                                           required="required" data-error="برجاء كتابة كلمة السر مرة أخرى">
                                </label>
                            </div>
                            <div class="col-6">
                                <label class="col-12">الدولة
                                    <select class="input form-control mb-3 country" aria-required="true" style="cursor: pointer"
                                            required id="signupAdminCountry" name="signupCountry"></select>
                                </label>
                            </div>
                            <div class="col-6">
                                <label class="col-12">الموبايل
                                    <input type="text" class="form-control mb-3" id="signupAdminPhone"
                                           name="signupPhone"
                                           required="required" data-error="برجاء كتابة الموبايل">
                                </label>
                            </div>
                            <div class="col-12">
                                <label class="col-12">التخصص
                                    <select class="input form-control mb-3" aria-required="true" style="cursor: pointer"
                                            required id="signupSpecialize" name="signupStatus">
                                        <option value="" disabled selected hidden></option>
                                        <option value="aqidah">العقيدة</option>
                                        <option value="tafseer">التفسير</option>
                                        <option value="hadith">الحديث</option>
                                        <option value="seerah">السيرة النبوية</option>
                                        <option value="fiqh">الفقه</option>
                                        <option value="tarbiyah">التربية الإسلامية</option>
                                    </select>
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


    <!--Edit admins data modal-->
    <div class="modal fade" id="editAdminModal" tabindex="-1" role="dialog" aria-hidden="true" style="direction: rtl">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content border-0 p-4">
                <div class="modal-header border-0">
                    <h3 style="font-family: Cairo">تعديل بيانات الشيخ</h3>
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
                                    <input type="text" class="form-control mb-3" id="editAdminName" name="editAdminName"
                                           required="required" data-error="برجاء كتابة الاسم الثلاثي بالكامل">
                                </label>
                            </div>
                            <div class="col-6">
                                <label class="col-12">النوع
                                    <select class="input form-control mb-3" style="cursor: pointer" required
                                            id="editAdminGender" name="editAdminGender">
                                        <option value="" disabled selected hidden></option>
                                        <option value="male">ذكر</option>
                                        <option value="female">أنثى</option>
                                    </select>
                                </label>
                            </div>
                            <div class="col-6">
                                <label class="col-12">تاريخ الميلاد
                                    <input type="date" class="form-control mb-3" id="editAdminBirth"
                                           name="editAdminBirth"
                                           required="required" data-error="برجاء كتابة تاريخ الميلاد">
                                </label>
                            </div>
                            <div class="col-6">
                                <label class="col-12">الحالة الاجتماعية
                                    <select class="input form-control mb-3" aria-required="true" style="cursor: pointer"
                                            required id="editAdminStatus" name="editAdminStatus">
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
                                    <input type="email" class="form-control mb-3" id="editAdminEmail"
                                           name="editAdminEmail"
                                           required="required" data-error="برجاء كتابة الايميل">
                                </label>
                            </div>
                            <div class="col-6">
                                <label class="col-12">تأكيد الايميل
                                    <input type="email" class="form-control mb-3" id="editAdminConfirmEmail"
                                           name="editAdminConfirmEmail"
                                           required="required" data-error="برجاء كتابة الايميل مرة أخرى">
                                </label>
                            </div>
                            <div class="col-6">
                                <label class="col-12">كلمة السر
                                    <input type="password" class="form-control mb-3" id="editAdminPassword"
                                           name="editAdminPassword"
                                           required="required" data-error="برجاء كتابة كلمة السر">
                                </label>
                            </div>
                            <div class="col-6">
                                <label class="col-12">تأكيد كلمة السر
                                    <input type="password" class="form-control mb-3" id="editAdminConfirmPassword"
                                           name="editAdminConfirmPassword"
                                           required="required" data-error="برجاء كتابة كلمة السر مرة أخرى">
                                </label>
                            </div>
                            <div class="col-6">
                                <label class="col-12">الدولة
                                    <select class="input form-control mb-3 country" aria-required="true" style="cursor: pointer"
                                            required id="editAdminCountry" name="editAdminCountry"></select>
                                </label>
                            </div>
                            <div class="col-6">
                                <label class="col-12">الموبايل
                                    <input type="text" class="form-control mb-3" id="editAdminPhone"
                                           name="editAdminPhone"
                                           required="required" data-error="برجاء كتابة الموبايل">
                                </label>
                            </div>
                            <div class="col-12">
                                <label class="col-12">التخصص
                                    <select class="input form-control mb-3" aria-required="true" style="cursor: pointer"
                                            required id="editSpecialize" name="editSpecialize">
                                        <option value="" disabled selected hidden></option>
                                        <option value="aqidah">العقيدة</option>
                                        <option value="tafseer">التفسير</option>
                                        <option value="hadith">الحديث</option>
                                        <option value="seerah">السيرة النبوية</option>
                                        <option value="fiqh">الفقه</option>
                                        <option value="tarbiyah">التربية الإسلامية</option>
                                    </select>
                                </label>
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary">التعديـــل</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>



<div id="main" style="direction: rtl; text-align: right">

    <!--Admins-->
    <section id="admins" class="admin-section">
        <div class="container">

            <div class="section-title">
                <h2>الشيـــوخ</h2>
            </div>

            <div class="row">
                <div style="overflow-x: auto">
                    <table class="table table-bordered table-striped w-100">
                        <thead>
                        <tr class="text-center" style="color: #303030; font-family: NotoKufiArabic; font-weight: 700">
                            <th class="bg-light" scope="col" style="width: 4%">#</th>
                            <th class="bg-light" scope="col" style="width: 27%">الاسم</th>
                            <th class="bg-light" scope="col" style="width: 8%">السن</th>
                            <th class="bg-light" scope="col" style="width: 10%">النوع</th>
                            <th class="bg-light" scope="col" style="width: 14%">الدولة</th>
                            <th class="bg-light" scope="col" style="width: 10%">التخصص</th>
                            <th class="bg-light" scope="col" style="width: 30%">لوحة التحكم</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr style="font-family: DroidArabicNaskh; line-height: 1.8rem">
                            <th scope="row">1</th>
                            <td>يوسف ايمن</td>
                            <td>23</td>
                            <td>ذكر</td>
                            <td>مصر</td>
                            <td>العقيدة</td>
                            <td>
                                <div class="col-12 d-flex text-center border-bottom-0" style="padding-left: 0">
                                    <div class="col-6">
                                        <button type="button" class="button btn btn-info" data-toggle="modal"
                                                data-target="#editAdminModal">تعديل
                                        </button>
                                    </div>
                                    <div class="col-6">
                                        <button type="button" class="button btn btn-danger">حذف</button>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr style="font-family: DroidArabicNaskh; line-height: 1.8rem">
                            <th scope="row">2</th>
                            <td>يوسف ايمن</td>
                            <td>23</td>
                            <td>ذكر</td>
                            <td>المملكة العربية السعودية</td>
                            <td>التفسير</td>
                            <td>
                                <div class="col-12 d-flex text-center border-bottom-0" style="padding-left: 0">
                                    <div class="col-6">
                                        <button type="button" class="button btn btn-info" data-toggle="modal"
                                                data-target="#editAdminModal">تعديل
                                        </button>
                                    </div>
                                    <div class="col-6">
                                        <button type="button" class="button btn btn-danger">حذف</button>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr style="font-family: DroidArabicNaskh; line-height: 1.8rem">
                            <th scope="row">3</th>
                            <td>يوسف ايمن</td>
                            <td>23</td>
                            <td>ذكر</td>
                            <td>الأردن</td>
                            <td>الحديث</td>
                            <td>
                                <div class="col-12 d-flex text-center border-bottom-0" style="padding-left: 0">
                                    <div class="col-6">
                                        <button type="button" class="button btn btn-info" data-toggle="modal"
                                                data-target="#editAdminModal">تعديل
                                        </button>
                                    </div>
                                    <div class="col-6">
                                        <button type="button" class="button btn btn-danger">حذف</button>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr style="font-family: DroidArabicNaskh; line-height: 1.8rem">
                            <th scope="row">4</th>
                            <td>يوسف ايمن</td>
                            <td>23</td>
                            <td>ذكر</td>
                            <td>لبنان</td>
                            <td>السيرة</td>
                            <td>
                                <div class="col-12 d-flex text-center border-bottom-0" style="padding-left: 0">
                                    <div class="col-6">
                                        <button type="button" class="button btn btn-info" data-toggle="modal"
                                                data-target="#editAdminModal">تعديل
                                        </button>
                                    </div>
                                    <div class="col-6">
                                        <button type="button" class="button btn btn-danger">حذف</button>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr style="font-family: DroidArabicNaskh; line-height: 1.8rem">
                            <th scope="row">5</th>
                            <td>يوسف ايمن</td>
                            <td>23</td>
                            <td>ذكر</td>
                            <td>المغرب</td>
                            <td>الفقه</td>
                            <td>
                                <div class="col-12 d-flex text-center border-bottom-0" style="padding-left: 0">
                                    <div class="col-6">
                                        <button type="button" class="button btn btn-info" data-toggle="modal"
                                                data-target="#editAdminModal">تعديل
                                        </button>
                                    </div>
                                    <div class="col-6">
                                        <button type="button" class="button btn btn-danger">حذف</button>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr style="font-family: DroidArabicNaskh; line-height: 1.8rem">
                            <th scope="row">6</th>
                            <td>يوسف ايمن</td>
                            <td>23</td>
                            <td>ذكر</td>
                            <td>الجزائر</td>
                            <td>التربية الإسلامية</td>
                            <td>
                                <div class="col-12 d-flex text-center border-bottom-0" style="padding-left: 0">
                                    <div class="col-6">
                                        <button type="button" class="button btn btn-info" data-toggle="modal"
                                                data-target="#editAdminModal">تعديل
                                        </button>
                                    </div>
                                    <div class="col-6">
                                        <button type="button" class="button btn btn-danger">حذف</button>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <button type="button" class="btn btn-primary float-left pl-5 pr-5 mt-3 ml-4" data-toggle="modal"
                    data-target="#signupAdminModal">إضافــــة شيـــخ
            </button>
        </div>
    </section>

</div>
<?php require_once('footer.php'); ?>
