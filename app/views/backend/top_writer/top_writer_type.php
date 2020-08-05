
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
                    <li class="breadcrumb-item active" aria-current="page">All writer by type</li>
                </ol>

            </div>
<!--            <div class="ml-auto">-->
<!--                <a href="--><?php //echo URLROOT.'/'.$_SESSION['lang'].'/DemoTest/add_website_setting' ?><!--" class="btn btn-primary btn-icon btn-sm text-white mr-2">-->
<!--									<span>-->
<!--										<i class="fe fe-plus"></i>-->
<!--									</span> Add Review-->
<!--                </a>-->
<!---->
<!--            </div>-->
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
                                        <th class="border-bottom-0 border-top-0">Writer name</th>
                                        <th class="border-bottom-0 border-top-0">Type</th>
                                        <th class="border-bottom-0 border-top-0">Action</th>

                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach ($data['writer_type'] as $key => $val) {



                                        ?>
                                        <tr>
                                            <td><span class="writer"><?php echo $val['user_id']; ?></span></td>
                                            <td  id="<?php echo $val['type_id']; ?>"><span id="type_name"><?php echo $val['type_id']; ?></span></td>
                                           <td> <a href="<?php echo URLROOT.'/'.$_SESSION["lang"].'/DemoTest/delete_writer_type/'.$val['id'];?>" onclick="alert('Do you want to delete this user?')" class="btn btn-sm btn-primary badge" ><i class="fa fa-trash" style="color: white"></i></a>
                                           </td>
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




$('tr').each(function (i, el) {
    var id = $(el).children('td').children('#type_name').text();
    var requestUrl = "<?php echo URLROOT.'/DemoTest/get_type_data/' ?>" + id;
    var packJsonData = (function () {
        var result;
        $.ajax({
            type: 'GET',
            url: requestUrl,
            dataType: 'json',
            async: false,
            success: function (data) {
                result = data;
            }
        });
        return result;
    })();
    // var pack = JSON.parse(packJsonData)
    // console.log(packJsonData);
    $(packJsonData).each(function(key,val){
        $(el).children('td').children('#type_name').html(val.name);
        // console.log(val.name);
    })
    // $(el).children('td').children('.user_id').html(packJsonData.name);
});


$('tr').each(function (i, el) {
    var id = $(el).children('td').children('.writer').text();
    var requestUrl = "<?php echo URLROOT.'/DemoTest/get_writer_name_by_id/' ?>" + id;
    var packJsonData = (function () {
        var result;
        $.ajax({
            type: 'GET',
            url: requestUrl,
            dataType: 'json',
            async: false,
            success: function (data) {
                result = data;
            }
        });
        return result;
    })();
    // var pack = JSON.parse(packJsonData)
    // console.log(packJsonData);
    $(packJsonData).each(function(key,val){
        $(el).children('td').children('.writer').html(val.f_name+' '+val.l_name);
        // console.log(val.name);
    })
    // $(el).children('td').children('.user_id').html(packJsonData.name);
});

</script>
</body>
</html>