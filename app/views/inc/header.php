
<?php
require_once APPROOT . '/views/lang/' . $_SESSION["lang"] . '.php';
?>

<style>


    @import url('https://fonts.googleapis.com/css?family=Muli');
    body {
        font-family: Arial;
        font-family: 'Muli', sans-serif;
    }
    .nav-wrapper {
        width: 300px;
        margin: 100px auto;
        text-align: center;
    }
    .sl-nav {
        display: inline;
    }
    .sl-nav ul {
        margin:0;
        padding:0;
        list-style: none;
        position: relative;
        display: inline-block;
    }
    .sl-nav li {
        cursor: pointer;
        padding-bottom:10px;
    }
    .sl-nav li ul {
        display: none;
    }
    .sl-nav li:hover ul {
        position: absolute;
        top:29px;
        right:-15px;
        display: block;
        background: #fff;
        width: 120px;
        padding-top: 0px;
        z-index: 1;
        border-radius:5px;
        box-shadow: 0px 0px 20px rgba(0,0,0,0.2);
    }
    .sl-nav li:hover .triangle {
        position: absolute;
        top: 15px;
        right: -10px;
        z-index:10;
        height: 14px;
        overflow:hidden;
        width: 30px;
        background: transparent;
    }
    .sl-nav li:hover .triangle:after {
        content: '';
        display: block;
        z-index: 20;
        width: 15px;
        transform: rotate(45deg) translateY(0px) translatex(10px);
        height: 15px;
        background: #fff;
        border-radius:2px 0px 0px 0px;
        box-shadow: 0px 0px 20px rgba(0,0,0,0.2);
    }
    .sl-nav li ul li {
        position: relative;
        text-align: left;
        background: transparent;
        padding: 15px 15px;
        padding-bottom:0;
        z-index: 2;
        font-size: 15px;
        color: #3c3c3c;
    }
    .sl-nav li ul li:last-of-type {
        padding-bottom: 15px;
    }
    .sl-nav li ul li span {
        padding-left: 5px;
    }
    .sl-nav li ul li span:hover, .sl-nav li ul li span.active {
        color: #146c78;
    }
    .sl-flag {
        display: inline-block;
        box-shadow: 0px 0px 3px rgba(0,0,0,0.4);
        width: 15px;
        height: 15px;
        background: #aaa;
        border-radius: 50%;
        position: relative;
        top: 2px;
        overflow: hidden;
    }
    .flag-de {
        /*background: url('data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAUCAIAAAAC64paAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAAZdEVYdFNvZnR3YXJlAHBhaW50Lm5ldCA0LjAuMTM0A1t6AAAAPUlEQVQ4T+3HMQ0AIBTE0NOHM8x9B7hgh71bIWGieUvze1m7kHGBr/AVvsJX+EpmP5dV5/gKX+ErfIUvVDYcX2NMxQC8PAAAAABJRU5ErkJggg==');*/
        background-size: cover;
        background-position: center center;
    }
    .flag-usa {
        background-size: cover;
        background-position: center center;
        background: url('data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAUCAIAAAAC64paAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAAZdEVYdFNvZnR3YXJlAHBhaW50Lm5ldCA0LjAuMTM0A1t6AAABhUlEQVQ4T2Ows82PjGixsc4LD2tysC/09Kjw8622tyuICG8u0w/cpGSCBzF4e1VmZkzw9anOzOj38a4KCW4IC22ECHYk1l9tn4gHMeTlTnZxLikvm+XiUpKW2hvgX+vnV5OVOQEoOGfOtv94AYOzU3Fd7XxHh6Lq6rlurqUx0W0J8Z1AnbW18yotonaYuOJBDBXls4A+bGpaBCTz86YEBtQCvVBSPAPIbY0oP1/aiAcxABU1Ny+2tclvbFjo5FgUF9uenNwNDLnmpkWEnV1TPRcY1O1tS4H6i4umA/0MDK2K8tlAwRqHpP1uoXgQKKraWpcClTY3LQZaCLQ5NaUX5OaWJY3++SeTC/AgBmA4AXUClUJs9ver8fKsAAYEUJCws4G21dXNB1oFdD/Qz8DQTk4C+bm2dn6DZ9bRiDQ8iAEYt8CoBpK5YBIYw0AEEZwSXX4oMB4PYoC6gCzAcDqrjGzEsMfen2xEmbMv1rSTjRi26dqRjShz9o2+6WQjBrSShQSkZAIADvW/HLrLY6cAAAAASUVORK5CYII=');

    }

