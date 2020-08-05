
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
                    <li class="breadcrumb-item active" aria-current="page">Writers List</li>
                </ol>

            </div>
            <!-- PAGE-HEADER END -->

            <!-- ROW-1 -->

            <!-- ROW-1 END -->

            <!-- ROW-2 -->
            <div class="row">
                <div class="col-12 col-sm-12">
                    <div class="card ">
                        <div class="card-header">
                            <div class="card-title mb-0">Submission Summary</div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="example-1" class="table table-bordered text-nowrap mb-0">
                                    <thead>
                                    <tr>
                                        <th>Submission Time</th>
                                        <th>Notes</th>
                                        <th>Status</th>
                                        <th>Order ID</th>
                                        <th>Action</th>


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
                                        <td> <a href="<?php echo URLROOT.'/'.$_SESSION["lang"].'/DemoTest/edit_submission/'.$val['id'];?>" class="btn btn-sm btn-primary badge" ><i class="fa fa-edit" style="color: white"></i></a>
                                            <a href="<?php echo URLROOT.'/'.$_SESSION["lang"].'/DemoTest/delete_submission/'.$val['id'];?>" onclick="alert('Do you want to delete this user?')" class="btn btn-sm btn-primary badge" ><i class="fa fa-trash" style="color: white"></i></a></td>
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