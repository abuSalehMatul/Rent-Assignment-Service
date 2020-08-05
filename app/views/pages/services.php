<?php
require_once APPROOT . '/views/inc/servicePage/head.php';

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
    <div class="p-13" data-page-name="p-13__as__custom-essay">
        <section class="c-51 c-51-3 pt-64">


                <img src="<?php echo URLROOT.'\public\assets\site_images\sort.jpeg'?>"
                     alt="Blue background" class="bg__image--top picture__images" style="background-position: center">
            <div class="l-0">

                <div class="c-51__w">
                    <div class="c-51__b"><h1 class="h--lg" style="color: black!important">Custom Assignment  Writing Service for Any Subject</h1>
                        <p class="p--md" style="color: black!important"app>Get the biggest service of your region and other countries specialists</p>
                    </div>
                    <div class="c-51__b">
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
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="s-3--3">
            <div class="l-0">
                <div class="h--md"><b>Why us</b>
                </div>
                <div class="s-3--3__inner">
                    <div class="s-3--3__text-wrap">
                        <p class="p--md"> Your order will be written, edited, and proofread by the deadline you set. The final copy will be available for download at your profile. Check it for compliance with initial instructions and, if necessary, request a free revision.
                            Get professional help from academic writers. 100% unique and quality papers. Our Quality Assurance Team checks every paper for plagiarism and consistency before final delivery. You are guaranteed to receive an original piece with properly cited sources.
                            No matter what kind of academic paper you need, it is simple and secure to hire an essay writer for a price you can afford at The Assignment Guru. Spend more time focusing on yourself!
                            Stay in touch with the writer and be up to date with the working process from start to finish. We care about our customers and want them to be 100% satisfied with our paper writing service.Use our essay writing service to score better and meet your deadlines.
                        </p>


                    </div>


                    </div>
                </div>
            </div>
        </section>




        <section  style="background: white!important;">
            <div class="l-0">
                <div class="s__w">
                    <div class="h--md _c--primary" style="text-align: center"><b>What you get for choosing us</b></div>
                    <br>
                    <br>
                    <ul class="sb-4__ul">
                        <li class="sb-4__li">
                            <div class="sb-4__i"><i class="icon i-n--sb-4-1"></i></div>
                            <div class="sb-4__d">
                                <div class="h--sm">Safety</div>
                                <p class="p--sm">Confidential orders, secure payments, and 100% privacy is granted.
                        </li>
                        <li class="sb-4__li">
                            <div class="sb-4__i"><i class="icon i-n--sb-4-2"></i></div>
                            <div class="sb-4__d">
                                <div class="h--sm">Quality</div>
                                <p class="p--sm">Top-grade academic writing in compliance with instructions. Zero plagiarisms.</p></li>
                        </li>
                        <li class="sb-4__li">
                            <div class="sb-4__i"><i class="icon i-n--sb-4-3"></i></div>
                            <div class="sb-4__d">
                                <div class="h--sm">Timeliness</div>
                                <p class="p--sm">Fast and timely delivery, starting at 3 hours. No missed deadlines. </li>
                        <li class="sb-4__li">
                            <div class="sb-4__i"><i class="icon i-n--sb-4-4"></i></div>
                            <div class="sb-4__d">
                                <div class="h--sm">Reliability</div>
                                <p class="p--sm">14 years of experience and 10000+ positive reviews. Money-back guarantee.</li>

                    </ul>
                </div>
            </div>
        </section>
            <section class="s-3--3">
                <div class="l-0">
                    <div class="s__w">
                        <div class="h--md _c--primary"><b>We offer many complimentary benefits</b></div>
                        <br>
                        <br>
                        <ul class="sb-4__ul">
                            <li class="sb-4__li">
                                <div class="sb-4__i"><i class="icon i-n--sb-4-1"></i></div>
                                <div class="sb-4__d">
                                    <div class="h--sm">Title and bibliography page</div>
                            </li>
                            <li class="sb-4__li">
                                <div class="sb-4__i"><i class="icon i-n--sb-4-2"></i></div>
                                <div class="sb-4__d">
                                    <div class="h--sm">Order tracking </div>
                                  </li>
                            </li>
                            <li class="sb-4__li">
                                <div class="sb-4__i"><i class="icon i-n--sb-4-3"></i></div>
                                <div class="sb-4__d">
                                    <div class="h--sm">10 days free revisions </div>
                                  </li>
                            <li class="sb-4__li">
                                <div class="sb-4__i"><i class="icon i-n--sb-4-4"></i></div>
                                <div class="sb-4__d">
                                    <div class="h--sm"><i class="" style="color: #1a2942!important;"></i>Built-in plagiarism checker</div>
                                    </li>

                        </ul>
                    </div>
                </div>
            </section>
        <style class="style--head">.sb-2 {
                overflow: hidden;
                background-color: #374355
            }

            .sb-2.sb-2--l {
                background-color: #f2f5fa
            }

            .sb-2.sb-2--l .h--md {
                color: #404d63
            }

            .sb-2.sb-2--l .p--md {
                color: #57657c
            }

            .sb-2.sb-2--l .rangeslider__labels__label {
                color: #424b59
            }

            .sb-2.sb-2--l .rangeslider__labels__label:after {
                color: #57657c
            }

            @media (max-width: 1023px) {
                .sb-2 {
                    padding: 32px 0
                }
            }

            @media (min-width: 1024px) {
                .sb-2 {
                    padding: 64px 0
                }
            }

            @media (max-width: 1023px) {
                .sb-2__w {
                    padding: 0 16px
                }
            }

            @media (min-width: 1024px) {
                .sb-2__c {
                    margin-top: 40px
                }
            }

            .sb-2 .h--md, .sb-2 .p--md {
                text-align: center
            }

            .sb-2 .h--md {
                margin-bottom: 16px;
                color: #fff
            }

            .sb-2 .p--md {
                color: #ccd3de
            }

            @media (max-width: 1023px) {
                .rangeslider-wrap {
                    padding: 50px 0
                }
            }

            @media (min-width: 1024px) {
                .rangeslider-wrap {
                    padding: 80px 0
                }
            }

            .rangeslider {
                position: relative;
                height: 4px;
                -webkit-border-radius: 5px;
                border-radius: 5px;
                width: 100%;
                max-width: 830px;
                margin: 0 auto;
                background-color: gray
            }

            .rangeslider__handle {
                -webkit-transition: background-color .2s;
                -o-transition: background-color .2s;
                transition: background-color .2s;
                -webkit-box-sizing: border-box;
                box-sizing: border-box;
                -webkit-border-radius: 100%;
                border-radius: 100%;
                background-color: #248fed;
                -ms-touch-action: pan-y;
                touch-action: pan-y;
                cursor: pointer;
                display: inline-block;
                position: absolute;
                z-index: 3
            }

            @media (max-width: 1023px) {
                .rangeslider__handle {
                    top: -8px;
                    width: 18px;
                    height: 18px
                }
            }

            @media (min-width: 1024px) {
                .rangeslider__handle {
                    top: -11px;
                    width: 26px;
                    height: 26px
                }
            }

            .rangeslider__handle__value {
                display: none !important;
                -webkit-transition: background-color .2s, -webkit-box-shadow .1s, -webkit-transform .1s;
                transition: background-color .2s, -webkit-box-shadow .1s, -webkit-transform .1s;
                -o-transition: background-color .2s, box-shadow .1s, transform .1s;
                transition: background-color .2s, box-shadow .1s, transform .1s;
                transition: background-color .2s, box-shadow .1s, transform .1s, -webkit-box-shadow .1s, -webkit-transform .1s;
                -webkit-box-sizing: border-box;
                box-sizing: border-box;
                width: 90px;
                text-align: center;
                padding: 10px;
                background-color: #248fed;
                -webkit-border-radius: 5px;
                border-radius: 5px;
                color: #fff;
                left: -32px;
                top: -55px;
                position: absolute;
                white-space: nowrap;
                border-top: 1px solid #1175cd;
                -webkit-box-shadow: 0 -4px 1px rgba(0, 0, 0, .07), 0 -5px 20px rgba(0, 0, 0, .3);
                box-shadow: 0 -4px 1px rgba(0, 0, 0, .07), 0 -5px 20px rgba(0, 0, 0, .3)
            }

            .rangeslider__handle__value:before {
                -webkit-transition: border-top-color .2s;
                -o-transition: border-top-color .2s;
                transition: border-top-color .2s;
                position: absolute;
                bottom: -10px;
                left: -webkit-calc(50% - 10px);
                left: calc(50% - 10px);
                content: "";
                width: 0;
                height: 0;
                border-left: 10px solid transparent;
                border-right: 10px solid transparent;
                border-top: 10px solid;
                border-top-color: #248fed
            }

            .rangeslider__handle__value:after {
                content: " cm"
            }

            .rangeslider__fill {
                position: absolute;
                top: 0;
                z-index: 1;
                height: 100%;
                background-color: #85b6f9;
                -webkit-border-radius: 5px;
                border-radius: 5px
            }

            .rangeslider__labels {
                display: -webkit-box;
                display: -webkit-flex;
                display: -ms-flexbox;
                display: flex;
                -webkit-box-pack: justify;
                -webkit-justify-content: space-between;
                -ms-flex-pack: justify;
                justify-content: space-between;
                position: absolute;
                z-index: 2;
                width: 100%
            }

            @media (max-width: 1023px) {
                .rangeslider__labels {
                    padding: 0 8px
                }
            }

            @media (min-width: 1024px) {
                .rangeslider__labels {
                    padding: 0 12px
                }
            }

            .rangeslider__labels__label {
                position: relative;
                cursor: pointer;
                color: #ccd3de;
                font-weight: 300;
                text-align: center
            }

            @media (max-width: 1023px) {
                .rangeslider__labels__label {
                    padding-top: 32px;
                    font-size: 16px;
                    line-height: 32px
                }
            }

            @media (min-width: 1024px) {
                .rangeslider__labels__label {
                    padding-top: 32px;
                    font-size: 28px;
                    line-height: 36px
                }
            }

            .rangeslider__labels__label:before {
                position: absolute;
                left: 50%;
                -webkit-transform: translateX(-50%);
                -ms-transform: translateX(-50%);
                transform: translateX(-50%);
                content: "";
                width: 1px;
                height: 9px;
                -webkit-border-radius: 1px;
                border-radius: 1px;
                background-color: #ccd3de
            }

            @media (max-width: 1023px) {
                .rangeslider__labels__label:before {
                    top: 10px
                }
            }

            @media (min-width: 1024px) {
                .rangeslider__labels__label:before {
                    top: 14px
                }
            }

            .rangeslider__labels__label:after {
                display: block;
                content: "pages";
                color: #afb9c8;
                font-weight: 300;
                text-transform: uppercase
            }

            @media (max-width: 1023px) {
                .rangeslider__labels__label:after {
                    font-size: 10px;
                    line-height: 14px
                }
            }

            @media (min-width: 1024px) {
                .rangeslider__labels__label:after {
                    font-size: 18px;
                    line-height: 22px
                }
            }

            .rangeslider__labels__label:first-child {
                -webkit-transform: translateX(-48%);
                -ms-transform: translateX(-48%);
                transform: translateX(-48%)
            }

            .rangeslider__labels__label:last-child {
                -webkit-transform: translateX(48%);
                -ms-transform: translateX(48%);
                transform: translateX(48%)
            }

            @media (max-width: 1023px) {
                .rangeslider__labels__label:nth-child(2) {
                    margin-left: -16px
                }
            }

            @media (min-width: 1024px) {
                .rangeslider__labels__label:nth-child(2) {
                    margin-left: -26px
                }
            }

            @media (max-width: 1023px) {
                .rangeslider__labels__label:nth-child(4) {
                    margin-right: -16px
                }
            }

            @media (min-width: 1024px) {
                .rangeslider__labels__label:nth-child(4) {
                    margin-right: -26px
                }
            }

            .rangeslider__labels__label.active {
                color: #fff
            }

            @media (max-width: 1023px) {
                .rangeslider__labels__label.active {
                    font-size: 28px
                }
            }

            @media (min-width: 1024px) {
                .rangeslider__labels__label.active {
                    font-size: 32px
                }
            }

            .rangeslider__labels__label.active .rangeslider__percent {
                opacity: 1
            }

            @media (max-width: 1023px) {
                .rangeslider__labels__label.active .rangeslider__percent {
                    font-size: 40px
                }
            }

            @media (min-width: 1024px) {
                .rangeslider__labels__label.active .rangeslider__percent {
                    font-size: 60px
                }
            }

            .rangeslider__labels__label .rangeslider__percent {
                display: -webkit-box;
                display: -webkit-flex;
                display: -ms-flexbox;
                display: flex;
                -webkit-box-pack: center;
                -webkit-justify-content: center;
                -ms-flex-pack: center;
                justify-content: center;
                -webkit-box-align: center;
                -webkit-align-items: center;
                -ms-flex-align: center;
                align-items: center;
                position: absolute;
                opacity: .6;
                color: #e89b00;
                font-weight: 400;
                text-align: center;
                white-space: nowrap
            }

            @media (max-width: 1023px) {
                .rangeslider__labels__label .rangeslider__percent {
                    top: -60px;
                    left: -24px;
                    width: 80px;
                    height: 50px;
                    font-size: 20px;
                    line-height: 50px
                }
            }

            @media (min-width: 1024px) {
                .rangeslider__labels__label .rangeslider__percent {
                    top: -100px;
                    left: -26px;
                    width: 120px;
                    height: 76px;
                    font-size: 50px;
                    line-height: 76px
                }
            }

            .rangeslider.rangeslider--active .rangeslider__handle, .rangeslider.rangeslider--active .rangeslider__handle * {
                background-color: #53a7f1
            }

            .rangeslider.rangeslider--active .rangeslider__handle :before {
                border-top-color: #53a7f1
            }

            .rangeslider.rangeslider--active .rangeslider__handle__value {
                -webkit-transform: translateY(-5px);
                -ms-transform: translateY(-5px);
                transform: translateY(-5px);
                -webkit-box-shadow: 0 -3px 2px rgba(0, 0, 0, .04), 0 -9px 25px rgba(0, 0, 0, .15);
                box-shadow: 0 -3px 2px rgba(0, 0, 0, .04), 0 -9px 25px rgba(0, 0, 0, .15)
            }</style>
        <div class="sb-2">
            <div class="l-0">
                <div class="sb-2__w">
                    <div class="h--md">What to expect</div>
                    <p class="p--md" style="text-align: left">Deadlines starting from just 3 hours:
                        Need an urgent essay? Our professional writers can master a custom essay on any topic, and any academic level, in only 3 hours after you have made the order.
                        On schedule delivery:
                        Afraid to miss the deadline? We do not tolerate lateness and we often deliver orders before time. The writing progress is transparent, as every customer can track it by communicating with the writer.
                        Free revision period:
                        Afraid the paper will fail to meet your expectations? In case there are non-conformities with the initial instructions, ask us to revise it as many times as needed within the first 10 days since the delivery day.
                        Money-back guarantee:
                        If the received paper is of poor quality or doesn’t match the provided instructions, a full refund can be requested within the first 5 days since the delivery day.
                        24/7 live support:
                        Worried about something related to your order in the middle of the night? Feel free to contact the support team to get a detailed answer. Our managers are super friendly and are available 24/7 to help put your doubts to bed.
                    </p>
                    <br>
                    <br>
                    <p class="p--md"><b>Place your first order now and get 10% OFF Your first order!</b></p>
                    <div class="sb-2__c">

                        <div style="margin-top:50px;text-align:center"><span
                                data-link="<?php echo URLROOT.'/'.$_SESSION['lang'].'/auth/register' ?>" id="pagesLink"
                                class="button-filled__warning h-l"><span
                                    class="button-text">Order an assignment</span></span></div>
                    </div>
                </div>
            </div>
        </div>

    </div>

   
    <p></p>
