<?php
require_once APPROOT . '/helpers/sessionHelper.php';
require_once APPROOT . '/views/inc/panelHead.php';
?>
<style>
    .create-a-request-text {
        font-size: 34px;
        line-height: 14px;
        font-weight: 600;
        font-style: oblique;
        font-variant: all-petite-caps;
    }
</style>

<body class="fix-header">
    <!-- ============================================================== -->
    <!-- Preloader -->
    <!-- ============================================================== -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" />
        </svg>
    </div>

    <div id="wrapper">
        <?php
        require_once APPROOT . '/views/inc/panelNav.php';
        require_once APPROOT . '/views/inc/panelSideBar.php';
        ?>
        <div id="page-wrapper">

            <hr>
            <div class="container card white-box">
                <div class="card-title">
                    <h3 class="text-capitalize text-center create-a-request-text"><?php echo $lang['Create A Request']; ?>...</h3>
                    <hr>
                </div>
                <div class="col-md-12 card" id="phase1">
                    <h4 class="text-center"><?php echo $lang['Order Details']; ?></h4>
                    <hr>
                    <form id="form1" method="POST" action="<?php echo URLROOT . '/Student/draftSave'; ?>" class="row">
                        <input type="hidden" name="token" value="<?php echo $token; ?>">
                        <div class="form-group col-md-5 col-sm-12">
                            <h5 class="text-center"><b><?php echo $lang['Type']; ?></b></h5>
                            <select class="form-control" id="type" name="type">
                                <option value="Essay"><?php echo $lang['Essay']; ?></option>
                                <option value="Article_Review"><?php echo $lang['Article_Review']; ?></option>
                                <option value="Book_Review"><?php echo $lang['Book_Review']; ?></option>
                                <option value="Business_Plan"><?php echo $lang['Business_Plan']; ?></option>
                                <option value="Creative_Writing"> <?php echo $lang['Creative_Writing']; ?></option>
                                <option value="Case_Study"><?php echo $lang['Case_Study']; ?></option>
                                <option value="Literature_Review"> <?php echo $lang['Literature_Review']; ?></option>
                                <option value="Assignment"><?php echo $lang['Assignment']; ?> </option>
                                <option value="Presentation"> <?php echo $lang['Presentation']; ?></option>
                                <option value="Report"><?php echo $lang['Report']; ?></option>
                                <option value="Thesis_paper"><?php echo $lang['Thesis_paper']; ?></option>
                                <option value="Home_Work"><?php echo $lang['Home_Work']; ?></option>
                                <option value="Other"><?php echo $lang['Other']; ?></option>
                            </select>
                        </div>
                        <div class="form-group col-md-5 col-sm-12">
                            <h5 class="text-center"><b>Number Of Pages</b></h5>
                            <select class="form-control" id="page" name="page">
                                <?php for ($i = 1; $i < 30; $i++) {
                                    echo "<option value='$i'> $i Page </option>";
                                } ?>

                            </select>
                        </div>
                        <div class="form-group col-md-5 col-sm-12">
                            <h5 class="text-center"><b>Number Of Day</b></h5>
                            <select class="form-control" id="page" name="day">
                                <?php for ($i = 1; $i < 8; $i++) {
                                    echo "<option value='$i'> $i Day </option>";
                                } ?>

                            </select>
                        </div>
                        <div class="form-group col-md-5 col-sm-12">
                            <h5 class="text-center"><b><?php echo $lang['Lavel']; ?></b> </h5>
                            <select class="form-control" id="lavel" name="lavel">
                                <option value="high_school"><?php echo $lang['high_school']; ?></option>
                                <option value="college"><?php echo $lang['college']; ?></option>
                                <option value="undergraduate"><?php echo $lang['undergraduate']; ?></option>
                                <option value="masters"><?php echo $lang['masters']; ?></option>
                                <option value="phd"><?php echo $lang['phd']; ?></option>
                                <option value="hw"><?php echo $lang['hw']; ?></option>
                            </select>
                        </div>
                        <div class="form-group col-md-5 col-sm-12">
                            <h5 class="text-center"><b><?php echo $lang['Service']; ?></b></h5>
                            <select class="form-control" id="service" name="service">
                                <option value="Writing"><?php echo $lang['Writing']; ?></option>
                                <option value="Re_Writing"><?php echo $lang['Re_Writing']; ?></option>
                                <option value="Editing"><?php echo $lang['Editing']; ?></option>
                                <option value="Presentation"><?php echo $lang['Presentation']; ?></option>
                            </select>
                        </div>
                        <div class="form-group col-md-5 col-sm-12">
                            <h5 class="text-center"><b><?php echo $lang['Language']; ?></b></h5>
                            <select class="form-control" id="language" name="language">
                                <option value="english">English</option>
                                <option value="arabic">Arabic</option>
                            </select>
                        </div>
                    </form>
                    <button class="btn btn-success" style="padding: 10px 39%" id="orderRequestDetails" onclick="phaseChange(1)">Confirm</button>
                </div>



                <div id="phase2" class="col-md-12 card" style="display: none;">
                    <h4 class="text-center"><?php echo $lang['Order Specification']; ?></h4>
                    <h3 style="font-size: 30px; color:green"><b id="price_estimation"></b></h3>
                    <hr>
                    <form id="form2" method="POST" action="<?php echo URLROOT . '/Student/OrderRequestsave'; ?>" class="row">
                        <div class="col-md-10 form-group">
                            <h5 class="text-center text-capitalize"><b><?php echo $lang['Topic']; ?></b></h5>
                            <input type="text" name="topic" placeholder="Type a Topic Here" class="form-control">
                        </div>
                        <div class="col-md-5 form-group">
                            <h5 class="text-center text-capitalize"><b><?php echo $lang['Resource']; ?> </b></h5>
                            <select name="resource" class="form-control">
                                <?php for ($i = 1; $i < 10; $i++) {
                                    echo "<option value='$i'>$i Resource Required</option>";
                                }
                                ?>
                            </select>
                        </div>
                        <input type="hidden" name="token" value="<?php echo $token; ?>">
                        <div class="form-group col-md-5">
                            <h5 class="text-center text-capitalize"><b><?php echo $lang['Subject']; ?></b></h5>
                            <select class="form-control" name="subject">
                                <?php $subject = [
                                    'Aviation',
                                    'Art',
                                    'Architecture',
                                    'Business',
                                    'Management',
                                    'Computer_Science',
                                    'Economics',
                                    'Engineering',
                                    'English',
                                    'Literature',
                                    'Health_Care',
                                    'Life_Science',
                                    'Sport',
                                    'History',
                                    'Humanities',
                                    'Law',
                                    'Marketing',
                                    'Mathematics',
                                    'Statistics',
                                    'Science',
                                    'Philosophy',
                                    'Political_Science',
                                    'Psychology',
                                    'Theology',
                                    'Ethics',
                                    'Social_Science', 'History', 'Geography', 'Hospitality', 'Other'
                                ];
                                foreach ($subject as $sub) {
                                    echo "<option value=" . $sub . "> $lang[$sub] </option>";
                                }

                                ?>

                            </select>
                        </div>
                        <div class="form-group col-md-5">
                            <h5 class="text-center text-capitalize"><b><?php echo $lang['Style']?></b></h5>
                            <select class="form-control" name="style">
                                <option value="mla">MLA</option>
                                <option value="apa">APA</option>
                                <option value="turabian">Turabian</option>
                                <option value="harvard">Harvard</option>
                                <option value="other">Other</option>
                            </select>

                        </div>
                        <div class="col-md-10">
                            <h5 class="text-center text-capitalize"><b>File</b></h5>
                            <input type="file" name="file" class="form-control">
                        </div>
                        <div class="col-md-12">
                            <button class="btn btn-success col-md-10" onclick="saveOrder()" style="padding:10px; margin:10px;">Save</button>
                        </div>
                    </form>
                </div>

            </div>
            <!-- /.container-fluid -->
            <footer class="footer text-center">
                <?php echo COPYRIGHT; ?>
            </footer>
        </div>
        <!-- ============================================================== -->
        <!-- End Page Content -->
        <!-- ============================================================== -->
    </div>
    <?php
    require_once APPROOT . '/views/inc/panelScript.php';
    ?>
    <script>
        var calculatdPrice = 0;

        function phaseChange(currentPhase) {
            var form = $("#form" + currentPhase);
            var url = form.attr('action');
            $.ajax({
                type: "POST",
                url: url,
                data: form.serialize(), // serializes the form's elements.
                success: function(data) {
                    if (data == 'all data required') {
                        alert("please Provide All details correctly");
                    }
                    calculatdPrice = data;
                    $("#phase1").hide();
                    $("#phase2").show();
                    let price = "Estimated Price : $" + calculatdPrice;
                    $("#price_estimation").html(price);
                }
            });

            function saveOrder() {
                let form = $("#form2");
                let url = form.attr('action');
                $.ajax({
                    type: "POST",
                    url: url,
                    data: form.serialize(), // serializes the form's elements.
                    success: function(data) {
                        if (data == 'all data required') {
                            alert("please Provide All details correctly");
                        }
                        alert(data);
                    }
                });
            }

        }
    </script>
</body>

</html>