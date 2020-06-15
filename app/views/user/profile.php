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
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Profile page</h4>
                    </div>

                </div>
                <?php print_r($data); ?>
                <!-- /.row -->
                <!-- .row -->
                <form method="POST" action="" >
                <div class="row">
                    <div class="col-md-4 col-xs-12">
                        <div class="white-box">
                            <div class="user-bg"> 
                                
                            <img width="100%" alt="user" src="../plugins/images/large/img1.jpg">
                                <div class="overlay-box">
                                    <div class="user-content">
                                        <a href="javascript:void(0)">
                                        <img src="../plugins/images/users/genu.jpg" class="thumb-lg img-circle" alt="img"></a>
                                        <h4 class="text-white">
                                           <?php echo $data['user']['f_name']; ?>
                                        </h4>
                                        <h5 class="text-white">
                                            <?php echo $data['user']['email']; ?>
                                        </h5>
                                    </div>
                                </div>
                               
                            </div>
                           
                        </div>
                        <label>  <?php echo $lang['Update Image'];?></label>
                        <input type="file" name="image">
                    </div>
                    <div class="col-md-8 col-xs-12">
                        <div class="white-box">
                            <form class="form-horizontal form-material">
                                <div class="form-group">
                                    <label class="col-md-12">
                                        <?php echo $lang['First Name'];?>
                                    </label>
                                    <div class="col-md-12">
                                        <input type="text" placeholder="Johnathan Doe" class="form-control form-control-line"> </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12">
                                        <?php echo $lang['Last Name'];?>
                                    </label>
                                    <div class="col-md-12">
                                        <input type="text" placeholder="Johnathan Doe" class="form-control form-control-line"> </div>
                                </div>
                                <div class="form-group">
                                    <label for="example-email" class="col-md-12">
                                         <?php echo $lang['Email'];?>
                                    </label>
                                    <div class="col-md-12">
                                        <input type="email" placeholder="johnathan@admin.com" class="form-control form-control-line" name="example-email" id="example-email"> </div>
                                </div>
                                
                                <div class="form-group">
                                    <label class="col-md-12">
                                        <?php echo $lang['Phone No'];?>
                                    </label>
                                    <div class="col-md-12">
                                        <input type="text" placeholder="123 456 7890" class="form-control form-control-line"> </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12">
                                        <?php echo $lang['Description'];?>
                                    </label>
                                    <div class="col-md-12">
                                        <textarea rows="5" class="form-control form-control-line"></textarea>
                                    </div>
                                </div>
                               
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <button class="btn btn-success">
                                        <?php echo $lang['Update Profile'];?>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                </form>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
            <footer class="footer text-center">
                <?php echo COPYRIGHT; ?>
            </footer>
        </div>
    </div>
    <?php
    require_once APPROOT . '/views/inc/panelScript.php';

    ?>
</body>

</html>