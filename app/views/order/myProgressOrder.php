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
            <div class="container-fluid white-box">
                <h3><?php echo $lang['My Orders'] ?></h3>
                <table class="table table-card table-active table-hover">
                    <tbody>
                        <?php foreach ($data['orders'] as $order) : ?>
                       
                            <tr>
                           
                                <td><span class="badge badge-info"><?php echo $lang[$order['status']]; ?></span></td>
                                <td><?php echo $lang['StartingTime'] . ': ' . date('Y/m/d', $order['startingTime']); ?></td>
                                <td><span class="badge badge-danger"><?php echo $lang['EndingTime'] . ': ' . date('Y/m/d', $order['endingTime']); ?></span></td>
                                <?php if($_SESSION['role'] == 4): ?>
                                <td><?php echo $lang['For'] . ': $' . $order['price']; ?></td>
                                <?php endif; ?>
                                <?php if($_SESSION['role'] == 3): ?>
                                <td><?php echo $lang['For'] . ': $' . $order['price_after_service_charge']; ?></td>
                                <?php endif; ?>
                                <td>
                                    <button onclick="cancelRequest(<?php echo $order['id']; ?>)" class="btn btn-danger"><?php echo $lang['Cancel Request']; ?></button>
                                </td>
                                <td><a href="<?php echo URLROOT . '/User/getMyRequest?myrequest='.$order['request_id']; ?>"><?php echo $lang['See Details']; ?></a></td>
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