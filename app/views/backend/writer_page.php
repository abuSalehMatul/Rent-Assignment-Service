
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

                <!-- ROW-1 END -->

                <!-- ROW-2 -->
                <div class="row">
                    <div class="col-md-12 col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="card-title">Writers list</div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example-1" class="table table-striped table-bordered nowrap">
                                        <thead>
                                        <tr>
                                            <th class="border-bottom-0 border-top-0">First name</th>
                                            <th class="border-bottom-0 border-top-0">Last name</th>
                                            <th class="border-bottom-0 border-top-0">Email</th>
                                            <th class="border-bottom-0 border-top-0">Address</th>
                                            <th class="border-bottom-0 border-top-0">Phone Number</th>
                                            <th class="border-bottom-0 border-top-0">status</th>
                                            <th class="border-bottom-0 border-top-0">Action</th>
                                            <th class="border-bottom-0 border-top-0"></th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php foreach ($data['writer'] as $writers) {
                                        foreach ($writers as $key => $val) {


                                        ?>
                                        <tr>
                                            <td><?php echo $val['f_name']; ?></td>
                                            <td><?php echo $val['l_name']; ?></td>
                                            <td><?php echo $val['email']; ?></td>
                                            <td><?php echo $val['address']; ?></td>
                                            <td><?php echo $val['phone_number']; ?></td>
                                            <td><?php if($val['status'] == 1){

                                                echo "<a class='btn btn-light btn-sm' id='".$val['id']."' onclick='changeActive(this.id)'>Active</a>";

                                                }
                                                else{
                                                    echo "<a class='btn btn-warning btn-sm'>Deactivate</a>";
                                                }


                                                ; ?></td>
                                            <td><a href="<?php echo URLROOT.'/'.$_SESSION["lang"].'/DemoTest/edit_writer/'.$val['id'];?>"  class="btn btn-sm btn-primary badge"  style="color: white;">Edit</a>
                                                <a href="<?php echo URLROOT.'/'.$_SESSION["lang"].'/DemoTest/delete_writer/'.$val['id'];?>" onclick="alert('Do you want to delete this user?')" class="btn btn-sm btn-primary badge" ><i class="fa fa-trash" style="color: white"></i></a></td>
                                            <td>



                                            </td>


                                        </tr>
                                        <?php }} ?>

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