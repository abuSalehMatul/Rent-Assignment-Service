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
              
                <!-- /.row -->
                <!-- .row -->

                <div class="row">
                    <div class="col-md-4 col-xs-12">
                        <div class="white-box">
                            <div class="user-bg">

                                <img width="100%" alt="user" src="<?php echo $data['user']['profile_image']; ?>">
                                <div class="overlay-box">
                                    <div class="user-content">
                                        <a href="javascript:void(0)">
                                            <img src="<?php echo $data['user']['profile_image']; ?>" class="thumb-lg img-circle" alt="img"></a>
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
                        <form method="POST" action="<?php echo URLROOT. '/Student/imageSave'; ?>" enctype="multipart/form-data">
                            <label> <?php echo $lang['Update Image']; ?></label>
                            <input type="file" name="image">
                            <input type="hidden" name="token" value="<?php echo $token; ?>">
                            <input type="submit" role="button" value="Upload Image" class="btn btn-success">
                        </form>
                    </div>
                    <div class="col-md-8 col-xs-12">
                        <div class="white-box">
                            <form class="form-horizontal form-material" method="POST" action="<?php echo URLROOT. '/Student/imageStudent'; ?>">
                                <div class="form-group">
                                <input type="hidden" name="token" value="<?php echo $token; ?>">
                                    <label class="col-md-12">
                                        <?php echo $lang['First Name']; ?> [<?php echo $data['user']['f_name']; ?>]
                                    </label>
                                    <div class="col-md-12">
                                        <input type="text" placeholder="Edit <?php echo $lang['First Name']; ?>" 
                                        class="form-control form-control-line" value="<?php echo $data['user']['f_name']; ?>" name="f_name" require>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12">
                                        <?php echo $lang['Last Name']; ?> [<?php echo $data['user']['l_name']; ?>]
                                    </label>
                                    <div class="col-md-12">
                                        <input type="text" placeholder="Edit <?php echo $lang['Last Name']; ?>" 
                                        class="form-control form-control-line" value="<?php echo $data['user']['l_name']; ?>" name="l_name" require>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="example-email" class="col-md-12">
                                        <?php echo $lang['Email']; ?> [<?php echo $data['user']['email']; ?>]
                                    </label>
                                    <div class="col-md-12">
                                        <input type="email" placeholder="Edit <?php echo $lang['Email']; ?>"  value="<?php echo $data['user']['email']; ?>"
                                        class="form-control form-control-line" name="email" require id="example-email"> </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-12">
                                        <?php echo $lang['Phone No']; ?> [<?php echo $data['user']['phone_number']; ?>]
                                    </label>
                                    <div class="col-md-12">
                                        <input type="text" placeholder="Edit <?php echo $lang['Phone No']; ?>"
                                         class="form-control form-control-line" value="<?php echo $data['user']['phone_number']; ?>" name="phone" > </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12">
                                        <?php echo $lang['Title']; ?> [<?php echo $data['user']['title']; ?>]
                                    </label>
                                    <div class="col-md-12">
                                        <input type="text" placeholder="<?php echo $lang['Title']; ?>" value="<?php echo $data['user']['title']; ?>"
                                         class="form-control form-control-line" name="title" > </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12">
                                        <?php echo $lang['Description']; ?>
                                    </label>
                                    <div class="col-md-12">
                                        <textarea rows="5" class="form-control form-control-line"
                                         name="description" >
                                        <?php echo $data['user']['description']; ?>
                                        </textarea>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <button class="btn btn-success">
                                            <?php echo $lang['Update Profile']; ?>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

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