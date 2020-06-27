<?php
require_once APPROOT . '/views/inc/indexPage/head.php';
require_once APPROOT . '/views/lang/' . $_SESSION["lang"] . '.php';
?>

<body>
    <div class="wrapper">
        <?php
        require_once APPROOT . '/views/inc/header.php';

        ?>
        <p></p>
        <div class="p-1 main">
            <section class="s-1 pt-header">
                <picture>
                    <img src="<?php echo URLROOT . '\public\shared\images\assignments.png' ?>" alt="Essay Writing Resources" class="bg__image--top lazy" style="opacity: 0.4!important"></picture>
                <div class="l-0" style="margin-top: 40px">
                    <div class="s-1__wrapper">
                        <div class="s-1__left">
                            <h1 class="h--lg h--is-inverse" style="text-align: center">Top Assignment Service<br>with
                                Professional Essay Writers</h1>

                            <p class="p--lg p--is-inverse" style="text-align:center">Increase your chance of success with our Assignment Writing
                                Service</p>

                            <div class="button-group" style="margin-left: 250px!important;"><a href="<?php echo URLROOT . '/' . $_SESSION["lang"] . '/auth/register'; ?>" class="button-filled__primary ga-event" data-ga-category="home" data-ga-action="click" data-ga-label="Find Your Writer!"><span class="button-text">Write my assignment</span>
                                </a><span data-link="<?php echo URLROOT . '/' . $_SESSION["lang"] . '/auth/register'; ?>"></span>
                            </div>
                        </div>
                        <div class="s-1__right">
                            <div class="c-7 js-calculator-landing" data-component-name="c-7__as__calculator-primary">
                                <div class="js-calculator-landing__form">
                                   
                                        <div class="c-7__header">
                                            <div id="pages_fields_1" class="c-7__row">
                                                <h5 class="text-center"><b>Number Of Pages</b></h5>
                                                <select class="form-control" id="page" name="page">
                                                    <?php for ($i = 1; $i < 30; $i++) {
                                                        echo "<option value='$i'> $i Page </option>";
                                                    } ?>

                                                </select>
                                            </div>
                                        </div>
                                        <div class="c-7__main">
                                            <div class="c-7__row" id="servicesDropdownWrapLanding">
                                                <div class="c-9 dropdown">

                                                    <h5 class="text-center"><b><?php echo $lang['Service']; ?></b></h5>
                                                    <select class="form-control" id="service" name="service">
                                                        <option value="Writing"><?php echo $lang['Writing']; ?></option>
                                                        <option value="Re_Writing"><?php echo $lang['Re_Writing']; ?></option>
                                                        <option value="Editing"><?php echo $lang['Editing']; ?></option>
                                                        <option value="Presentation"><?php echo $lang['Presentation']; ?></option>
                                                    </select>
                                                </div>
                                                <h5 class="text-center"><b><?php echo $lang['Lavel']; ?></b> </h5>
                                                <select class="form-control" id="lavel" name="lavel">
                                                    <option value="high_school"><?php echo $lang['high_school']; ?></option>
                                                    <option value="college"><?php echo $lang['college']; ?></option>
                                                    <option value="undergraduate"><?php echo $lang['undergraduate']; ?></option>
                                                    <option value="masters"><?php echo $lang['masters']; ?></option>
                                                    <option value="phd"><?php echo $lang['phd']; ?></option>
                                                    <option value="hw"><?php echo $lang['hw']; ?></option>
                                                </select>
                                            </div>
                                            <div class="c-7__row">
                                                <h5 class="text-center text-capitalize"><b><?php echo $lang['Subject']; ?></b></h5>
                                                <select class="form-control" id="subject" name="subject">
                                                    <?php $subject = [
                                                        'Aviation',
                                                        'Art',
                                                        'Architecture',
                                                        'Business',
                                                        'Management',
                                                        'Computer_Science',
                                                        'Economics',
                                                        'Engineering',
                                                        'English',
                                                        'Literature',
                                                        'Health_Care',
                                                        'Life_Science',
                                                        'Sport',
                                                        'History',
                                                        'Humanities',
                                                        'Law',
                                                        'Marketing',
                                                        'Mathematics',
                                                        'Statistics',
                                                        'Science',
                                                        'Philosophy',
                                                        'Political_Science',
                                                        'Psychology',
                                                        'Theology',
                                                        'Ethics',
                                                        'Social_Science', 'History', 'Geography', 'Hospitality', 'Other'
                                                    ];
                                                    foreach ($subject as $sub) {
                                                        echo "<option value=" . $sub . "> $lang[$sub] </option>";
                                                    }

                                                    ?>

                                                </select>
                                            </div>
                                            <div class="c-7__row">
                                                <h5 class="text-center"><b>Number Of Day</b></h5>
                                                <select class="form-control" id="day" name="day">
                                                    <?php for ($i = 1; $i < 8; $i++) {
                                                        echo "<option value='$i'> $i Day </option>";
                                                    } ?>

                                                </select>
                                            </div>

                                        </div>
                                        <div class="c-7__footer">
                                            <button id="calculate_button" style="display: block;" onclick="event.preventDefault();calculate()" class="btn"><?php echo $lang["Calcualte Price"]; ?></button>
                                            <button id="confirm_button" style="display: none;" onclick="event.preventDefault();goForOrder()"  class="btn-success"></button>
                                        </div>
                                   
                                </div>
                            </div>
                        </div>


                    </div>

                </div>
        </div>

        </section>
        <style>
            .btn {
                margin-top: 120px;
                padding: 20px;
                font-size: 20px;
                background: orange;
                color: white;
                font-weight: 700;
            }

            .btn-success {
                margin-top: 120px;
                padding: 20px;
                font-size: 20px;
                background: green;
                color: white;
                font-weight: 700;
            }

            .form-control {
                width: 100%;
                padding: 10px;
                font-size: 13px;
                text-align: center;
                font-weight: 700;
            }

            #login-box {
                position: relative;
                margin: 5% auto;
                height: 600px;
                width: 1200px;
                background: #fff;
                box-shadow: 0 2px 4px rgba(0, 0, 0, 0.6);
            }

            .left-box {
                position: absolute;
                top: 0;
                left: 0;
                box-sizing: border-box;
                padding: 40px;
                width: 600px;
                height: 600px;
            }

            h1 {
                margin: 0 0 20px 0;
                font-weight: 300;
                font-size: 28px;
            }

            input[type="text"],
            input[type="password"] {
                display: block;
                box-sizing: border-box;
                margin-bottom: 20px;
                padding: 4px;
                width: 220px;
                height: 32px;
                border: none;
                outline: none;
                border-bottom: 1px solid #aaa;
                font-family: sans-serif;
                font-weight: 400;
                font-size: 15px;
                transition: 0.2s ease;
            }

            .signup {
                margin-bottom: 28px;
                margin-top: 120px;
                margin-left: 110px;
                width: 220px;
                height: 52px;
                background: #3d82bc;
                border: none;
                border-radius: 2px;
                color: #fff;
                font-family: sans-serif;
                font-weight: 500;
                padding: 20px 80px;
                text-transform: uppercase;
                transition: 0.2s ease;
                cursor: pointer;

            }

            .signup:hover,
            .signup:focus {
                background: #ff5722;
                transition: 0.2s ease;
            }

            .right-box {
                position: absolute;
                top: 0;
                right: 0;
                box-sizing: border-box;
                padding: 40px;
                width: 600px;
                height: 600px;
                background: #1a2942;
                background-size: cover;
                background-position: center;
            }

            .or {
                position: absolute;
                top: 320px;
                left: 560px;
                width: 80px;
                height: 80px;
                background: #efefef;
                border-radius: 50%;
                box-shadow: 0 2px 4px rgba(0, 0, 0, 0.6);
                line-height: 80px;
                text-align: center;
            }

            .right-box .signinwith {
                display: block;
                margin-bottom: 40px;
                font-size: 28px;
                color: #fff;
                text-align: center;
                text-shadow: 0 2px 4px rgba(0, 0, 0, 0.6);
            }


            button.social {
                margin-bottom: 20px;
                width: 220px;
                height: 36px;
                border: none;
                border-radius: 2px;
                color: #fff;
                font-family: sans-serif;
                font-weight: 500;
                transition: 0.2s ease;
                cursor: pointer;
            }

            .facebook {
                background: #32508e;
            }

            .twitter {
                background: #55acee;
            }

            .google {
                background: #dd4b39;
            }
        </style>

        <section class="s-16">
            <div id="login-box">
                <div class="left-box">
                    <h1 style="font-size: 40px; margin-top: 90px"> Already you are a part of Assignment Guru family?</h1>

                    <br>
                    <br>
                    <br>
                    <br>
                    <br>

                    <a href="<?php echo URLROOT . '/' . $_SESSION["lang"] . '/auth/login'; ?>" class="signup">Login<a>

                </div>
                <div class="right-box">
                    <h1 style="font-size: 40px; margin-top: 90px;color: white;text-align: center"> Want to be a part of Assignment Guru?</h1>


                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <a href="<?php echo URLROOT . '/' . $_SESSION["lang"] . '/auth/register'; ?>" class="signup" style="background: #e89b00">Register<a>


                </div>
                <div class="or">OR</div>
            </div>
        </section>


    </div>


    <noscript>
        <iframe src="https://www.googletagmanager.com/ns.html?GTM-KZ3B2L" height="0" width="0" style="display:none;visibility:hidden"></iframe>
    </noscript>
    <noscript>
        <div style="display:inline"><img height="1" width="1" style="border-style:none" alt src="http://googleads.g.doubleclick.net/pagead/viewthroughconversion/878019161/?guid=ON&amp;script=0">
        </div>
    </noscript>
    </div>

    <?php
    require_once APPROOT . '/views/inc/footer.php';
    ?>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-170165335-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-170165335-1');
    </script>

    <script>
        function calculate() {
         //   var form = $("#home_cal");
            let subject = $("#subject").val();
            let service = $("#service").val();
            let page = $("#page").val();
            let day = $("#day").val();
            let lavel = $("#lavel").val();
            var url = "<?php echo URLROOT . '/User/getPrice'; ?>";
            $.ajax({
                type: "GET",
                url: url+"?page="+page+"&service="+service+"&day="+day+"&lavel="+lavel+"&subject="+subject,
              //  data: form.serialize(), // serializes the form's elements.
                success: function(data) {
                    if (data == 'all data required') {
                        alert("please Provide All details correctly");
                    }
                    else{
                        $("#calculate_button").hide();
                        let text = "It's Only $"+data+" .Go!!"
                        document.getElementById("confirm_button").innerHTML = text;
                        $("#confirm_button").show();
                    }
                }
            });
        }

        function goForOrder()
        {
            location.href="<?php echo URLROOT . '/Student/dashboard'; ?>";
        }
    </script>

</body>

</html>