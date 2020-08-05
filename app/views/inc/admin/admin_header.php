<?php
?>

<div class="header top-header">
    <div id="particles-js" class="zindex1"></div>
    <div class="container">
        <div class="d-flex header-nav">
            <a id="horizontal-navtoggle" class="animated-arrow hor-toggle"><span></span></a>
            <div class="color-headerlogo">
                <a  href="<?php echo URLROOT.'/'.$_SESSION['lang'];?>"><img src="<?php echo URLROOT.'\public\shared\images\AG.png'?>"

                                                                                                                  alt="Assignment-Guru" style="height: 50px!important; width: 90px!important"></a>
            </div><!-- Color LOGO -->
            <div class="">
                <form class="form-inline">
                    <div class="search-element">
                        <input type="search" class="form-control header-search" placeholder="Search…"
                               aria-label="Search" tabindex="1">
                        <button class="btn btn-primary-color" type="submit"><i class="fe fe-search"></i>
                        </button>
                    </div>
                </form>
            </div><!-- SEARCH -->
            <div class="d-flex order-lg-2 ml-auto header-right-icons header-search-icon">
                <div class="dropdown  search-icon">
                    <a href="#" data-toggle="search" class="nav-link nav-link-lg d-md-none navsearch">
                        <i class="fe fe-search"></i>
                    </a>
                </div>
                <div class="dropdown  header-fullscreen">
                    <a class="nav-link icon full-screen-link nav-link-bg" id="fullscreen-button">
                        <i class="fe fe-minimize"></i>
                    </a>
                </div><!-- FULL-SCREEN -->
                <div class="dropdown  notifications">
                    <a class="nav-link icon" data-toggle="dropdown">
                        <i class="fe fe-bell"></i>
                        <span class="pulse bg-danger"></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                        <a href="#" class="dropdown-item mt-2 d-flex pb-3">
                            <div class="notifyimg bg-info">
                                <i class="fa fa-thumbs-o-up"></i>
                            </div>
                            <div>
                                <h6 class="mb-1">Someone likes our posts.</h6>
                                <div class="small text-muted">3 hours ago</div>
                            </div>
                        </a>
                        <a href="#" class="dropdown-item d-flex pb-3">
                            <div class="notifyimg bg-warning">
                                <i class="fa fa-commenting-o"></i>
                            </div>
                            <div>
                                <h6 class="mb-1"> 3 New Comments</h6>
                                <div class="small text-muted">5 hour ago</div>
                            </div>
                        </a>
                        <a href="#" class="dropdown-item d-flex pb-3">
                            <div class="notifyimg bg-danger">
                                <i class="fa fa-cogs"></i>
                            </div>
                            <div>
                                <h6 class="mb-1"> Server Rebooted.</h6>
                                <div class="small text-muted">45 mintues ago</div>
                            </div>
                        </a>
                        <div class="border-top">
                            <a href="#" class="dropdown-item text-center">View all Notification</a>
                        </div>
                    </div>
                </div><!-- NOTIFICATIONS -->
                <div class="dropdown  message">
                    <a class="nav-link icon text-center" data-toggle="dropdown">
                        <i class="fe fe-mail"></i>
                        <span class=" nav-unread badge badge-warning badge-pill">6</span>
                    </a>

                </div><!-- MESSAGE-BOX -->
                <div class="dropdown header-user">
                    <a href="#" class="nav-link icon" data-toggle="dropdown">
                                <span><img src="../../assets/images/users/female/7.jpg"
                                           class="avatar brround cover-image mb-0 ml-0"></span>
                    </a>

                </div><!-- SIDE-MENU -->
                <div class="dropdown  header-fullscreen">
                    <a class="nav-link icon sidebar-right-mobile" data-toggle="sidebar-right"
                       data-target=".sidebar-right">
                        <i class="fe fe-align-right"></i>
                    </a>
                </div><!-- Side menu -->
            </div>
        </div>
    </div>
