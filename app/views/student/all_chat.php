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

                                    <?php foreach ($data as $key => $val) {
                                        foreach ($val as $keys => $vals) {
                                            ?>
                                            <input type="hidden" id="reciever_id" value="<?= $vals['id']; ?>"></input>

                                        <?php }} ?>
                                </div>
                            </li>
                            <?php foreach ($data as $key => $val) {
                                foreach ($val as $keys => $vals) {
                                    ?>
                                    <li class="contact active">

                                        <div class="wrap">
                                            <span class="contact-status busy"></span>
                                            <img src="http://emilcarlsson.se/assets/harveyspecter.png" alt=""/>

                                            <div class="meta">


                                                <p class="name" id="<?= $vals['id'] ?>" onclick="showHiddenMessage(this.id)"><?= $vals['f_name'] ?></p>

                                            </div>
                                        </div>
                                    </li>
                                <?php }} ?>
                        </ul>
                    </div>
                    <div id="bottom-bar">
                        <button id="addcontact"><i class="fa fa-user-plus fa-fw" aria-hidden="true"></i> <span>Add contact</span>
                        </button>
                        <button id="settings"><i class="fa fa-cog fa-fw" aria-hidden="true"></i> <span>Settings</span>
                        </button>
                    </div>
                </div>
                <div class="content" hidden>
                    <div class="contact-profile">
                        <img src="http://emilcarlsson.se/assets/harveyspecter.png" alt=""/>
                        <p class="name"></p>
                        <div class="social-media">
                            <i class="fa fa-facebook" aria-hidden="true"></i>
                            <i class="fa fa-twitter" aria-hidden="true"></i>
                            <i class="fa fa-instagram" aria-hidden="true"></i>
                        </div>
                    </div>
                    <div id="chat_list" class="messages">
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


    $(window).on('load', function () {
        $('#chat_list').scrollTop($('#chat_list')[0].scrollHeight);
    });

    var to_user;
    function showHiddenMessage(id){
        to_user = id;
        var user_id = "<?php echo $_SESSION['id'];?>";
        $('.content').prop('hidden',false);

        setInterval(function () {
            update_chat_history_data();
            // access();
        }, 500);

        $('.submit').click(function () {
            var message = $(".message-input input").val();

            $(".message-input").focus();
            var to_name = 'test';
            $.ajax({
                url: "<?php echo URLROOT . '/' . $_SESSION['lang'] . '/Student/insert_chat'?>",
                method: "POST",
                data: {receiver_id: to_user, message: message},
                success: function (data) {
                    console.log(data)
                    // $('#chat_message_'+to_user_id).val('');
                    // $('#chat_history_'+to_user_id).html(data);
                }
            })
            newMessage(to_user, to_name);
        });
        $(window).on('keydown', function (e) {

            if (e.which == 13) {
                var message = $(".message-input input").val();
                $.ajax({
                    url: "<?php echo URLROOT . '/' . $_SESSION['lang'] . '/Student/insert_chat'?>",
                    method: "POST",
                    data: {receiver_id: to_user, message: message},
                    success: function (data) {
                        console.log(data)
                        // $('#chat_message_'+to_user_id).val('');
                        // $('#chat_history_'+to_user_id).html(data);
                    }
                })
                return false;
            }
        });
    }



    //receiver_name

    var id = $('.name').text();
    var requestUrl = "<?php echo URLROOT . '/Student/get_user_name_by_id/' ?>" + id;
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
    $(packJsonData).each(function (key, val) {
        $('.name').html(val.f_name + ' ' + val.l_name);
        // console.log(val.name);
    })
    // $(el).children('td').children('.user_id').html(packJsonData.name);

    //end
    var id = "<?php echo $_SESSION['id'] ?>";
    var requestUrl = "<?php echo URLROOT . '/Student/get_user_name_by_id/' ?>" + id;
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
    $(packJsonData).each(function (key, val) {
        $('.username').html(val.f_name + ' ' + val.l_name);
        // console.log(val.name);
    })


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



    function update_chat_history_data() {
        $('.send').each(function () {

            fetch_own_chat_history();
        });
    }

    function fetch_own_chat_history() {

        $.ajax({
            url: "<?php echo URLROOT . '/' . $_SESSION['lang'] . '/Student/fetch_user_chat_history'?>",
            method: "POST",
            data: {receiver_id: to_user},
            success: function (data) {
                $('.send').html(data);
                // console.log(data)
            }
        })
    }



</script>
</body>

