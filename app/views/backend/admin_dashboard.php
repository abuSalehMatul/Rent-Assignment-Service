
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
            <div class="section">

                <!-- PAGE-HEADER -->
                <div class="page-header">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#"><i class="fe fe-home mr-1"></i> Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                    </ol>
                    <div class="ml-auto">
                        <a href="#" class="btn btn-primary btn-icon btn-sm text-white mr-2">
									<span>
										<i class="fe fe-plus"></i>
									</span> Add Account
                        </a>
                        <a href="#" class="btn btn-secondary btn-icon  btn-sm text-white">
									<span>
										<i class="fe fe-log-in"></i>
									</span> Export
                        </a>
                    </div>
                </div>
                <!-- PAGE-HEADER END -->

                <!-- ROW-1 -->
                <div class="row">
                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex">
                                    <div class="">
                                        <p class="mb-1">Total users registered</p>
                                        <h4 class="mb-1"><span
                                                        class="counter"><?php echo $data['total_users']; ?></span></h4>
                                        <p class="text-muted  mb-0"><span class="text-success fs-13 mr-2">(+43%)</span>
                                            than Last week</p>
                                    </div>
                                    <div class="ml-auto">
                                        <div class="feature">
                                            <div class="fa-stack fa-lg fa-2x icon bg-purple-gradient icon-service">
                                                <i class="mdi mdi-arrange-bring-forward fa-stack-1x text-white"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex">
                                    <div class="">
                                        <p class="mb-1">Total Order requests</p>
                                        <h4 class="mb-1"><span
                                                        class=" counter"><?php echo $data['total_order']; ?></span></h4>
                                        <p class="text-muted mb-0"><span class="text-danger fs-13 mr-2">(-13%)</span>
                                            than Last week</p>
                                    </div>
                                    <div class="ml-auto">
                                        <div class="feature">
                                            <div class="fa-stack fa-lg fa-2x icon bg-success-gradient icon-service">
                                                <i class="mdi mdi-cube fa-stack-1x text-white"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex">
                                    <div class="">
                                        <p class="mb-1">Total Visitors</p>
                                        <h4 class="mb-1"><span class="counter"><?php echo $data['total_visitor']; ?></span>
                                        </h4>
                                        <p class="text-muted  mb-0"><span class="text-success fs-13 mr-2">(+56%)</span>
                                            than Last week</p>
                                    </div>
                                    <div class="ml-auto">
                                        <div class="feature">
                                            <div class="fa-stack fa-lg fa-2x icon bg-danger-gradient icon-service">
                                                <i class="mdi mdi-auto-fix fa-stack-1x text-white"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex">
                                    <div class="">
                                        <p class="mb-1">Total Transactions</p>
                                        <h4 class="mb-1"><span class="counter"><?php echo $data['total_transaction']; ?></span>
                                        </h4>
                                        <p class="mb-0 text-muted"><span class="text-danger fs-13 mr-2">(0%)</span>
                                            than Last month</p>
                                    </div>
                                    <div class="ml-auto">
                                        <div class="feature">
                                            <div class="fa-stack fa-lg fa-2x icon bg-info-gradient icon-service">
                                                <i class="mdi mdi-poll-box fa-stack-1x text-white"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- ROW-1 END -->

                <!-- ROW-2 -->
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-7 col-xl-7">
                        <div class="card overflow-hidden">
                            <div class="card-header">
                                <div class="card-title">Sales Statistics</div>
                                <div class="card-options">
                                    <a href="#" class="card-options-collapse" data-toggle="card-collapse"><i
                                                class="fe fe-chevron-up"></i></a>
                                    <a href="#" class="card-options-remove" data-toggle="card-remove"><i
                                                class="fe fe-x"></i></a>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="chart-wrapper">
                                    <div id="sales" class=""></div>
                                </div>
                            </div>
                        </div>
                    </div><!-- COL END -->
                    <div class="col-sm-12 col-md-12 col-lg-5 col-xl-5">

                        <div class="row">
                            <div class="col-md-12">
                                <div class="card overflow-hidden">
                                    <div class="card-body">
                                        <div class="">
                                            <p class="mb-1">Total Revenue of the Year</p>
                                            <h4 class="mb-1"><span class="number-font">&#36;<span
                                                            class="counter">35,786</span></span></h4>
                                            <p class="mb-0 text-muted "><span
                                                        class="text-danger fs-13 mr-2">(-0.05%)</span> than Last Year
                                            </p>
                                        </div>
                                    </div>
                                    <div class="chart-wrapper">
                                        <div id="flotChart2" class="flot-chart h-350"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="card overflow-hidden">
                                    <div class="card-body">
                                        <div class="">
                                            <p class="mb-1">Monthly Sales Growth</p>
                                            <h4 class="mb-1"><span class="number-font"><span class="counter">45</span>&#37; </span>
                                            </h4>
                                            <p class="mb-0 text-muted "><span
                                                        class="text-success fs-13 mr-2">(+12%)</span> than Last Year</p>
                                        </div>
                                    </div>
                                    <div class="chart-wrapper">
                                        <div id="flotChart1" class="flot-chart"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ROW-2 END -->

                <!-- ROW-3 -->
                <div class="row row-deck">
                    <div class="col-sm-12 col-md-12 col-lg-4 col-xl-4">
                        <div class="card">
                            <div class="card-header">
                                <div class="card-title">Browsing Status</div>
                                <div class="card-options">
                                    <a href="#" class="card-options-collapse" data-toggle="card-collapse"><i
                                                class="fe fe-chevron-up"></i></a>
                                    <a href="#" class="card-options-remove" data-toggle="card-remove"><i
                                                class="fe fe-x"></i></a>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="mb-5">
                                    <p class="mb-2">Chrome<span class="float-right text-muted">80%</span></p>
                                    <div class="progress h-2">
                                        <div class="progress-bar bg-primary w-80 " role="progressbar"></div>
                                    </div>
                                </div>
                                <div class="mb-5">
                                    <p class="mb-2">Firefox<span class="float-right text-muted">70%</span></p>
                                    <div class="progress h-2">
                                        <div class="progress-bar bg-pink w-70" role="progressbar"></div>
                                    </div>
                                </div>
                                <div class="mb-5">
                                    <p class="mb-2">Safari<span class="float-right text-muted">80%</span></p>
                                    <div class="progress h-2">
                                        <div class="progress-bar bg-warning w-65" role="progressbar"></div>
                                    </div>
                                </div>
                                <div class="mb-5">
                                    <p class="mb-2">Opera<span class="float-right text-muted">80%</span></p>
                                    <div class="progress h-2">
                                        <div class="progress-bar bg-danger w-80" role="progressbar"></div>
                                    </div>
                                </div>
                                <div class="mb-5">
                                    <p class="mb-2">UC Browser<span class="float-right text-muted">70%</span></p>
                                    <div class="progress h-2">
                                        <div class="progress-bar bg-success w-60" role="progressbar"></div>
                                    </div>
                                </div>
                                <div class="mb-0">
                                    <p class="mb-2">Internet Explore<span class="float-right text-muted">50%</span></p>
                                    <div class="progress h-2">
                                        <div class="progress-bar bg-info w-50" role="progressbar"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-12 col-lg-4 col-xl-4">
                        <div class="card">
                            <div class="card-header">
                                <div class="card-title">New Writers list</div>
                                <div class="card-options">
                                    <a href="#" class="card-options-collapse" data-toggle="card-collapse"><i
                                                class="fe fe-chevron-up"></i></a>
                                    <a href="#" class="card-options-remove" data-toggle="card-remove"><i
                                                class="fe fe-x"></i></a>
                                </div>
                            </div>
                            <div class="card-body p-0">
                                <div class="list-group list-lg-group list-group-flush">
                                    <?php foreach ($data['writer'] as $writers) {
                                    foreach ($writers as $key => $val) {


                                    ?>
                                        <div class="list-group-item list-group-item-action border-top">
                                            <div class="media mt-0">
                                                <img class="avatar-lg rounded-circle mr-3" src="../../assets/images/users/female/1.jpg" alt="Image description">
                                                <div class="media-body">
                                                    <div class="d-flex align-items-center">
                                                        <div class="mt-1">
                                                            <h5 class="mb-0"><?php echo $val['f_name'] . ' ' . $val['l_name']; ?></h5>
                                                            <p class="mb-0 fs-13 text-muted">User ID: #<?php echo $val['id']; ?></p>
                                                        </div>
                                                        <small class="ml-auto fs-16 mt-2">
                                                            <a href="<?php echo URLROOT.'/'.$_SESSION["lang"].'/DemoTest/edit_writer/'.$val['id'];?>"><i class="fe fe-edit mr-1" data-toggle="tooltip" data-placement="top" title="" data-original-title="Chat"></i></a>
                                                            <a href="<?php echo URLROOT.'/'.$_SESSION["lang"].'/DemoTest/delete_writer/'.$val['id'];?>" onclick="alert('Do you want to delete this user?')"> <i class="fe fe-trash" data-toggle="tooltip" data-placement="top" title="" data-original-title="Settings"></i></a>

                                                        </small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <?php
                                    }
                                    } ?>

                                </div>

                            </div>
                            <div class="btn-list">
                                <a href="<?php echo URLROOT.'/'.$_SESSION['lang'].'/DemoTest/see_more_writer'; ?>" class="btn btn-blue" style="float:right;margin: 20px">See more >></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-12 col-lg-4 col-xl-4">
                        <div class="card">
                            <div class="card-header">
                                <div class="card-title">New Student's list</div>
                                <div class="card-options">
                                    <a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
                                    <a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
                                </div>
                            </div>
                            <div class="card-body p-0">
                                <div class="list-group list-lg-group list-group-flush">
                                    <?php foreach ($data['student'] as $writers) {
                                                                foreach ($writers as $key => $val) {


                                                                ?>
                                    <div class="list-group-item list-group-item-action border-top">
                                        <div class="media mt-0">
                                            <img class="avatar-lg rounded-circle mr-3" src="../../assets/images/users/female/1.jpg" alt="Image description">
                                            <div class="media-body">
                                                <div class="d-flex align-items-center">
                                                    <div class="mt-1">
                                                        <h5 class="mb-0"><?php echo $val['f_name'] . ' ' . $val['l_name']; ?></h5>
                                                        <p class="mb-0 fs-13 text-muted">User ID: #<?php echo $val['id']; ?></p>
                                                    </div>
                                                    <small class="ml-auto fs-16 mt-2">
                                                        <a href="<?php echo URLROOT.'/'.$_SESSION["lang"].'/DemoTest/edit_student/'.$val['id'];?>"><i class="fe fe-edit mr-1" data-toggle="tooltip" data-placement="top" title="" data-original-title="Chat"></i></a>
                                                        <a href="<?php echo URLROOT.'/'.$_SESSION["lang"].'/DemoTest/delete_student/'.$val['id'];?>" onclick="alert('Do you want to delete this user?')"> <i class="fe fe-trash" data-toggle="tooltip" data-placement="top" title="" data-original-title="Settings"></i></a>

                                                    </small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php }} ?>

                                </div>
                            </div>
                            <div class="btn-list">
                                <a href="<?php echo URLROOT.'/'.$_SESSION['lang'].'/DemoTest/see_more_student'; ?>" class="btn btn-blue" style="float:right;margin: 20px">See more >></a>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- ROW-3 END -->

                <!-- ROW-4 -->
                <div class="row">
                    <div class="col-12 col-sm-12">
                        <div class="card ">
                            <div class="card-header">
                                <div class="card-title mb-0">Messages Summary</div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered text-nowrap mb-0">
                                        <thead>
                                        <tr>
                                            <th>Sender ID</th>
                                            <th>Reciever ID</th>
                                            <th>Chatroom ID</th>
                                            <th>Messages</th>
                                            <th>Status</th>

                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php if(!empty($data['get_message_list'])){

                                            foreach ($data['get_message_list'] as $key=>$val){

                                              ?>


                                        <tr>
                                            <td><?php echo $val['sender_id'];?></td>
                                            <td><?php echo $val['receiver_id'];?></td>
                                            <td><?php echo $val['chat_room_id'];?></td>
                                            <td><?php echo $val['message'];?></td>
                                            <td><?php echo $val['status'];?></td>
<!--                                            <td><span class="badge badge-success">Delivered</span></td>-->
                                            <?php
                                            }


                                            }


                                            else{
                                                ?>

                                                <h3>There is no messages here</h3>

                                            <?php }
                                            ?>
                                        </tr>


                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div><!-- COL END -->
                </div><!-- ROW-4 END -->
                <div class="row">
                    <div class="col-12 col-sm-12">
                        <div class="card ">
                            <div class="card-header">
                                <div class="card-title mb-0">Submission Summary</div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered text-nowrap mb-0">
                                        <thead>
                                        <tr>
                                            <th>Submission Time</th>
                                            <th>Notes</th>
                                            <th>Status</th>
                                            <th>Order ID</th>


                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php if(!empty($data['get_submission_list'])){

                                            foreach ($data['get_submission_list'] as $key=>$val){

                                              ?>


                                        <tr>
                                            <td><?php echo $val['stubmissionTime'];?></td>
                                            <td><?php echo $val['note'];?></td>
                                            <td><?php echo $val['status'];?></td>
                                            <td><?php echo $val['order_id'];?></td>

<!--                                            <td><span class="badge badge-success">Delivered</span></td>-->
                                            <?php
                                            }


                                            }


                                            else{
                                                ?>

                                                <h3>There is no submission here</h3>

                                            <?php }
                                            ?>
                                        </tr>


                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div><!-- COL END -->
                </div><!-- ROW-4 END -->
                <div class="row">
                    <div class="col-12 col-sm-12">
                        <div class="card ">
                            <div class="card-header">
                                <div class="card-title mb-0">Transaction Summary</div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered text-nowrap mb-0">
                                        <thead>
                                        <tr>
                                            <th>Payment Type</th>
                                            <th>Currency</th>
                                            <th>Transaction ID</th>
                                            <th>Medium</th>
                                            <th>Amount</th>


                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php if(!empty($data['get_transaction_list'])){

                                            foreach ($data['get_transaction_list'] as $key=>$val){

                                              ?>


                                        <tr>
                                            <td><?php echo $val['payment_type'];?></td>
                                            <td><?php echo $val['currency'];?></td>
                                            <td><?php echo $val['transaction_id'];?></td>
                                            <td><?php echo $val['medium'];?></td>
                                            <td><?php echo $val['ammount'];?></td>

<!--                                            <td><span class="badge badge-success">Delivered</span></td>-->
                                            <?php
                                            }


                                            }


                                            else{
                                                ?>

                                                <h3>There is no submission here</h3>

                                            <?php }
                                            ?>
                                        </tr>


                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div><!-- COL END -->
                </div><!-- ROW-4 END -->
            </div>
            <!-- CONTAINER END -->
        </div>
    </div>

    <!-- Right-sidebar-->
    <div class="sidebar sidebar-right sidebar-animate">
        <div class="p-2 pr-3 mb-2 sidebar-icon">
            <a href="#" class="text-right float-right" data-toggle="sidebar-right" data-target=".sidebar-right"><i
                        class="fe fe-x"></i></a>
        </div>
        <div class="tab-menu-heading siderbar-tabs border-0">
            <div class="tabs-menu ">
                <!-- Tabs -->
                <ul class="nav panel-tabs">
                    <li class=""><a href="#tab1" class="active" data-toggle="tab">Settings</a></li>
                    <li><a href="#tab2" data-toggle="tab">Followers</a></li>
                    <li><a href="#tab3" data-toggle="tab">Todo</a></li>
                </ul>
            </div>
        </div>
        <div class="panel-body tabs-menu-body side-tab-body p-0 border-0 ">
            <div class="tab-content border-top">
                <div class="tab-pane active " id="tab1">
                    <div class="p-3 border-bottom">
                        <h5 class="border-bottom-0 mb-0">General Settings</h5>
                    </div>
                    <div class="p-4">
                        <div class="switch-settings">
                            <div class="d-flex mb-2">
                                <span class="mr-auto fs-15">Notifications</span>
                                <div class="onoffswitch2">
                                    <input type="checkbox" name="onoffswitch2" id="onoffswitch"
                                           class="onoffswitch2-checkbox" checked>
                                    <label for="onoffswitch" class="onoffswitch2-label"></label>
                                </div>
                            </div>
                            <div class="d-flex mb-2">
                                <span class="mr-auto fs-15">Show your emails</span>
                                <div class="onoffswitch2">
                                    <input type="checkbox" name="onoffswitch2" id="onoffswitch1"
                                           class="onoffswitch2-checkbox">
                                    <label for="onoffswitch1" class="onoffswitch2-label"></label>
                                </div>
                            </div>
                            <div class="d-flex mb-2">
                                <span class="mr-auto fs-15">Show Task statistics</span>
                                <div class="onoffswitch2">
                                    <input type="checkbox" name="onoffswitch2" id="onoffswitch2"
                                           class="onoffswitch2-checkbox">
                                    <label for="onoffswitch2" class="onoffswitch2-label"></label>
                                </div>
                            </div>
                            <div class="d-flex mb-2">
                                <span class="mr-auto fs-15">Show recent activity</span>
                                <div class="onoffswitch2">
                                    <input type="checkbox" name="onoffswitch2" id="onoffswitch3"
                                           class="onoffswitch2-checkbox" checked>
                                    <label for="onoffswitch3" class="onoffswitch2-label"></label>
                                </div>
                            </div>
                            <div class="d-flex mb-2">
                                <span class="mr-auto fs-15">System Logs</span>
                                <div class="onoffswitch2">
                                    <input type="checkbox" name="onoffswitch2" id="onoffswitch4"
                                           class="onoffswitch2-checkbox">
                                    <label for="onoffswitch4" class="onoffswitch2-label"></label>
                                </div>
                            </div>
                            <div class="d-flex mb-2">
                                <span class="mr-auto fs-15">Error Reporting</span>
                                <div class="onoffswitch2">
                                    <input type="checkbox" name="onoffswitch2" id="onoffswitch5"
                                           class="onoffswitch2-checkbox">
                                    <label for="onoffswitch5" class="onoffswitch2-label"></label>
                                </div>
                            </div>
                            <div class="d-flex mb-2">
                                <span class="mr-auto fs-15">Show your status to all</span>
                                <div class="onoffswitch2">
                                    <input type="checkbox" name="onoffswitch2" id="onoffswitch6"
                                           class="onoffswitch2-checkbox" checked>
                                    <label for="onoffswitch6" class="onoffswitch2-label"></label>
                                </div>
                            </div>
                            <div class="d-flex mb-2">
                                <span class="mr-auto fs-15">Keep up to date</span>
                                <div class="onoffswitch2">
                                    <input type="checkbox" name="onoffswitch2" id="onoffswitch7"
                                           class="onoffswitch2-checkbox">
                                    <label for="onoffswitch7" class="onoffswitch2-label"></label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="p-3 border-bottom">
                        <h5 class="border-bottom-0 mb-0">Overview</h5>
                    </div>
                    <div class="p-4">
                        <div class="progress-wrapper">
                            <div class="mb-3">
                                <p class="mb-2">Achieves<span
                                            class="float-right text-muted font-weight-normal">80%</span></p>
                                <div class="progress h-1">
                                    <div class="progress-bar bg-primary w-80 " role="progressbar"></div>
                                </div>
                            </div>
                        </div>
                        <div class="progress-wrapper pt-2">
                            <div class="mb-3">
                                <p class="mb-2">Projects<span
                                            class="float-right text-muted font-weight-normal">60%</span></p>
                                <div class="progress h-1">
                                    <div class="progress-bar bg-secondary w-60 " role="progressbar"></div>
                                </div>
                            </div>
                        </div>
                        <div class="progress-wrapper pt-2">
                            <div class="mb-3">
                                <p class="mb-2">Earnings<span
                                            class="float-right text-muted font-weight-normal">50%</span></p>
                                <div class="progress h-1">
                                    <div class="progress-bar bg-success w-50" role="progressbar"></div>
                                </div>
                            </div>
                        </div>
                        <div class="progress-wrapper pt-2">
                            <div class="mb-3">
                                <p class="mb-2">Balance<span
                                            class="float-right text-muted font-weight-normal">45%</span></p>
                                <div class="progress h-1">
                                    <div class="progress-bar bg-warning w-45 " role="progressbar"></div>
                                </div>
                            </div>
                        </div>
                        <div class="progress-wrapper pt-2">
                            <div class="mb-3">
                                <p class="mb-2">Toatal Profits<span class="float-right text-muted font-weight-normal">75%</span>
                                </p>
                                <div class="progress h-1">
                                    <div class="progress-bar bg-danger w-75" role="progressbar"></div>
                                </div>
                            </div>
                        </div>
                        <div class="progress-wrapper pt-2">
                            <div class="mb-3">
                                <p class="mb-2">Total Likes<span
                                            class="float-right text-muted font-weight-normal">70%</span></p>
                                <div class="progress h-1">
                                    <div class="progress-bar bg-teal w-70" role="progressbar"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="tab2">
                    <div class="list-group-item d-flex  align-items-center border-top-0">
                        <div class="mr-2">
                            <span class="avatar avatar-md brround cover-image"
                                  data-image-src="../../assets/images/users/female/2.jpg"
                                  style="background: url(&quot;../../assets/images/users/female/2.jpg&quot;) center center;"></span>
                        </div>
                        <div class="">
                            <div class="font-weight-500">Mozelle Belt</div>
                            <small class="text-muted">Web Designer
                            </small>
                        </div>
                        <div class="ml-auto">
                            <a href="#" class="btn btn-sm  btn-light">Follow</a>
                        </div>
                    </div>
                    <div class="list-group-item d-flex  align-items-center">
                        <div class="mr-2">
                            <span class="avatar avatar-md brround cover-image"
                                  data-image-src="../../assets/images/users/female/6.jpg"
                                  style="background: url(&quot;../../assets/images/users/female/6.jpg&quot;) center center;"></span>
                        </div>
                        <div class="">
                            <div class="font-weight-500">Alina Bernier</div>
                            <small class="text-muted">Administrator
                            </small>
                        </div>
                        <div class="ml-auto">
                            <a href="#" class="btn btn-sm  btn-light">Follow</a>
                        </div>
                    </div>
                    <div class="list-group-item d-flex  align-items-center">
                        <div class="mr-2">
                            <span class="avatar avatar-md brround cover-image"
                                  data-image-src="../../assets/images/users/male/5.jpg"
                                  style="background: url(&quot;../../assets/images/users/male/5.jpg&quot;) center center;"></span>
                        </div>
                        <div class="">
                            <div class="font-weight-500">Isidro Heide</div>
                            <small class="text-muted">Web Designer
                            </small>
                        </div>
                        <div class="ml-auto">
                            <a href="#" class="btn btn-sm  btn-light">Follow</a>
                        </div>
                    </div>
                    <div class="list-group-item d-flex  align-items-center">
                        <div class="mr-2">
                            <span class="avatar avatar-md brround cover-image"
                                  data-image-src="../../assets/images/users/male/6.jpg"
                                  style="background: url(&quot;../../assets/images/users/male/6.jpg&quot;) center center;"></span>
                        </div>
                        <div class="">
                            <div class="font-weight-500">Isidro Heide</div>
                            <small class="text-muted">Web Designer
                            </small>
                        </div>
                        <div class="ml-auto">
                            <a href="#" class="btn btn-sm  btn-light">Follow</a>
                        </div>
                    </div>
                    <div class="list-group-item d-flex  align-items-center">
                        <div class="mr-2">
                            <span class="avatar avatar-md brround cover-image"
                                  data-image-src="../../assets/images/users/male/2.jpg"
                                  style="background: url(&quot;../../assets/images/users/male/2.jpg&quot;) center center;"></span>
                        </div>
                        <div class="">
                            <div class="font-weight-500">Isidro Heide</div>
                            <small class="text-muted">Web Designer
                            </small>
                        </div>
                        <div class="ml-auto">
                            <a href="#" class="btn btn-sm  btn-light">Follow</a>
                        </div>
                    </div>
                    <div class="list-group-item d-flex  align-items-center">
                        <div class="mr-2">
                            <span class="avatar avatar-md brround cover-image"
                                  data-image-src="../../assets/images/users/male/4.jpg"
                                  style="background: url(&quot;../../assets/images/users/male/2.jpg&quot;) center center;"></span>
                        </div>
                        <div class="">
                            <div class="font-weight-500">Isidro Heide</div>
                            <small class="text-muted">Web Designer
                            </small>
                        </div>
                        <div class="ml-auto">
                            <a href="#" class="btn btn-sm  btn-light">Follow</a>
                        </div>
                    </div>
                    <div class="list-group-item d-flex  align-items-center">
                        <div class="mr-2">
                            <span class="avatar avatar-md brround cover-image"
                                  data-image-src="../../assets/images/users/male/5.jpg"
                                  style="background: url(&quot;../../assets/images/users/male/2.jpg&quot;) center center;"></span>
                        </div>
                        <div class="">
                            <div class="font-weight-500">Isidro Heide</div>
                            <small class="text-muted">Web Designer
                            </small>
                        </div>
                        <div class="ml-auto">
                            <a href="#" class="btn btn-sm  btn-light">Follow</a>
                        </div>
                    </div>
                    <div class="list-group-item d-flex  align-items-center">
                        <div class="mr-2">
                            <span class="avatar avatar-md brround cover-image"
                                  data-image-src="../../assets/images/users/male/2.jpg"
                                  style="background: url(&quot;../../assets/images/users/male/2.jpg&quot;) center center;"></span>
                        </div>
                        <div class="">
                            <div class="font-weight-500">Isidro Heide</div>
                            <small class="text-muted">Web Designer
                            </small>
                        </div>
                        <div class="ml-auto">
                            <a href="#" class="btn btn-sm  btn-light">Follow</a>
                        </div>
                    </div>
                    <div class="list-group-item d-flex  align-items-center border-bottom-0">
                        <div class="mr-2">
                            <span class="avatar avatar-md brround cover-image"
                                  data-image-src="../../assets/images/users/female/3.jpg"
                                  style="background: url(&quot;../../assets/images/users/female/3.jpg&quot;) center center;"></span>
                        </div>
                        <div class="">
                            <div class="font-weight-500">Florinda Carasco</div>
                            <small class="text-muted">Project Manager
                            </small>
                        </div>
                        <div class="ml-auto">
                            <a href="#" class="btn btn-sm  btn-light">Follow</a>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="tab3">
                    <div class="">
                        <div class="d-flex p-3">
                            <label class="custom-control custom-checkbox mb-0">
                                <input type="checkbox" class="custom-control-input" name="example-checkbox1"
                                       value="option1" checked="">
                                <span class="custom-control-label">Do Even More..</span>
                            </label>
                            <span class="ml-auto">
										<i class="si si-pencil text-primary mr-2" data-toggle="tooltip" title=""
                                           data-placement="top" data-original-title="Edit"></i>
										<i class="si si-trash text-danger mr-2" data-toggle="tooltip" title=""
                                           data-placement="top" data-original-title="Delete"></i>
									</span>
                        </div>
                        <div class="d-flex p-3 border-top">
                            <label class="custom-control custom-checkbox mb-0">
                                <input type="checkbox" class="custom-control-input" name="example-checkbox2"
                                       value="option2" checked="">
                                <span class="custom-control-label">Find an idea.</span>
                            </label>
                            <span class="ml-auto">
										<i class="si si-pencil text-primary mr-2" data-toggle="tooltip" title=""
                                           data-placement="top" data-original-title="Edit"></i>
										<i class="si si-trash text-danger mr-2" data-toggle="tooltip" title=""
                                           data-placement="top" data-original-title="Delete"></i>
									</span>
                        </div>
                        <div class="d-flex p-3 border-top">
                            <label class="custom-control custom-checkbox mb-0">
                                <input type="checkbox" class="custom-control-input" name="example-checkbox3"
                                       value="option3" checked="">
                                <span class="custom-control-label">Hangout with friends</span>
                            </label>
                            <span class="ml-auto">
										<i class="si si-pencil text-primary mr-2" data-toggle="tooltip" title=""
                                           data-placement="top" data-original-title="Edit"></i>
										<i class="si si-trash text-danger mr-2" data-toggle="tooltip" title=""
                                           data-placement="top" data-original-title="Delete"></i>
									</span>
                        </div>
                        <div class="d-flex p-3 border-top">
                            <label class="custom-control custom-checkbox mb-0">
                                <input type="checkbox" class="custom-control-input" name="example-checkbox4"
                                       value="option4">
                                <span class="custom-control-label">Do Something else</span>
                            </label>
                            <span class="ml-auto">
										<i class="si si-pencil text-primary mr-2" data-toggle="tooltip" title=""
                                           data-placement="top" data-original-title="Edit"></i>
										<i class="si si-trash text-danger mr-2" data-toggle="tooltip" title=""
                                           data-placement="top" data-original-title="Delete"></i>
									</span>
                        </div>
                        <div class="d-flex p-3 border-top">
                            <label class="custom-control custom-checkbox mb-0">
                                <input type="checkbox" class="custom-control-input" name="example-checkbox5"
                                       value="option5">
                                <span class="custom-control-label">Eat healthy, Eat Fresh..</span>
                            </label>
                            <span class="ml-auto">
										<i class="si si-pencil text-primary mr-2" data-toggle="tooltip" title=""
                                           data-placement="top" data-original-title="Edit"></i>
										<i class="si si-trash text-danger mr-2" data-toggle="tooltip" title=""
                                           data-placement="top" data-original-title="Delete"></i>
									</span>
                        </div>
                        <div class="d-flex p-3 border-top">
                            <label class="custom-control custom-checkbox mb-0">
                                <input type="checkbox" class="custom-control-input" name="example-checkbox6"
                                       value="option6" checked="">
                                <span class="custom-control-label">Finsh something more..</span>
                            </label>
                            <span class="ml-auto">
										<i class="si si-pencil text-primary mr-2" data-toggle="tooltip" title=""
                                           data-placement="top" data-original-title="Edit"></i>
										<i class="si si-trash text-danger mr-2" data-toggle="tooltip" title=""
                                           data-placement="top" data-original-title="Delete"></i>
									</span>
                        </div>
                        <div class="d-flex p-3 border-top">
                            <label class="custom-control custom-checkbox mb-0">
                                <input type="checkbox" class="custom-control-input" name="example-checkbox7"
                                       value="option7" checked="">
                                <span class="custom-control-label">Do something more</span>
                            </label>
                            <span class="ml-auto">
										<i class="si si-pencil text-primary mr-2" data-toggle="tooltip" title=""
                                           data-placement="top" data-original-title="Edit"></i>
										<i class="si si-trash text-danger mr-2" data-toggle="tooltip" title=""
                                           data-placement="top" data-original-title="Delete"></i>
									</span>
                        </div>
                        <div class="d-flex p-3 border-top">
                            <label class="custom-control custom-checkbox mb-0">
                                <input type="checkbox" class="custom-control-input" name="example-checkbox8"
                                       value="option8">
                                <span class="custom-control-label">Updated more files</span>
                            </label>
                            <span class="ml-auto">
										<i class="si si-pencil text-primary mr-2" data-toggle="tooltip" title=""
                                           data-placement="top" data-original-title="Edit"></i>
										<i class="si si-trash text-danger mr-2" data-toggle="tooltip" title=""
                                           data-placement="top" data-original-title="Delete"></i>
									</span>
                        </div>
                        <div class="d-flex p-3 border-top">
                            <label class="custom-control custom-checkbox mb-0">
                                <input type="checkbox" class="custom-control-input" name="example-checkbox9"
                                       value="option9">
                                <span class="custom-control-label">System updated</span>
                            </label>
                            <span class="ml-auto">
										<i class="si si-pencil text-primary mr-2" data-toggle="tooltip" title=""
                                           data-placement="top" data-original-title="Edit"></i>
										<i class="si si-trash text-danger mr-2" data-toggle="tooltip" title=""
                                           data-placement="top" data-original-title="Delete"></i>
									</span>
                        </div>
                        <div class="d-flex p-3 border-top">
                            <label class="custom-control custom-checkbox mb-0">
                                <input type="checkbox" class="custom-control-input" name="example-checkbox10"
                                       value="option10">
                                <span class="custom-control-label">Settings Changings...</span>
                            </label>
                            <span class="ml-auto">
										<i class="si si-pencil text-primary mr-2" data-toggle="tooltip" title=""
                                           data-placement="top" data-original-title="Edit"></i>
										<i class="si si-trash text-danger mr-2" data-toggle="tooltip" title=""
                                           data-placement="top" data-original-title="Delete"></i>
									</span>
                        </div>
                        <div class="d-flex p-3 border-top">
                            <label class="custom-control custom-checkbox mb-0">
                                <input type="checkbox" class="custom-control-input" name="example-checkbox9"
                                       value="option9">
                                <span class="custom-control-label">System updated</span>
                            </label>
                            <span class="ml-auto">
										<i class="si si-pencil text-primary mr-2" data-toggle="tooltip" title=""
                                           data-placement="top" data-original-title="Edit"></i>
										<i class="si si-trash text-danger mr-2" data-toggle="tooltip" title=""
                                           data-placement="top" data-original-title="Delete"></i>
									</span>
                        </div>
                        <div class="d-flex p-3 border-top border-bottom">
                            <label class="custom-control custom-checkbox mb-0">
                                <input type="checkbox" class="custom-control-input" name="example-checkbox10"
                                       value="option10">
                                <span class="custom-control-label">Settings Changings...</span>
                            </label>
                            <span class="ml-auto">
										<i class="si si-pencil text-primary mr-2" data-toggle="tooltip" title=""
                                           data-placement="top" data-original-title="Edit"></i>
										<i class="si si-trash text-danger mr-2" data-toggle="tooltip" title=""
                                           data-placement="top" data-original-title="Delete"></i>
									</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- End Rightsidebar-->

    <!-- FOOTER -->
    <footer class="footer">
        <div class="container">
            <div class="row align-items-center flex-row-reverse">
<!--                <div class="col-md-12 col-sm-12 text-center">-->
<!--                    Copyright © 2020 <a href="#">Dashmint</a>. Designed by <a href="https://spruko.com/">Spruko-->
<!--                        Technologies Pvt.Ltd</a> All rights reserved.-->
<!--                </div>-->
            </div>
        </div>
    </footer>
    <!-- FOOTER END -->
</div>

<!-- BACK-TO-TOP -->
<a href="#top" id="back-to-top"><i class="fa fa-angle-double-up"></i></a>

<!-- JQUERY SCRIPTS JS-->
<?php
require_once APPROOT . '/views/inc/admin/scripts.php';


?>

</body>
</html>