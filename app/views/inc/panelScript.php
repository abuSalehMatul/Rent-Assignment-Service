<script src="<?php echo URLROOT . '/'; ?>panel/plugins/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="<?php echo URLROOT . '/'; ?>panel/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Menu Plugin JavaScript -->
<script src="<?php echo URLROOT . '/'; ?>panel/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js"></script>
<!--slimscroll JavaScript -->
<script src="<?php echo URLROOT . '/'; ?>panel/js/jquery.slimscroll.js"></script>
<!--Wave Effects -->
<script src="<?php echo URLROOT . '/'; ?>panel/js/waves.js"></script>
<!--Counter js -->
<script src="<?php echo URLROOT . '/'; ?>panel/plugins/bower_components/waypoints/lib/jquery.waypoints.js"></script>
<script src="<?php echo URLROOT . '/'; ?>panel/plugins/bower_components/counterup/jquery.counterup.min.js"></script>
<!-- chartist chart -->
<script src="<?php echo URLROOT . '/'; ?>panel/plugins/bower_components/chartist-js/dist/chartist.min.js"></script>
<script src="<?php echo URLROOT . '/'; ?>panel/plugins/bower_components/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.min.js"></script>
<!-- Sparkline chart JavaScript -->
<script src="<?php echo URLROOT . '/'; ?>panel/plugins/bower_components/jquery-sparkline/jquery.sparkline.min.js"></script>
<!-- Custom Theme JavaScript -->
<script src="<?php echo URLROOT . '/'; ?>panel/js/custom.min.js"></script>
<script src="<?php echo URLROOT . '/'; ?>panel/js/dashboard1.js"></script>
<script src="<?php echo URLROOT . '/'; ?>panel/plugins/bower_components/toast-master/js/jquery.toast.js"></script>
<script>
    function deleteRequest(requestId) {
        if (confirm("You Sure to Delete!")) {
            $.ajax({
                url: "<?php echo URLROOT . '/' . $_SESSION["lang"] . '/student/RequestDelete' ?>",
                data: {
                    'token': '<?php echo $token; ?>',
                    'id': requestId
                },
                type: "post",
                success: function(response) {
                   
                    location.reload();
                }
            });
        }

    }
</script>