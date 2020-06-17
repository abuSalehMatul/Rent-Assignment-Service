<?php
?>
<div class="header app-header">
    <div id="particles-js" class="zindex1"></div>
    <div class="container-fluid">
        <div class="d-flex header-nav">
            <div class="color-headerlogo">
                <a class="header-desktop" href="index.html"></a>
                <a class="header-mobile" href="index.html"></a>
            </div><!-- Color LOGO -->
            <a href="#" data-toggle="sidebar" class="nav-link icon toggle"><i class="fe fe-align-justify"></i></a>
            <div class="">
                <form class="form-inline">
                    <div class="search-element">
                        <input type="search" class="form-control header-search" placeholder="Search…" aria-label="Search" tabindex="1">
                        <button class="btn btn-primary-color" type="submit"><i class="fe fe-search"></i></button>
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
                        <i class="fe fe-minimize" ></i>
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
                                <div class="small text-muted">5  hour ago</div>
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
                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                        <a href="#" class="dropdown-item d-flex mt-2 pb-3">
                            <div class="avatar avatar-md brround mr-3 d-block cover-image" data-image-src="../../assets/images/users/male/4.jpg">
                                <span class="avatar-status bg-green"></span>
                            </div>
                            <div>
                                <h6 class="mb-1">Lucas Walsh</h6>
                                <p class="mb-0 fs-13 ">Hey! there I' am available</p>
                                <div class="small text-muted">3 hours ago</div>
                            </div>
                        </a>
                        <a href="#" class="dropdown-item d-flex pb-3">
                            <div class="avatar avatar-md brround mr-3 d-block cover-image" data-image-src="../../assets/images/users/female/1.jpg">
                                <span class="avatar-status bg-red"></span>
                            </div>
                            <div>
                                <h6 class="mb-1">Rebecca Short</h6>
                                <p class="mb-0 fs-13 ">New product Launching</p>
                                <div class="small text-muted">5  hour ago</div>
                            </div>
                        </a>
                        <a href="#" class="dropdown-item d-flex pb-3">
                            <div class="avatar avatar-md brround mr-3 d-block cover-image" data-image-src="../../assets/images/users/female/8.jpg">
                                <span class="avatar-status bg-yellow"></span>
                            </div>
                            <div>
                                <h6 class="mb-1">Nicola Vance</h6>
                                <p class="mb-0 fs-13">New Schedule Realease</p>
                                <div class="small text-muted">45 mintues ago</div>
                            </div>
                        </a>
                        <div class="border-top">
                            <a href="#" class="dropdown-item text-center">See all Messages</a>
                        </div>
                    </div>
                </div><!-- MESSAGE-BOX -->
                <div class="dropdown header-user">
                    <a href="#" class="nav-link icon" data-toggle="dropdown">
                        <span><img src="../../assets/images/users/female/7.jpg" alt="profile-user" class="avatar brround cover-image mb-0 ml-0"></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                        <div class=" dropdown-header noti-title text-center border-bottom p-3">
                            <div class="header-usertext">
                                <h5 class="mb-1">Sonia Rees</h5>
                                <p class="mb-0">Web Developer</p>
                            </div>
                        </div>
                        <a class="dropdown-item" href="profile.html">
                            <i class="mdi mdi-account-outline mr-2"></i> <span>My profile</span>
                        </a>
                        <a class="dropdown-item" href="#">
                            <i class="mdi mdi-settings mr-2"></i> <span>Settings</span>
                        </a>
                        <a class="dropdown-item" href="#">
                            <i class="fe fe-calendar mr-2"></i> <span>Activity</span>
                        </a>
                        <a class="dropdown-item" href="#">
                            <i class="mdi mdi-compass-outline mr-2"></i> <span>Support</span>
                        </a>
                        <a class="dropdown-item" href="login.html">
                            <i class="mdi  mdi-logout-variant mr-2"></i> <span>Logout</span>
                        </a>
                    </div>
                </div><!-- SIDE-MENU -->
                <div class="dropdown  header-fullscreen">
                    <a class="nav-link icon sidebar-right-mobile" data-toggle="sidebar-right" data-target=".sidebar-right">
                        <i class="fe fe-align-right" ></i>
                    </a>
                </div><!-- Side menu -->
            </div>
        </div>
    </div>
</div>
<!-- HEADER END -->

