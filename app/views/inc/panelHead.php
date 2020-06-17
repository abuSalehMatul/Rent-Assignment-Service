<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="../plugins/images/favicon.png">
    <title>Assignment</title>
    <!-- Bootstrap Core CSS -->
    <link href="<?php echo URLROOT.'/';?>panel/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Menu CSS -->
    <link href="<?php echo URLROOT.'/';?>panel/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css" rel="stylesheet">
    <!-- toast CSS -->
    <link href="<?php echo URLROOT.'/';?>panel/plugins/bower_components/toast-master/css/jquery.toast.css" rel="stylesheet">
    <!-- morris CSS -->
    <link href="<?php echo URLROOT.'/';?>panel/plugins/bower_components/morrisjs/morris.css" rel="stylesheet">
    <!-- chartist CSS -->
    <link href="<?php echo URLROOT.'/';?>panel/plugins/bower_components/chartist-js/dist/chartist.min.css" rel="stylesheet">
    <link href="<?php echo URLROOT.'/';?>panel/plugins/bower_components/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.css" rel="stylesheet">
    <!-- animation CSS -->
    <link href="<?php echo URLROOT.'/';?>panel/css/animate.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?php echo URLROOT.'/';?>panel/css/style.css" rel="stylesheet">
    <!-- color CSS -->
    <link href="<?php echo URLROOT.'/';?>panel/css/colors/default.css" id="theme" rel="stylesheet">
    
</head>
<?php
require_once APPROOT . '/views/lang/' . $_SESSION["lang"] . '.php';
session_start();
if (empty($_SESSION['token'])) {
    if (function_exists('mcrypt_create_iv')) {
        $_SESSION['token'] = bin2hex(mcrypt_create_iv(32, MCRYPT_DEV_URANDOM));
    } else {
        $_SESSION['token'] = bin2hex(openssl_random_pseudo_bytes(32));
    }
}
$token = $_SESSION['token'];
?>