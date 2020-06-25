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

            <div class="white-box container-fluid">
                <h3 class="box-title"><?php echo $lang['Draft']; ?></h3>
                <div class="table-responsive">
                    <?php if (isset($data['draft'][0])) : ?>
                        <table class="table">
                            <tbody>
                                <?php foreach ($data['draft'] as $request) : ?>
                                    <tr>
                                        <td><span class="badge badge-info"><?php echo $request['subject']; ?></span></td>
                                        <td><?php echo $lang['Type'] . ': ' . $request['type']; ?></td>
                                        <td><span class="badge badge-secondary"><?php echo $lang['Duration'] . ': ' . $request['duration'] . $lang['Day']; ?></span></td>
                                        <td><?php echo $lang['Service'] . ': ' . $request['service']; ?></td>
                                        <td><?php echo $lang['Style'] . ': ' . $request['style']; ?></td>
                                        <td><?php echo $lang['Price'] . ' $' . $request['price']; ?></td>

                                        <td>
                                            <button onclick="deleteRequest(<?php echo $request['id']; ?>)" class="btn btn-danger"><?php echo $lang['Delete']; ?></button>
                                        </td>

                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        <?php endif; ?>
                        </table>
                </div>
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
</body>

</html>