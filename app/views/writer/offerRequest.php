<?php
require_once APPROOT . '/helpers/sessionHelper.php';
require_once APPROOT . '/views/inc/panelHead.php';
?>

<body class="fix-header ">
    <!-- ============================================================== -->
    <!-- Preloader -->
    <!-- ============================================================== -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" />
        </svg>
    </div>

    <div id="wrapper" >
        <?php
        require_once APPROOT . '/views/inc/panelNav.php';
        require_once APPROOT . '/views/inc/panelSideBar.php';
        ?>
        <div id="page-wrapper">
       
            <div class="white-box">
                

                <table class="table table-card table-active table-hover">
                    <tbody>
                        <tr> <h3 class="text-center text-black bold"><?php echo $lang['My Works']; ?></h3></tr>
                        <?php foreach ($data['offer_request'] as $request) : ?>
                       
                            <tr>
                           
                                <td><span class="badge badge-info"><?php echo $request['subject']; ?></span></td>
                                <td><?php echo $lang['Type'] . ': ' . $request['type']; ?></td>
                                <td><span class="badge badge-secondary"><?php echo $lang['Duration'] . ': ' . $request['duration'] . $lang['Day']; ?></span></td>
                                <td><?php echo $lang['Service'] . ': ' . $request['service']; ?></td>
                                <td><?php echo $lang['Style'] . ': ' . $request['style']; ?></td>
                                <td><?php echo $lang['Price'] . ' $' . $request['price_after_service_charge']; ?></td>

                                <td>
                                    <button onclick="acceptOffer(<?php echo $request['id']; ?>)" class="btn btn-success"><?php echo $lang['Accept']; ?></button>
                                    <button onclick="deniedOffer(<?php echo $request['id']; ?>)" class="btn btn-danger"><?php echo $lang['denied']; ?></button>
                                </td>
                                <td><a href="<?php echo URLROOT . '/User/getMyRequest?myrequest='.$request['id']; ?>"><?php echo $lang['See Details']; ?></a></td>
                            </tr>
                       
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
            <!-- /.container-fluid -->
            <footer class="footer text-center">
                <?php echo COPYRIGHT; ?>
            </footer>
        </div>
        <!-- ============================================================== -->
        <!-- End Page Content -->
        <!-- ============================================================== -->
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

        function  deniedOffer(requestId){
            if(confirm("You sure to deny the offer??")){
                $.ajax({
                type: "post",
                url: "<?php echo URLROOT . '/Writer/denyRequest'; ?>",
                data: {
                    "token": <?php echo "'$token'"; ?>,
                    "requestId": requestId
                },
                success: function(response) {
                    location.href= "<?php echo URLROOT ."/".$_SESSION['lang']. '/Order/myOrder'; ?>";
                }
            })
            }
           
        }
    </script>
    <script type="text/javascript">
        function saveSubject(domObject) {
            $.ajax({
                type: "post",
                url: "<?php echo URLROOT . '/Writer/saveSubject'; ?>",
                data: {
                    "token": <?php echo "'$token'"; ?>,
                    "subject": domObject.value
                },
                success: function(response) {
                    $("#subject_span_id").load(" #subject_span_id > *");
                }
            });

        }

        function saveService(domObject) {

            $.ajax({
                type: "post",
                url: "<?php echo URLROOT . '/Writer/saveService'; ?>",
                data: {
                    "token": <?php echo "'$token'"; ?>,
                    "subject": domObject.value
                },
                success: function(response) {
                    $("#service_span_id").load(" #service_span_id > *");
                }
            });

        }

        function saveType(domObject) {

            $.ajax({
                type: "post",
                url: "<?php echo URLROOT . '/Writer/saveType'; ?>",
                data: {
                    "token": <?php echo "'$token'"; ?>,
                    "subject": domObject.value
                },
                success: function(response) {
                    $("#type_span_id").load(" #type_span_id > *");
                }
            });

        }

        function deletePreference(table, name) {
            $.ajax({
                type: "post",
                url: "<?php echo URLROOT . '/Writer/deletePreference'; ?>",
                data: {
                    "token": <?php echo "'$token'"; ?>,
                    "table": table,
                    "name": name
                },
                success: function(response) {
                    $("#" + table + "_span_id").load(" #" + table + "_span_id > *");
                }
            });
        }
    </script>
</body>

</html>