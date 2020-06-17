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
                <div class="row">
                    <div class="col-md-4 col-sm6">
                        <div class="white-box" style="height: 200px; margin-top:20px;">
                        <h3 class="box-title">Start A Order</h3>
                        <a class="btn btn-success" role="button" href="">Start</a>
                        </div> 
                    </div> 
                    <div class="col-md-4 col-sm6">
                        <div class="white-box" style="height: 200px; margin-top:20px;">
                        <h3 class="box-title">Message Center</h3>
                        <a class="btn btn-success" role="button" href="">Message Center</a>
                        </div> 
                    </div> 
                    <div class="col-md-4 col-sm6">
                        <div class="white-box" style="height: 200px; margin-top:20px;">

                        <h3 class="box-title"><?php echo $lang['my Profile']?></h3>
                        <a class="btn btn-success" role="button" href="<?php echo URLROOT.'/'.$_SESSION["lang"].'/User/findProfile';?>"><?php echo $lang['my Profile']?></a>
                        </div> 
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
</body>

</html>