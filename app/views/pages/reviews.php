<?php
require_once APPROOT . '/views/inc/reviewPage/head.php';

?>
<body>
<div class="wrapper">
    <?php
    require_once APPROOT . '/views/inc/header.php';

    ?>
    <div class="p-5 main">
        <div class="p-5__h">
            <div class="l-0">
                <div class="p-5__h-w"><h1 class="h--md">Latest Service Reviews (Customer Feedback)</h1>
                    <p class="p--sm">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus accusantium adipisci atque cum deserunt dicta dignissimos dolore doloribus earum excepturi fugiat magni modi nulla praesentium quas, quis sit veniam vero.</p></div>
            </div>
        </div>
        <div class="p-5__m">
            <div class="l-0">
                <div class="p-5__c">
                    <div class="c-5">
                        <div id="feedbacks-list" class="c-5__ul">
                <?php foreach ($data['review'] as $key=>$val){

                ?>
                            <div class="c-5__li" data-feedback-id="193192" style="background: palegreen!important">
                                <div class="c-5__w">
                                    <div class="c-5__h">
                                        <div class="c-5__i">
                                            <div class="c-5__i-t">
                                                <div class="c-5__cs">
                                                    <div class="c-5__av">
                                                        <div class="avatar--placeholder"></div>
                                                    </div>
                                                    <div class="c-5__cs-n"><?php echo $val['customer_name']; ?></div>
                                                </div>
                                                <div class="c-5__dt"><?php echo date('d M,Y h:i A',strtotime($val['date'])); ?></div>
                                            </div>
                                            <div class="c-5__i-b">
                                                <div class="c-5__ct">Coursework <span><?php echo $val['id']; ?></span> on <a
                                                            href="#" class="c-5__ct-a"><?php echo $val['topic']; ?></a></div>
                                                <div class="c-5__wr"><span class="c-5__wr-l">Writer:</span> <span
                                                            class="h-l" data-link="#"><span><span
                                                                    class="c-5__wr-v"><?php echo $val['writer_name']; ?></span></span></span></div>
                                            </div>
                                        </div>
                                        <div class="c-5__r"><span class="c-5__r-v"><?php echo $val['rating']; ?></span>
                                            <div class="rating-stars">
                                                <div class="rating-stars__bar"></div>
                                                <div class="rating-stars__bar is--active" style="width:100%"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="c-5__c"><p class="p--sm"><i>" <?php echo $val['comment']; ?> "</i></p></div>
                                </div>
                            </div>
          <?php  } ?>
                        </div>
                    </div>
                    <div id="more_feedbacks" class="p-5__b-g">
                        <button type="button" class="button-outline__primary"><span class="button-text">Show more</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <?php
    require_once APPROOT . '/views/inc/footer.php';
    ?>
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
