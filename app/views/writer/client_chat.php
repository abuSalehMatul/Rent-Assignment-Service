<?php
require_once APPROOT . '/helpers/sessionHelper.php';
require_once APPROOT . '/views/inc/panelHead.php';
require_once APPROOT . '/views/inc/chatPanel.php';
?>

<body class="fix-header ">
<!-- ============================================================== -->
<!-- Preloader -->
<!-- ============================================================== -->
<div class="preloader">
    <svg class="circular" viewBox="25 25 50 50">
        <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10"/>
    </svg>
</div>

<div id="wrapper">
    <?php
    require_once APPROOT . '/views/inc/panelNav.php';
    require_once APPROOT . '/views/inc/panelSideBar.php';
    ?>
    <div id="page-wrapper">

        <div class="white-box">


            <div id="frame">
                <div id="sidepanel">
                    <div id="profile">
                        <div class="wrap">
                            <img id="profile-img" src="http://emilcarlsson.se/assets/mikeross.png" class="online"
                                 alt=""/>
                            <p class="username"></p>
                            <i class="fa fa-chevron-down expand-button" aria-hidden="true"></i>
                            <div id="status-options">
                                <ul>
                                    <li id="status-online" class="active"><span class="status-circle"></span>
                                        <p>Online</p></li>
                                    <li id="status-away"><span class="status-circle"></span>
                                        <p>Away</p></li>
                                    <li id="status-busy"><span class="status-circle"></span>
                                        <p>Busy</p></li>
                                    <li id="status-offline"><span class="status-circle"></span>
                                        <p>Offline</p></li>
                                </ul>
                            </div>
                            <div id="expanded">
                                <label for="twitter"><i class="fa fa-facebook fa-fw" aria-hidden="true"></i></label>
                                <input name="twitter" type="text" value="mikeross"/>
                                <label for="twitter"><i class="fa fa-twitter fa-fw" aria-hidden="true"></i></label>
                                <input name="twitter" type="text" value="ross81"/>
                                <label for="twitter"><i class="fa fa-instagram fa-fw" aria-hidden="true"></i></label>
                                <input name="twitter" type="text" value="mike.ross"/>
                            </div>
                        </div>
                    </div>
                    <div id="search">
                        <label for=""><i class="fa fa-search" aria-hidden="true"></i></label>
                        <input type="text" placeholder="Search contacts..."/>
                    </div>
                    <div id="contacts">
                        <ul style="list-style: none">
                            <li class="contact">
                                <div class="wrap">


                                    <input type="hidden" id="reciever_id" value=""></input>


                                </div>
                            </li>
                            <li class="contact active">
                                <div class="wrap">
                                    <span class="contact-status busy"></span>
                                    <img src="http://emilcarlsson.se/assets/harveyspecter.png" alt=""/>
                                    <div class="meta">
                                        <p class="name">anonymous</p>
                                    </div>
                                </div>
                            </li>

                        </ul>
                    </div>
                    <div id="bottom-bar">
                        <button id="addcontact"><i class="fa fa-user-plus fa-fw" aria-hidden="true"></i> <span>Add contact</span>
                        </button>
                        <button id="settings"><i class="fa fa-cog fa-fw" aria-hidden="true"></i> <span>Settings</span>
                        </button>
                    </div>
                </div>
                <div class="content">
                    <div class="contact-profile">
                        <img src="http://emilcarlsson.se/assets/harveyspecter.png" alt=""/>
                        <p>Harvey Specter</p>
                        <div class="social-media">
                            <i class="fa fa-facebook" aria-hidden="true"></i>
                            <i class="fa fa-twitter" aria-hidden="true"></i>
                            <i class="fa fa-instagram" aria-hidden="true"></i>
                        </div>
                    </div>
                    <div class="messages">
                        <ul class="send">
                            <!--                            --><?php //foreach ($data['get_chat'] as $key=>$val){

                            ?>

                            <!--                            --><?php //} ?>
                            <li class="replies">
                                <img src="http://emilcarlsson.se/assets/harveyspecter.png" alt=""/>
                                <p id="reply"></p>
                            </li>

                        </ul>
                    </div>
                    <div class="message-input">
                        <div class="wrap">
                            <input type="text" placeholder="Write your message..."/>
                            <i class="fa fa-paperclip attachment" aria-hidden="true"></i>
                            <button class="submit"><i class="fa fa-paper-plane" aria-hidden="true"></i></button>
                        </div>
                    </div>
                </div>
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
<script src='//production-assets.codepen.io/assets/common/stopExecutionOnTimeout-b2a7b3fe212eaa732349046d8416e00a9dec26eb7fd347590fbced3ab38af52e.js'></script>
<script src='https://code.jquery.com/jquery-2.2.4.min.js'></script>
<script>


