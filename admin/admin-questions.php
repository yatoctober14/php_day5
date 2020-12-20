<?php require_once('header.php'); ?>
    <!--Add questions modal-->
    <div class="modal fade" id="addQuestion" tabindex="-1" role="dialog" aria-hidden="true" style="direction: rtl">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content border-0 p-4">
                <div class="modal-header border-0">
                    <h3 style="font-family: Cairo">إضافة سؤال</h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"
                            style="margin-left: -.5em;">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <hr class="w-25 mt-0">
                <div class="modal-body">
                    <div class="login">
                        <form action="#" class="row form-register" method="post" style="direction: rtl; text-align: right">
                            <div class="col-12">
                                <label class="col-12">موضوع السؤال
                                    <input type="text" class="form-control mb-3" id="questionTitle" name="questionTitle"
                                           required="required" data-error="برجاء كتابة موضوع السؤال" style="font-family: DroidArabicNaskh; height: 2.5rem">
                                </label>
                            </div>
                            <div class="col-12">
                                <label class="col-12">القسم
                                    <select class="input form-control mb-3" aria-required="true" style="cursor: pointer; height: 2.5rem"
                                            required id="questionSpecialize" name="questionSpecialize">
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
                            <textarea class="form-control pb-5 col-12" type="text"
                                      placeholder="اكتب سؤالك هنا" required="required"
                                      data-error="السؤال مطلوب"  style="font-family: DroidArabicNaskh"></textarea>
                            </div>
                            <div class="col-12 mt-3">
                                <button type="submit" class="btn btn-primary">إضافة</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--Answer questions modal-->
    <div class="modal fade" id="answerQuestions" tabindex="-1" role="dialog" aria-hidden="true" style="direction: rtl">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content border-0 p-4">
                <div class="modal-header border-0">
                    <h3 style="font-family: Cairo">إجابة السؤال</h3>
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
                            <label class="col-12 mb-5" style="cursor: text">موضوع السؤال:
                                <span style="font-family: NotoKufiArabic; color: #000000">لدي إشكال كبير حول فهم المرتبة الأولى من مراتب الإيمان بالقدر !</span>
                            </label>
                            <label class="col-12 mb-5" style="cursor: text">القسم:
                                <span style="font-family: NotoKufiArabic; color: #000000">العقيدة</span>
                            </label>
                            <textarea class="form-control pb-5 col-12" type="text"
                                      placeholder="الإجـــــــابـــــة" required="required"
                                      data-error="الإجابة مطلوبة"
                                      style="font-family: DroidArabicNaskh; color: #000000"></textarea>
                            <div>
                                <button type="submit" class="btn btn-primary mt-3">أجــــب</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--Edit questions modal-->
    <div class="modal fade" id="editQuestion" tabindex="-1" role="dialog" aria-hidden="true" style="direction: rtl">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content border-0 p-4">
                <div class="modal-header border-0">
                    <h3 style="font-family: Cairo">تعديل السؤال</h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"
                            style="margin-left: -.5em;">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <hr class="w-25 mt-0">
                <div class="modal-body">
                    <div class="login">
                        <form action="#" class="row form-register" method="post" style="direction: rtl; text-align: right">
                            <div class="col-12">
                                <label class="col-12">موضوع السؤال
                                    <input type="text" class="form-control mb-3" id="questionEditTitle" name="questionEditTitle"
                                           required="required" data-error="برجاء كتابة موضوع السؤال" style="font-family: DroidArabicNaskh; height: 2.5rem">
                                </label>
                            </div>
                            <div class="col-12">
                                <label class="col-12">القسم
                                    <select class="input form-control mb-3" aria-required="true" style="cursor: pointer; height: 2.5rem"
                                            required id="questionEditSpecialize" name="questionEditSpecialize">
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
                            <textarea class="form-control pb-5 col-12" type="text"
                                      placeholder="اكتب السؤال هنا بعد التعديل" required="required"
                                      data-error="السؤال مطلوب"  style="font-family: DroidArabicNaskh"></textarea>
                            </div>
                            <div class="col-12 mt-3">
                                <button type="submit" class="btn btn-primary">تعديـــل</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<div id="main" style="direction: rtl; text-align: right">

    <!--Questions-->
    <section id="questions" class="admin-section">
        <div class="container">

            <div class="section-title">
                <h2>الأســئــلــة</h2>
            </div>

            <div class="row">
                <div style="overflow-x: auto">
                    <table class="table table-bordered table-striped w-100">
                        <thead>
                        <tr class="text-center" style="color: #303030; font-family: NotoKufiArabic; font-weight: 700">
                            <th class="bg-light" scope="col">#</th>
                            <th class="bg-light" scope="col">الــســؤال</th>
                            <th class="bg-light" scope="col">اسم المستخدم</th>
                            <th class="bg-light" scope="col" style="width: 10%">القسم</th>
                            <th class="bg-light" scope="col" style="width: 25%">أدوات التحكم</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr style="font-family: DroidArabicNaskh; line-height: 1.8rem">
                            <th scope="row">1</th>
                            <td>
                                لدي إشكال كبير حول فهم المرتبة الأولى من مراتب الإيمان بالقدر !
                            </td>
                            <td>يوسف ايمن</td>
                            <td>العقيدة</td>
                            <td>
                                <div class="col-12 d-flex text-center border-bottom-0" style="padding-left: 0">
                                    <div class="col-4">
                                        <button type="button" class="button btn btn-success" data-toggle="modal"
                                                data-target="#answerQuestions">الإجابة
                                        </button>
                                    </div>
                                    <div class="col-4">
                                        <button type="button" class="button btn btn-info" data-toggle="modal" data-target="#editQuestion">تعديل</button>
                                    </div>
                                    <div class="col-4">
                                        <button type="button" class="button btn btn-danger">حذف</button>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr style="font-family: DroidArabicNaskh; line-height: 1.8rem">
                            <th scope="row">2</th>
                            <td>
                                لدي إشكال كبير حول فهم المرتبة الأولى من مراتب الإيمان بالقدر !
                            </td>
                            <td>Yousif Ayman</td>
                            <td>التفسير</td>
                            <td>
                                <div class="col-12 d-flex text-center border-bottom-0" style="padding-left: 0">
                                    <div class="col-4">
                                        <button type="button" class="button btn btn-success" data-toggle="modal"
                                                data-target="#answerQuestions">الإجابة
                                        </button>
                                    </div>
                                    <div class="col-4">
                                        <button type="button" class="button btn btn-info" data-toggle="modal" data-target="#editQuestion">تعديل</button>
                                    </div>
                                    <div class="col-4">
                                        <button type="button" class="button btn btn-danger">حذف</button>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr style="font-family: DroidArabicNaskh; line-height: 1.8rem">
                            <th scope="row">3</th>
                            <td>
                                لدي إشكال كبير حول فهم المرتبة الأولى من مراتب الإيمان بالقدر !
                            </td>
                            <td>عبدالله عبدالسلام</td>
                            <td>الحديث</td>
                            <td>
                                <div class="col-12 d-flex text-center border-bottom-0" style="padding-left: 0">
                                    <div class="col-4">
                                        <button type="button" class="button btn btn-success" data-toggle="modal"
                                                data-target="#answerQuestions">الإجابة
                                        </button>
                                    </div>
                                    <div class="col-4">
                                        <button type="button" class="button btn btn-info" data-toggle="modal" data-target="#editQuestion">تعديل</button>
                                    </div>
                                    <div class="col-4">
                                        <button type="button" class="button btn btn-danger">حذف</button>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr style="font-family: DroidArabicNaskh; line-height: 1.8rem">
                            <th scope="row">4</th>
                            <td>
                                لدي إشكال كبير حول فهم المرتبة الأولى من مراتب الإيمان بالقدر !
                            </td>
                            <td>رانيا أحمد</td>
                            <td>السيرة</td>
                            <td>
                                <div class="col-12 d-flex text-center border-bottom-0" style="padding-left: 0">
                                    <div class="col-4">
                                        <button type="button" class="button btn btn-success" data-toggle="modal"
                                                data-target="#answerQuestions">الإجابة
                                        </button>
                                    </div>
                                    <div class="col-4">
                                        <button type="button" class="button btn btn-info" data-toggle="modal" data-target="#editQuestion">تعديل</button>
                                    </div>
                                    <div class="col-4">
                                        <button type="button" class="button btn btn-danger">حذف</button>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr style="font-family: DroidArabicNaskh; line-height: 1.8rem">
                            <th scope="row">5</th>
                            <td>
                                لدي إشكال كبير حول فهم المرتبة الأولى من مراتب الإيمان بالقدر !
                            </td>
                            <td>salwa mahmoud</td>
                            <td>الفقه</td>
                            <td>
                                <div class="col-12 d-flex text-center border-bottom-0" style="padding-left: 0">
                                    <div class="col-4">
                                        <button type="button" class="button btn btn-success" data-toggle="modal"
                                                data-target="#answerQuestions">الإجابة
                                        </button>
                                    </div>
                                    <div class="col-4">
                                        <button type="button" class="button btn btn-info" data-toggle="modal" data-target="#editQuestion">تعديل</button>
                                    </div>
                                    <div class="col-4">
                                        <button type="button" class="button btn btn-danger">حذف</button>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr style="font-family: DroidArabicNaskh; line-height: 1.8rem">
                            <th scope="row">6</th>
                            <td>
                                لدي إشكال كبير حول فهم المرتبة الأولى من مراتب الإيمان بالقدر !
                            </td>
                            <td>3ayda fawzy</td>
                            <td>التربية الإسلامية</td>
                            <td>
                                <div class="col-12 d-flex text-center border-bottom-0" style="padding-left: 0">
                                    <div class="col-4">
                                        <button type="button" class="button btn btn-success" data-toggle="modal"
                                                data-target="#answerQuestions">الإجابة
                                        </button>
                                    </div>
                                    <div class="col-4">
                                        <button type="button" class="button btn btn-info" data-toggle="modal" data-target="#editQuestion">تعديل</button>
                                    </div>
                                    <div class="col-4">
                                        <button type="button" class="button btn btn-danger">حذف</button>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <button type="button" class="btn btn-primary float-left pl-5 pr-5 mt-3 ml-5" data-toggle="modal"
                    data-target="#addQuestion">إضافة سؤال
            </button>
        </div>
    </section>

</div>
<?php require_once('footer.php'); ?>
