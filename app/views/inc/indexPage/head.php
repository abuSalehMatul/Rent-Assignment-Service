<!DOCTYPE html>
<html lang="en-us">
<head>
      <meta charset="utf-8">

      <meta http-equiv="x-dns-prefetch-control" content="on">
      <meta name="viewport" content="width=device-width,initial-scale=1">
      <meta name="application-name" content="EssayPro.com">
      <title>Essay Lite</title>
      <meta name="description" content="Use the&nbsp;professional writing service and receive: ✓High-Quality Papers ✓Plagiarism Reports ✓Punctual Delivery ✓24/7 Support. Sign Up!">
      <link rel="canonical" href="index.html">
      <meta property="og:image" content="<?php echo APPROOT . '/public/' ?>shared/images/og/share-image.jpg">
      <meta property="og:image:secure_url" content="<?php echo APPROOT . '/public/' ?>shared/images/og/share-image.jpg">

      <link rel="apple-touch-icon" sizes="57x57" href="<?php echo APPROOT . '/public/' ?>shared/images/icons/apple-touch-icon-57x577ed5.png?v=qqqq">
      <link rel="apple-touch-icon" sizes="60x60" href="<?php echo APPROOT . '/public/' ?>shared/images/icons/apple-touch-icon-60x607ed5.png?v=qqqq">
      <link rel="apple-touch-icon" sizes="72x72" href="<?php echo APPROOT . '/public/' ?>shared/images/icons/apple-touch-icon-72x727ed5.png?v=qqqq">
      <link rel="apple-touch-icon" sizes="76x76" href="<?php echo APPROOT . '/public/' ?>shared/images/icons/apple-touch-icon-76x767ed5.png?v=qqqq">
      <link rel="apple-touch-icon" sizes="114x114" href="<?php echo APPROOT . '/public/' ?>shared/images/icons/apple-touch-icon-114x1147ed5.png?v=qqqq">
      <link rel="apple-touch-icon" sizes="120x120" href="<?php echo APPROOT . '/public/' ?>shared/images/icons/apple-touch-icon-120x1207ed5.png?v=qqqq">
      <link rel="apple-touch-icon" sizes="144x144" href="<?php echo APPROOT . '/public/' ?>shared/images/icons/apple-touch-icon-144x1447ed5.png?v=qqqq">
      <link rel="apple-touch-icon" sizes="152x152" href="<?php echo APPROOT . '/public/' ?>shared/images/icons/apple-touch-icon-152x1527ed5.png?v=qqqq">
      <link rel="apple-touch-icon" sizes="180x180" href="<?php echo APPROOT . '/public/' ?>shared/images/icons/apple-touch-icon-180x1807ed5.png?v=qqqq">
      <link rel="icon" type="image/png" href="<?php echo APPROOT . '/public/' ?>shared/images/icons/favicon-32x327ed5.png?v=qqqq" sizes="32x32">
      <link rel="icon" type="image/png" href="<?php echo APPROOT . '/public/' ?>shared/images/icons/favicon-194x1947ed5.png?v=qqqq" sizes="194x194">
      <link rel="icon" type="image/png" href="<?php echo APPROOT . '/public/' ?>shared/images/icons/favicon-96x967ed5.png?v=qqqq" sizes="96x96">
      <link rel="icon" type="image/png" href="<?php echo APPROOT . '/public/' ?>shared/images/icons/android-chrome-192x1927ed5.png?v=qqqq" sizes="192x192">
      <link rel="icon" type="image/png" href="<?php echo APPROOT . '/public/' ?>shared/images/icons/favicon-16x167ed5.png?v=qqqq" sizes="16x16">
      <link rel="manifest" href="manifest7ed5.json?v=qqqq">
      <link rel="shortcut icon" href="<?php echo APPROOT . '/public/' ?>shared/images/icons/favicon7ed5.ico?v=qqqq">
      <!-- EssaySHark -->
      <!-- End -->
      <base>
      <?php
      //      require_once APPROOT . '/views/pages/htmlHead/inc/headerStyle.php';
      //      require_once APPROOT . '/views/pages/htmlHead/inc/footerStyle.php';
      //      require_once APPROOT . '/views/pages/htmlHead/inc/headerScript.php';
      //      require_once APPROOT . '/views/pages/htmlHead/inc/footerScript.php';

      include("inc/headerStyle.php");
      include("inc/footerStyle.php");
      include("inc/headerScript.php");
      include("inc/footerScript.php");
//      session_start();
      if (empty($_SESSION['token'])) {
            if (function_exists('mcrypt_create_iv')) {
                  $_SESSION['token'] = bin2hex(mcrypt_create_iv(32, MCRYPT_DEV_URANDOM));
            } else {
                  $_SESSION['token'] = bin2hex(openssl_random_pseudo_bytes(32));
            }
      }
      ?>
</head>