<style>

    @import url(https://fonts.googleapis.com/css?family=Open+Sans:400italic,400,300,600);

    * {
        margin:0;
        padding:0;
        box-sizing:border-box;
        -webkit-box-sizing:border-box;
        -moz-box-sizing:border-box;
        -webkit-font-smoothing:antialiased;
        -moz-font-smoothing:antialiased;
        -o-font-smoothing:antialiased;
        font-smoothing:antialiased;
        text-rendering:optimizeLegibility;
    }

    body {
        font-family:"Open Sans", Helvetica, Arial, sans-serif;
        font-weight:300;
        font-size: 12px;
        line-height:30px;
        color:#777;
            /*background:#0CF;*/
    }

    .container {
        max-width:400px;
        width:100%;
        margin:0 auto;
        position:relative;
    }

    #contact input[type="text"], #contact input[type="email"], #contact input[type="tel"], #contact input[type="url"], #contact textarea, #contact button[type="submit"] { font:400 12px/16px "Open Sans", Helvetica, Arial, sans-serif; }

    #contact {
        background:#F9F9F9;
        padding:25px;
        margin:50px 0;
    }

    #contact h3 {
        color: #F96;
        display: block;
        font-size: 30px;
        font-weight: 400;
    }

    #contact h4 {
        margin:5px 0 15px;
        display:block;
        font-size:13px;
    }

    fieldset {
        border: medium none !important;
        margin: 0 0 10px;
        min-width: 100%;
        padding: 0;
        width: 100%;
    }

    #contact input[type="text"], #contact input[type="email"], #contact input[type="tel"], #contact input[type="url"], #contact textarea {
        width:100%;
        border:1px solid #CCC;
        background:#FFF;
        margin:0 0 5px;
        padding:10px;
    }

    #contact input[type="text"]:hover, #contact input[type="email"]:hover, #contact input[type="tel"]:hover, #contact input[type="url"]:hover, #contact textarea:hover {
        -webkit-transition:border-color 0.3s ease-in-out;
        -moz-transition:border-color 0.3s ease-in-out;
        transition:border-color 0.3s ease-in-out;
        border:1px solid #AAA;
    }

    #contact textarea {
        height:100px;
        max-width:100%;
        resize:none;
    }

    #contact button[type="submit"] {
        cursor:pointer;
        width:100%;
        border:none;
        background:#0CF;
        color:#FFF;
        margin:0 0 5px;
        padding:10px;
        font-size:15px;
    }

    #contact button[type="submit"]:hover {
        background:#09C;
        -webkit-transition:background 0.3s ease-in-out;
        -moz-transition:background 0.3s ease-in-out;
        transition:background-color 0.3s ease-in-out;
    }

    #contact button[type="submit"]:active { box-shadow:inset 0 1px 3px rgba(0, 0, 0, 0.5); }

    #contact input:focus, #contact textarea:focus {
        outline:0;
        border:1px solid #999;
    }
    ::-webkit-input-placeholder {
        color:#888;
    }
    :-moz-placeholder {
        color:#888;
    }
    ::-moz-placeholder {
        color:#888;
    }
    :-ms-input-placeholder {
        color:#888;
    }


