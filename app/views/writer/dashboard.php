<?php
require_once APPROOT . '/helpers/sessionHelper.php';
require_once APPROOT . '/views/inc/panelHead.php';
?>
<style>


    .label-container{
        position:fixed;
        bottom:48px;
        right:105px;
        display:table;
        visibility: hidden;
    }

    .label-text{
        color:#FFF;
        background:rgba(51,51,51,0.5);
        display:table-cell;
        vertical-align:middle;
        padding:10px;
        border-radius:3px;
    }

    .label-arrow{
        display:table-cell;
        vertical-align:middle;
        color:#333;
        opacity:0.5;
    }

    .float{
        position:fixed;
        width:60px;
        height:60px;
        bottom:40px;
        right:40px;
        background-color:#0390fc;
        color:#FFF;
        border-radius:50px;
        text-align:center;
        box-shadow: 2px 2px 3px #999;
        z-index:1000;
        animation: bot-to-top 2s ease-out;
    }



    .my-float{
        font-size:24px;
        margin-top:18px;
    }

    a#menu-share + ul{
        visibility: hidden;
    }

    a#menu-share:hover + ul{
        visibility: visible;
        animation: scale-in 0.5s;
    }

    a#menu-share i{
        animation: rotate-in 0.5s;
    }

    a#menu-share:hover > i{
        animation: rotate-out 0.5s;
    }

    @keyframes bot-to-top {
        0%   {bottom:-40px}
        50%  {bottom:40px}
    }

    @keyframes scale-in {
        from {transform: scale(0);opacity: 0;}
        to {transform: scale(1);opacity: 1;}
    }

    @keyframes rotate-in {
        from {transform: rotate(0deg);}
        to {transform: rotate(360deg);}
    }

    @keyframes rotate-out {
        from {transform: rotate(360deg);}
        to {transform: rotate(0deg);}
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
                               <option></option>
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
                            <option></option>
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
                            <br>
                            <label><?php echo $lang['Your Prefered Type']; ?> </label>
                            <select class="subject form-control" name="subject" onchange="saveType(this)">
                            <option></option>
                               <?php foreach ($data['type'] as $service) {
                                    echo "<option value=" . $service["name"] . ">" . $lang[$service["name"]] . " </option>";
                                } ?>
                            </select>
                        </div>
                   
                </div>

                <a href="<?= URLROOT.'/writer/adminChat/'.$_SESSION['id']; ?>" class="float" id="menu-share">
                    <i id = "floats" class="fa fa-question-circle my-float"></i>
                </a>

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