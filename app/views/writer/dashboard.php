<?php
require_once APPROOT . '/helpers/sessionHelper.php';
require_once APPROOT . '/views/inc/panelHead.php';
?>

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
            <div class="container-fluid">

                <div class="row">
                    <div class="col-lg-4 col-sm-6 col-xs-12">
                        <div class="white-box analytics-info">
                            <h3 class="box-title">Total Order</h3>
                            <ul class="list-inline two-part">
                                <li>
                                    <div id="sparklinedash"></div>
                                </li>
                                <li class="text-right"><i class="ti-arrow-up text-success"></i>
                                    <span class="counter text-success"><?php echo $data['total_order']; ?></span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 col-xs-12">
                        <div class="white-box analytics-info">
                            <h3 class="box-title">Completed Order</h3>
                            <ul class="list-inline two-part">
                                <li>
                                    <div id="sparklinedash2"></div>
                                </li>
                                <li class="text-right"><i class="ti-arrow-up text-purple"></i>
                                    <span class="counter text-purple"><?php echo $data['completed_order']; ?></span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 col-xs-12">
                        <div class="white-box analytics-info">
                            <h3 class="box-title">Canceled Order</h3>
                            <ul class="list-inline two-part">
                                <li>
                                    <div id="sparklinedash3"></div>
                                </li>
                                <li class="text-right"><i class="ti-arrow-up text-info"></i>
                                    <span class="counter text-info"><?php echo $data['canceled_order']; ?></span></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row white-box">
                  

                        <div class="form-group col-md-4  white-box">
                            <span id="subject_span_id" class="">
                                <h4 class="text-capitalize text-center text-black-50">My Subjects</h4>
                                <?php if (isset($data['writer_subject'][0])) {
                                    $i = 0;
                                    foreach ($data['writer_subject'] as $subject) {
                                        $i++;
                                        echo "<div class='panel-black'>
                                        <span class='badge badge-info'>
                                            $subject->name;
                                           
                                            
                                        </span>
                                        My Priority. $i
                                        <span class='badge badge-warning cursor' onclick="."deletePreference('subject','$subject->name')".">&#10060;</span>
                                   </div> ";
                                    }
                                }
                                ?>
                            </span>
                            <br>
                            <label><?php echo $lang['Your Prefered Subjects']; ?> </label>
                            <select class="subject form-control" name="subject" onchange="saveSubject(this)">
                                <?php foreach ($data['subjects'] as $subject) {
                                    echo "<option value=" . $subject["name"] . ">" . $lang[$subject["name"]] . " </option>";
                                } ?>
                            </select>
                        </div>

                        <div class="form-group col-md-4 white-box">
                            <span id="service_span_id">
                                <h4 class="text-capitalize text-center text-black-50">My Services</h4>
                                <?php if (isset($data['writer_service'][0])) {
                                    $i = 0;
                                    foreach ($data['writer_service'] as $service) {
                                        $i++;
                                        echo "<div class='panel-black'>
                                        <span class='badge badge-info'>
                                            $service->name;
                                        </span>
                                        My Priority. $i
                                        <span class='badge badge-warning cursor' onclick="."deletePreference('service','$service->name')".">&#10060;</span>
                                   </div> ";
                                    }
                                }
                                ?>
                            </span>
                            <br>

                            <label><?php echo $lang['Your Prefered Service']; ?> </label>
                            <select class="subject form-control" name="subject" onchange="saveService(this)">
                                <?php foreach ($data['services'] as $service) {
                                    echo "<option value=" . $service["name"] . ">" . $lang[$service["name"]] . " </option>";
                                } ?>
                            </select>
                        </div>
                        <div class="form-group col-md-4 white-box">
                            <span id="type_span_id">
                                <h4 class="text-capitalize text-center text-black-50">My Type</h4>
                                <?php if (isset($data['writer_type'][0])) {
                                    $i = 0;
                                    foreach ($data['writer_type'] as $type) {
                                        $i++;
                                        echo "<div class='panel-black'>
                                        <span class='badge badge-info'>
                                            $type->name;
                                        </span>
                                        My Priority. $i
                                        <span class='badge badge-warning cursor' onclick="."deletePreference('type','$type->name')".">&#10060;</span>
                                   </div> ";
                                    }
                                }
                                ?>
                            </span>
                            <label><?php echo $lang['Your Prefered Type']; ?> </label>
                            <select class="subject form-control" name="subject" onchange="saveType(this)">
                                <?php foreach ($data['type'] as $service) {
                                    echo "<option value=" . $service["name"] . ">" . $lang[$service["name"]] . " </option>";
                                } ?>
                            </select>
                        </div>
                   
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
    <script type="text/javascript">
        function saveSubject(domObject) {
            $.ajax({
                type: "post",
                url: "<?php echo URLROOT . '/Writer/saveSubject'; ?>",
                data: {
                    "token": <?php echo "'$token'"; ?>,
                    "subject": domObject.value
                },
                success: function(response) {
                    $("#subject_span_id").load(" #subject_span_id > *");
                }
            });
           
        }

        function saveService(domObject) {

            $.ajax({
                type: "post",
                url: "<?php echo URLROOT . '/Writer/saveService'; ?>",
                data: {
                    "token": <?php echo "'$token'"; ?>,
                    "subject": domObject.value
                },
                success: function(response) {
                    $("#service_span_id").load(" #service_span_id > *");
                }
            });

        }

        function saveType(domObject) {

            $.ajax({
                type: "post",
                url: "<?php echo URLROOT . '/Writer/saveType'; ?>",
                data: {
                    "token": <?php echo "'$token'"; ?>,
                    "subject": domObject.value
                },
                success: function(response) {
                    $("#type_span_id").load(" #type_span_id > *");
                }
            });

        }

        function deletePreference(table, name){
            $.ajax({
                type: "post",
                url: "<?php echo URLROOT . '/Writer/deletePreference'; ?>",
                data: {
                    "token": <?php echo "'$token'"; ?>,
                    "table": table,
                    "name" : name
                },
                success: function(response) {
                    $("#"+table+"_span_id").load(" #"+table+"_span_id > *");
                }
            });
        }
    </script>
</body>

</html>