</style>
<header class="header" style="background: <?php foreach ($data['website'] as $key=>$val){
    echo $val['color'].'!important';

    ?>;
        -webkit-box-shadow: 2px 6px 9px -1px rgba(0,0,0,0.61);
        -moz-box-shadow: 2px 6px 9px -1px rgba(0,0,0,0.61);
        box-shadow: 2px 6px 9px -1px rgba(0,0,0,0.61);
    height: 100px;
        font-family: <?php echo $val['font'].'!important'; ?> ;

        <?php
}  ?>;">

    <div class="m-nav m-nav__main">
        <div class="m-nav__main-ul">

            <div class="m-nav__divider"></div>

        </div>

        <div class="m-nav__app"><a class="m-nav__app__btn app-store">
                <picture>
                    <source data-srcset="<?php echo URLROOT.'/';?>/assets/footer/app__store__icon.png?v=qqqq, /assets/footer/app__store__icon__2x.png?v=qqqq 2x">
                    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mO8VA8AAikBU9RsF2cAAAAASUVORK5CYII="
                         data-src="<?php echo URLROOT.'/';?>/assets/footer/app__store__icon.png?v=qqqq" class="m-nav__app__logo lazy"
                         alt="App Store"></picture>
                <div class="m-nav__app__info"><span>Download on the</span> <span class="title">App Store</span></div>
            </a><a class="m-nav__app__btn google-play">
                <picture>
                    <source data-srcset="/assets/footer/google__play__icon.png?v=qqqq, /assets/footer/google__play__icon__2x.png?v=qqqq 2x">
                    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mO8VA8AAikBU9RsF2cAAAAASUVORK5CYII="
                         data-src="/assets/footer/google__play__icon.png?v=qqqq" class="m-nav__app__logo lazy"
                         alt="Google Play"></picture>
                <div class="m-nav__app__info"><span>get it on</span> <span class="title">Google Play</span></div>
            </a></div>
    </div>

    <div class="m-nav__overlay"></div>
    <div class="header__main">
        <div class="header__logo">
            <nav class="nav">
                <ul class="nav-ul">



                    <li class="nav-li"><a href="<?php echo URLROOT.'/'.$_SESSION["lang"].'/';?>aboutUs" class="nav-a ga-event"
                                          data-ga-category="home" data-ga-action="click"
                                          data-ga-label="home-header Reviews click"><?php echo $lang['About us']?></a></li>
                    <li class="nav-li"><a href="<?php echo URLROOT.'/'.$_SESSION["lang"].'/';?>services" class="nav-a ga-event" data-ga-category="home"
                                          data-ga-action="click" data-ga-label="home-header Our Team click"><?php echo $lang['Why Us']?></a></li>
                    <li class="nav-li"><a href="<?php echo URLROOT.'/'.$_SESSION["lang"].'/';?>team" class="nav-a ga-event" data-ga-category="home"
                                          data-ga-action="click" data-ga-label="home-header Our Team click"><?php echo $lang['Our Team']?></a></li>
                    <li class="nav-li"><a href="<?php echo URLROOT.'/'.$_SESSION["lang"].'/';?>reviews" class="nav-a ga-event"
                                          data-ga-category="home" data-ga-action="click"
                                          data-ga-label="home-header Reviews click"><?php echo $lang['Reviews']?></a></li>


                </ul>
            </nav>


          </div>
        <div class="header__nav">

        </div>
    </div>
    <a class="logo ga-event" data-ga-category="home" data-ga-action="click"
       data-ga-label="home-header logo click" href="<?php echo URLROOT.'/'.$_SESSION['lang'].'/';?>" style="  height: 60px!important;
            margin-left:12px!important;"><img src="<?php echo URLROOT.'\public\shared\images\AG.png'?>"
                                                                                                          class="logo_img"
                                                                                                          alt="Assignment guru" style="width: 140px!important;height: 100px!important;margin-top: -20px!important;"></a>

    <div class="header__inner--right">

        <div class="header__auth">
            <div class="sl-nav" style="margin-right: 22px!important;">

                <ul>
                    <li style="color: black!important;padding: 5px!important;border: 2px solid black!important; border-radius: 6px!important;" >Language <i class="fa fa-angle-down" aria-hidden="true"></i>
                        <div class="triangle"></div>
                        <ul>
                            <li><i class="sl-flag flag-de"><div id="germany"></div></i> <span class="active"><a href="<?php echo URLROOT.'/ar/';?>">Arabian</a></span></li>
                            <li><i class="sl-flag flag-usa"><div id="germany"></div></i> <a href="<?php echo URLROOT.'/en/';?>"><span>English</span></a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <nav class="n--auth"><span data-link="<?php echo URLROOT . '/' . $_SESSION["lang"] . '/auth/register'; ?>"
                                       class="n--auth__link ga-event h-l" data-ga-category="home"
                                       data-ga-action="click" data-ga-label="home-header login click">Become a writer </span><span
                        data-link="<?php echo URLROOT . '/' . $_SESSION["lang"] . '/auth/login'; ?>"
                        class="button-filled__warning--small ga-event h-l" data-ga-category="home"
                        data-ga-action="click" data-ga-label="home-header Sign Up click"><span class="button-text">Login</span></span>
            </nav>
        </div>
    </div>
</header>
