<?php
require_once APPROOT . '/views/inc/indexPage/head.php';
require_once APPROOT . '/views/lang/' . $_SESSION["lang"] . '.php';
?>

<body style="<?php foreach ($data['website'] as $key=>$val){

    ?>;
        font-family: <?php echo $val['font'].'!important'; ?> ;

      <?php
      }  ?>;">
    <div class="wrapper">
        <?php
        require_once APPROOT . '/views/inc/header.php';

        ?>
        <p></p>
        <div class="p-1 main">
            <section class="s-1 pt-header">
                <picture>
                    <img src="<?php echo URLROOT . '\public\assets\site_images\new.jpeg' ?>" alt="Essay Writing Resources" class="bg__image--top lazy" style="opacity: 0.4!important;position: cover;margin-top: -40px!important;"></picture>
                <div class="l-0" style="margin-top: 40px">
                    <div class="s-1__wrapper">
                        <div class="s-1__left">
                            <h1 class="h--lg h--is-inverse" style="text-align: left!important;font-size:60px;margin-top: 150px!important;">
                                Professional Writers</h1>

                            <p class="p--lg p--is-inverse" style="text-align:left">Raise your GPA with our
                                Services</p>

                            <div class="button-group" style="margin-left: 10px!important;"><a href="<?php echo URLROOT . '/' . $_SESSION["lang"] . '/auth/register'; ?>" class="button-filled__primary ga-event" data-ga-category="home" data-ga-action="click" data-ga-label="Find Your Writer!"><span class="button-text">Write my assignment</span>
                                </a><span data-link="<?php echo URLROOT . '/' . $_SESSION["lang"] . '/auth/register'; ?>"></span>
                            </div>
                        </div>
                        <div class="s-1__right">
                            <div class="c-7 js-calculator-landing" data-component-name="c-7__as__calculator-primary">
                                <div class="js-calculator-landing__form">
                                    <form action="https://app.essaypro.com/auth/register" method="get">
                                        <div class="c-7__header">
                                            <div class="h--sm">Calculate the price</div>
                                        </div>
                                        <div class="c-7__main">
                                            <div class="c-7__row" id="servicesDropdownWrapLanding">
                                                <div class="c-9 dropdown">
                                                    <button id="calculator_service_selected_1" type="button"
                                                            class="c-9__dropdown" data-toggle="dropdown"
                                                            aria-haspopup="true" aria-expanded="false"><span
                                                                class="c-9__selected" data-calc-value="1">Writing</span> <span
                                                                class="c-9__placeholder">Service</span> <span
                                                                class="c-9__select-arrow"></span></button>
                                                    <div class="c-9__menu dropdown-menu"
                                                         aria-labelledby="calculator_service_selected_1">
                                                        <ul class="c-9__ul"></ul>
                                                    </div>
                                                </div>
                                                <div class="select"><select id="calculator_service_1"
                                                                            aria-label="Calculator services"
                                                                            class="c-9__select"></select> <span
                                                            class="c-9__select-arrow"></span></div>
                                            </div>
                                            <div class="c-7__row">
                                                <div class="c-9 dropdown">
                                                    <button id="calculator_type_selected_1" type="button"
                                                            class="c-9__dropdown" data-toggle="dropdown"
                                                            aria-haspopup="true" aria-expanded="false"><span
                                                                class="c-9__selected"
                                                                data-calc-value="1">Assignment (any type)</span> <span
                                                                class="c-9__placeholder">Type of paper</span> <span
                                                                class="c-9__select-arrow"></span></button>
                                                    <div class="c-9__menu dropdown-menu"
                                                         aria-labelledby="calculator_type_selected_1"><input
                                                                id="searchTypesInput" class="c-9__search" type="text"
                                                                placeholder="Type to find">
                                                        <div class="c-9__ul"></div>
                                                    </div>
                                                </div>
                                                <div class="select"><select id="calculator_type_1"
                                                                            aria-label="Type of calculator"
                                                                            class="c-9__select"></select> <span
                                                            class="c-9__select-arrow"></span></div>
                                            </div>
                                            <div class="c-7__row">
                                                <div class="c-9 dropdown">
                                                    <button id="calculator_deadline_selected_1" type="button"
                                                            class="c-9__dropdown" data-toggle="dropdown"
                                                            aria-haspopup="true" aria-expanded="false"><span
                                                                class="c-9__selected" data-calc-value="336">2 weeks</span> <span
                                                                class="c-9__placeholder">Deadline</span> <span
                                                                class="c-9__select-arrow"></span></button>
                                                    <div class="c-9__menu dropdown-menu"
                                                         aria-labelledby="calculator_deadline_selected_1">
                                                        <ul class="c-9__ul">
                                                            <li class="c-9__li" data-calc-value="6">6 hours</li>
                                                            <li class="c-9__li" data-calc-value="12">12 hours</li>
                                                            <li class="c-9__li" data-calc-value="24">1 day</li>
                                                            <li class="c-9__li" data-calc-value="48">2 days</li>
                                                            <li class="c-9__li" data-calc-value="72">3 days</li>
                                                            <li class="c-9__li" data-calc-value="120">5 days</li>
                                                            <li class="c-9__li" data-calc-value="168">7 days</li>
                                                            <li class="c-9__li" data-calc-value="240">10 days</li>
                                                            <li class="c-9__li" data-calc-value="336">2 weeks</li>
                                                            <li class="c-9__li" data-calc-value="720">1 month</li>
                                                            <li class="c-9__li" data-calc-value="1440">2 months</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="select"><select id="calculator_deadline_1"
                                                                            aria-label="Calculators's deadline"
                                                                            class="c-9__select">
                                                        <option value="6">6 hours</option>
                                                        <option value="12">12 hours</option>
                                                        <option value="24">1 day</option>
                                                        <option value="48">2 days</option>
                                                        <option value="72">3 days</option>
                                                        <option value="120">5 days</option>
                                                        <option value="168">7 days</option>
                                                        <option value="240">10 days</option>
                                                        <option value="336" selected="selected">2 weeks</option>
                                                        <option value="720">1 month</option>
                                                        <option value="1440">2 months</option>
                                                    </select> <span class="c-9__select-arrow"></span></div>
                                            </div>
                                            <div id="pages_fields_1" class="c-7__row">
                                                <div class="c-7__group">
                                                    <div class="c-7__element">
                                                        <button id="calculator_pages_decrement_1" type="button"
                                                                class="c-9__button-decrement"></button>
                                                    </div>
                                                    <div class="c-7__element">
                                                        <div class="dropdown dropdown-half">
                                                            <button id="calculator_pages_selected_1" type="button"
                                                                    class="c-9__dropdown-half" data-toggle="dropdown"
                                                                    aria-haspopup="true" aria-expanded="false"><span
                                                                        class="c-9__selected" data-calc-value="1">1 page</span>
                                                                <span class="c-9__placeholder">Pages</span> <span
                                                                        class="c-9__select-arrow"></span></button>
                                                            <div class="c-9__menu dropdown-menu"
                                                                 aria-labelledby="calculator_pages_selected_1">
                                                                <ul class="c-9__ul pages__list">
                                                                    <li class="c-9__li" data-calc-value="1">1 page</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="select"><select id="calculator_pages_1"
                                                                                    aria-label="Calculators pages"
                                                                                    class="c-9__select-half">
                                                                <option value="1" selected="selected">1 page</option>
                                                            </select> <span class="c-9__select-arrow"></span></div>
                                                    </div>
                                                    <div class="c-7__element">
                                                        <button id="calculator_pages_increment_1" type="button"
                                                                class="c-9__button-increment"></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="c-7__footer">
                                            <div class="c-7__price"><span class="c-7__price-label">Minimum Price:</span>
                                                <span class="c-7__price-value">$<span
                                                            id="calculator_total_1">0</span></span></div>
                                            <button type="submit" class="button-filled__primary ga-event"
                                                    data-ga-category="calculator" data-ga-action="click"
                                                    data-ga-label="Continue"><span class="button-text">Continue</span>
                                            </button>
                                        </div>
                                    </form>
                                </div>
