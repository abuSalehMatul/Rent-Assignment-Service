<div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav slimscrollsidebar">

        <ul class="nav" id="side-menu">
            <li style="padding: 115px 0 0;">
                <a href="<?php echo URLROOT . '/' . $_SESSION["lang"] . '/Order/myOrder'; ?>" class="waves-effect">
                    <i class="fa fa-shopping-basket" aria-hidden="true"></i>&nbsp;&nbsp;<?php echo $lang['My Order']; ?></a>
            </li>
            <?php if($_SESSION['role'] == 4): ?>
            <li style="">
                <a href="<?php echo URLROOT . '/' . $_SESSION["lang"] . '/student/draft'; ?>" class="waves-effect">
                    <i class="fa fa-clock-o fa-fw" aria-hidden="true"></i><?php echo $lang['Draft'];?></a>
            </li>
            
            <li>
                <a href="<?php echo URLROOT . '/' . $_SESSION["lang"] . '/student/inProgress'; ?>" class="waves-effect"><i class="fa fa-font fa-fw" 
                aria-hidden="true"></i> <?php echo $lang['In Progress']; ?></a>
            </li>
            <?php endif; ?>
            <li>
                <a href="blank.html" class="waves-effect"><i class="fa fa-columns fa-fw" 
                aria-hidden="true"></i>Completed</a>
            </li>
            <li>
                <a href="404.html" class="waves-effect"><i class="fa fa-info-circle fa-fw" aria-hidden="true"></i>Canceled</a>
            </li>

        </ul>
        <hr>

        <ul class="nav" id="side-menu">
            <li>
                <a href="<?php echo URLROOT . '/' . $_SESSION["lang"] . '/User/findProfile'; ?>" class="waves-effect">
                    <i class="fa fa-user fa-fw" aria-hidden="true"></i>
                       <?php echo $lang['user Profile'] ?>
                </a>
            </li>
    
            <?php if ($_SESSION['role'] == 3): ?>
            <li>
                <a href="basic-table.html" class="waves-effect">
                    <i class="fa fa-flag" aria-hidden="true"></i>
                    &nbsp;&nbsp;Term And Condition
                </a>
            </li>
            <?php elseif($_SESSION['role'] == 4): ?>
            <li>
                <a href="basic-table.html" class="waves-effect">
                    <i class="fa fa-flag" aria-hidden="true"></i>
                    &nbsp;&nbsp;Term And Condition
                </a>
            </li>
            <?php endif; ?>
            <li>
                <a onclick="document.getElementById('logoutform').submit()" class="waves-effect">
                    <form method="POST" id="logoutform" action="<?php echo URLROOT . '/Frontend/logout'; ?>">
                        <input type="hidden" name="token" value="<?php echo $token; ?>">
                    </form>
                    <i class="fa fa-meh-o" aria-hidden="true"></i> &nbsp;&nbsp;<?php echo $lang['Log Out'] ?>
                </a>
            </li>

        </ul>

    </div>

</div>