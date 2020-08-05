
<!doctype html>
<html lang="en" dir="ltr">
<head>

    <!-- Meta data -->
    <?php
    require_once APPROOT . '/views/inc/admin/admin_head.php';


    ?>

</head>

<body class="app">

<!-- GLOBAL-LOADER -->
<div id="global-loader">
    <img src="<?php echo URLROOT.'/public/admin/assets/images/svgs/loader.svg';?>" class="loader-img" alt="Loader">
</div>

<div class="page">
    <div class="page-main">

        <!-- HEADER -->
        <?php
        require_once APPROOT . '/views/inc/admin/admin_header.php';


        ?>
        <!-- HEADER END -->

        <!-- HORIZONTAL-MENU -->
        <!-- Sicky-->
        <!-- HORIZONTAL-MENU END -->

        <!-- CONTAINER -->
        <div class="container  content-area">


            <!-- PAGE-HEADER -->
            <div class="page-header">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#"><i class="fe fe-home mr-1"></i> Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                </ol>
                <div class="ml-auto">


                </div>
            </div>
            <!-- PAGE-HEADER END -->

            <!-- ROW-1 -->

            <!-- ROW-1 END -->

            <!-- ROW-2 -->
            <?php foreach ($data as $key=>$val){ ?>
                <form action="<?php echo URLROOT.'/'.$_SESSION["lang"].'/DemoTest/edit_transaction_info/'.$val['id'];?>" method="POST" name="edit_form">
                    <div class="row">

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-label">Payment Type</label>
                                <input type="text" class="form-control" name="payment_type" placeholder="Enter first name.." value="<?php echo $val['payment_type']?>">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-label">Currency</label>
                                <input type="text" class="form-control" name="currency" placeholder="Text.." value="<?php echo $val['currency']?>">
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-label">Amount</label>
                                <input type="number" class="form-control" name="ammount" placeholder="Text.." value="<?php echo $val['ammount']?>">
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-label">Transaction ID</label>
                                <input type="number" class="form-control" name="transaction_id" placeholder="Text.." value="<?php echo $val['transaction_id']?>">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-label">Medium</label>
                                <input type="text" class="form-control" name="medium" placeholder="Text.." value="<?php echo $val['medium']?>">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-label">Order ID</label>
                                <input type="number" class="form-control" name="order_id" placeholder="Text.." value="<?php echo $val['order_id']?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-lg fs-15px fw-500 btn-block">Update</button>
                        </div>
                        <!--                <div class="col-lg-6">-->
                        <!--                    <div class="form-group">-->
                        <!--                        <label class="form-label">Text</label>-->
                        <!--                        <input type="image" class="form-control" name="example-text-input" placeholder="Text..">-->
                        <!--                    </div>-->
                        <!--                </div>-->


                    </div>
                </form>
            <?php } ?>
        </div>
        <!-- ROW-2 END -->

        <!-- CONTAINER END -->
    </div>
</div>

<!-- Right-sidebar-->
<!-- End Rightsidebar-->

<!-- FOOTER -->
<footer class="footer">
    <div class="container">
        <div class="row align-items-center flex-row-reverse">
            <div class="col-md-12 col-sm-12 text-center">
                Copyright © 2020 <a href="#">Dashmint</a>. Designed by <a href="https://spruko.com/">Spruko
                    Technologies Pvt.Ltd</a> All rights reserved.
            </div>
        </div>
    </div>
</footer>
<!-- FOOTER END -->
</div>

<!-- BACK-TO-TOP -->
<a href="#top" id="back-to-top"><i class="fa fa-angle-double-up"></i></a>

<!-- JQUERY SCRIPTS JS-->
<script src="<?php echo URLROOT.'/public/admin/assets/js/vendors/jquery-3.2.1.min.js';?>"></script>

<!-- BOOTSTRAP SCRIPTS JS-->
<script src="<?php echoURLROOT.'/public/admin/assets/plugins/bootstrap/js/bootstrap.bundle.min.js';?>"></script>

