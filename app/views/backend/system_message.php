
<!doctype html>
<html lang="en" dir="ltr">
<head>

    <!-- Meta data -->
    <?php
    require_once APPROOT . '/views/inc/admin/admin_head.php';
    require_once APPROOT . '/views/inc/chatPanel.php';

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
                <div class="col-12 col-sm-12">
                    <div class="card ">

                        <div class="card-body">
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

                                                                    ?>
                                                                    <input type="hidden" id="reciever_id" value="<?= $val; ?>"></input>

                                                                <?php } ?>
                                                        </div>
                                                    </li>
                                                    <?php foreach ($data as $key => $val) {

                                                            ?>
                                                            <li class="contact active">

                                                                <div class="wrap">
                                                                    <span class="contact-status busy"></span>
                                                                    <img src="http://emilcarlsson.se/assets/harveyspecter.png" alt=""/>

                                                                    <div class="meta">


                                                                        <p class="name" id="<?= $val ?>" onclick="showHiddenMessage(this.id)"><?= 'ano' ?></p>

                                                                    </div>
                                                                </div>
                                                            </li>
                                                        <?php } ?>
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

                            </div>
                        </div>
                    </div>
                </div><!-- COL END -->
            </div><!-- ROW-4 END -->
            <!-- ROW-2 END -->
        </div>
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
<script>


    $(window).on('load', function () {
        $('#chat_list').scrollTop($('#chat_list')[0].scrollHeight);
    });

    var to_user;
    function showHiddenMessage(id){
        to_user = id;
        var user_id = "1";
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
                url: "<?php echo URLROOT . '/' . $_SESSION['lang'] . '/DemoTest/insert_chat'?>",
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
                    url: "<?php echo URLROOT . '/' . $_SESSION['lang'] . '/DemoTest/insert_chat'?>",
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
    var requestUrl = "<?php echo URLROOT . '/DemoTest/get_user_name_by_id/' ?>" + id;
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
    var id = "1";
    var requestUrl = "<?php echo URLROOT . '/DemoTest/get_user_name_by_id/' ?>" + id;
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


    };



    function update_chat_history_data() {
        $('.send').each(function () {

            fetch_own_chat_history();
        });
    }

    function fetch_own_chat_history() {

        $.ajax({
            url: "<?php echo URLROOT . '/' . $_SESSION['lang'] . '/demotest/fetch_user_chat_history'?>",
            method: "POST",
            data: {receiver_id: to_user},
            success: function (data) {
                $('.send').html(data);
                console.log(data)
            }
        })
    }





</script>
<!-- BACK-TO-TOP -->
<a href="#top" id="back-to-top"><i class="fa fa-angle-double-up"></i></a>

<!-- JQUERY SCRIPTS JS-->
<?php
require_once APPROOT . '/views/inc/admin/scripts.php';


?>

</body>
</html>