<!-- Sidebar menu-->
<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
<aside class="app-sidebar">
    <div class="side-tab-body p-0 border-0" id="sidemenu-Tab">
        <nav class="first-sidemenu">
            <ul class="resp-tabs-list hor_1">
                <li class="dashboard-slica" data-toggle="tooltip" data-placement="right" title="Dashboard">
                    <i class="side-menu__icon fe fe-home"></i><span class="side-menu__label">Dashboard</span>
                </li>
                <li class="widget-slica" data-toggle="tooltip" data-placement="right" title="Widgets">
                   <a href="<?php echo URLROOT.'/'.$_SESSION['lang'].'/DemoTest/order' ?>"> <i class="side-menu__icon fe fe-grid"></i><span class="side-menu__label">Orders</span></a>
                </li>
                <li class="components-slica" data-toggle="tooltip" data-placement="right" title="Components">
                    <i class="side-menu__icon fe fe-layers"></i><span class="side-menu__label">Components</span>
                </li>
                <li class="element-slica" data-toggle="tooltip" data-placement="right" title="UI Elements">
                    <i class="side-menu__icon fe fe-package"></i><span class="side-menu__label">UI Elements</span>
                </li>
                <li class="icons-slica" data-toggle="tooltip" data-placement="right" title="Icons">
                    <i class="side-menu__icon fe fe-stop-circle"></i><span class="side-menu__label">Icons</span>
                </li>
                <li class="forms-slica" data-toggle="tooltip" data-placement="right" title="Forms">
                    <i class="side-menu__icon fe fe-file-text"></i><span class="side-menu__label">Forms</span>
                </li>
                <li class="charts-slica" data-toggle="tooltip" data-placement="right" title="Charts">
                    <i class="side-menu__icon fe fe-pie-chart"></i><span class="side-menu__label">Charts</span>
                </li>
                <li class="pages-slica" data-toggle="tooltip" data-placement="right" title="Pages">
                    <i class="side-menu__icon fe fe-life-buoy"></i><span class="side-menu__label">Pages</span>
                </li>
                <li class="ecommerce-slica" data-toggle="tooltip" data-placement="right" title="E-commerce">
                    <i class="side-menu__icon fe fe-shopping-cart"></i><span class="side-menu__label">E-commerce</span>
                </li>
                <li class="custom-slica" data-toggle="tooltip" data-placement="right" title="Custom">
                    <i class="side-menu__icon fe fe-info"></i><span class="side-menu__label">Custom</span>
                </li>
            </ul>
        </nav>
        <nav class="second-sidemenu">
            <ul class="resp-tabs-container hor_1">
                <li class="dashboard-slica">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel sidetab-menu">
                                <div class="tab-menu-heading p-0 pb-2 border-0">
                                    <div class="tabs-menu ">
                                        <!-- Tabs -->
                                        <ul class="nav panel-tabs">
                                            <li class=""><a href="#side1" class="active" data-toggle="tab"><i class="fe fe-monitor"></i>Home</a></li>
                                            <li><a href="#side2" data-toggle="tab" ><i class="fe fe-message-square"></i>Chat</a></li>
                                            <li><a href="#side3" data-toggle="tab"><i class="fe fe-calendar "></i>Events</a></li>
                                            <li><a href="#side4" data-toggle="tab"><i class="fe fe-codepen "></i>Activity</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="panel-body tabs-menu-body p-0 border-0">
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="side1">
                                            <h5 class="mt-3 mb-4">Dashboard</h5>
                                            <a class="slide-item" href="index.html"> Dashboard 01</a>
                                            <a class="slide-item" href="index2.html"> Dashboard 02 </a>
                                            <a class="slide-item" href="index3.html"> Dashboard 03</a>
                                            <a class="slide-item" href="index4.html"> Dashboard 04</a>
                                            <a class="slide-item" href="index5.html"> Dashboard 05</a>
                                            <h5 class="mt-5 mb-4">Optional Submenus</h5>
                                            <div class="side-menu p-0">
                                                <div class="slide submenu">
                                                    <a class="side-menu__item" data-toggle="slide" href="#"><span class="side-menu__label"> Multilevl menu</span><i class="angle fa fa-angle-down"></i></a>
                                                    <ul class="slide-menu submenu-list">
                                                        <li>
                                                            <a href="#" class="slide-item">Level 1</a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="slide-item">Level 2</a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="slide-item">Level 3</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="slide submenu">
                                                    <a class="side-menu__item" data-toggle="slide" href="#"><span class="side-menu__label"> Submenu1</span><i class="angle fa fa-angle-down"></i></a>
                                                    <ul class="slide-menu submenu-list">
                                                        <li>
                                                            <a href="#" class="slide-item">Submenu1.1</a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="slide-item">Submenu1.2</a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="slide-item">Submenu1.3</a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="slide-item">Submenu1.4</a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="slide-item">Submenu1.5</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="slide submenu">
                                                    <a class="side-menu__item" data-toggle="slide" href="#"><span class="side-menu__label"> Submenu2</span><i class="angle fa fa-angle-down"></i></a>
                                                    <ul class="slide-menu submenu-list">
                                                        <li>
                                                            <a href="#" class="slide-item">Submenu2.1</a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="slide-item">Submenu2.2</a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="slide-item">Submenu2.3</a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="slide-item">Submenu2.4</a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="slide-item">Submenu2.5</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <h5 class="mt-5 mb-4">Account</h5>
                                            <ul class="side-account">
                                                <li class="acc-link" >
                                                    <a href="#">
                                                        <i class="fe fe-download text-primary mr-2 fs-20"></i> Downloads
                                                    </a>
                                                </li>
                                                <li class="acc-link" >
                                                    <a href="#">
                                                        <i class="fe fe-folder-plus text-secondary mr-2 fs-20"></i> Archive
                                                    </a>
                                                </li>
                                                <li class="acc-link" >
                                                    <a href="#">
                                                        <i class="fe fe-rss text-danger mr-2 fs-20"></i> Feed Manager
                                                    </a>
                                                </li>
                                                <li class="acc-link" >
                                                    <a href="#">
                                                        <i class="fe fe-settings text-warning mr-2 fs-20"></i> Settings
                                                    </a>
                                                </li>
                                            </ul>
                                            <h5 class="mt-5 mb-4">Followers</h5>
                                            <div class="">
																<span class="avatar brround avatar-md cover-image m-1" data-image-src="../../assets/images/users/female/2.jpg">
																	<span class="avatar-status bg-green"></span>
																</span>
                                                <span class="avatar brround avatar-md cover-image m-1" data-image-src="../../assets/images/users/male/3.jpg">
																	<span class="avatar-status bg-red"></span>
																</span>
                                                <span class="avatar brround avatar-md cover-image m-1" data-image-src="../../assets/images/users/female/3.jpg">
																	<span class="avatar-status bg-warning"></span>
																</span>
                                                <span class="avatar brround avatar-md cover-image m-1" data-image-src="../../assets/images/users/male/4.jpg">
																	<span class="avatar-status bg-green"></span>
																</span>
                                                <span class="avatar brround avatar-md cover-image m-1" data-image-src="../../assets/images/users/female/4.jpg">
																	<span class="avatar-status bg-warning"></span>
																</span>
                                                <span class="avatar brround avatar-md cover-image m-1">+34</span>
                                            </div>
                                        </div>
                                        <div class="tab-pane  " id="side2">
                                            <h5 class="mt-3 mb-4">Chat</h5>
                                            <div class="input-group  mb-4">
                                                <input type="text" class="form-control" placeholder="Search ...">
                                                <span class="input-group-append">
																	<button class="btn btn-primary" type="button">Search</button>
																</span>
                                            </div>
                                            <div class=" ">
                                                <div class="list-group-item d-flex  align-items-center p-1 ">
                                                    <div class="mr-3">
                                                        <span class="avatar avatar-lg brround cover-image" data-image-src="../../assets/images/users/female/2.jpg"><span class="avatar-status bg-green"></span></span>
                                                    </div>
                                                    <div>
                                                        <strong>Madeleine</strong> Hey! there I' am available....
                                                        <div class="small text-muted">
                                                            3 hours ago
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="list-group-item d-flex  align-items-center p-2">
                                                    <div class="mr-3">
                                                        <span class="avatar avatar-lg brround cover-image" data-image-src="../../assets/images/users/male/2.jpg"></span>
                                                    </div>
                                                    <div>
                                                        <strong>Anthony</strong> New product Launching...
                                                        <div class="small text-muted">
                                                            5 hour ago
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="list-group-item d-flex  align-items-center p-2">
                                                    <div class="mr-3">
                                                        <span class="avatar avatar-lg brround cover-image" data-image-src="../../assets/images/users/female/9.jpg"><span class="avatar-status bg-green"></span></span>
                                                    </div>
                                                    <div>
                                                        <strong>Olivia</strong> New Schedule Realease......
                                                        <div class="small text-muted">
                                                            45 mintues ago
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="list-group-item d-flex  align-items-center p-2">
                                                    <div class="mr-3">
                                                        <span class="avatar avatar-lg brround cover-image" data-image-src="../../assets/images/users/female/1.jpg"><span class="avatar-status bg-green"></span></span>
                                                    </div>
                                                    <div>
                                                        <strong>Madeleine</strong> Hey! there I' am available....
                                                        <div class="small text-muted">
                                                            3 hours ago
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="list-group-item d-flex  align-items-center p-2">
                                                    <div class="mr-3">
                                                        <span class="avatar avatar-lg brround cover-image" data-image-src="../../assets/images/users/male/1.jpg"></span>
                                                    </div>
                                                    <div>
                                                        <strong>Anthony</strong> New product Launching...
                                                        <div class="small text-muted">
                                                            5 hour ago
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="list-group-item d-flex  align-items-center p-2">
                                                    <div class="mr-3">
                                                        <span class="avatar avatar-lg brround cover-image" data-image-src="../../assets/images/users/female/5.jpg"><span class="avatar-status bg-green"></span></span>
                                                    </div>
                                                    <div>
                                                        <strong>Lily May</strong> New Schedule Realease......
                                                        <div class="small text-muted">
                                                            45 mintues ago
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="list-group-item d-flex  align-items-center p-2">
                                                    <div class="mr-3">
                                                        <span class="avatar avatar-lg brround cover-image" data-image-src="../../assets/images/users/male/4.jpg"><span class="avatar-status bg-green"></span></span>
                                                    </div>
                                                    <div>
                                                        <strong>Eric Walsh</strong> Okay...I will be waiting for you
                                                        <div class="small text-muted">
                                                            12 mintues ago
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="list-group-item d-flex  align-items-center p-2">
                                                    <div class="mr-3">
                                                        <span class="avatar avatar-lg brround cover-image" data-image-src="../../assets/images/users/female/1.jpg"></span>
                                                    </div>
                                                    <div>
                                                        <strong>Alison White</strong> Hi we can explain our new project......
                                                        <div class="small text-muted">
                                                            45 mintues ago
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="list-group-item d-flex  align-items-center p-2">
                                                    <div class="mr-3">
                                                        <span class="avatar avatar-lg brround cover-image" data-image-src="../../assets/images/users/male/7.jpg"><span class="avatar-status bg-green"></span></span>
                                                    </div>
                                                    <div>
                                                        <strong>Jacob Lewis</strong> New product Launching...
                                                        <div class="small text-muted">
                                                            45 mintues ago
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="side3">
                                            <h5 class="mt-3 mb-4">Event</h5>
                                            <div class="latest-timeline">
                                                <div class="timeline">
                                                    <div class="mt-0 event-text">
                                                        <h6 class="mb-0"><a target="_blank" href="#" class="timeline-head">Employees Meeting</a></h6>
                                                        <span class="fs-11 text-muted mb-2">23 May, 2020</span>
                                                        <p class="fs-11">sed do eiusmod tempor incididunt ut labore et . </p>
                                                    </div>
                                                    <div class="event-text">
                                                        <h6 class="mb-0"><a href="#" class="timeline-head">Ramazan Festival  Celebration</a></h6>
                                                        <span class="mb-2 fs-11 text-muted">21 May, 2020</span>
                                                        <p class="">sed do eiusmod tempor  magna aliqua nisi ut . </p>
                                                    </div>
                                                    <div class="event-text">
                                                        <h6 class="mb-0"><a href="#" class="timeline-head">Best Employee Announcement</a></h6>
                                                        <span class="mb-2 fs-11 text-muted">18 May, 2020</span>
                                                        <p class="">sed do eiusmod tempor incididunt ut aliquip.</p>
                                                    </div>
                                                    <div class="event-text">
                                                        <h6 class="mb-0"><a href="#" class="timeline-head">Weekend trip</a></h6>
                                                        <span class="mb-2 fs-11 text-muted">16 May, 2020</span>
                                                        <p class="">sed do eiusmod tempor incididunt ut aliquip.</p>
                                                    </div>
                                                    <div class="event-text">
                                                        <h6 class="mb-0"><a href="#" class="timeline-head">New Project Started..</a></h6>
                                                        <span class="mb-2 fs-11 text-muted">15 May, 2020</span>
                                                        <p class="">sed do eiusmod tempor incididunt ut aliquip.</p>
                                                    </div>
                                                    <div class="mb-0 event-text">
                                                        <h6 class="mb-0"><a href="#" class="timeline-head">Gradening working</a></h6>
                                                        <span class="mb-2 fs-11 text-muted">07 May, 2020</span>
                                                        <p class="">sed do eiusmod tempor  aliqua nisi ut aliquip . </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="side4">
                                            <h5 class="mt-3 mb-4">Activity</h5>
                                            <div class="activity mt-3">
                                                <img src="../../assets/images/users/male/1.jpg" alt="" class="img-activity">
                                                <div class="time-activity">
                                                    <div class="item-activity">
                                                        <p class="mb-0"><b>Adam	Berry</b> Add a new projects <b> AngularJS Template</b></p>
                                                        <small class="text-muted ">30 mins ago</small>
                                                    </div>
                                                </div>
                                                <img src="../../assets/images/users/female/2.jpg" alt="" class="img-activity">
                                                <div class="time-activity">
                                                    <div class="item-activity">
                                                        <p class="mb-0"><b>Irene Hunter</b> Add a new projects <b>Free HTML Template</b></p>
                                                        <small class="text-muted ">1 days ago</small>
                                                    </div>
                                                </div>
                                                <img src="../../assets/images/users/male/3.jpg" alt="" class="img-activity">
                                                <div class="time-activity">
                                                    <div class="item-activity">
                                                        <p class="mb-0"><b>John	Payne</b> Add a new projects <b>Free PSD Template</b></p>
                                                        <small class="text-muted ">3 days ago</small>
                                                    </div>
                                                </div>
                                                <img src="../../assets/images/users/female/4.jpg" alt="" class="img-activity">
                                                <div class="time-activity">
                                                    <div class="item-activity">
                                                        <p class="mb-0"><b>Julia Hardacre</b> Add a new projects <b>Free UI Template</b></p>
                                                        <small class="text-muted ">5 days ago</small>
                                                    </div>
                                                </div>
                                                <img src="../../assets/images/users/male/5.jpg" alt="" class="img-activity">
                                                <div class="time-activity">
                                                    <div class="item-activity">
                                                        <p class="mb-0"><b>Adam	Berry</b> Add a new projects <b> AngularJS Template</b></p>
                                                        <small class="text-muted ">30 mins ago</small>
                                                    </div>
                                                </div>
                                                <img src="../../assets/images/users/female/6.jpg" alt="" class="img-activity">
                                                <div class="time-activity">
                                                    <div class="item-activity">
                                                        <p class="mb-0"><b>Irene Hunter</b> Add a new projects <b>Free HTML Template</b></p>
                                                        <small class="text-muted ">1 days ago</small>
                                                    </div>
                                                </div>
                                                <img src="../../assets/images/users/male/7.jpg" alt="" class="img-activity">
                                                <div class="time-activity">
                                                    <div class="item-activity">
                                                        <p class="mb-0"><b>John	Payne</b> Add a new projects <b>Free PSD Template</b></p>
                                                        <small class="text-muted ">3 days ago</small>
                                                    </div>
                                                </div>
                                                <img src="../../assets/images/users/female/8.jpg" alt="" class="img-activity">
                                                <div class="time-activity">
                                                    <div class="item-activity">
                                                        <p class="mb-0"><b>Julia Hardacre</b> Add a new projects <b>Free UI Template</b></p>
                                                        <small class="text-muted ">5 days ago</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="widget-slica">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel sidetab-menu">
                                <div class="tab-menu-heading p-0 pb-2 border-0">
                                    <div class="tabs-menu ">
                                        <!-- Tabs -->
                                        <ul class="nav panel-tabs">
                                            <li class=""><a href="#side11" class="active" data-toggle="tab"><i class="fe fe-monitor"></i>Home</a></li>
                                            <li><a href="#side12" data-toggle="tab" ><i class="fe fe-message-square"></i>Chat</a></li>
                                            <li><a href="#side13" data-toggle="tab"><i class="fe fe-calendar"></i>Events</a></li>
                                            <li><a href="#side14" data-toggle="tab"><i class="fe fe-codepen"></i>Activity</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="panel-body tabs-menu-body p-0 border-0">
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="side11">
                                            <h5 class="mt-3 mb-4">Widgets</h5>
                                            <a href="widgets.html" class="slide-item">Widget</a>
                                            <div class="side-menu p-0">
                                                <div class="slide submenu">
                                                    <a class="side-menu__item" data-toggle="slide" href="#"><span class="side-menu__label">Mail</span><i class="angle fa fa-angle-down"></i></a>
                                                    <ul class="slide-menu submenu-list">
                                                        <li>
                                                            <a href="email.html" class="slide-item">Mail-Compose</a>
                                                        </li>
                                                        <li>
                                                            <a href="emailservices.html" class="slide-item">Mail-inbox</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <h5 class="mt-5 mb-4">Account</h5>
                                            <ul class="side-account">
                                                <li class="acc-link" >
                                                    <a href="#">
                                                        <i class="fe fe-download text-primary mr-2 fs-20"></i> Downloads
                                                    </a>
                                                </li>
                                                <li class="acc-link" >
                                                    <a href="#">
                                                        <i class="fe fe-folder-plus text-secondary mr-2 fs-20"></i> Archive
                                                    </a>
                                                </li>
                                                <li class="acc-link" >
                                                    <a href="#">
                                                        <i class="fe fe-rss text-danger mr-2 fs-20"></i> Feed Manager
                                                    </a>
                                                </li>
                                                <li class="acc-link" >
                                                    <a href="#">
                                                        <i class="fe fe-settings text-warning mr-2 fs-20"></i> Settings
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="tab-pane  " id="side12">
                                            <h5 class="mt-3 mb-4">Chat</h5>
                                            <div class="input-group  mb-4">
                                                <input type="text" class="form-control" placeholder="Search ...">
                                                <span class="input-group-append">
																	<button class="btn btn-primary" type="button">Search</button>
																</span>
                                            </div>
                                            <div class=" ">
                                                <div class="list-group-item d-flex  align-items-center p-1 ">
                                                    <div class="mr-3">
                                                        <span class="avatar avatar-lg brround cover-image" data-image-src="../../assets/images/users/female/2.jpg"><span class="avatar-status bg-green"></span></span>
                                                    </div>
                                                    <div>
                                                        <strong>Madeleine</strong> Hey! there I' am available....
                                                        <div class="small text-muted">
                                                            3 hours ago
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="list-group-item d-flex  align-items-center p-2">
                                                    <div class="mr-3">
                                                        <span class="avatar avatar-lg brround cover-image" data-image-src="../../assets/images/users/male/2.jpg"></span>
                                                    </div>
                                                    <div>
                                                        <strong>Anthony</strong> New product Launching...
                                                        <div class="small text-muted">
                                                            5 hour ago
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="list-group-item d-flex  align-items-center p-2">
                                                    <div class="mr-3">
                                                        <span class="avatar avatar-lg brround cover-image" data-image-src="../../assets/images/users/female/9.jpg"><span class="avatar-status bg-green"></span></span>
                                                    </div>
                                                    <div>
                                                        <strong>Olivia</strong> New Schedule Realease......
                                                        <div class="small text-muted">
                                                            45 mintues ago
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="list-group-item d-flex  align-items-center p-2">
                                                    <div class="mr-3">
                                                        <span class="avatar avatar-lg brround cover-image" data-image-src="../../assets/images/users/female/1.jpg"><span class="avatar-status bg-green"></span></span>
                                                    </div>
                                                    <div>
                                                        <strong>Madeleine</strong> Hey! there I' am available....
                                                        <div class="small text-muted">
                                                            3 hours ago
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="list-group-item d-flex  align-items-center p-2">
                                                    <div class="mr-3">
                                                        <span class="avatar avatar-lg brround cover-image" data-image-src="../../assets/images/users/male/1.jpg"></span>
                                                    </div>
                                                    <div>
                                                        <strong>Anthony</strong> New product Launching...
                                                        <div class="small text-muted">
                                                            5 hour ago
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="list-group-item d-flex  align-items-center p-2">
                                                    <div class="mr-3">
                                                        <span class="avatar avatar-lg brround cover-image" data-image-src="../../assets/images/users/female/5.jpg"><span class="avatar-status bg-green"></span></span>
                                                    </div>
                                                    <div>
                                                        <strong>Lily May</strong> New Schedule Realease......
                                                        <div class="small text-muted">
                                                            45 mintues ago
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="list-group-item d-flex  align-items-center p-2">
                                                    <div class="mr-3">
                                                        <span class="avatar avatar-lg brround cover-image" data-image-src="../../assets/images/users/male/4.jpg"><span class="avatar-status bg-green"></span></span>
                                                    </div>
                                                    <div>
                                                        <strong>Eric Walsh</strong> Okay...I will be waiting for you
                                                        <div class="small text-muted">
                                                            12 mintues ago
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="list-group-item d-flex  align-items-center p-2">
                                                    <div class="mr-3">
                                                        <span class="avatar avatar-lg brround cover-image" data-image-src="../../assets/images/users/female/1.jpg"></span>
                                                    </div>
                                                    <div>
                                                        <strong>Alison White</strong> Hi we can explain our new project......
                                                        <div class="small text-muted">
                                                            45 mintues ago
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="list-group-item d-flex  align-items-center p-2">
                                                    <div class="mr-3">
                                                        <span class="avatar avatar-lg brround cover-image" data-image-src="../../assets/images/users/male/7.jpg"><span class="avatar-status bg-green"></span></span>
                                                    </div>
                                                    <div>
                                                        <strong>Jacob Lewis</strong> New product Launching...
                                                        <div class="small text-muted">
                                                            45 mintues ago
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="side13">
                                            <h5 class="mt-3 mb-4">Event</h5>
                                            <div class="latest-timeline">
                                                <div class="timeline">
                                                    <div class="mt-0 event-text">
                                                        <h6 class="mb-0"><a target="_blank" href="#" class="timeline-head">Employees Meeting</a></h6>
                                                        <span class="fs-11 text-muted mb-2">23 May, 2020</span>
                                                        <p class="fs-11">sed do eiusmod tempor incididunt ut labore et . </p>
                                                    </div>
                                                    <div class="event-text">
                                                        <h6 class="mb-0"><a href="#" class="timeline-head">Ramazan Festival  Celebration</a></h6>
                                                        <span class="mb-2 fs-11 text-muted">21 May, 2020</span>
                                                        <p class="">sed do eiusmod tempor  magna aliqua nisi ut . </p>
                                                    </div>
                                                    <div class="event-text">
                                                        <h6 class="mb-0"><a href="#" class="timeline-head">Best Employee Announcement</a></h6>
                                                        <span class="mb-2 fs-11 text-muted">18 May, 2020</span>
                                                        <p class="">sed do eiusmod tempor incididunt ut aliquip.</p>
                                                    </div>
                                                    <div class="event-text">
                                                        <h6 class="mb-0"><a href="#" class="timeline-head">Weekend trip</a></h6>
                                                        <span class="mb-2 fs-11 text-muted">16 May, 2020</span>
                                                        <p class="">sed do eiusmod tempor incididunt ut aliquip.</p>
                                                    </div>
                                                    <div class="event-text">
                                                        <h6 class="mb-0"><a href="#" class="timeline-head">New Project Started..</a></h6>
                                                        <span class="mb-2 fs-11 text-muted">15 May, 2020</span>
                                                        <p class="">sed do eiusmod tempor incididunt ut aliquip.</p>
                                                    </div>
                                                    <div class="mb-0 event-text">
                                                        <h6 class="mb-0"><a href="#" class="timeline-head">Gradening working</a></h6>
                                                        <span class="mb-2 fs-11 text-muted">07 May, 2020</span>
                                                        <p class="">sed do eiusmod tempor  aliqua nisi ut aliquip . </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="side14">
                                            <h5 class="mt-3 mb-4">Activity</h5>
                                            <div class="activity mt-3">
                                                <img src="../../assets/images/users/male/1.jpg" alt="" class="img-activity">
                                                <div class="time-activity">
                                                    <div class="item-activity">
                                                        <p class="mb-0"><b>Adam	Berry</b> Add a new projects <b> AngularJS Template</b></p>
                                                        <small class="text-muted ">30 mins ago</small>
                                                    </div>
                                                </div>
                                                <img src="../../assets/images/users/female/2.jpg" alt="" class="img-activity">
                                                <div class="time-activity">
                                                    <div class="item-activity">
                                                        <p class="mb-0"><b>Irene Hunter</b> Add a new projects <b>Free HTML Template</b></p>
                                                        <small class="text-muted ">1 days ago</small>
                                                    </div>
                                                </div>
                                                <img src="../../assets/images/users/male/3.jpg" alt="" class="img-activity">
                                                <div class="time-activity">
                                                    <div class="item-activity">
                                                        <p class="mb-0"><b>John	Payne</b> Add a new projects <b>Free PSD Template</b></p>
                                                        <small class="text-muted ">3 days ago</small>
                                                    </div>
                                                </div>
                                                <img src="../../assets/images/users/female/4.jpg" alt="" class="img-activity">
                                                <div class="time-activity">
                                                    <div class="item-activity">
                                                        <p class="mb-0"><b>Julia Hardacre</b> Add a new projects <b>Free UI Template</b></p>
                                                        <small class="text-muted ">5 days ago</small>
                                                    </div>
                                                </div>
                                                <img src="../../assets/images/users/male/5.jpg" alt="" class="img-activity">
                                                <div class="time-activity">
                                                    <div class="item-activity">
                                                        <p class="mb-0"><b>Adam	Berry</b> Add a new projects <b> AngularJS Template</b></p>
                                                        <small class="text-muted ">30 mins ago</small>
                                                    </div>
                                                </div>
                                                <img src="../../assets/images/users/female/6.jpg" alt="" class="img-activity">
                                                <div class="time-activity">
                                                    <div class="item-activity">
                                                        <p class="mb-0"><b>Irene Hunter</b> Add a new projects <b>Free HTML Template</b></p>
                                                        <small class="text-muted ">1 days ago</small>
                                                    </div>
                                                </div>
                                                <img src="../../assets/images/users/male/7.jpg" alt="" class="img-activity">
                                                <div class="time-activity">
                                                    <div class="item-activity">
                                                        <p class="mb-0"><b>John	Payne</b> Add a new projects <b>Free PSD Template</b></p>
                                                        <small class="text-muted ">3 days ago</small>
                                                    </div>
                                                </div>
                                                <img src="../../assets/images/users/female/8.jpg" alt="" class="img-activity">
                                                <div class="time-activity">
                                                    <div class="item-activity">
                                                        <p class="mb-0"><b>Julia Hardacre</b> Add a new projects <b>Free UI Template</b></p>
                                                        <small class="text-muted ">5 days ago</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="components-slica">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel sidetab-menu">
                                <div class="tab-menu-heading p-0 pb-2 border-0">
                                    <div class="tabs-menu ">
                                        <!-- Tabs -->
                                        <ul class="nav panel-tabs">
                                            <li class=""><a href="#side-1" class="active" data-toggle="tab"><i class="fe fe-monitor"></i>Home</a></li>
                                            <li><a href="#side-2" data-toggle="tab" ><i class="fe fe-message-square"></i>Chat</a></li>
                                            <li><a href="#side-3" data-toggle="tab"><i class="fe fe-calendar"></i>Events</a></li>
                                            <li><a href="#side-4" data-toggle="tab"><i class="fe fe-codepen"></i>Activity</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="panel-body tabs-menu-body p-0 border-0">
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="side-1">
                                            <h5 class="mt-3 mb-4">Components</h5>
                                            <a href="maps.html" class="slide-item"> Maps</a>
                                            <a href="crypto-currencies.html" class="slide-item"> Crypto-currencies</a>
                                            <a href="users-list.html" class="slide-item">User List</a>
                                            <a href="timeline.html" class="slide-item">Timeline</a>
                                            <div class="side-menu p-0">
                                                <div class="slide submenu">
                                                    <a class="side-menu__item" data-toggle="slide" href="#"><span class="side-menu__label"> Calendar</span><i class="angle fa fa-angle-down"></i></a>
                                                    <ul class="slide-menu submenu-list">
                                                        <li>
                                                            <a href="calendar.html" class="slide-item">Default calendar</a>
                                                        </li>
                                                        <li>
                                                            <a href="calendar2.html" class="slide-item">Full calendar</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="side-menu p-0">
                                                <div class="slide submenu">
                                                    <a class="side-menu__item" data-toggle="slide" href="#"><span class="side-menu__label">Tables</span><i class="angle fa fa-angle-down"></i></a>
                                                    <ul class="slide-menu submenu-list">
                                                        <li>
                                                            <a href="tables.html" class="slide-item">Default table</a>
                                                        </li>
                                                        <li>
                                                            <a href="datatable.html" class="slide-item">Data Table</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <a href="search.html" class="slide-item">Search page</a>
                                            <a href="tasks.html" class="slide-item">Tasks</a>
                                            <h5 class="mt-5 mb-4">Account</h5>
                                            <ul class="side-account">
                                                <li class="acc-link" >
                                                    <a href="#">
                                                        <i class="fe fe-download text-primary mr-2 fs-20"></i> Downloads
                                                    </a>
                                                </li>
                                                <li class="acc-link" >
                                                    <a href="#">
                                                        <i class="fe fe-folder-plus text-secondary mr-2 fs-20"></i> Archive
                                                    </a>
                                                </li>
                                                <li class="acc-link" >
                                                    <a href="#">
                                                        <i class="fe fe-rss text-danger mr-2 fs-20"></i> Feed Manager
                                                    </a>
                                                </li>
                                                <li class="acc-link" >
                                                    <a href="#">
                                                        <i class="fe fe-settings text-warning mr-2 fs-20"></i> Settings
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="tab-pane  " id="side-2">
                                            <h5 class="mt-3 mb-4">Chat</h5>
                                            <div class="input-group  mb-4">
                                                <input type="text" class="form-control" placeholder="Search ...">
                                                <span class="input-group-append">
																	<button class="btn btn-primary" type="button">Search</button>
																</span>
                                            </div>
                                            <div class=" ">
                                                <div class="list-group-item d-flex  align-items-center p-1 ">
                                                    <div class="mr-3">
                                                        <span class="avatar avatar-lg brround cover-image" data-image-src="../../assets/images/users/female/2.jpg"><span class="avatar-status bg-green"></span></span>
                                                    </div>
                                                    <div>
                                                        <strong>Madeleine</strong> Hey! there I' am available....
                                                        <div class="small text-muted">
                                                            3 hours ago
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="list-group-item d-flex  align-items-center p-2">
                                                    <div class="mr-3">
                                                        <span class="avatar avatar-lg brround cover-image" data-image-src="../../assets/images/users/male/2.jpg"></span>
                                                    </div>
                                                    <div>
                                                        <strong>Anthony</strong> New product Launching...
                                                        <div class="small text-muted">
                                                            5 hour ago
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="list-group-item d-flex  align-items-center p-2">
                                                    <div class="mr-3">
                                                        <span class="avatar avatar-lg brround cover-image" data-image-src="../../assets/images/users/female/9.jpg"><span class="avatar-status bg-green"></span></span>
                                                    </div>
                                                    <div>
                                                        <strong>Olivia</strong> New Schedule Realease......
                                                        <div class="small text-muted">
                                                            45 mintues ago
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="list-group-item d-flex  align-items-center p-2">
                                                    <div class="mr-3">
                                                        <span class="avatar avatar-lg brround cover-image" data-image-src="../../assets/images/users/female/1.jpg"><span class="avatar-status bg-green"></span></span>
                                                    </div>
                                                    <div>
                                                        <strong>Madeleine</strong> Hey! there I' am available....
                                                        <div class="small text-muted">
                                                            3 hours ago
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="list-group-item d-flex  align-items-center p-2">
                                                    <div class="mr-3">
                                                        <span class="avatar avatar-lg brround cover-image" data-image-src="../../assets/images/users/male/1.jpg"></span>
                                                    </div>
                                                    <div>
                                                        <strong>Anthony</strong> New product Launching...
                                                        <div class="small text-muted">
                                                            5 hour ago
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="list-group-item d-flex  align-items-center p-2">
                                                    <div class="mr-3">
                                                        <span class="avatar avatar-lg brround cover-image" data-image-src="../../assets/images/users/female/5.jpg"><span class="avatar-status bg-green"></span></span>
                                                    </div>
                                                    <div>
                                                        <strong>Lily May</strong> New Schedule Realease......
                                                        <div class="small text-muted">
                                                            45 mintues ago
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="list-group-item d-flex  align-items-center p-2">
                                                    <div class="mr-3">
                                                        <span class="avatar avatar-lg brround cover-image" data-image-src="../../assets/images/users/male/4.jpg"><span class="avatar-status bg-green"></span></span>
                                                    </div>
                                                    <div>
                                                        <strong>Eric Walsh</strong> Okay...I will be waiting for you
                                                        <div class="small text-muted">
                                                            12 mintues ago
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="list-group-item d-flex  align-items-center p-2">
                                                    <div class="mr-3">
                                                        <span class="avatar avatar-lg brround cover-image" data-image-src="../../assets/images/users/female/1.jpg"></span>
                                                    </div>
                                                    <div>
                                                        <strong>Alison White</strong> Hi we can explain our new project......
                                                        <div class="small text-muted">
                                                            45 mintues ago
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="list-group-item d-flex  align-items-center p-2">
                                                    <div class="mr-3">
                                                        <span class="avatar avatar-lg brround cover-image" data-image-src="../../assets/images/users/male/7.jpg"><span class="avatar-status bg-green"></span></span>
                                                    </div>
                                                    <div>
                                                        <strong>Jacob Lewis</strong> New product Launching...
                                                        <div class="small text-muted">
                                                            45 mintues ago
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="side-3">
                                            <h5 class="mt-3 mb-4">Event</h5>
                                            <div class="latest-timeline">
                                                <div class="timeline">
                                                    <div class="mt-0 event-text">
                                                        <h6 class="mb-0"><a target="_blank" href="#" class="timeline-head">Employees Meeting</a></h6>
                                                        <span class="fs-11 text-muted mb-2">23 May, 2020</span>
                                                        <p class="fs-11">sed do eiusmod tempor incididunt ut labore et . </p>
                                                    </div>
                                                    <div class="event-text">
                                                        <h6 class="mb-0"><a href="#" class="timeline-head">Ramazan Festival  Celebration</a></h6>
                                                        <span class="mb-2 fs-11 text-muted">21 May, 2020</span>
                                                        <p class="">sed do eiusmod tempor  magna aliqua nisi ut . </p>
                                                    </div>
                                                    <div class="event-text">
                                                        <h6 class="mb-0"><a href="#" class="timeline-head">Best Employee Announcement</a></h6>
                                                        <span class="mb-2 fs-11 text-muted">18 May, 2020</span>
                                                        <p class="">sed do eiusmod tempor incididunt ut aliquip.</p>
                                                    </div>
                                                    <div class="event-text">
                                                        <h6 class="mb-0"><a href="#" class="timeline-head">Weekend trip</a></h6>
                                                        <span class="mb-2 fs-11 text-muted">16 May, 2020</span>
                                                        <p class="">sed do eiusmod tempor incididunt ut aliquip.</p>
                                                    </div>
                                                    <div class="event-text">
                                                        <h6 class="mb-0"><a href="#" class="timeline-head">New Project Started..</a></h6>
                                                        <span class="mb-2 fs-11 text-muted">15 May, 2020</span>
                                                        <p class="">sed do eiusmod tempor incididunt ut aliquip.</p>
                                                    </div>
                                                    <div class="mb-0 event-text">
                                                        <h6 class="mb-0"><a href="#" class="timeline-head">Gradening working</a></h6>
                                                        <span class="mb-2 fs-11 text-muted">07 May, 2020</span>
                                                        <p class="">sed do eiusmod tempor  aliqua nisi ut aliquip . </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="side-4">
                                            <h5 class="mt-3 mb-4">Activity</h5>
                                            <div class="activity mt-3">
                                                <img src="../../assets/images/users/male/1.jpg" alt="" class="img-activity">
                                                <div class="time-activity">
                                                    <div class="item-activity">
                                                        <p class="mb-0"><b>Adam	Berry</b> Add a new projects <b> AngularJS Template</b></p>
                                                        <small class="text-muted ">30 mins ago</small>
                                                    </div>
                                                </div>
                                                <img src="../../assets/images/users/female/2.jpg" alt="" class="img-activity">
                                                <div class="time-activity">
                                                    <div class="item-activity">
                                                        <p class="mb-0"><b>Irene Hunter</b> Add a new projects <b>Free HTML Template</b></p>
                                                        <small class="text-muted ">1 days ago</small>
                                                    </div>
                                                </div>
                                                <img src="../../assets/images/users/male/3.jpg" alt="" class="img-activity">
                                                <div class="time-activity">
                                                    <div class="item-activity">
                                                        <p class="mb-0"><b>John	Payne</b> Add a new projects <b>Free PSD Template</b></p>
                                                        <small class="text-muted ">3 days ago</small>
                                                    </div>
                                                </div>
                                                <img src="../../assets/images/users/female/4.jpg" alt="" class="img-activity">
                                                <div class="time-activity">
                                                    <div class="item-activity">
                                                        <p class="mb-0"><b>Julia Hardacre</b> Add a new projects <b>Free UI Template</b></p>
                                                        <small class="text-muted ">5 days ago</small>
                                                    </div>
                                                </div>
                                                <img src="../../assets/images/users/male/5.jpg" alt="" class="img-activity">
                                                <div class="time-activity">
                                                    <div class="item-activity">
                                                        <p class="mb-0"><b>Adam	Berry</b> Add a new projects <b> AngularJS Template</b></p>
                                                        <small class="text-muted ">30 mins ago</small>
                                                    </div>
                                                </div>
                                                <img src="../../assets/images/users/female/6.jpg" alt="" class="img-activity">
                                                <div class="time-activity">
                                                    <div class="item-activity">
                                                        <p class="mb-0"><b>Irene Hunter</b> Add a new projects <b>Free HTML Template</b></p>
                                                        <small class="text-muted ">1 days ago</small>
                                                    </div>
                                                </div>
                                                <img src="../../assets/images/users/male/7.jpg" alt="" class="img-activity">
                                                <div class="time-activity">
                                                    <div class="item-activity">
                                                        <p class="mb-0"><b>John	Payne</b> Add a new projects <b>Free PSD Template</b></p>
                                                        <small class="text-muted ">3 days ago</small>
                                                    </div>
                                                </div>
                                                <img src="../../assets/images/users/female/8.jpg" alt="" class="img-activity">
                                                <div class="time-activity">
                                                    <div class="item-activity">
                                                        <p class="mb-0"><b>Julia Hardacre</b> Add a new projects <b>Free UI Template</b></p>
                                                        <small class="text-muted ">5 days ago</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="element-slica">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel sidetab-menu">
                                <div class="tab-menu-heading p-0 pb-2 border-0">
                                    <div class="tabs-menu ">
                                        <!-- Tabs -->
                                        <ul class="nav panel-tabs">
                                            <li class=""><a href="#side-11" class="active" data-toggle="tab"><i class="fe fe-monitor"></i>Home</a></li>
                                            <li><a href="#side-12" data-toggle="tab" ><i class="fe fe-message-square"></i>Chat</a></li>
                                            <li><a href="#side-13" data-toggle="tab"><i class="fe fe-calendar"></i>Events</a></li>
                                            <li><a href="#side-14" data-toggle="tab"><i class="fe fe-codepen"></i>Activity</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="panel-body tabs-menu-body p-0 border-0">
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="side-11">
                                            <h5 class="mt-3 mb-4">UI Elements</h5>
                                            <a href="alerts.html" class="slide-item"> Alerts</a>
                                            <a href="buttons.html" class="slide-item">Buttons</a>
                                            <a href="colors.html" class="slide-item">Colors</a>
                                            <a href="avatarsquare.html" class="slide-item">Avatar-Square</a>
                                            <a href="avatar-round.html" class="slide-item">Avatar-Rounded</a>
                                            <a href="avatar-radius.html" class="slide-item">Avatar-Radius</a>
                                            <a href="dropdown.html" class="slide-item">Drop downs</a>
                                            <a href="cards.html" class="slide-item">Cards design</a>
                                            <a href="chat.html" class="slide-item">Default Chat</a>
                                            <a href="list.html" class="slide-item">List</a>
                                            <a href="tags.html" class="slide-item">Tags</a>
                                            <a href="pagination.html" class="slide-item">Pagination</a>
                                            <a href="navigation.html" class="slide-item">Navigation</a>
                                            <a href="typography.html" class="slide-item">Typography</a>
                                            <a href="breadcrumbs.html" class="slide-item">Breadcrumbs</a>
                                            <a href="badge.html" class="slide-item">Badges</a>
                                            <a href="notify.html" class="slide-item">Notifications</a>
                                            <a href="sweetalert.html" class="slide-item">Sweet alerts</a>
                                            <a href="jumbotron.html" class="slide-item">Jumbotron</a>
                                            <a href="panels.html" class="slide-item">Panels</a>
                                            <a href="thumbnails.html" class="slide-item">Thumbnails</a>
                                            <a href="mediaobject.html" class="slide-item">Media Object</a>
                                            <a href="accordion.html" class="slide-item">Accordions</a>
                                            <a href="tabs.html" class="slide-item">Tabs</a>
                                            <a href="chart.html" class="slide-item">Charts</a>
                                            <a href="rangeslider.html" class="slide-item">Range slider</a>
                                            <a href="scroll.html" class="slide-item">Content Scroll bar</a>
                                            <a href="modal.html" class="slide-item">Modal</a>
                                            <a href="tooltipandpopover.html" class="slide-item">Tooltip and popover</a>
                                            <a href="progress.html" class="slide-item">Progress</a>
                                            <a href="carousel.html" class="slide-item">Carousels</a>
                                            <a href="headers.html" class="slide-item">Headers</a>
                                            <a href="footers.html" class="slide-item">Footers</a>
                                            <a href="loaders.html" class="slide-item">Loaders</a>
                                            <a href="counters.html" class="slide-item">Counters</a>
                                            <a href="rating.html" class="slide-item">Rating</a>
                                        </div>
                                        <div class="tab-pane  " id="side-12">
                                            <h5 class="mt-3 mb-4">Chat</h5>
                                            <div class="input-group  mb-4">
                                                <input type="text" class="form-control" placeholder="Search ...">
                                                <span class="input-group-append">
																	<button class="btn btn-primary" type="button">Search</button>
																</span>
                                            </div>
                                            <div class=" ">
                                                <div class="list-group-item d-flex  align-items-center p-1 ">
                                                    <div class="mr-3">
                                                        <span class="avatar avatar-lg brround cover-image" data-image-src="../../assets/images/users/female/2.jpg"><span class="avatar-status bg-green"></span></span>
                                                    </div>
                                                    <div>
                                                        <strong>Madeleine</strong> Hey! there I' am available....
                                                        <div class="small text-muted">
                                                            3 hours ago
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="list-group-item d-flex  align-items-center p-2">
                                                    <div class="mr-3">
                                                        <span class="avatar avatar-lg brround cover-image" data-image-src="../../assets/images/users/male/2.jpg"></span>
                                                    </div>
                                                    <div>
                                                        <strong>Anthony</strong> New product Launching...
                                                        <div class="small text-muted">
                                                            5 hour ago
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="list-group-item d-flex  align-items-center p-2">
                                                    <div class="mr-3">
                                                        <span class="avatar avatar-lg brround cover-image" data-image-src="../../assets/images/users/female/9.jpg"><span class="avatar-status bg-green"></span></span>
                                                    </div>
                                                    <div>
                                                        <strong>Olivia</strong> New Schedule Realease......
                                                        <div class="small text-muted">
                                                            45 mintues ago
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="list-group-item d-flex  align-items-center p-2">
                                                    <div class="mr-3">
                                                        <span class="avatar avatar-lg brround cover-image" data-image-src="../../assets/images/users/female/1.jpg"><span class="avatar-status bg-green"></span></span>
                                                    </div>
                                                    <div>
                                                        <strong>Madeleine</strong> Hey! there I' am available....
                                                        <div class="small text-muted">
                                                            3 hours ago
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="list-group-item d-flex  align-items-center p-2">
                                                    <div class="mr-3">
                                                        <span class="avatar avatar-lg brround cover-image" data-image-src="../../assets/images/users/male/1.jpg"></span>
                                                    </div>
                                                    <div>
                                                        <strong>Anthony</strong> New product Launching...
                                                        <div class="small text-muted">
                                                            5 hour ago
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="list-group-item d-flex  align-items-center p-2">
                                                    <div class="mr-3">
                                                        <span class="avatar avatar-lg brround cover-image" data-image-src="../../assets/images/users/female/5.jpg"><span class="avatar-status bg-green"></span></span>
                                                    </div>
                                                    <div>
                                                        <strong>Lily May</strong> New Schedule Realease......
                                                        <div class="small text-muted">
                                                            45 mintues ago
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="list-group-item d-flex  align-items-center p-2">
                                                    <div class="mr-3">
                                                        <span class="avatar avatar-lg brround cover-image" data-image-src="../../assets/images/users/male/4.jpg"><span class="avatar-status bg-green"></span></span>
                                                    </div>
                                                    <div>
                                                        <strong>Eric Walsh</strong> Okay...I will be waiting for you
                                                        <div class="small text-muted">
                                                            12 mintues ago
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="list-group-item d-flex  align-items-center p-2">
                                                    <div class="mr-3">
                                                        <span class="avatar avatar-lg brround cover-image" data-image-src="../../assets/images/users/female/1.jpg"></span>
                                                    </div>
                                                    <div>
                                                        <strong>Alison White</strong> Hi we can explain our new project......
                                                        <div class="small text-muted">
                                                            45 mintues ago
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="list-group-item d-flex  align-items-center p-2">
                                                    <div class="mr-3">
                                                        <span class="avatar avatar-lg brround cover-image" data-image-src="../../assets/images/users/male/7.jpg"><span class="avatar-status bg-green"></span></span>
                                                    </div>
                                                    <div>
                                                        <strong>Jacob Lewis</strong> New product Launching...
                                                        <div class="small text-muted">
                                                            45 mintues ago
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="side-13">
                                            <h5 class="mt-3 mb-4">Event</h5>
                                            <div class="latest-timeline">
                                                <div class="timeline">
                                                    <div class="mt-0 event-text">
                                                        <h6 class="mb-0"><a target="_blank" href="#" class="timeline-head">Employees Meeting</a></h6>
                                                        <span class="fs-11 text-muted mb-2">23 May, 2020</span>
                                                        <p class="fs-11">sed do eiusmod tempor incididunt ut labore et . </p>
                                                    </div>
                                                    <div class="event-text">
                                                        <h6 class="mb-0"><a href="#" class="timeline-head">Ramazan Festival  Celebration</a></h6>
                                                        <span class="mb-2 fs-11 text-muted">21 May, 2020</span>
                                                        <p class="">sed do eiusmod tempor  magna aliqua nisi ut . </p>
                                                    </div>
                                                    <div class="event-text">
                                                        <h6 class="mb-0"><a href="#" class="timeline-head">Best Employee Announcement</a></h6>
                                                        <span class="mb-2 fs-11 text-muted">18 May, 2020</span>
                                                        <p class="">sed do eiusmod tempor incididunt ut aliquip.</p>
                                                    </div>
                                                    <div class="event-text">
                                                        <h6 class="mb-0"><a href="#" class="timeline-head">Weekend trip</a></h6>
                                                        <span class="mb-2 fs-11 text-muted">16 May, 2020</span>
                                                        <p class="">sed do eiusmod tempor incididunt ut aliquip.</p>
                                                    </div>
                                                    <div class="event-text">
                                                        <h6 class="mb-0"><a href="#" class="timeline-head">New Project Started..</a></h6>
                                                        <span class="mb-2 fs-11 text-muted">15 May, 2020</span>
                                                        <p class="">sed do eiusmod tempor incididunt ut aliquip.</p>
                                                    </div>
                                                    <div class="mb-0 event-text">
                                                        <h6 class="mb-0"><a href="#" class="timeline-head">Gradening working</a></h6>
                                                        <span class="mb-2 fs-11 text-muted">07 May, 2020</span>
                                                        <p class="">sed do eiusmod tempor  aliqua nisi ut aliquip . </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="side-14">
                                            <h5 class="mt-3 mb-4">Activity</h5>
                                            <div class="activity mt-3">
                                                <img src="../../assets/images/users/male/1.jpg" alt="" class="img-activity">
                                                <div class="time-activity">
                                                    <div class="item-activity">
                                                        <p class="mb-0"><b>Adam	Berry</b> Add a new projects <b> AngularJS Template</b></p>
                                                        <small class="text-muted ">30 mins ago</small>
                                                    </div>
                                                </div>
                                                <img src="../../assets/images/users/female/2.jpg" alt="" class="img-activity">
                                                <div class="time-activity">
                                                    <div class="item-activity">
                                                        <p class="mb-0"><b>Irene Hunter</b> Add a new projects <b>Free HTML Template</b></p>
                                                        <small class="text-muted ">1 days ago</small>
                                                    </div>
                                                </div>
                                                <img src="../../assets/images/users/male/3.jpg" alt="" class="img-activity">
                                                <div class="time-activity">
                                                    <div class="item-activity">
                                                        <p class="mb-0"><b>John	Payne</b> Add a new projects <b>Free PSD Template</b></p>
                                                        <small class="text-muted ">3 days ago</small>
                                                    </div>
                                                </div>
                                                <img src="../../assets/images/users/female/4.jpg" alt="" class="img-activity">
                                                <div class="time-activity">
                                                    <div class="item-activity">
                                                        <p class="mb-0"><b>Julia Hardacre</b> Add a new projects <b>Free UI Template</b></p>
                                                        <small class="text-muted ">5 days ago</small>
                                                    </div>
                                                </div>
                                                <img src="../../assets/images/users/male/5.jpg" alt="" class="img-activity">
                                                <div class="time-activity">
                                                    <div class="item-activity">
                                                        <p class="mb-0"><b>Adam	Berry</b> Add a new projects <b> AngularJS Template</b></p>
                                                        <small class="text-muted ">30 mins ago</small>
                                                    </div>
                                                </div>
                                                <img src="../../assets/images/users/female/6.jpg" alt="" class="img-activity">
                                                <div class="time-activity">
                                                    <div class="item-activity">
                                                        <p class="mb-0"><b>Irene Hunter</b> Add a new projects <b>Free HTML Template</b></p>
                                                        <small class="text-muted ">1 days ago</small>
                                                    </div>
                                                </div>
                                                <img src="../../assets/images/users/male/7.jpg" alt="" class="img-activity">
                                                <div class="time-activity">
                                                    <div class="item-activity">
                                                        <p class="mb-0"><b>John	Payne</b> Add a new projects <b>Free PSD Template</b></p>
                                                        <small class="text-muted ">3 days ago</small>
                                                    </div>
                                                </div>
                                                <img src="../../assets/images/users/female/8.jpg" alt="" class="img-activity">
                                                <div class="time-activity">
                                                    <div class="item-activity">
                                                        <p class="mb-0"><b>Julia Hardacre</b> Add a new projects <b>Free UI Template</b></p>
                                                        <small class="text-muted ">5 days ago</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="icons-slica">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel sidetab-menu">
                                <div class="tab-menu-heading p-0 pb-2 border-0">
                                    <div class="tabs-menu ">
                                        <!-- Tabs -->
                                        <ul class="nav panel-tabs">
                                            <li class=""><a href="#side-21" class="active" data-toggle="tab"><i class="fe fe-monitor"></i>Home</a></li>
                                            <li><a href="#side-22" data-toggle="tab" ><i class="fe fe-message-square"></i>Chat</a></li>
                                            <li><a href="#side-23" data-toggle="tab"><i class="fe fe-calendar"></i>Events</a></li>
                                            <li><a href="#side-24" data-toggle="tab"><i class="fe fe-codepen"></i>Activity</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="panel-body tabs-menu-body p-0 border-0">
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="side-21">
                                            <h5 class="mt-3 mb-4">Icons</h5>
                                            <a href="icons.html" class="slide-item">Font Awesome</a>
                                            <a href="icons3.html" class="slide-item">Simple line</a>
                                            <a href="icons8.html" class="slide-item">Themify</a>
                                            <a href="icons6.html" class="slide-item">Flag Icons</a>
                                            <a href="icons4.html" class="slide-item">Feather Awesome</a>
                                            <a href="icons5.html" class="slide-item">Ionic Icons</a>
                                            <a href="icons7.html" class="slide-item">pe7</a>
                                            <a href="icons9.html" class="slide-item">Typicons</a>
                                            <a href="icons2.html" class="slide-item">Material Design</a>
                                            <a href="icons10.html" class="slide-item">Weather Icons</a>
                                            <h5 class="mt-5 mb-4">Account</h5>
                                            <ul class="side-account">
                                                <li class="acc-link" >
                                                    <a href="#">
                                                        <i class="fe fe-download text-primary mr-2 fs-20"></i> Downloads
                                                    </a>
                                                </li>
                                                <li class="acc-link" >
                                                    <a href="#">
                                                        <i class="fe fe-folder-plus text-secondary mr-2 fs-20"></i> Archive
                                                    </a>
                                                </li>
                                                <li class="acc-link" >
                                                    <a href="#">
                                                        <i class="fe fe-rss text-danger mr-2 fs-20"></i> Feed Manager
                                                    </a>
                                                </li>
                                                <li class="acc-link" >
                                                    <a href="#">
                                                        <i class="fe fe-settings text-warning mr-2 fs-20"></i> Settings
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="tab-pane" id="side-22">
                                            <h5 class="mt-3 mb-4">Chat</h5>
                                            <div class="input-group  mb-4">
                                                <input type="text" class="form-control" placeholder="Search ...">
                                                <span class="input-group-append">
																	<button class="btn btn-primary" type="button">Search</button>
																</span>
                                            </div>
                                            <div class=" ">
                                                <div class="list-group-item d-flex  align-items-center p-1 ">
                                                    <div class="mr-3">
                                                        <span class="avatar avatar-lg brround cover-image" data-image-src="../../assets/images/users/female/2.jpg"><span class="avatar-status bg-green"></span></span>
                                                    </div>
                                                    <div>
                                                        <strong>Madeleine</strong> Hey! there I' am available....
                                                        <div class="small text-muted">
                                                            3 hours ago
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="list-group-item d-flex  align-items-center p-2">
                                                    <div class="mr-3">
                                                        <span class="avatar avatar-lg brround cover-image" data-image-src="../../assets/images/users/male/2.jpg"></span>
                                                    </div>
                                                    <div>
                                                        <strong>Anthony</strong> New product Launching...
                                                        <div class="small text-muted">
                                                            5 hour ago
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="list-group-item d-flex  align-items-center p-2">
                                                    <div class="mr-3">
                                                        <span class="avatar avatar-lg brround cover-image" data-image-src="../../assets/images/users/female/9.jpg"><span class="avatar-status bg-green"></span></span>
                                                    </div>
                                                    <div>
                                                        <strong>Olivia</strong> New Schedule Realease......
                                                        <div class="small text-muted">
                                                            45 mintues ago
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="list-group-item d-flex  align-items-center p-2">
                                                    <div class="mr-3">
                                                        <span class="avatar avatar-lg brround cover-image" data-image-src="../../assets/images/users/female/1.jpg"><span class="avatar-status bg-green"></span></span>
                                                    </div>
                                                    <div>
                                                        <strong>Madeleine</strong> Hey! there I' am available....
                                                        <div class="small text-muted">
                                                            3 hours ago
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="list-group-item d-flex  align-items-center p-2">
                                                    <div class="mr-3">
                                                        <span class="avatar avatar-lg brround cover-image" data-image-src="../../assets/images/users/male/1.jpg"></span>
                                                    </div>
                                                    <div>
                                                        <strong>Anthony</strong> New product Launching...
                                                        <div class="small text-muted">
                                                            5 hour ago
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="list-group-item d-flex  align-items-center p-2">
                                                    <div class="mr-3">
                                                        <span class="avatar avatar-lg brround cover-image" data-image-src="../../assets/images/users/female/5.jpg"><span class="avatar-status bg-green"></span></span>
                                                    </div>
                                                    <div>
                                                        <strong>Lily May</strong> New Schedule Realease......
                                                        <div class="small text-muted">
                                                            45 mintues ago
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="list-group-item d-flex  align-items-center p-2">
                                                    <div class="mr-3">
                                                        <span class="avatar avatar-lg brround cover-image" data-image-src="../../assets/images/users/male/4.jpg"><span class="avatar-status bg-green"></span></span>
                                                    </div>
                                                    <div>
                                                        <strong>Eric Walsh</strong> Okay...I will be waiting for you
                                                        <div class="small text-muted">
                                                            12 mintues ago
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="list-group-item d-flex  align-items-center p-2">
                                                    <div class="mr-3">
                                                        <span class="avatar avatar-lg brround cover-image" data-image-src="../../assets/images/users/female/1.jpg"></span>
                                                    </div>
                                                    <div>
                                                        <strong>Alison White</strong> Hi we can explain our new project......
                                                        <div class="small text-muted">
                                                            45 mintues ago
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="list-group-item d-flex  align-items-center p-2">
                                                    <div class="mr-3">
                                                        <span class="avatar avatar-lg brround cover-image" data-image-src="../../assets/images/users/male/7.jpg"><span class="avatar-status bg-green"></span></span>
                                                    </div>
                                                    <div>
                                                        <strong>Jacob Lewis</strong> New product Launching...
                                                        <div class="small text-muted">
                                                            45 mintues ago
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="side-23">
                                            <h5 class="mt-3 mb-4">Event</h5>
                                            <div class="latest-timeline">
                                                <div class="timeline">
                                                    <div class="mt-0 event-text">
                                                        <h6 class="mb-0"><a target="_blank" href="#" class="timeline-head">Employees Meeting</a></h6>
                                                        <span class="fs-11 text-muted mb-2">23 May, 2020</span>
                                                        <p class="fs-11">sed do eiusmod tempor incididunt ut labore et . </p>
                                                    </div>
                                                    <div class="event-text">
                                                        <h6 class="mb-0"><a href="#" class="timeline-head">Ramazan Festival  Celebration</a></h6>
                                                        <span class="mb-2 fs-11 text-muted">21 May, 2020</span>
                                                        <p class="">sed do eiusmod tempor  magna aliqua nisi ut . </p>
                                                    </div>
                                                    <div class="event-text">
                                                        <h6 class="mb-0"><a href="#" class="timeline-head">Best Employee Announcement</a></h6>
                                                        <span class="mb-2 fs-11 text-muted">18 May, 2020</span>
                                                        <p class="">sed do eiusmod tempor incididunt ut aliquip.</p>
                                                    </div>
                                                    <div class="event-text">
                                                        <h6 class="mb-0"><a href="#" class="timeline-head">Weekend trip</a></h6>
                                                        <span class="mb-2 fs-11 text-muted">16 May, 2020</span>
                                                        <p class="">sed do eiusmod tempor incididunt ut aliquip.</p>
                                                    </div>
                                                    <div class="event-text">
                                                        <h6 class="mb-0"><a href="#" class="timeline-head">New Project Started..</a></h6>
                                                        <span class="mb-2 fs-11 text-muted">15 May, 2020</span>
                                                        <p class="">sed do eiusmod tempor incididunt ut aliquip.</p>
                                                    </div>
                                                    <div class="mb-0 event-text">
                                                        <h6 class="mb-0"><a href="#" class="timeline-head">Gradening working</a></h6>
                                                        <span class="mb-2 fs-11 text-muted">07 May, 2020</span>
                                                        <p class="">sed do eiusmod tempor  aliqua nisi ut aliquip . </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="side-24">
                                            <h5 class="mt-3 mb-4">Activity</h5>
                                            <div class="activity mt-3">
                                                <img src="../../assets/images/users/male/1.jpg" alt="" class="img-activity">
                                                <div class="time-activity">
                                                    <div class="item-activity">
                                                        <p class="mb-0"><b>Adam	Berry</b> Add a new projects <b> AngularJS Template</b></p>
                                                        <small class="text-muted ">30 mins ago</small>
                                                    </div>
                                                </div>
                                                <img src="../../assets/images/users/female/2.jpg" alt="" class="img-activity">
                                                <div class="time-activity">
                                                    <div class="item-activity">
                                                        <p class="mb-0"><b>Irene Hunter</b> Add a new projects <b>Free HTML Template</b></p>
                                                        <small class="text-muted ">1 days ago</small>
                                                    </div>
                                                </div>
                                                <img src="../../assets/images/users/male/3.jpg" alt="" class="img-activity">
                                                <div class="time-activity">
                                                    <div class="item-activity">
                                                        <p class="mb-0"><b>John	Payne</b> Add a new projects <b>Free PSD Template</b></p>
                                                        <small class="text-muted ">3 days ago</small>
                                                    </div>
                                                </div>
                                                <img src="../../assets/images/users/female/4.jpg" alt="" class="img-activity">
                                                <div class="time-activity">
                                                    <div class="item-activity">
                                                        <p class="mb-0"><b>Julia Hardacre</b> Add a new projects <b>Free UI Template</b></p>
                                                        <small class="text-muted ">5 days ago</small>
                                                    </div>
                                                </div>
                                                <img src="../../assets/images/users/male/5.jpg" alt="" class="img-activity">
                                                <div class="time-activity">
                                                    <div class="item-activity">
                                                        <p class="mb-0"><b>Adam	Berry</b> Add a new projects <b> AngularJS Template</b></p>
                                                        <small class="text-muted ">30 mins ago</small>
                                                    </div>
                                                </div>
                                                <img src="../../assets/images/users/female/6.jpg" alt="" class="img-activity">
                                                <div class="time-activity">
                                                    <div class="item-activity">
                                                        <p class="mb-0"><b>Irene Hunter</b> Add a new projects <b>Free HTML Template</b></p>
                                                        <small class="text-muted ">1 days ago</small>
                                                    </div>
                                                </div>
                                                <img src="../../assets/images/users/male/7.jpg" alt="" class="img-activity">
                                                <div class="time-activity">
                                                    <div class="item-activity">
                                                        <p class="mb-0"><b>John	Payne</b> Add a new projects <b>Free PSD Template</b></p>
                                                        <small class="text-muted ">3 days ago</small>
                                                    </div>
                                                </div>
                                                <img src="../../assets/images/users/female/8.jpg" alt="" class="img-activity">
                                                <div class="time-activity">
                                                    <div class="item-activity">
                                                        <p class="mb-0"><b>Julia Hardacre</b> Add a new projects <b>Free UI Template</b></p>
                                                        <small class="text-muted ">5 days ago</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="forms-slica">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel sidetab-menu">
                                <div class="tab-menu-heading p-0 pb-2 border-0">
                                    <div class="tabs-menu ">
                                        <!-- Tabs -->
                                        <ul class="nav panel-tabs">
                                            <li class=""><a href="#side21" class="active" data-toggle="tab"><i class="fe fe-monitor"></i>Home</a></li>
                                            <li><a href="#side22" data-toggle="tab" ><i class="fe fe-message-square"></i>Chat</a></li>
                                            <li><a href="#side23" data-toggle="tab"><i class="fe fe-calendar"></i>Events</a></li>
                                            <li><a href="#side24" data-toggle="tab"><i class="fe fe-codepen"></i>Activity</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="panel-body tabs-menu-body p-0 border-0">
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="side21">
                                            <h5 class="mt-3 mb-4">Forms</h5>
                                            <a href="form-elements.html" class="slide-item">Form Elements</a>
                                            <a href="wysiwyag.html" class="slide-item">Form Editor</a>
                                            <a href="form-wizard.html" class="slide-item">Form Wizard</a>
                                            <h5 class="mt-5 mb-4">Account</h5>
                                            <ul class="side-account">
                                                <li class="acc-link" >
                                                    <a href="#">
                                                        <i class="fe fe-download text-primary mr-2 fs-20"></i> Downloads
                                                    </a>
                                                </li>
                                                <li class="acc-link" >
                                                    <a href="#">
                                                        <i class="fe fe-folder-plus text-secondary mr-2 fs-20"></i> Archive
                                                    </a>
                                                </li>
                                                <li class="acc-link" >
                                                    <a href="#">
                                                        <i class="fe fe-rss text-danger mr-2 fs-20"></i> Feed Manager
                                                    </a>
                                                </li>
                                                <li class="acc-link" >
                                                    <a href="#">
                                                        <i class="fe fe-settings text-warning mr-2 fs-20"></i> Settings
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="tab-pane" id="side22">
                                            <h5 class="mt-3 mb-4">Chat</h5>
                                            <div class="input-group  mb-4">
                                                <input type="text" class="form-control" placeholder="Search ...">
                                                <span class="input-group-append">
																	<button class="btn btn-primary" type="button">Search</button>
																</span>
                                            </div>
                                            <div class=" ">
                                                <div class="list-group-item d-flex  align-items-center p-1 ">
                                                    <div class="mr-3">
                                                        <span class="avatar avatar-lg brround cover-image" data-image-src="../../assets/images/users/female/2.jpg"><span class="avatar-status bg-green"></span></span>
                                                    </div>
                                                    <div>
                                                        <strong>Madeleine</strong> Hey! there I' am available....
                                                        <div class="small text-muted">
                                                            3 hours ago
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="list-group-item d-flex  align-items-center p-2">
                                                    <div class="mr-3">
                                                        <span class="avatar avatar-lg brround cover-image" data-image-src="../../assets/images/users/male/2.jpg"></span>
                                                    </div>
                                                    <div>
                                                        <strong>Anthony</strong> New product Launching...
                                                        <div class="small text-muted">
                                                            5 hour ago
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="list-group-item d-flex  align-items-center p-2">
                                                    <div class="mr-3">
                                                        <span class="avatar avatar-lg brround cover-image" data-image-src="../../assets/images/users/female/9.jpg"><span class="avatar-status bg-green"></span></span>
                                                    </div>
                                                    <div>
                                                        <strong>Olivia</strong> New Schedule Realease......
                                                        <div class="small text-muted">
                                                            45 mintues ago
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="list-group-item d-flex  align-items-center p-2">
                                                    <div class="mr-3">
                                                        <span class="avatar avatar-lg brround cover-image" data-image-src="../../assets/images/users/female/1.jpg"><span class="avatar-status bg-green"></span></span>
                                                    </div>
                                                    <div>
                                                        <strong>Madeleine</strong> Hey! there I' am available....
                                                        <div class="small text-muted">
                                                            3 hours ago
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="list-group-item d-flex  align-items-center p-2">
                                                    <div class="mr-3">
                                                        <span class="avatar avatar-lg brround cover-image" data-image-src="../../assets/images/users/male/1.jpg"></span>
                                                    </div>
                                                    <div>
                                                        <strong>Anthony</strong> New product Launching...
                                                        <div class="small text-muted">
                                                            5 hour ago
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="list-group-item d-flex  align-items-center p-2">
                                                    <div class="mr-3">
                                                        <span class="avatar avatar-lg brround cover-image" data-image-src="../../assets/images/users/female/5.jpg"><span class="avatar-status bg-green"></span></span>
                                                    </div>
                                                    <div>
                                                        <strong>Lily May</strong> New Schedule Realease......
                                                        <div class="small text-muted">
                                                            45 mintues ago
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="list-group-item d-flex  align-items-center p-2">
                                                    <div class="mr-3">
                                                        <span class="avatar avatar-lg brround cover-image" data-image-src="../../assets/images/users/male/4.jpg"><span class="avatar-status bg-green"></span></span>
                                                    </div>
                                                    <div>
                                                        <strong>Eric Walsh</strong> Okay...I will be waiting for you
                                                        <div class="small text-muted">
                                                            12 mintues ago
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="list-group-item d-flex  align-items-center p-2">
                                                    <div class="mr-3">
                                                        <span class="avatar avatar-lg brround cover-image" data-image-src="../../assets/images/users/female/1.jpg"></span>
                                                    </div>
                                                    <div>
                                                        <strong>Alison White</strong> Hi we can explain our new project......
                                                        <div class="small text-muted">
                                                            45 mintues ago
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="list-group-item d-flex  align-items-center p-2">
                                                    <div class="mr-3">
                                                        <span class="avatar avatar-lg brround cover-image" data-image-src="../../assets/images/users/male/7.jpg"><span class="avatar-status bg-green"></span></span>
                                                    </div>
                                                    <div>
                                                        <strong>Jacob Lewis</strong> New product Launching...
                                                        <div class="small text-muted">
                                                            45 mintues ago
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="side23">
                                            <h5 class="mt-3 mb-4">Event</h5>
                                            <div class="latest-timeline">
                                                <div class="timeline">
                                                    <div class="mt-0 event-text">
                                                        <h6 class="mb-0"><a target="_blank" href="#" class="timeline-head">Employees Meeting</a></h6>
                                                        <span class="fs-11 text-muted mb-2">23 May, 2020</span>
                                                        <p class="fs-11">sed do eiusmod tempor incididunt ut labore et . </p>
                                                    </div>
                                                    <div class="event-text">
                                                        <h6 class="mb-0"><a href="#" class="timeline-head">Ramazan Festival  Celebration</a></h6>
                                                        <span class="mb-2 fs-11 text-muted">21 May, 2020</span>
                                                        <p class="">sed do eiusmod tempor  magna aliqua nisi ut . </p>
                                                    </div>
                                                    <div class="event-text">
                                                        <h6 class="mb-0"><a href="#" class="timeline-head">Best Employee Announcement</a></h6>
                                                        <span class="mb-2 fs-11 text-muted">18 May, 2020</span>
                                                        <p class="">sed do eiusmod tempor incididunt ut aliquip.</p>
                                                    </div>
                                                    <div class="event-text">
                                                        <h6 class="mb-0"><a href="#" class="timeline-head">Weekend trip</a></h6>
                                                        <span class="mb-2 fs-11 text-muted">16 May, 2020</span>
                                                        <p class="">sed do eiusmod tempor incididunt ut aliquip.</p>
                                                    </div>
                                                    <div class="event-text">
                                                        <h6 class="mb-0"><a href="#" class="timeline-head">New Project Started..</a></h6>
                                                        <span class="mb-2 fs-11 text-muted">15 May, 2020</span>
                                                        <p class="">sed do eiusmod tempor incididunt ut aliquip.</p>
                                                    </div>
                                                    <div class="mb-0 event-text">
                                                        <h6 class="mb-0"><a href="#" class="timeline-head">Gradening working</a></h6>
                                                        <span class="mb-2 fs-11 text-muted">07 May, 2020</span>
                                                        <p class="">sed do eiusmod tempor  aliqua nisi ut aliquip . </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="side24">
                                            <h5 class="mt-3 mb-4">Activity</h5>
                                            <div class="activity mt-3">
                                                <img src="../../assets/images/users/male/1.jpg" alt="" class="img-activity">
                                                <div class="time-activity">
                                                    <div class="item-activity">
                                                        <p class="mb-0"><b>Adam	Berry</b> Add a new projects <b> AngularJS Template</b></p>
                                                        <small class="text-muted ">30 mins ago</small>
                                                    </div>
                                                </div>
                                                <img src="../../assets/images/users/female/2.jpg" alt="" class="img-activity">
                                                <div class="time-activity">
                                                    <div class="item-activity">
                                                        <p class="mb-0"><b>Irene Hunter</b> Add a new projects <b>Free HTML Template</b></p>
                                                        <small class="text-muted ">1 days ago</small>
                                                    </div>
                                                </div>
                                                <img src="../../assets/images/users/male/3.jpg" alt="" class="img-activity">
                                                <div class="time-activity">
                                                    <div class="item-activity">
                                                        <p class="mb-0"><b>John	Payne</b> Add a new projects <b>Free PSD Template</b></p>
                                                        <small class="text-muted ">3 days ago</small>
                                                    </div>
                                                </div>
                                                <img src="../../assets/images/users/female/4.jpg" alt="" class="img-activity">
                                                <div class="time-activity">
                                                    <div class="item-activity">
                                                        <p class="mb-0"><b>Julia Hardacre</b> Add a new projects <b>Free UI Template</b></p>
                                                        <small class="text-muted ">5 days ago</small>
                                                    </div>
                                                </div>
                                                <img src="../../assets/images/users/male/5.jpg" alt="" class="img-activity">
                                                <div class="time-activity">
                                                    <div class="item-activity">
                                                        <p class="mb-0"><b>Adam	Berry</b> Add a new projects <b> AngularJS Template</b></p>
                                                        <small class="text-muted ">30 mins ago</small>
                                                    </div>
                                                </div>
                                                <img src="../../assets/images/users/female/6.jpg" alt="" class="img-activity">
                                                <div class="time-activity">
                                                    <div class="item-activity">
                                                        <p class="mb-0"><b>Irene Hunter</b> Add a new projects <b>Free HTML Template</b></p>
                                                        <small class="text-muted ">1 days ago</small>
                                                    </div>
                                                </div>
                                                <img src="../../assets/images/users/male/7.jpg" alt="" class="img-activity">
                                                <div class="time-activity">
                                                    <div class="item-activity">
                                                        <p class="mb-0"><b>John	Payne</b> Add a new projects <b>Free PSD Template</b></p>
                                                        <small class="text-muted ">3 days ago</small>
                                                    </div>
                                                </div>
                                                <img src="../../assets/images/users/female/8.jpg" alt="" class="img-activity">
                                                <div class="time-activity">
                                                    <div class="item-activity">
                                                        <p class="mb-0"><b>Julia Hardacre</b> Add a new projects <b>Free UI Template</b></p>
                                                        <small class="text-muted ">5 days ago</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="charts-slica">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel sidetab-menu">
                                <div class="tab-menu-heading p-0 pb-2 border-0">
                                    <div class="tabs-menu ">
                                        <!-- Tabs -->
                                        <ul class="nav panel-tabs">
                                            <li class=""><a href="#side31" class="active" data-toggle="tab"><i class="fe fe-monitor"></i>Home</a></li>
                                            <li><a href="#side32" data-toggle="tab" ><i class="fe fe-message-square"></i>Chat</a></li>
                                            <li><a href="#side33" data-toggle="tab"><i class="fe fe-calendar"></i>Events</a></li>
                                            <li><a href="#side34" data-toggle="tab"><i class="fe fe-codepen"></i>Activity</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="panel-body tabs-menu-body p-0 border-0">
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="side31">
                                            <h5 class="mt-3 mb-4">Charts</h5>
                                            <a href="chart-chartist.html" class="slide-item">Chart Js</a>
                                            <a href="chart-flot.html" class="slide-item">Flot Charts</a>
                                            <a href="chart-echart.html" class="slide-item">ECharts</a>
                                            <a href="chart-morris.html" class="slide-item">Morris Charts</a>
                                            <a href="chart-nvd3.html" class="slide-item">Nvd3 Charts</a>
                                            <div class="side-menu p-0">
                                                <div class="slide submenu">
                                                    <a class="side-menu__item" data-toggle="slide" href="#"><span class="side-menu__label"> C3 charts</span><i class="angle fa fa-angle-down"></i></a>
                                                    <ul class="slide-menu submenu-list">
                                                        <li>
                                                            <a href="charts.html" class="slide-item">C3 Bar Charts</a>
                                                        </li>
                                                        <li>
                                                            <a href="chart-line.html" class="slide-item">C3 Line Charts</a>
                                                        </li>
                                                        <li>
                                                            <a href="chart-donut.html" class="slide-item">C3 Donut Charts</a>
                                                        </li>
                                                        <li>
                                                            <a href="chart-pie.html" class="slide-item">C3 Pie charts</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <h5 class="mt-5 mb-4">Account</h5>
                                            <ul class="side-account">
                                                <li class="acc-link" >
                                                    <a href="#">
                                                        <i class="fe fe-download text-primary mr-2 fs-20"></i> Downloads
                                                    </a>
                                                </li>
                                                <li class="acc-link" >
                                                    <a href="#">
                                                        <i class="fe fe-folder-plus text-secondary mr-2 fs-20"></i> Archive
                                                    </a>
                                                </li>
                                                <li class="acc-link" >
                                                    <a href="#">
                                                        <i class="fe fe-rss text-danger mr-2 fs-20"></i> Feed Manager
                                                    </a>
                                                </li>
                                                <li class="acc-link" >
                                                    <a href="#">
                                                        <i class="fe fe-settings text-warning mr-2 fs-20"></i> Settings
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="tab-pane  " id="side32">
                                            <h5 class="mt-3 mb-4">Chat</h5>
                                            <div class="input-group  mb-4">
                                                <input type="text" class="form-control" placeholder="Search ...">
                                                <span class="input-group-append">
																	<button class="btn btn-primary" type="button">Search</button>
																</span>
                                            </div>
                                            <div class=" ">
                                                <div class="list-group-item d-flex  align-items-center p-1 ">
                                                    <div class="mr-3">
                                                        <span class="avatar avatar-lg brround cover-image" data-image-src="../../assets/images/users/female/2.jpg"><span class="avatar-status bg-green"></span></span>
                                                    </div>
                                                    <div>
                                                        <strong>Madeleine</strong> Hey! there I' am available....
                                                        <div class="small text-muted">
                                                            3 hours ago
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="list-group-item d-flex  align-items-center p-2">
                                                    <div class="mr-3">
                                                        <span class="avatar avatar-lg brround cover-image" data-image-src="../../assets/images/users/male/2.jpg"></span>
                                                    </div>
                                                    <div>
                                                        <strong>Anthony</strong> New product Launching...
                                                        <div class="small text-muted">
                                                            5 hour ago
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="list-group-item d-flex  align-items-center p-2">
                                                    <div class="mr-3">
                                                        <span class="avatar avatar-lg brround cover-image" data-image-src="../../assets/images/users/female/9.jpg"><span class="avatar-status bg-green"></span></span>
                                                    </div>
                                                    <div>
                                                        <strong>Olivia</strong> New Schedule Realease......
                                                        <div class="small text-muted">
                                                            45 mintues ago
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="list-group-item d-flex  align-items-center p-2">
                                                    <div class="mr-3">
                                                        <span class="avatar avatar-lg brround cover-image" data-image-src="../../assets/images/users/female/1.jpg"><span class="avatar-status bg-green"></span></span>
                                                    </div>
                                                    <div>
                                                        <strong>Madeleine</strong> Hey! there I' am available....
                                                        <div class="small text-muted">
                                                            3 hours ago
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="list-group-item d-flex  align-items-center p-2">
                                                    <div class="mr-3">
                                                        <span class="avatar avatar-lg brround cover-image" data-image-src="../../assets/images/users/male/1.jpg"></span>
                                                    </div>
                                                    <div>
                                                        <strong>Anthony</strong> New product Launching...
                                                        <div class="small text-muted">
                                                            5 hour ago
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="list-group-item d-flex  align-items-center p-2">
                                                    <div class="mr-3">
                                                        <span class="avatar avatar-lg brround cover-image" data-image-src="../../assets/images/users/female/5.jpg"><span class="avatar-status bg-green"></span></span>
                                                    </div>
                                                    <div>
                                                        <strong>Lily May</strong> New Schedule Realease......
                                                        <div class="small text-muted">
                                                            45 mintues ago
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="list-group-item d-flex  align-items-center p-2">
                                                    <div class="mr-3">
                                                        <span class="avatar avatar-lg brround cover-image" data-image-src="../../assets/images/users/male/4.jpg"><span class="avatar-status bg-green"></span></span>
                                                    </div>
                                                    <div>
                                                        <strong>Eric Walsh</strong> Okay...I will be waiting for you
                                                        <div class="small text-muted">
                                                            12 mintues ago
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="list-group-item d-flex  align-items-center p-2">
                                                    <div class="mr-3">
                                                        <span class="avatar avatar-lg brround cover-image" data-image-src="../../assets/images/users/female/1.jpg"></span>
                                                    </div>
                                                    <div>
                                                        <strong>Alison White</strong> Hi we can explain our new project......
                                                        <div class="small text-muted">
                                                            45 mintues ago
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="list-group-item d-flex  align-items-center p-2">
                                                    <div class="mr-3">
                                                        <span class="avatar avatar-lg brround cover-image" data-image-src="../../assets/images/users/male/7.jpg"><span class="avatar-status bg-green"></span></span>
                                                    </div>
                                                    <div>
                                                        <strong>Jacob Lewis</strong> New product Launching...
                                                        <div class="small text-muted">
                                                            45 mintues ago
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="side34">
                                            <h5 class="mt-3 mb-4">Activity</h5>
                                            <div class="activity mt-3">
                                                <img src="../../assets/images/users/male/1.jpg" alt="" class="img-activity">
                                                <div class="time-activity">
                                                    <div class="item-activity">
                                                        <p class="mb-0"><b>Adam	Berry</b> Add a new projects <b> AngularJS Template</b></p>
                                                        <small class="text-muted ">30 mins ago</small>
                                                    </div>
                                                </div>
                                                <img src="../../assets/images/users/female/2.jpg" alt="" class="img-activity">
                                                <div class="time-activity">
                                                    <div class="item-activity">
                                                        <p class="mb-0"><b>Irene Hunter</b> Add a new projects <b>Free HTML Template</b></p>
                                                        <small class="text-muted ">1 days ago</small>
                                                    </div>
                                                </div>
                                                <img src="../../assets/images/users/male/3.jpg" alt="" class="img-activity">
                                                <div class="time-activity">
                                                    <div class="item-activity">
                                                        <p class="mb-0"><b>John	Payne</b> Add a new projects <b>Free PSD Template</b></p>
                                                        <small class="text-muted ">3 days ago</small>
                                                    </div>
                                                </div>
                                                <img src="../../assets/images/users/female/4.jpg" alt="" class="img-activity">
                                                <div class="time-activity">
                                                    <div class="item-activity">
                                                        <p class="mb-0"><b>Julia Hardacre</b> Add a new projects <b>Free UI Template</b></p>
                                                        <small class="text-muted ">5 days ago</small>
                                                    </div>
                                                </div>
                                                <img src="../../assets/images/users/male/5.jpg" alt="" class="img-activity">
                                                <div class="time-activity">
                                                    <div class="item-activity">
                                                        <p class="mb-0"><b>Adam	Berry</b> Add a new projects <b> AngularJS Template</b></p>
                                                        <small class="text-muted ">30 mins ago</small>
                                                    </div>
                                                </div>
                                                <img src="../../assets/images/users/female/6.jpg" alt="" class="img-activity">
                                                <div class="time-activity">
                                                    <div class="item-activity">
                                                        <p class="mb-0"><b>Irene Hunter</b> Add a new projects <b>Free HTML Template</b></p>
                                                        <small class="text-muted ">1 days ago</small>
                                                    </div>
                                                </div>
                                                <img src="../../assets/images/users/male/7.jpg" alt="" class="img-activity">
                                                <div class="time-activity">
                                                    <div class="item-activity">
                                                        <p class="mb-0"><b>John	Payne</b> Add a new projects <b>Free PSD Template</b></p>
                                                        <small class="text-muted ">3 days ago</small>
                                                    </div>
                                                </div>
                                                <img src="../../assets/images/users/female/8.jpg" alt="" class="img-activity">
                                                <div class="time-activity">
                                                    <div class="item-activity">
                                                        <p class="mb-0"><b>Julia Hardacre</b> Add a new projects <b>Free UI Template</b></p>
                                                        <small class="text-muted ">5 days ago</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="pages-slica">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel sidetab-menu">
                                <div class="tab-menu-heading p-0 pb-2 border-0">
                                    <div class="tabs-menu ">
                                        <!-- Tabs -->
                                        <ul class="nav panel-tabs">
                                            <li class=""><a href="#side41" class="active" data-toggle="tab"><i class="fe fe-monitor"></i>Home</a></li>
                                            <li><a href="#side42" data-toggle="tab" ><i class="fe fe-message-square"></i>Chat</a></li>
                                            <li><a href="#side43" data-toggle="tab"><i class="fe fe-calendar"></i>Events</a></li>
                                            <li><a href="#side44" data-toggle="tab"><i class="fe fe-codepen"></i>Activity</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="panel-body tabs-menu-body p-0 border-0">
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="side41">
                                            <h5 class="mt-3 mb-4">Pages</h5>
                                            <a href="profile.html" class="slide-item">Profile</a>
                                            <a href="editprofile.html" class="slide-item">Edit Profile</a>
                                            <a href="empty.html" class="slide-item">Empty Page</a>
                                            <a href="gallery.html" class="slide-item">Gallery</a>
                                            <a href="about.html" class="slide-item">About Company</a>
                                            <a href="services.html" class="slide-item">Services</a>
                                            <a href="faq.html" class="slide-item">FAQS</a>
                                            <a href="terms.html" class="slide-item">Terms</a>
                                            <a href="invoice.html" class="slide-item">Invoice</a>
                                            <a href="pricing.html" class="slide-item">Pricing Tables</a>
                                            <a href="blog.html" class="slide-item">Blog</a>
                                            <h5 class="mt-5 mb-4">Account</h5>
                                            <ul class="side-account">
                                                <li class="acc-link" >
                                                    <a href="#">
                                                        <i class="fe fe-download text-primary mr-2 fs-20"></i> Downloads
                                                    </a>
                                                </li>
                                                <li class="acc-link" >
                                                    <a href="#">
                                                        <i class="fe fe-folder-plus text-secondary mr-2 fs-20"></i> Archive
                                                    </a>
                                                </li>
                                                <li class="acc-link" >
                                                    <a href="#">
                                                        <i class="fe fe-rss text-danger mr-2 fs-20"></i> Feed Manager
                                                    </a>
                                                </li>
                                                <li class="acc-link" >
                                                    <a href="#">
                                                        <i class="fe fe-settings text-warning mr-2 fs-20"></i> Settings
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="tab-pane " id="side42">
                                            <h5 class="mt-3 mb-4">Chat</h5>
                                            <div class="input-group  mb-4">
                                                <input type="text" class="form-control" placeholder="Search ...">
                                                <span class="input-group-append">
																	<button class="btn btn-primary" type="button">Search</button>
																</span>
                                            </div>
                                            <div class=" ">
                                                <div class="list-group-item d-flex  align-items-center p-1 ">
                                                    <div class="mr-3">
                                                        <span class="avatar avatar-lg brround cover-image" data-image-src="../../assets/images/users/female/2.jpg"><span class="avatar-status bg-green"></span></span>
                                                    </div>
                                                    <div>
                                                        <strong>Madeleine</strong> Hey! there I' am available....
                                                        <div class="small text-muted">
                                                            3 hours ago
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="list-group-item d-flex  align-items-center p-2">
                                                    <div class="mr-3">
                                                        <span class="avatar avatar-lg brround cover-image" data-image-src="../../assets/images/users/male/2.jpg"></span>
                                                    </div>
                                                    <div>
                                                        <strong>Anthony</strong> New product Launching...
                                                        <div class="small text-muted">
                                                            5 hour ago
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="list-group-item d-flex  align-items-center p-2">
                                                    <div class="mr-3">
                                                        <span class="avatar avatar-lg brround cover-image" data-image-src="../../assets/images/users/female/9.jpg"><span class="avatar-status bg-green"></span></span>
                                                    </div>
                                                    <div>
                                                        <strong>Olivia</strong> New Schedule Realease......
                                                        <div class="small text-muted">
                                                            45 mintues ago
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="list-group-item d-flex  align-items-center p-2">
                                                    <div class="mr-3">
                                                        <span class="avatar avatar-lg brround cover-image" data-image-src="../../assets/images/users/female/1.jpg"><span class="avatar-status bg-green"></span></span>
                                                    </div>
                                                    <div>
                                                        <strong>Madeleine</strong> Hey! there I' am available....
                                                        <div class="small text-muted">
                                                            3 hours ago
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="list-group-item d-flex  align-items-center p-2">
                                                    <div class="mr-3">
                                                        <span class="avatar avatar-lg brround cover-image" data-image-src="../../assets/images/users/male/1.jpg"></span>
                                                    </div>
                                                    <div>
                                                        <strong>Anthony</strong> New product Launching...
                                                        <div class="small text-muted">
                                                            5 hour ago
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="list-group-item d-flex  align-items-center p-2">
                                                    <div class="mr-3">
                                                        <span class="avatar avatar-lg brround cover-image" data-image-src="../../assets/images/users/female/5.jpg"><span class="avatar-status bg-green"></span></span>
                                                    </div>
                                                    <div>
                                                        <strong>Lily May</strong> New Schedule Realease......
                                                        <div class="small text-muted">
                                                            45 mintues ago
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="list-group-item d-flex  align-items-center p-2">
                                                    <div class="mr-3">
                                                        <span class="avatar avatar-lg brround cover-image" data-image-src="../../assets/images/users/male/4.jpg"><span class="avatar-status bg-green"></span></span>
                                                    </div>
                                                    <div>
                                                        <strong>Eric Walsh</strong> Okay...I will be waiting for you
                                                        <div class="small text-muted">
                                                            12 mintues ago
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="list-group-item d-flex  align-items-center p-2">
                                                    <div class="mr-3">
                                                        <span class="avatar avatar-lg brround cover-image" data-image-src="../../assets/images/users/female/1.jpg"></span>
                                                    </div>
                                                    <div>
                                                        <strong>Alison White</strong> Hi we can explain our new project......
                                                        <div class="small text-muted">
                                                            45 mintues ago
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="list-group-item d-flex  align-items-center p-2">
                                                    <div class="mr-3">
                                                        <span class="avatar avatar-lg brround cover-image" data-image-src="../../assets/images/users/male/7.jpg"><span class="avatar-status bg-green"></span></span>
                                                    </div>
                                                    <div>
                                                        <strong>Jacob Lewis</strong> New product Launching...
                                                        <div class="small text-muted">
                                                            45 mintues ago
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="side43">
                                            <h5 class="mt-3 mb-4">Event</h5>
                                            <div class="latest-timeline">
                                                <div class="timeline">
                                                    <div class="mt-0 event-text">
                                                        <h6 class="mb-0"><a target="_blank" href="#" class="timeline-head">Employees Meeting</a></h6>
                                                        <span class="fs-11 text-muted mb-2">23 May, 2020</span>
                                                        <p class="fs-11">sed do eiusmod tempor incididunt ut labore et . </p>
                                                    </div>
                                                    <div class="event-text">
                                                        <h6 class="mb-0"><a href="#" class="timeline-head">Ramazan Festival  Celebration</a></h6>
                                                        <span class="mb-2 fs-11 text-muted">21 May, 2020</span>
                                                        <p class="">sed do eiusmod tempor  magna aliqua nisi ut . </p>
                                                    </div>
                                                    <div class="event-text">
                                                        <h6 class="mb-0"><a href="#" class="timeline-head">Best Employee Announcement</a></h6>
                                                        <span class="mb-2 fs-11 text-muted">18 May, 2020</span>
                                                        <p class="">sed do eiusmod tempor incididunt ut aliquip.</p>
                                                    </div>
                                                    <div class="event-text">
                                                        <h6 class="mb-0"><a href="#" class="timeline-head">Weekend trip</a></h6>
                                                        <span class="mb-2 fs-11 text-muted">16 May, 2020</span>
                                                        <p class="">sed do eiusmod tempor incididunt ut aliquip.</p>
                                                    </div>
                                                    <div class="event-text">
                                                        <h6 class="mb-0"><a href="#" class="timeline-head">New Project Started..</a></h6>
                                                        <span class="mb-2 fs-11 text-muted">15 May, 2020</span>
                                                        <p class="">sed do eiusmod tempor incididunt ut aliquip.</p>
                                                    </div>
                                                    <div class="mb-0 event-text">
                                                        <h6 class="mb-0"><a href="#" class="timeline-head">Gradening working</a></h6>
                                                        <span class="mb-2 fs-11 text-muted">07 May, 2020</span>
                                                        <p class="">sed do eiusmod tempor  aliqua nisi ut aliquip . </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="side44">
                                            <h5 class="mt-3 mb-4">Activity</h5>
                                            <div class="activity mt-3">
                                                <img src="../../assets/images/users/male/1.jpg" alt="" class="img-activity">
                                                <div class="time-activity">
                                                    <div class="item-activity">
                                                        <p class="mb-0"><b>Adam	Berry</b> Add a new projects <b> AngularJS Template</b></p>
                                                        <small class="text-muted ">30 mins ago</small>
                                                    </div>
                                                </div>
                                                <img src="../../assets/images/users/female/2.jpg" alt="" class="img-activity">
                                                <div class="time-activity">
                                                    <div class="item-activity">
                                                        <p class="mb-0"><b>Irene Hunter</b> Add a new projects <b>Free HTML Template</b></p>
                                                        <small class="text-muted ">1 days ago</small>
                                                    </div>
                                                </div>
                                                <img src="../../assets/images/users/male/3.jpg" alt="" class="img-activity">
                                                <div class="time-activity">
                                                    <div class="item-activity">
                                                        <p class="mb-0"><b>John	Payne</b> Add a new projects <b>Free PSD Template</b></p>
                                                        <small class="text-muted ">3 days ago</small>
                                                    </div>
                                                </div>
                                                <img src="../../assets/images/users/female/4.jpg" alt="" class="img-activity">
                                                <div class="time-activity">
                                                    <div class="item-activity">
                                                        <p class="mb-0"><b>Julia Hardacre</b> Add a new projects <b>Free UI Template</b></p>
                                                        <small class="text-muted ">5 days ago</small>
                                                    </div>
                                                </div>
                                                <img src="../../assets/images/users/male/5.jpg" alt="" class="img-activity">
                                                <div class="time-activity">
                                                    <div class="item-activity">
                                                        <p class="mb-0"><b>Adam	Berry</b> Add a new projects <b> AngularJS Template</b></p>
                                                        <small class="text-muted ">30 mins ago</small>
                                                    </div>
                                                </div>
                                                <img src="../../assets/images/users/female/6.jpg" alt="" class="img-activity">
                                                <div class="time-activity">
                                                    <div class="item-activity">
                                                        <p class="mb-0"><b>Irene Hunter</b> Add a new projects <b>Free HTML Template</b></p>
                                                        <small class="text-muted ">1 days ago</small>
                                                    </div>
                                                </div>
                                                <img src="../../assets/images/users/male/7.jpg" alt="" class="img-activity">
                                                <div class="time-activity">
                                                    <div class="item-activity">
                                                        <p class="mb-0"><b>John	Payne</b> Add a new projects <b>Free PSD Template</b></p>
                                                        <small class="text-muted ">3 days ago</small>
                                                    </div>
                                                </div>
                                                <img src="../../assets/images/users/female/8.jpg" alt="" class="img-activity">
                                                <div class="time-activity">
                                                    <div class="item-activity">
                                                        <p class="mb-0"><b>Julia Hardacre</b> Add a new projects <b>Free UI Template</b></p>
                                                        <small class="text-muted ">5 days ago</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="ecommerce-slica">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel sidetab-menu">
                                <div class="tab-menu-heading p-0 pb-2 border-0">
                                    <div class="tabs-menu ">
                                        <!-- Tabs -->
                                        <ul class="nav panel-tabs">
                                            <li class=""><a href="#side51" class="active" data-toggle="tab"><i class="fe fe-monitor"></i>Home</a></li>
                                            <li><a href="#side52" data-toggle="tab" ><i class="fe fe-message-square"></i>Chat</a></li>
                                            <li><a href="#side53" data-toggle="tab"><i class="fe fe-calendar"></i>Events</a></li>
                                            <li><a href="#side54" data-toggle="tab"><i class="fe fe-codepen"></i>Activity</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="panel-body tabs-menu-body p-0 border-0">
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="side51">
                                            <h5 class="mt-3 mb-4">E-commerce</h5>
                                            <a href="shop.html" class="slide-item">Shop</a>
                                            <a href="shop-description.html" class="slide-item">Product Details</a>
                                            <a href="cart.html" class="slide-item">Shopping Cart</a>
                                            <h5 class="mt-5 mb-4">Account</h5>
                                            <ul class="side-account">
                                                <li class="acc-link" >
                                                    <a href="#">
                                                        <i class="fe fe-download text-primary mr-2 fs-20"></i> Downloads
                                                    </a>
                                                </li>
                                                <li class="acc-link" >
                                                    <a href="#">
                                                        <i class="fe fe-folder-plus text-secondary mr-2 fs-20"></i> Archive
                                                    </a>
                                                </li>
                                                <li class="acc-link" >
                                                    <a href="#">
                                                        <i class="fe fe-rss text-danger mr-2 fs-20"></i> Feed Manager
                                                    </a>
                                                </li>
                                                <li class="acc-link" >
                                                    <a href="#">
                                                        <i class="fe fe-settings text-warning mr-2 fs-20"></i> Settings
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="tab-pane" id="side52">
                                            <h5 class="mt-3 mb-4">Chat</h5>
                                            <div class="input-group  mb-4">
                                                <input type="text" class="form-control" placeholder="Search ...">
                                                <span class="input-group-append">
																	<button class="btn btn-primary" type="button">Search</button>
																</span>
                                            </div>
                                            <div class=" ">
                                                <div class="list-group-item d-flex  align-items-center p-1 ">
                                                    <div class="mr-3">
                                                        <span class="avatar avatar-lg brround cover-image" data-image-src="../../assets/images/users/female/2.jpg"><span class="avatar-status bg-green"></span></span>
                                                    </div>
                                                    <div>
                                                        <strong>Madeleine</strong> Hey! there I' am available....
                                                        <div class="small text-muted">
                                                            3 hours ago
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="list-group-item d-flex  align-items-center p-2">
                                                    <div class="mr-3">
                                                        <span class="avatar avatar-lg brround cover-image" data-image-src="../../assets/images/users/male/2.jpg"></span>
                                                    </div>
                                                    <div>
                                                        <strong>Anthony</strong> New product Launching...
                                                        <div class="small text-muted">
                                                            5 hour ago
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="list-group-item d-flex  align-items-center p-2">
                                                    <div class="mr-3">
                                                        <span class="avatar avatar-lg brround cover-image" data-image-src="../../assets/images/users/female/9.jpg"><span class="avatar-status bg-green"></span></span>
                                                    </div>
                                                    <div>
                                                        <strong>Olivia</strong> New Schedule Realease......
                                                        <div class="small text-muted">
                                                            45 mintues ago
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="list-group-item d-flex  align-items-center p-2">
                                                    <div class="mr-3">
                                                        <span class="avatar avatar-lg brround cover-image" data-image-src="../../assets/images/users/female/1.jpg"><span class="avatar-status bg-green"></span></span>
                                                    </div>
                                                    <div>
                                                        <strong>Madeleine</strong> Hey! there I' am available....
                                                        <div class="small text-muted">
                                                            3 hours ago
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="list-group-item d-flex  align-items-center p-2">
                                                    <div class="mr-3">
                                                        <span class="avatar avatar-lg brround cover-image" data-image-src="../../assets/images/users/male/1.jpg"></span>
                                                    </div>
                                                    <div>
                                                        <strong>Anthony</strong> New product Launching...
                                                        <div class="small text-muted">
                                                            5 hour ago
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="list-group-item d-flex  align-items-center p-2">
                                                    <div class="mr-3">
                                                        <span class="avatar avatar-lg brround cover-image" data-image-src="../../assets/images/users/female/5.jpg"><span class="avatar-status bg-green"></span></span>
                                                    </div>
                                                    <div>
                                                        <strong>Lily May</strong> New Schedule Realease......
                                                        <div class="small text-muted">
                                                            45 mintues ago
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="list-group-item d-flex  align-items-center p-2">
                                                    <div class="mr-3">
                                                        <span class="avatar avatar-lg brround cover-image" data-image-src="../../assets/images/users/male/4.jpg"><span class="avatar-status bg-green"></span></span>
                                                    </div>
                                                    <div>
                                                        <strong>Eric Walsh</strong> Okay...I will be waiting for you
                                                        <div class="small text-muted">
                                                            12 mintues ago
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="list-group-item d-flex  align-items-center p-2">
                                                    <div class="mr-3">
                                                        <span class="avatar avatar-lg brround cover-image" data-image-src="../../assets/images/users/female/1.jpg"></span>
                                                    </div>
                                                    <div>
                                                        <strong>Alison White</strong> Hi we can explain our new project......
                                                        <div class="small text-muted">
                                                            45 mintues ago
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="list-group-item d-flex  align-items-center p-2">
                                                    <div class="mr-3">
                                                        <span class="avatar avatar-lg brround cover-image" data-image-src="../../assets/images/users/male/7.jpg"><span class="avatar-status bg-green"></span></span>
                                                    </div>
                                                    <div>
                                                        <strong>Jacob Lewis</strong> New product Launching...
                                                        <div class="small text-muted">
                                                            45 mintues ago
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="side53">
                                            <h5 class="mt-3 mb-4">Event</h5>
                                            <div class="latest-timeline">
                                                <div class="timeline">
                                                    <div class="mt-0 event-text">
                                                        <h6 class="mb-0"><a target="_blank" href="#" class="timeline-head">Employees Meeting</a></h6>
                                                        <span class="fs-11 text-muted mb-2">23 May, 2020</span>
                                                        <p class="fs-11">sed do eiusmod tempor incididunt ut labore et . </p>
                                                    </div>
                                                    <div class="event-text">
                                                        <h6 class="mb-0"><a href="#" class="timeline-head">Ramazan Festival  Celebration</a></h6>
                                                        <span class="mb-2 fs-11 text-muted">21 May, 2020</span>
                                                        <p class="">sed do eiusmod tempor  magna aliqua nisi ut . </p>
                                                    </div>
                                                    <div class="event-text">
                                                        <h6 class="mb-0"><a href="#" class="timeline-head">Best Employee Announcement</a></h6>
                                                        <span class="mb-2 fs-11 text-muted">18 May, 2020</span>
                                                        <p class="">sed do eiusmod tempor incididunt ut aliquip.</p>
                                                    </div>
                                                    <div class="event-text">
                                                        <h6 class="mb-0"><a href="#" class="timeline-head">Weekend trip</a></h6>
                                                        <span class="mb-2 fs-11 text-muted">16 May, 2020</span>
                                                        <p class="">sed do eiusmod tempor incididunt ut aliquip.</p>
                                                    </div>
                                                    <div class="event-text">
                                                        <h6 class="mb-0"><a href="#" class="timeline-head">New Project Started..</a></h6>
                                                        <span class="mb-2 fs-11 text-muted">15 May, 2020</span>
                                                        <p class="">sed do eiusmod tempor incididunt ut aliquip.</p>
                                                    </div>
                                                    <div class="mb-0 event-text">
                                                        <h6 class="mb-0"><a href="#" class="timeline-head">Gradening working</a></h6>
                                                        <span class="mb-2 fs-11 text-muted">07 May, 2020</span>
                                                        <p class="">sed do eiusmod tempor  aliqua nisi ut aliquip . </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="side54">
                                            <h5 class="mt-3 mb-4">Activity</h5>
                                            <div class="activity mt-3">
                                                <img src="../../assets/images/users/male/1.jpg" alt="" class="img-activity">
                                                <div class="time-activity">
                                                    <div class="item-activity">
                                                        <p class="mb-0"><b>Adam	Berry</b> Add a new projects <b> AngularJS Template</b></p>
                                                        <small class="text-muted ">30 mins ago</small>
                                                    </div>
                                                </div>
                                                <img src="../../assets/images/users/female/2.jpg" alt="" class="img-activity">
                                                <div class="time-activity">
                                                    <div class="item-activity">
                                                        <p class="mb-0"><b>Irene Hunter</b> Add a new projects <b>Free HTML Template</b></p>
                                                        <small class="text-muted ">1 days ago</small>
                                                    </div>
                                                </div>
                                                <img src="../../assets/images/users/male/3.jpg" alt="" class="img-activity">
                                                <div class="time-activity">
                                                    <div class="item-activity">
                                                        <p class="mb-0"><b>John	Payne</b> Add a new projects <b>Free PSD Template</b></p>
                                                        <small class="text-muted ">3 days ago</small>
                                                    </div>
                                                </div>
                                                <img src="../../assets/images/users/female/4.jpg" alt="" class="img-activity">
                                                <div class="time-activity">
                                                    <div class="item-activity">
                                                        <p class="mb-0"><b>Julia Hardacre</b> Add a new projects <b>Free UI Template</b></p>
                                                        <small class="text-muted ">5 days ago</small>
                                                    </div>
                                                </div>
                                                <img src="../../assets/images/users/male/5.jpg" alt="" class="img-activity">
                                                <div class="time-activity">
                                                    <div class="item-activity">
                                                        <p class="mb-0"><b>Adam	Berry</b> Add a new projects <b> AngularJS Template</b></p>
                                                        <small class="text-muted ">30 mins ago</small>
                                                    </div>
                                                </div>
                                                <img src="../../assets/images/users/female/6.jpg" alt="" class="img-activity">
                                                <div class="time-activity">
                                                    <div class="item-activity">
                                                        <p class="mb-0"><b>Irene Hunter</b> Add a new projects <b>Free HTML Template</b></p>
                                                        <small class="text-muted ">1 days ago</small>
                                                    </div>
                                                </div>
                                                <img src="../../assets/images/users/male/7.jpg" alt="" class="img-activity">
                                                <div class="time-activity">
                                                    <div class="item-activity">
                                                        <p class="mb-0"><b>John	Payne</b> Add a new projects <b>Free PSD Template</b></p>
                                                        <small class="text-muted ">3 days ago</small>
                                                    </div>
                                                </div>
                                                <img src="../../assets/images/users/female/8.jpg" alt="" class="img-activity">
                                                <div class="time-activity">
                                                    <div class="item-activity">
                                                        <p class="mb-0"><b>Julia Hardacre</b> Add a new projects <b>Free UI Template</b></p>
                                                        <small class="text-muted ">5 days ago</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="custom-slica">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel sidetab-menu">
                                <div class="tab-menu-heading p-0 pb-2 border-0">
                                    <div class="tabs-menu ">
                                        <!-- Tabs -->
                                        <ul class="nav panel-tabs">
                                            <li class=""><a href="#side61" class="active" data-toggle="tab"><i class="fe fe-monitor"></i>Home</a></li>
                                            <li><a href="#side62" data-toggle="tab" ><i class="fe fe-message-square"></i>Chat</a></li>
                                            <li><a href="#side63" data-toggle="tab"><i class="fe fe-calendar"></i>Events</a></li>
                                            <li><a href="#side64" data-toggle="tab"><i class="fe fe-codepen"></i>Activity</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="panel-body tabs-menu-body p-0 border-0">
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="side61">
                                            <h5 class="mt-3 mb-4">Custom Pages</h5>
                                            <a href="login.html" class="slide-item">Login</a>
                                            <a href="register.html" class="slide-item">Register</a>
                                            <a href="forgot-password.html" class="slide-item">Forgot Password</a>
                                            <a href="lockscreen.html" class="slide-item">Lock screen</a>
                                            <a href="construction.html" class="slide-item">Under Construction</a>
                                            <a href="400.html" class="slide-item">400</a>
                                            <a href="401.html" class="slide-item">401</a>
                                            <a href="403.html" class="slide-item">403</a>
                                            <a href="404.html" class="slide-item">404</a>
                                            <a href="500.html" class="slide-item">500</a>
                                            <a href="503.html" class="slide-item">503</a>
                                            <h5 class="mt-5 mb-4">Account</h5>
                                            <ul class="side-account">
                                                <li class="acc-link" >
                                                    <a href="#">
                                                        <i class="fe fe-download text-primary mr-2 fs-20"></i> Downloads
                                                    </a>
                                                </li>
                                                <li class="acc-link" >
                                                    <a href="#">
                                                        <i class="fe fe-folder-plus text-secondary mr-2 fs-20"></i> Archive
                                                    </a>
                                                </li>
                                                <li class="acc-link" >
                                                    <a href="#">
                                                        <i class="fe fe-rss text-danger mr-2 fs-20"></i> Feed Manager
                                                    </a>
                                                </li>
                                                <li class="acc-link" >
                                                    <a href="#">
                                                        <i class="fe fe-settings text-warning mr-2 fs-20"></i> Settings
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="tab-pane  " id="side62">
                                            <h5 class="mt-3 mb-4">Chat</h5>
                                            <div class="input-group  mb-4">
                                                <input type="text" class="form-control" placeholder="Search ...">
                                                <span class="input-group-append">
																	<button class="btn btn-primary" type="button">Search</button>
																</span>
                                            </div>
                                            <div class=" ">
                                                <div class="list-group-item d-flex  align-items-center p-1 ">
                                                    <div class="mr-3">
                                                        <span class="avatar avatar-lg brround cover-image" data-image-src="../../assets/images/users/female/2.jpg"><span class="avatar-status bg-green"></span></span>
                                                    </div>
                                                    <div>
                                                        <strong>Madeleine</strong> Hey! there I' am available....
                                                        <div class="small text-muted">
                                                            3 hours ago
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="list-group-item d-flex  align-items-center p-2">
                                                    <div class="mr-3">
                                                        <span class="avatar avatar-lg brround cover-image" data-image-src="../../assets/images/users/male/2.jpg"></span>
                                                    </div>
                                                    <div>
                                                        <strong>Anthony</strong> New product Launching...
                                                        <div class="small text-muted">
                                                            5 hour ago
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="list-group-item d-flex  align-items-center p-2">
                                                    <div class="mr-3">
                                                        <span class="avatar avatar-lg brround cover-image" data-image-src="../../assets/images/users/female/9.jpg"><span class="avatar-status bg-green"></span></span>
                                                    </div>
                                                    <div>
                                                        <strong>Olivia</strong> New Schedule Realease......
                                                        <div class="small text-muted">
                                                            45 mintues ago
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="list-group-item d-flex  align-items-center p-2">
                                                    <div class="mr-3">
                                                        <span class="avatar avatar-lg brround cover-image" data-image-src="../../assets/images/users/female/1.jpg"><span class="avatar-status bg-green"></span></span>
                                                    </div>
                                                    <div>
                                                        <strong>Madeleine</strong> Hey! there I' am available....
                                                        <div class="small text-muted">
                                                            3 hours ago
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="list-group-item d-flex  align-items-center p-2">
                                                    <div class="mr-3">
                                                        <span class="avatar avatar-lg brround cover-image" data-image-src="../../assets/images/users/male/1.jpg"></span>
                                                    </div>
                                                    <div>
                                                        <strong>Anthony</strong> New product Launching...
                                                        <div class="small text-muted">
                                                            5 hour ago
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="list-group-item d-flex  align-items-center p-2">
                                                    <div class="mr-3">
                                                        <span class="avatar avatar-lg brround cover-image" data-image-src="../../assets/images/users/female/5.jpg"><span class="avatar-status bg-green"></span></span>
                                                    </div>
                                                    <div>
                                                        <strong>Lily May</strong> New Schedule Realease......
                                                        <div class="small text-muted">
                                                            45 mintues ago
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="list-group-item d-flex  align-items-center p-2">
                                                    <div class="mr-3">
                                                        <span class="avatar avatar-lg brround cover-image" data-image-src="../../assets/images/users/male/4.jpg"><span class="avatar-status bg-green"></span></span>
                                                    </div>
                                                    <div>
                                                        <strong>Eric Walsh</strong> Okay...I will be waiting for you
                                                        <div class="small text-muted">
                                                            12 mintues ago
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="list-group-item d-flex  align-items-center p-2">
                                                    <div class="mr-3">
                                                        <span class="avatar avatar-lg brround cover-image" data-image-src="../../assets/images/users/female/1.jpg"></span>
                                                    </div>
                                                    <div>
                                                        <strong>Alison White</strong> Hi we can explain our new project......
                                                        <div class="small text-muted">
                                                            45 mintues ago
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="list-group-item d-flex  align-items-center p-2">
                                                    <div class="mr-3">
                                                        <span class="avatar avatar-lg brround cover-image" data-image-src="../../assets/images/users/male/7.jpg"><span class="avatar-status bg-green"></span></span>
                                                    </div>
                                                    <div>
                                                        <strong>Jacob Lewis</strong> New product Launching...
                                                        <div class="small text-muted">
                                                            45 mintues ago
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="side63">
                                            <h5 class="mt-3 mb-4">Event</h5>
                                            <div class="latest-timeline">
                                                <div class="timeline">
                                                    <div class="mt-0 event-text">
                                                        <h6 class="mb-0"><a target="_blank" href="#" class="timeline-head">Employees Meeting</a></h6>
                                                        <span class="fs-11 text-muted mb-2">23 May, 2020</span>
                                                        <p class="fs-11">sed do eiusmod tempor incididunt ut labore et . </p>
                                                    </div>
                                                    <div class="event-text">
                                                        <h6 class="mb-0"><a href="#" class="timeline-head">Ramazan Festival  Celebration</a></h6>
                                                        <span class="mb-2 fs-11 text-muted">21 May, 2020</span>
                                                        <p class="">sed do eiusmod tempor  magna aliqua nisi ut . </p>
                                                    </div>
                                                    <div class="event-text">
                                                        <h6 class="mb-0"><a href="#" class="timeline-head">Best Employee Announcement</a></h6>
                                                        <span class="mb-2 fs-11 text-muted">18 May, 2020</span>
                                                        <p class="">sed do eiusmod tempor incididunt ut aliquip.</p>
                                                    </div>
                                                    <div class="event-text">
                                                        <h6 class="mb-0"><a href="#" class="timeline-head">Weekend trip</a></h6>
                                                        <span class="mb-2 fs-11 text-muted">16 May, 2020</span>
                                                        <p class="">sed do eiusmod tempor incididunt ut aliquip.</p>
                                                    </div>
                                                    <div class="event-text">
                                                        <h6 class="mb-0"><a href="#" class="timeline-head">New Project Started..</a></h6>
                                                        <span class="mb-2 fs-11 text-muted">15 May, 2020</span>
                                                        <p class="">sed do eiusmod tempor incididunt ut aliquip.</p>
                                                    </div>
                                                    <div class="mb-0 event-text">
                                                        <h6 class="mb-0"><a href="#" class="timeline-head">Gradening working</a></h6>
                                                        <span class="mb-2 fs-11 text-muted">07 May, 2020</span>
                                                        <p class="">sed do eiusmod tempor  aliqua nisi ut aliquip . </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="side64">
                                            <h5 class="mt-3 mb-4">Activity</h5>
                                            <div class="activity mt-3">
                                                <img src="../../assets/images/users/male/1.jpg" alt="" class="img-activity">
                                                <div class="time-activity">
                                                    <div class="item-activity">
                                                        <p class="mb-0"><b>Adam	Berry</b> Add a new projects <b> AngularJS Template</b></p>
                                                        <small class="text-muted ">30 mins ago</small>
                                                    </div>
                                                </div>
                                                <img src="../../assets/images/users/female/2.jpg" alt="" class="img-activity">
                                                <div class="time-activity">
                                                    <div class="item-activity">
                                                        <p class="mb-0"><b>Irene Hunter</b> Add a new projects <b>Free HTML Template</b></p>
                                                        <small class="text-muted ">1 days ago</small>
                                                    </div>
                                                </div>
                                                <img src="../../assets/images/users/male/3.jpg" alt="" class="img-activity">
                                                <div class="time-activity">
                                                    <div class="item-activity">
                                                        <p class="mb-0"><b>John	Payne</b> Add a new projects <b>Free PSD Template</b></p>
                                                        <small class="text-muted ">3 days ago</small>
                                                    </div>
                                                </div>
                                                <img src="../../assets/images/users/female/4.jpg" alt="" class="img-activity">
                                                <div class="time-activity">
                                                    <div class="item-activity">
                                                        <p class="mb-0"><b>Julia Hardacre</b> Add a new projects <b>Free UI Template</b></p>
                                                        <small class="text-muted ">5 days ago</small>
                                                    </div>
                                                </div>
                                                <img src="../../assets/images/users/male/5.jpg" alt="" class="img-activity">
                                                <div class="time-activity">
                                                    <div class="item-activity">
                                                        <p class="mb-0"><b>Adam	Berry</b> Add a new projects <b> AngularJS Template</b></p>
                                                        <small class="text-muted ">30 mins ago</small>
                                                    </div>
                                                </div>
                                                <img src="../../assets/images/users/female/6.jpg" alt="" class="img-activity">
                                                <div class="time-activity">
                                                    <div class="item-activity">
                                                        <p class="mb-0"><b>Irene Hunter</b> Add a new projects <b>Free HTML Template</b></p>
                                                        <small class="text-muted ">1 days ago</small>
                                                    </div>
                                                </div>
                                                <img src="../../assets/images/users/male/7.jpg" alt="" class="img-activity">
                                                <div class="time-activity">
                                                    <div class="item-activity">
                                                        <p class="mb-0"><b>John	Payne</b> Add a new projects <b>Free PSD Template</b></p>
                                                        <small class="text-muted ">3 days ago</small>
                                                    </div>
                                                </div>
                                                <img src="../../assets/images/users/female/8.jpg" alt="" class="img-activity">
                                                <div class="time-activity">
                                                    <div class="item-activity">
                                                        <p class="mb-0"><b>Julia Hardacre</b> Add a new projects <b>Free UI Template</b></p>
                                                        <small class="text-muted ">5 days ago</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </nav>
    </div>
</aside>