<!--                                        <div class="c-7__footer">-->
<!--                                            <button id="calculate_button" style="display: block;" onclick="event.preventDefault();calculate()" class="btn">--><?php //echo $lang["Calcualte Price"]; ?><!--</button>-->
<!--                                            <button id="confirm_button" style="display: none;" onclick="event.preventDefault();goForOrder()"  class="btn-success"></button>-->
<!--                                        </div>-->
                                   
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
                color: white;
                height: 600px;
                width: 1200px;
                background: #1a2942;
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
                background: url("../public/assets/site_images/about_us.jpeg");

            }

            h1 {
                margin: 0 0 20px 0;
                font-weight: 500;
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
                background: url("../public/assets/site_images/WhatsApp Image 2020-07-12 at 12.44.10 AM.jpeg");
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
                    <h1 style="color:black!important;margin-left:12px!important;font-size: 40px; margin-top: 90px"> Raise your GPA today! </h1>

                    <br>
                    <br>
                    <br>
                    <br>
                    <br>

                    <a href="<?php echo URLROOT . '/' . $_SESSION["lang"] . '/auth/login'; ?>" class="signup">Sign up<a>

                </div>
                <div class="right-box" >
                    <h1 style="font-size: 40px; margin-top: 90px;color: black!important;text-align: center"> Become a writer</h1>


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
        <section class="s-16">
            <h2 style="font-size:50px;text-align: center"><b>Watch our video</b></h2>
            <iframe width="820" height="415" style="margin-left: 380px;border-radius: 10px"
                    src="<?= URLROOT . '\public\assets\site_images\video.jpeg';?>">
            </iframe>
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