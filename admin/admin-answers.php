
<?php require_once('header.php'); ?>
    <!--Edit answer questions modal-->
    <div class="modal fade" id="editAnswer" tabindex="-1" role="dialog" aria-hidden="true" style="direction: rtl">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content border-0 p-4">
                <div class="modal-header border-0">
                    <h3 style="font-family: Cairo">تعديل الإجابة</h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"
                            style="margin-left: -.5em;">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <hr class="w-25 mt-0">
                <div class="modal-body">
                    <div class="login">
                        <form action="#" class="row form-register text-right" method="post"
                              style="direction: rtl">
                            <label class="col-12 mb-5" style="cursor: text">السؤال رقم:
                                <span style="font-family: NotoKufiArabic; color: #000000">1</span>
                            </label>
                            <label class="col-12 mb-5" style="cursor: text">القسم:
                                <span style="font-family: NotoKufiArabic; color: #000000">العقيدة</span>
                            </label>
                            <label class="col-12 mb-4">الشيخ المجيب
                                <select class="input form-control" aria-required="true" style="cursor: pointer; height: 2.5rem"
                                        required id="questionEditSpecialize" name="questionEditSpecialize">
                                    <option value="" disabled selected hidden></option>
                                    <option value="">أحمد محمد</option>
                                    <option value="">رؤوف عبدالسميع</option>
                                    <option value="">عماد عبدالرحيم</option>
                                    <option value="">حامد رمزي</option>
                                    <option value="">سالم سليم</option>
                                    <option value="">لطفي لطيف</option>
                                </select>
                            </label>
                            <textarea class="form-control pb-5 col-12" type="text"
                                      placeholder="الإجابة بعد التعديل" required="required"
                                      data-error="الإجابة مطلوبة"
                                      style="font-family: DroidArabicNaskh; color: #000000"></textarea>
                            <div>
                                <button type="submit" class="btn btn-primary mt-3">تعديـــل</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>


<div id="main" style="direction: rtl; text-align: right">

    <!--Answers-->
    <section id="answers" class="admin-section">
        <div class="container">

            <div class="section-title">
                <h2>الأجــوبـــة</h2>
            </div>

            <div class="row">
                <div style="overflow-x: auto">
                    <table class="table table-bordered table-striped w-100">
                        <thead>
                        <tr class="text-center" style="color: #303030; font-family: NotoKufiArabic; font-weight: 700">
                            <th class="bg-light" scope="col">#</th>
                            <th class="bg-light" scope="col" style="width: 60%">الإجابة</th>
                            <th class="bg-light" scope="col">السؤال</th>
                            <th class="bg-light" scope="col" style="width: 15%">القسم</th>
                            <th class="bg-light" scope="col" style="width: 17%">الشيخ المجيب</th>
                            <th class="bg-light" scope="col" style="width: 25%">أدوات التحكم</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr style="font-family: DroidArabicNaskh; line-height: 1.8rem">
                            <th scope="row">1</th>
                            <td>
                                هايكون مسموح بعدد حروف معينة وبعدها يعمل 3 نقط ويظهر كلمة المزيد بحيث كلمة المزيد تودّيه عالصفحة اللي فيها الإجابة
                            </td>
                            <td>1</td>
                            <td>العقيدة</td>
                            <td>أحمد محمد</td>
                            <td>
                                <div class="col-12 d-flex text-center border-bottom-0" style="padding-left: 0">
                                    <div class="col-6">
                                        <button type="button" class="button btn btn-info" data-toggle="modal" data-target="#editAnswer">تعديل</button>
                                    </div>
                                    <div class="col-6">
                                        <button type="button" class="button btn btn-danger">حذف</button>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr style="font-family: DroidArabicNaskh; line-height: 1.8rem">
                            <th scope="row">2</th>
                            <td>
                                هايكون مسموح بعدد حروف معينة وبعدها يعمل 3 نقط ويظهر كلمة المزيد بحيث كلمة المزيد تودّيه عالصفحة اللي فيها الإجابة
                            </td>
                            <td>2</td>
                            <td>التفسير</td>
                            <td>أحمد محمد</td>
                            <td>
                                <div class="col-12 d-flex text-center border-bottom-0" style="padding-left: 0">
                                    <div class="col-6">
                                        <button type="button" class="button btn btn-info" data-toggle="modal" data-target="#editAnswer">تعديل</button>
                                    </div>
                                    <div class="col-6">
                                        <button type="button" class="button btn btn-danger">حذف</button>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr style="font-family: DroidArabicNaskh; line-height: 1.8rem">
                            <th scope="row">3</th>
                            <td>
                                هايكون مسموح بعدد حروف معينة وبعدها يعمل 3 نقط ويظهر كلمة المزيد بحيث كلمة المزيد تودّيه عالصفحة اللي فيها الإجابة
                            </td>
                            <td>3</td>
                            <td>الحديث</td>
                            <td>أحمد محمد</td>
                            <td>
                                <div class="col-12 d-flex text-center border-bottom-0" style="padding-left: 0">
                                    <div class="col-6">
                                        <button type="button" class="button btn btn-info" data-toggle="modal" data-target="#editAnswer">تعديل</button>
                                    </div>
                                    <div class="col-6">
                                        <button type="button" class="button btn btn-danger">حذف</button>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr style="font-family: DroidArabicNaskh; line-height: 1.8rem">
                            <th scope="row">4</th>
                            <td>
                                هايكون مسموح بعدد حروف معينة وبعدها يعمل 3 نقط ويظهر كلمة المزيد بحيث كلمة المزيد تودّيه عالصفحة اللي فيها الإجابة
                            </td>
                            <td>4</td>
                            <td>السيرة</td>
                            <td>أحمد محمد</td>
                            <td>
                                <div class="col-12 d-flex text-center border-bottom-0" style="padding-left: 0">
                                    <div class="col-6">
                                        <button type="button" class="button btn btn-info" data-toggle="modal" data-target="#editAnswer">تعديل</button>
                                    </div>
                                    <div class="col-6">
                                        <button type="button" class="button btn btn-danger">حذف</button>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr style="font-family: DroidArabicNaskh; line-height: 1.8rem">
                            <th scope="row">5</th>
                            <td>
                                هايكون مسموح بعدد حروف معينة وبعدها يعمل 3 نقط ويظهر كلمة المزيد بحيث كلمة المزيد تودّيه عالصفحة اللي فيها الإجابة
                            </td>
                            <td>5</td>
                            <td>الفقه</td>
                            <td>أحمد محمد</td>
                            <td>
                                <div class="col-12 d-flex text-center border-bottom-0" style="padding-left: 0">
                                    <div class="col-6">
                                        <button type="button" class="button btn btn-info" data-toggle="modal" data-target="#editAnswer">تعديل</button>
                                    </div>
                                    <div class="col-6">
                                        <button type="button" class="button btn btn-danger">حذف</button>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr style="font-family: DroidArabicNaskh; line-height: 1.8rem">
                            <th scope="row">6</th>
                            <td>
                                هايكون مسموح بعدد حروف معينة وبعدها يعمل 3 نقط ويظهر كلمة المزيد بحيث كلمة المزيد تودّيه عالصفحة اللي فيها الإجابة
                            </td>
                            <td>6</td>
                            <td>التربية الإسلامية</td>
                            <td>أحمد محمد</td>
                            <td>
                                <div class="col-12 d-flex text-center border-bottom-0" style="padding-left: 0">
                                    <div class="col-6">
                                        <button type="button" class="button btn btn-info" data-toggle="modal" data-target="#editAnswer">تعديل</button>
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
        </div>
    </section>

</div>


<?php require_once('footer.php'); ?>