</div>
<div class="sticky">
    <div class="horizontal-main hor-menu clearfix ">
        <div class="horizontal-mainwrapper container clearfix">
            <nav class="horizontalMenu clearfix">
                <ul class="horizontalMenu-list">
                    <li aria-haspopup="true"><a href="<?php echo URLROOT.'/'.$_SESSION['lang'].'/DemoTest/dashboard' ?>" class="sub-icon active"><i class="fe fe-home"></i>
                            Dashboard </a>

                    </li>
                    <li aria-haspopup="true"><a href="<?php echo URLROOT.'/'.$_SESSION['lang'].'/DemoTest/order' ?>" class=""><i class="fe fe-grid"></i> Orders requests</a>


                    </li>
                    <li aria-haspopup="true"><a href="<?php echo URLROOT.'/'.$_SESSION['lang'].'/DemoTest/transaction' ?>" class="sub-icon"><i class="fe fe-life-buoy"></i> Transactions
                        </a>

                    </li>
                    <li aria-haspopup="true"><a href="<?php echo URLROOT.'/'.$_SESSION['lang'].'/DemoTest/submission' ?>" class="sub-icon"><i class="fe fe-pie-chart"></i> Submission history
                        </a>
                    </li>
                    <li aria-haspopup="true"><a href="#" class="sub-icon"><i class="fe fe-package"></i> Messages list
                        </a>
                        <ul class="sub-menu">
                    <li aria-haspopup="true"><a href="<?php echo URLROOT.'/'.$_SESSION['lang'].'/DemoTest/system_chat' ?>"><i class="fe fe-message-square"></i> System message</a></li>
                    <li aria-haspopup="true"><a href="<?php echo URLROOT.'/'.$_SESSION['lang'].'/DemoTest/messages' ?>"><i class="fe fe-mail"></i> Users messages</a></li>
                        </ul></li>
                    <li aria-haspopup="true"><a href="<?php echo URLROOT.'/'.$_SESSION['lang'].'/DemoTest/see_reviews' ?>" class="sub-icon"><i class="fe fe-package"></i> Review
                        </a>
                    </li>
                    <li aria-haspopup="true"><a href="#" class="sub-icon"><i class="fe fe-cast"></i> Contacts
                        </a>

                        <ul class="sub-menu">
                            <li aria-haspopup="true"><a href="<?php echo URLROOT.'/'.$_SESSION['lang'].'/DemoTest/website_setting' ?>"><i class="fe fe-calendar"></i> Website setting</a></li>
                            <li aria-haspopup="true"><a href="<?php echo URLROOT.'/'.$_SESSION['lang'].'/DemoTest/contact_us' ?>"><i class="fe fe-message-circle"></i> Contact US</a></li>
                        </ul>
                    </li>
<!--                    <li aria-haspopup="true"><a href="#" class="sub-icon"><i class="fe fe-layers"></i>Components-->
<!--                            <i class="fa fa-angle-down horizontal-icon"></i></a>-->
<!--                        <ul class="sub-menu">-->
<!--                            <li aria-haspopup="true"><a href="#">lorem</a></li>-->
<!---->
<!--                        </ul>-->
<!--                    </li>-->
<!--                    <li aria-haspopup="true"><a href="#" class="sub-icon"><i class="fe fe-file-text"></i> Forms-->
<!--                            <i class="fa fa-angle-down horizontal-icon"></i></a>-->
<!--                        <ul class="sub-menu">-->
<!--                            <li aria-haspopup="true"><a href="#">lorem</a></li>-->
<!---->
<!--                        </ul>-->
<!--                    </li>-->
<!--                    <li aria-haspopup="true"><a href="#" class="sub-icon"><i class="fe fe-stop-circle"></i>-->
<!--                            Icons <i class="fa fa-angle-down horizontal-icon"></i></a>-->
<!--                        <ul class="sub-menu">-->
<!--                            <li aria-haspopup="true"><a href="#">lorem</a></li>-->
<!---->
<!--                        </ul>-->
<!--                    </li>-->
                </ul>
            </nav>
            <!-- NAV END -->
        </div>
    </div>
</div>