</script>
<script>
    var to_user = '41';
    var user_id = "<?php echo $_SESSION['id'];?>";

    setInterval(function () {
        update_chat_history_data();
    }, 50);
    $(".messages").animate({scrollTop: $(document).height()}, "fast");

    $("#profile-img").click(function () {
        $("#status-options").toggleClass("active");
    });

    $(".expand-button").click(function () {
        $("#profile").toggleClass("expanded");
        $("#contacts").toggleClass("expanded");
    });

    $("#status-options ul li").click(function () {
        $("#profile-img").removeClass();
        $("#status-online").removeClass("active");
        $("#status-away").removeClass("active");
        $("#status-busy").removeClass("active");
        $("#status-offline").removeClass("active");
        $(this).addClass("active");

        if ($("#status-online").hasClass("active")) {
            $("#profile-img").addClass("online");
        } else if ($("#status-away").hasClass("active")) {
            $("#profile-img").addClass("away");
        } else if ($("#status-busy").hasClass("active")) {
            $("#profile-img").addClass("busy");
        } else if ($("#status-offline").hasClass("active")) {
            $("#profile-img").addClass("offline");
        } else {
            $("#profile-img").removeClass();
        }
        ;

        $("#status-options").removeClass("active");
    });

    function newMessage(to_user, to_name) {
        // message = $(".message-input input").val();
        // if ($.trim(message) == '') {
        //     return false;
        // }
        // $('<li class="sent" id="42"><img src="http://emilcarlsson.se/assets/mikeross.png" alt="" /><p>' + message + '</p></li>').appendTo($('.messages ul'));
        // $('.message-input input').val(null);
        // $('.contact.active .preview').html('<span>You: </span>' + message);
        // $(".messages").animate({scrollTop: $(document).height()}, "fast");


    };

    $('.submit').click(function () {
        var message = $(".message-input input").val();

        var to_name = 'test';
        $.ajax({
            url: "<?php echo URLROOT . '/' . $_SESSION['lang'] . '/student/insert_chat'?>",
            method: "POST",
            data: {receiver_id: to_user, message: message},
            success: function (data) {
                // console.log(data)
                // $('#chat_message_'+to_user_id).val('');
                // $('#chat_history_'+to_user_id).html(data);
            }
        })
        newMessage(to_user, to_name);
    });

    function update_chat_history_data() {
        $('.send').each(function () {

            fetch_own_chat_history();
        });
    }

    function fetch_own_chat_history() {

        $.ajax({
            url: "<?php echo URLROOT . '/' . $_SESSION['lang'] . '/student/fetch_user_chat_history'?>",
            method: "POST",
            data: {receiver_id: to_user},
            success: function (data) {
                $('.send').html(data);
            }
        })
    }

    //function fetch_user_chat_history(to_user_id)
    //{
    //    $.ajax({
    //        url:"<?php //echo URLROOT . '/' . $_SESSION['lang'] . '/writer/fetch_user_chat_history'?>//,
    //        method:"POST",
    //        data:{to_user_id:to_user},
    //        success:function(data){
    //            $('#reply_'+to_user).html(data);
    //        }
    //    })
    //}

    $(window).on('keydown', function (e) {

        if (e.which == 13) {
            // newMessage();
            var message = $(".message-input input").val();
            $.ajax({
                url: "<?php echo URLROOT . '/' . $_SESSION['lang'] . '/student/insert_chat'?>",
                method: "POST",
                data: {receiver_id: to_user, message: message},
                success: function (data) {
                    // console.log(data)
                    // $('#chat_message_'+to_user_id).val('');
                    // $('#chat_history_'+to_user_id).html(data);
                }
            })
            // newMessage(to_user, to_name);
        }

    });



        $.ajax({
            url: "<?php echo URLROOT . '/' . $_SESSION['lang'] . '/student/fetch_user_name'?>",
            method: "POST",
            data: {id: user_id},
            success: function (data) {
                $('.username').html(data);
                console.log(data)
            }
        })

    //# sourceURL=pen.js
</script>

</body>

</html>