<?php
require_once APPROOT . '/views/inc/indexPage/head.php';
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
        <section class="s-1 pt-header" >
            <picture>
                <img src="<?php echo URLROOT . '\public\assets\site_images\student_portal.jpeg' ?>"
                     alt="Assignment Writing Resources" class="bg__image--top lazy" style="opacity: 0.3!important">
            </picture>
            <div class="l-0" style="margin-left: 12px;">
                <div class="s-1__wrapper">
                    <div class="s-1__left"  style="margin-top: 100px!important;"><h1 class="h--lg h--is-inverse" style="font-size: 70px!important;text-align: left">About Us</h1>
                        <br>
                        <p class="p--lg p--is-inverse" style="font-size: 30px!important;">The Assignment Guru is a professional team of hand-picked authors, editors, and
                            proofreaders, available 24/7 and ready to handle any written assignment in any subject. Our custom
                            essay writing service and tutoring, and homework help are popular among students from all over the
                            world. </p>

                    </div>

                </div>
            </div>

        </section>

        <section class="s-2 bggrey" style="text-align: center">
            <div class="l-0">
                <h3><b>Rely on The Assignment Guru if:</b></h3>

      <br>
                <div class="s-2__w">
                    <div class="s-2__c">
                        <ul style="list-style: none">
                            <li>Drowning in assignments</li>
                            <li>Struggling to meet the deadlines</li>
                            <li>Don’t know how to start your paper</li>
                            <li>    Suffering from a writer’s block</li>
                            <li>Need an expert to take over</li>
                            <li>You need a high-quality, plagiarism-free paper that follows your
                                instructions
                            </li>

                        </ul>
                    </div>
                </div>
                <h3><b>Our performance speaks for itself:</b></h3>
                <p>Many of our clients have been with us for years, and they keep coming back for more! </p>
                <br>
                <h3><b>We're up and running, no matter what! </b></h3>
                <p>All of our services are accessible. All our writers are always available. </p>
                <p>Relax and take care of yourself while we take care of your paper. </p>
            </div>
        </section>

        <section class="s-4 pb-0">
            <div class="l-0">
                <div class="s-4__w">
                    <div class="h--md _c--primary">How it works<p class="p__sm" style="font-size: 17px;">In 4 simple and easy steps </p></div>

                    <ul class="s-6__ul" style="list-style: none;text-align: center">
                        <li class="s-6__li">
                            <div class="s-6__i" ><i class="icon features-icon__deadline"></i></div>
                            <div class="s-6__d">
                                <div class="h--sm">Start an order:</div>
                                <p class="p--sm"> in the order by completing the requirements section and uploading the documents with your instructions and set the deadline. </p></div>
                        </li>
                        <br>
                        <li class="s-6__li">
                            <div class="s-6__i"><i class="icon features-icon__notifications"></i></div>
                            <div class="s-6__d">
                                <div class="h--sm">Wait for a response:</div>
                                <p class="p--sm">Once you have completed the order, it will take a few minutes for our system to match your order with the most suitable writer. You can chat with the writer, and once you feel confident that the writer will be able to handle your essay, you can go ahead and deposit the money so that the writer can start working on your order. Your money will be on hold, and we will only pay the writer once you are satisfied and have marked the order as complete. </p></div>
                        </li>
                        <br>
                        <li class="s-6__li">
                            <div class="s-6__i"><i class="icon features-icon__chat"></i></div>
                            <div class="s-6__d">
                                <div class="h--sm">Monitor the process:</div>
                                <p class="p--sm">Communicate with the writer whenever you want using secure chat and keep track of the writing progress. The writer will upload the process; however, you will not be able to download the essay or screenshot it because it will have a watermark, meaning you can only access it once you’ve marked the order as complete. You will only be able to see the progress to guide the writer. </p></div>
                        </li>
                        <br>
                        <li class="s-6__li">
                            <div class="s-6__i"><i class="icon features-icon__profiles"></i></div>
                            <div class="s-6__d">
                                <div class="h--sm">Download your paper</div>

                        </li>

                    </ul>
                </div>
            </div>
        </section>
        <br>
        <br>
        <section class="s-2 bggrey" style="background:<?php echo URLROOT . '\public\assets\site_images\about_us.jpeg' ?> "> <img src="<?php echo URLROOT . '\public\assets\site_images\see.jpeg' ?>"
                                                                                                                                 alt="Assignment Writing Resources" class="bg__image--top lazy" style="opacity: 0.3!important;width: 100%;
    height: 600px;
    margin-top: -55px;">

            <div class="l-0" style="margin-left: 12px!important;">

                <div class="h--md" style="text-align: left"><b>Is it safe to buy an essay from us?</b></div>
                <p class="p--md" style="text-align: left">In short, absolutely!
                    We guarantee that no one will know that you are using our service. All the information you provide to us is highly confidential. We will only ask you to share your essay paper instructions, a username, and an email to create an account. This data, as well as your chats with the assigned paper writer, will be secured with Data Encryption.
                   <br> Our policy is simple: We don’t store or resell papers. Your custom essay will be deleted 30 days after the delivery. We don’t give your personal information to any third parties under any circumstances. There is no chance for it to ever appear on the web. That is why none of our clients were caught using our essay writing service.
                   <br> Our security methods include: Confidential orders and chats. We communicate with our clients on a no-name basis and never ask them to specify their personal details. We won’t know your full name, the name of your college or city.
                    Reliable payment methods. We work only with reliable payment companies, i.e., MasterCard and Visa, escrow to ensure safe payments for your orders.
                </p>

            </div>
        </section>

    </div>
    <p></p>
    <noscript>
        <iframe src="https://www.googletagmanager.com/ns.html?GTM-KZ3B2L" height="0" width="0"
                style="display:none;visibility:hidden"></iframe>
    </noscript>
    <noscript>
        <div style="display:inline"><img height="1" width="1" style="border-style:none" alt
                                         src="http://googleads.g.doubleclick.net/pagead/viewthroughconversion/878019161/?guid=ON&amp;script=0">
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
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-170165335-1');
</script>

</body>

</html>
