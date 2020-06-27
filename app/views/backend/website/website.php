
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
                    <li class="breadcrumb-item active" aria-current="page">website setting change</li>
                </ol>

            </div>
            <div class="ml-auto">
                <a href="<?php echo URLROOT.'/'.$_SESSION['lang'].'/DemoTest/add_website_setting' ?>" class="btn btn-primary btn-icon btn-sm text-white mr-2">
									<span>
										<i class="fe fe-plus"></i>
									</span> Add Review
                </a>

            </div>
            <br>
            <!-- PAGE-HEADER END -->

            <!-- ROW-1 -->

            <!-- ROW-1 END -->

            <!-- ROW-2 -->
            <div class="row">
                <div class="col-md-12 col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">Order Requests list</div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="example-1" class="table table-striped table-bordered nowrap">
                                    <thead>
                                    <tr>
                                        <th class="border-bottom-0 border-top-0">color</th>
                                        <th class="border-bottom-0 border-top-0">Font</th>
                                        <th class="border-bottom-0 border-top-0">Email</th>
                                        <th class="border-bottom-0 border-top-0">Phone</th>
                                        <th class="border-bottom-0 border-top-0">Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach ($data['website'] as $key => $val) {



                                        ?>
                                        <tr>
                                            <td><?php echo $val['color']; ?></td>
                                            <td><?php echo $val['font']; ?></td>
                                            <td><?php echo $val['email']; ?></td>
                                            <td><?php echo $val['phone']; ?></td>
                                            <td>
                                                <a href="<?php echo URLROOT.'/'.$_SESSION["lang"].'/DemoTest/get_website_data/'.$val['id'];?>" class="btn btn-sm btn-primary badge" ><i class="fa fa-edit" style="color: white"></i></a>
                                                <a href="<?php echo URLROOT.'/'.$_SESSION["lang"].'/DemoTest/delete_website/'.$val['id'];?>" onclick="alert('Do you want to delete this user?')" class="btn btn-sm btn-primary badge" ><i class="fa fa-trash" style="color: white"></i></a></td>
                                            <td>
                                        </tr>
                                    <?php } ?>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
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
<script>

    function changeActive(id){

        //
        //var url = "<?php //echo URLROOT.'/DemoTest/update_active_status'; ?>//";
        //console.log(url)
        $.ajax({
            url: "<?php echo URLROOT.'/DemoTest/update_active_status'; ?>",
            type: "POST",
            cache: false,
            data:{
                id: id,

            },
            success: function(data){
                var dataResult = JSON.parse(data);
                console.log(dataResult)
                if(dataResult.statusCode==200){
                    // $('#update_country').modal().hide();
                    alert('Status updated successfully !');
                    location.reload();
                }
            }
        });
    }


</script>
</body>
</html>