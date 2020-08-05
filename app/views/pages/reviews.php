<?php
require_once APPROOT . '/views/inc/reviewPage/head.php';

?>
<style>
    body,html{

        height: 100%;
    }
</style>
<body style="<?php foreach ($data['website'] as $key=>$val){

    ?>;
        font-family: <?php echo $val['font'].'!important'; ?> ;

        <?php
}  ?>;">

<div class="wrapper" style="background: url('../public/assets/site_images/homepage.jpeg');">

    <?php
    require_once APPROOT . '/views/inc/header.php';

    ?>



    <div class="" style="">

        <div class="" style="background-position: center;height: 600px!important; ">
            <div class="l-0" style="margin-left: 2px!important;text-align: left!important;" >
                <div class="p-5__h-w" style="color: white!important;">

                    <p style="color:black!important;font-weight:bold;text-align: left;font-size:50px!important;margin-top: 100px;" >Customer's Reviews</p></div>
                    <p class="p--sm" style="color:black!important;font-weight:bolder;font-size:35px!important;text-align: left" >See for yourself what our customers have to say!</p></div>
            </div>
        </div>
    <div class="">
        <div class="l-0">


            <div class="p-5__c">
                <div class="c-5">
                    <div id="feedbacks-list" class="c-5__ul">
                        <?php foreach ($data['review'] as $key=>$val){

                            ?>
                            <div class="c-5__li" data-feedback-id="193192" style="background: white!important;color: black!important;-webkit-box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.75);
-moz-box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.75);
box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.75);">
                                <div class="c-5__w">
                                    <div class="c-5__h">
                                        <div class="c-5__i">
                                            <div class="c-5__i-t">

                                                <div><?php echo date('d M,Y ',strtotime($val['date'])); ?></div>

                                            </div>
                                            <div class="c-5__i-t">

                                                <div><?php echo $val['customer_name']; ?></div>
                                            </div>
                                            <div class="c-5__i-b">
                                                <div class="">Coursework <span><?php echo $val['id']; ?></span> on <a
                                                            href="#" style="color: black!important;"><?php echo $val['topic']; ?></a></div>

                                            </div>
                                        </div>
                                        <div class="c-5__r"><span class="c-5__r-v">

                                                <?php for($i=0;$i<5;$i++){
                                                    ?>

                                                    <img src="<?php echo URLROOT.'\public\assets\site_images\star.png'?>"
                                                         alt="star" style="height: 16px;width: 16px">
                                                    <?php

                                                }
                                                ?>


                                            </span>
                                            <div class="rating-stars">
                                                <div class="rating-stars__bar"></div>
                                                <div class="rating-stars__bar is--active" style="width:100%"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="c-5__c"><p><i>" <?php echo $val['comment']; ?> "</i></p></div>
                                </div>
                            </div>
                        <?php  } ?>
                    </div>
                </div>

            </div>

            <div id="more_feedbacks" class="p-5__b-g">
                <button type="button" class="button-outline__primary"><span class="button-text">Show more</span>
                </button>
            </div>
        </div>
    </div>

    </div>


    <?php
    require_once APPROOT . '/views/inc/footer.php';
    ?>
</div>

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