<!-- SPARKLINE JS -->
<script src="<?php echo URLROOT.'/public/admin/assets/js/vendors/jquery.sparkline.min.js';?>"></script>

<!-- CHART-CIRCLE JS-->
<script src="<?php echo URLROOT.'/public/admin/assets/js/vendors/circle-progress.min.js';?>"></script>

<!-- PARTICLES JS-->
<script src="<?php echo URLROOT.'/public/admin/assets/plugins/particles.js-master/particles.js';?>"></script>
<script src="<?php echo URLROOT.'/public/admin/assets/plugins/particles.js-master/particlesapp_bubble.js';?>"></script>

<!-- RATING STAR JS-->
<script src="<?php echo URLROOT.'/public/admin/assets/plugins/rating/rating-stars.js';?>"></script>

<!-- CHARTJS CHART JS-->
<script src="<?php echo URLROOT.'/public/admin/assets/plugins/chart/chart.bundle.js';?>"></script>
<script src="<?php echo URLROOT.'/public/admin/assets/plugins/chart/utils.js';?>"></script>

<!-- INTERNAL PIETY CHART JS-->
<script src="<?php echo URLROOT.'/public/admin/assets/plugins/peitychart/jquery.peity.min.js';?>"></script>
<script src="<?php echo URLROOT.'/public/admin/assets/plugins/peitychart/peitychart.init.js';?>"></script>

<!-- HORIZONTAL-MENU JS-->
<script src="<?php echo URLROOT.'/public/admin/assets/plugins/horizontal-menu/horizontal-menu.js';?>"></script>

<!-- INTERNAL  APEX-CHARTS JS -->
<script src="<?php echo URLROOT.'/public/admin/assets/plugins/apexcharts/apexcharts.js';?>"></script>
<script src="<?php echo URLROOT.'/public/admin/assets/plugins/apexcharts/irregular-data-series.js';?>"></script>

<!-- INTERNAL FLOT JS JS-->
<script src="<?php echo URLROOT.'/public/admin/assets/plugins/flot/flot.js';?>"></script>
<script src="<?php echo URLROOT.'/public/admin/assets/plugins/flot/flot.pie.js';?>"></script>
<script src="<?php echo URLROOT.'/public/admin/assets/plugins/flot/jquery.flot.crosshair.js';?>"></script>
<script src="<?php echo URLROOT.'/public/admin/assets/plugins/flot/jquery.flot.resize.js';?>"></script>
<script src="<?php echo URLROOT.'/public/admin/assets/plugins/flot/chart.flot.sampledata.js';?>"></script>

<!-- P-SCROLL JS -->
<script src="<?php echo URLROOT.'/public/admin/assets/plugins/p-scroll/p-scroll.js';?>"></script>
<script src="<?php echo URLROOT.'/public/admin/assets/plugins/p-scroll/p-scroll-1.js';?>"></script>

<!-- SIDEBAR JS -->
<script src="<?php echo URLROOT.'/public/admin/assets/plugins/right-sidebar/right-sidebar.js';?>"></script>

<!-- INTERNAL COUNTERS JS-->
<script src="<?php echo URLROOT.'/public/admin/assets/plugins/counters/counterup.min.js';?>"></script>
<script src="<?php echo URLROOT.'/public/admin/assets/plugins/counters/waypoints.min.js';?>"></script>
<script src="<?php echo URLROOT.'/public/admin/assets/plugins/counters/counters-1.js';?>"></script>

<!-- INTERNAL INDEX-SCRIPTS  JS-->
<script src="<?php echo URLROOT.'/public/admin/assets/js/index.js';?>"></script>

<!-- STICKY JS -->
<script src="<?php echo URLROOT.'/public/admin/assets/js/stiky.js';?>"></script>

<!-- CUSTOM JS -->
<script src="<?php echo URLROOT.'/public/admin/assets/js/custom.js';?>"></script>


</body>
</html>