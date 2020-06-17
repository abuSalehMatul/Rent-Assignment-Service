<?php
require_once APPROOT . '/helpers/sessionHelper.php';
require_once APPROOT . '/views/inc/panelHead.php';
?>
<style>
    .create-a-request-text {
        font-size: 34px;
        line-height: 14px;
        font-weight: 600;
        font-family: cursive;
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
                    <h3 class="text-capitalize text-center create-a-request-text">Create A Request...</h3>
                    <hr>
                </div>
                <div class="col-md-12 card" id="phase1">
                    <h4 class="text-center">Order Details.</h4>
                    <hr>
                    <form id="form1" method="POST" action="<?php echo URLROOT . '/Student/draftSave'; ?>" class="row">
                        <input type="hidden" name="token" value="<?php echo $token; ?>">
                        <div class="form-group col-md-5 col-sm-12">
                            <h5 class="text-center"><b>Type</b></h5>
                            <select class="form-control" id="type" name="type">
                                <option value="Essay">Essay</option>
                                <option value="Article">Article</option>
                                <option value="MLA">MLA</option>
                                <option value="Case Study">Case Study</option>
                                <option value="Creative Writing">Creative Writing</option>
                                <option value="Report">Report</option>
                                <option value="Research Paper">Research Paper</option>
                                <option value="Term Paper">Term Paper</option>
                                <option value="Review Paper">Review Paper</option>
                                <option value="Other">Other</option>
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
                            <h5 class="text-center"><b>Lavel</b> </h5>
                            <select class="form-control" id="lavel" name="lavel">
                                <option value="high_school">High School</option>
                                <option value="college">College</option>
                                <option value="undergraduate">Undergraduate</option>
                                <option value="masters">Masters</option>
                                <option value="phd">PhD</option>
                                <option value="hw">HW</option>
                            </select>
                        </div>
                        <div class="form-group col-md-5 col-sm-12">
                            <h5 class="text-center"><b>Service</b></h5>
                            <select class="form-control" id="service" name="service">
                                <option value="writing">Writing</option>
                                <option value="rewriting">Rewriting</option>
                                <option value="editing">Editing</option>
                                <option value="presentation">Presentation</option>
                            </select>
                        </div>
                        <div class="form-group col-md-5 col-sm-12">
                            <h5 class="text-center"><b>Language</b></h5>
                            <select class="form-control" id="language" name="language">
                                <option value="english">English</option>
                                <option value="arabic">Arabic</option>
                            </select>
                        </div>
                    </form>
                    <button class="btn btn-success" style="padding: 10px 150px" id="orderRequestDetails" onclick="phaseChange(1)">Confirm</button>
                </div>



                <div id="phase2" class="col-md-12 card" style="display: none;">
                    <h4 class="text-center">Order Specification.</h4>
                    <h3 style="font-size: 30px; color:green"><b id="price_estimation"></b></h3>
                    <hr>
                    <form id="form2" method="POST" action="<?php echo URLROOT . '/Student/OrderRequestsave'; ?>" class="row">
                        <div class="col-md-10 form-group">
                            <h5 class="text-center text-capitalize"><b>Topic</b></h5>
                            <input type="text" name="topic" placeholder="Type a Topic Here" class="form-control">
                        </div>
                        <div class="col-md-5 form-group">
                            <h5 class="text-center text-capitalize"><b>Resource </b></h5>
                            <select name="resource" class="form-control">
                                <?php for ($i = 1; $i < 10; $i++) {
                                    echo "<option value='$i'>$i resource required</option>";
                                }
                                ?>
                            </select>
                        </div>
                        <input type="hidden" name="token" value="<?php echo $token; ?>">
                        <div class="form-group col-md-5">
                            <h5 class="text-center text-capitalize"><b>Subject</b></h5>
                            <select class="form-control" name="subject">
                                <option value="aviation">Aviation</option>
                                <option value="art">Art</option>
                                <option value="architecture">Architecture</option>
                                <option value="business">Business</option>
                                <option value="management">Management</option>
                                <option value="computer science">Computer Science</option>
                                <option value="economics">Economics</option>
                                <option value="engineering">Engineering</option>
                                <option value="english">English</option>
                                <option value="literature">Literature</option>
                                <option value="health care">Health Care</option>
                                <option value="life science">Life Science</option>
                                <option value="sport">Sport</option>
                                <option value="history">History</option>
                                <option value="humanities">Humanities</option>
                                <option value="law">Law</option>
                                <option value="marketing">Marketing</option>
                                <option value="mathatics">Mathematics</option>
                                <option value="statistics">Statistics</option>
                                <option value="science">Science</option>
                                <option value="philosophy">Philosophy</option>
                                <option value="political_science">Political Science</option>
                                <option value="psychology">Psychology</option>
                                <option value="theology">Theology</option>
                                <option value="social_science">Social Science</option>
                                <option value="ethics">Ethics</option>
                                <option value="geography">Geography</option>
                                <option value="history">History</option>
                                <option value="hospitality">Hospitality</option>
                                <option value="other">Other</option>
                            </select>
                        </div>
                        <div class="form-group col-md-5">
                            <h5 class="text-center text-capitalize"><b>Style</b></h5>
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
                        <div class="col-md-6">
                            <button class="btn btn-success" onclick="saveOrder()" style="padding:10px 150px; margin:10px">Save</button>
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
            console.log("#form" + currentPhase);

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