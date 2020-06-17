<style>
    .light-logo {
        width: 122px;
        padding: 1px;
        height: 94px;
        position: fixed;
        left: 3%;
    }
</style>
<nav class="navbar navbar-default navbar-static-top m-b-0">
    <div class="navbar-header">
        <div class="top-left-part">
            <!-- Logo -->
            <?php if ($_SESSION['role'] == 3) : ?>
                <a class="logo" href="<?php echo URLROOT . '/' . $_SESSION['lang'] . '/writer/dashboard'; ?>">
                    <!-- Logo icon image, you can use font-icon also -->
                    <a class="logo" href="<?php echo URLROOT . '/' . $_SESSION['lang'] . '/writer/dashboard'; ?>">
            <?php elseif ($_SESSION['role'] == 4) : ?>
                <a class="logo" href="<?php echo URLROOT . '/' . $_SESSION['lang'] . '/student/dashboard'; ?>">
                    <!-- Logo icon image, you can use font-icon also -->
                    <a class="logo" href="<?php echo URLROOT . '/' . $_SESSION['lang'] . '/student/dashboard'; ?>">
            <?php endif; ?>
                        <img src="<?php echo URLROOT . '/'; ?>public/shared/images/AG.png" alt="home" class="light-logo" />
                    </a>
                </a>
        </div>
        <!-- /Logo -->
        <ul class="nav navbar-top-links navbar-right pull-right">

            <li>
                <a class="profile-pic" href="#">
                    <i class="fa fa-credit-card-alt" aria-hidden="true"></i><b class="hidden-xs">Balance</b>
                </a>
            </li>
            <li>
                <a class="profile-pic" href="#">
                    <i class="fa fa-envelope-o" aria-hidden="true"></i><b class="hidden-xs">Message</b>
                </a>
            </li>
            <li>
                <a class="profile-pic" href="#">
                    <img src="<?php echo URLROOT . '/'; ?>panel/plugins/images/users/varun.jpg" alt="user-img" width="36" class="img-circle"><b class="hidden-xs">Steave</b>
                </a>
            </li>
        </ul>
    </div>
    <!-- /.navbar-header -->
    <!-- /.navbar-top-links -->
    <!-- /.navbar-static-side -->
</nav>