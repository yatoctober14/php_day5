
<?php require_once('header.php'); ?>

<div id="main" style="direction: rtl; text-align: right">

    <!--Milestones section-->
    <section id="milestones" class="milestones admin-section"
             style="background: linear-gradient(rgba(225,255,0,0.19), rgba(238,239,232,0)) center fixed">
        <div class="container">

            <div class="section-title">
                <h2>الإحــصــائــيــات</h2>
            </div>

            <div class="row">

                <!--Milestone1-->
                <div class="col-lg-3 milestone_col">
                    <div class="milestone text-center">
                        <div class="milestone_icon"><img src="images/files.svg" alt="questions">
                        </div>
                        <div class="milestone_counter" data-end-value="500">0</div>
                        <div class="milestone_text">عدد الأسئلة</div>
                    </div>
                </div>

                <!--Milestone2-->
                <div class="col-lg-3 milestone_col">
                    <div class="milestone text-center">
                        <div class="milestone_icon"><img src="images/notepad.svg" alt="answers">
                        </div>
                        <div class="milestone_counter" data-end-value="500">0</div>
                        <div class="milestone_text">عدد الأجوبة</div>
                    </div>
                </div>

                <!--Milestone3-->
                <div class="col-lg-3 milestone_col">
                    <div class="milestone text-center">
                        <div class="milestone_icon"><img src="images/man.svg" alt="admins">
                        </div>
                        <div class="milestone_counter" data-end-value="20">0</div>
                        <div class="milestone_text">عدد الشيوخ (المديرين)</div>
                    </div>
                </div>

                <!--Milestone4-->
                <div class="col-lg-3 milestone_col">
                    <div class="milestone text-center">
                        <div class="milestone_icon"><img src="images/user.svg" alt="users">
                        </div>
                        <div class="milestone_counter" data-end-value="1443">0</div>
                        <div class="milestone_text">عدد المستخدمين</div>
                    </div>
                </div>

            </div>
        </div>
    </section>

</div>

<?php require_once('footer.php'); ?>