</style>
<section class="s-3--3">
    <div class="l-0">
        <div class="s__w">
            <div class="h--md _c--primary"><b>Contact Us</b></div>

            <div class="container">
                <form id="contact" action="<?php echo URLROOT.'/'.$_SESSION["lang"].'/DemoTest/contact';?>" method="POST">

                <br>

                    <fieldset>
                        <input placeholder="Your name" name="name" type="text" tabindex="1" required autofocus>
                    </fieldset>
                    <fieldset>
                        <input placeholder="Your Email Address" name="email" type="email" tabindex="2" required>
                    </fieldset>
                    <fieldset>
                        <textarea placeholder="Type your Message Here...." name="message" tabindex="5" required></textarea>
                    </fieldset>
                    <fieldset>
                        <button name="submit" type="submit" id="contact-submit" data-submit="...Sending" style="border-radius: 6px">Submit</button>
                    </fieldset>
                </form>


            </div>
        </div>
    </div>
</section>
</div>
<noscript>
    <iframe src="https://www.googletagmanager.com/ns.html?GTM-KZ3B2L" height="0" width="0"
            style="display:none;visibility:hidden"></iframe>
</noscript>
<noscript>
    <div style="display:inline"><img height="1" width="1" style="border-style:none" alt
                                     src="http://googleads.g.doubleclick.net/pagead/viewthroughconversion/878019161/?guid=ON&amp;script=0">
    </div>
</noscript>
    <?php
    require_once APPROOT . '/views/inc/footer.php';
    ?>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-170165335-1"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-170165335-1');
</script>

</body>

</html>