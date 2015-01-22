<?php
session_start();

$plans = array('p1_meal' => array('7.99', 'Classic'),
               'p2_meal' => array('8.99', 'Savory'),
               'p3_meal' => array('9.99', 'Tapas'));

$cart = array();
if (isset($_SESSION['cart'])) {
 $cart = $_SESSION['cart'];
}

?>
<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>

    <!-- Basic Page Needs
  ================================================== -->
    <meta charset="utf-8">
    <title>altitude distribution</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Mobile Specific Metas
  ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- CSS
  ================================================== -->
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="stylesheets/skeleton.css">
    <link rel="stylesheet" href="stylesheets/layout.css">
     <link rel="stylesheet" href="stylesheets/normalize.css">

    <!--[if lt IE 9]>
        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Favicons
    ================================================== -->
    <link rel="shortcut icon" href="images/favicon.ico">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">

</head>
<body>



    <!-- Primary Page Layout
    ================================================== -->
<div class="pageFull header">
        <div class="container">
            <div class="row">
                <div class="five columns logo">
                    <img src="images/logo.png">
                </div>
                <div class="seven columns menu">
                    <div id="navcontainer">
                    <ul id="navlist">
                        <li>
                                <input type="text" placeholder="Search..." required>
                        </li>
                        <li><a href="index.php"><i class="fa fa-home fa-2x"></i></a></li>
                        <li><a href="cart.php"><i class="fa fa-shopping-cart fa-2x"></i></a></li>
                    </ul>
                    </div>
                </div>
            </div>

        </div>
    </div>