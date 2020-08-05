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

                <!-- .row -->

                <div class="row white-box">
                        <div class="well row panel-blue">
                            <h4 class="col-md-3 col-sm-6">
                                <?php echo $lang["Type"]; ?>
                                : <b> <?php echo $lang[$data['order_request']["type"]]?? $lang["NA"]; ?> </b>
                            </h4>
                            <h4 class="col-md-3 col-sm-6">
                                <?php echo $lang["Subject"]; ?>
                                : <b> <?php echo $lang[$data['order_request']["subject"]]?? $lang["NA"]; ?> </b>
                            </h4>
                            <h4 class="col-md-3 col-sm-6">
                                <?php echo $lang["Service"]; ?>
                                : <b> <?php echo $lang[$data['order_request']["service"]]?? $lang["NA"]; ?> </b>
                            </h4>
                            <h4 class="col-md-3 col-sm-6">
                                <?php echo $lang["Duration"]; ?>
                                : <b> <?php echo $data['order_request']["duration"]. " Days" ?> </b>
                            </h4>
                        </div>
                        <hr>
                        <?php if($_SESSION['role']== 3): ?>
                            <div class="row white-box">
                                <button onclick="acceptOffer(<?php echo $data['order_request']['id'] ?>)" class="btn btn-success"><?php echo $lang['Accept The Offer']; ?></button>
                                <a href="<?php echo URLROOT.'/'.$_SESSION['lang'].'/Writer/gotoChat/'.$data['order_request']['user_id'].'/'.$data['order_request']['id'] ?>" class="btn btn-info"><?php echo $lang['Go For Chat'] ?></a>
                            </div>
                        <?php endif; ?>
                        <div class="white-box">
                            <h4 class="col-md-1 col-sm-3">
                                <?php echo $lang['Topic']; ?>
                                : 

                            </h4>
                            <h5 class="col-md-9 col-sm-9">
                                <?php echo $data['order_request']['topic']?? $lang["NA"]; ?>
                            </h5>
                        </div>
                       
                        <div class="white-box row">
                            <h4 class="col-md-12 col-sm-12">
                                <?php echo $lang["Description"]; ?>
                            </h4>
                            <div class="col-md-12 col-sm-12">
                                <?php print_r($data['order_request']['description']); ?>
                            </div>
                        </div>
                        <hr>
                        <div class="white-box col-md-6">
                            <h4>
                                <?php echo $lang['Price']; ?>: 
                                <?php 
                                if($_SESSION['role'] == 3){
                                    echo "$". $data['order_request']['price_after_service_charge'];
                                }
                                elseif($_SESSION['role'] == 4){
                                    echo "$".$data['order_request']['price'];
                                }
                                else{
                                    echo "writer price $".$data['order_request'][''];
                                    echo "client price $".$data['order_request']['price'];
                                }
                                 ?>
                            </h4>
                            <h4>
                                <?php echo $lang['Level']; ?>
                                : <?php echo $lang[$data['order_request']['lavel']]?? $lang["NA"]; ?>
                            </h4>
                            <h4>
                                <?php echo $lang['Style']; ?>
                                : <?php echo $lang[$data['order_request']['style']]?? $lang["NA"]; ?>
                            </h4>

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
    <script>
        function acceptOffer(requestId){
            $.ajax({
                type: "post",
                url: "<?php echo URLROOT . '/Writer/acceptRequest'; ?>",
                data: {
                    "token": <?php echo "'$token'"; ?>,
                    "requestId": requestId
                },
                success: function(response) {
                  
                   location.href= "<?php echo URLROOT ."/".$_SESSION['lang']. '/Order/myOrder'; ?>";
                }
            })
        }
    </script>
</body>

</html>