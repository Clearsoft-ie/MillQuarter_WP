<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link
 *
 * @package Clearsoft
 * @subpackage RedmondsFarm
 * @since 1.0
 * @version 1.0
 */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Mill Quarter - New Housing Development in Gorey Co. Wexford</title>
    <meta name="description" content="Mill Quarter" />
    <meta name="Author" content="ClearSoft" />

    <!-- mobile settings -->
    <meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0" />
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->

    <!-- WEB FONTS : use %7C instead of | (pipe) -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600%7CRaleway:300,400,500,600,700%7CLato:300,400,400italic,600,700" rel="stylesheet" type="text/css" />

    <!-- CORE CSS -->
    <link href="<?php echo get_template_directory_uri() ;?>/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />

    <!-- THEME CSS -->
    <link href="<?php echo get_template_directory_uri() ;?>/assets/css/essentials.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo get_template_directory_uri() ;?>/assets/css/layout.css" rel="stylesheet" type="text/css" />

    <!-- PAGE LEVEL SCRIPTS -->
    <link href="<?php echo get_template_directory_uri() ;?>/assets/css/header-1.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo get_template_directory_uri() ;?>/assets/css/color_scheme/green.css" rel="stylesheet" type="text/css" id="color_scheme" />

    <?php wp_head(); ?>

</head>

<!--
    AVAILABLE BODY CLASSES:

    smoothscroll 			= create a browser smooth scroll
    enable-animation		= enable WOW animations

    bg-grey					= grey background
    grain-grey				= grey grain background
    grain-blue				= blue grain background
    grain-green				= green grain background
    grain-blue				= blue grain background
    grain-orange			= orange grain background
    grain-yellow			= yellow grain background

    boxed 					= boxed layout
    pattern1 ... patern11	= pattern background
    menu-vertical-hide		= hidden, open on click

    BACKGROUND IMAGE [together with .boxed class]
    data-background="assets/images/_smarty/boxed_background/1.jpg"
-->
<body class="smoothscroll enable-animation">


<!-- wrapper -->
<div id="wrapper">

    <!--
        AVAILABLE HEADER CLASSES

        Default nav height: 96px
        .header-md 		= 70px nav height
        .header-sm 		= 60px nav height

        .b-0 		= remove bottom border (only with transparent use)
        .transparent	= transparent header
        .translucent	= translucent header
        .sticky			= sticky header
        .static			= static header
        .dark			= dark header
        .bottom			= header on bottom

        shadow-before-1 = shadow 1 header top
        shadow-after-1 	= shadow 1 header bottom
        shadow-before-2 = shadow 2 header top
        shadow-after-2 	= shadow 2 header bottom
        shadow-before-3 = shadow 3 header top
        shadow-after-3 	= shadow 3 header bottom

        .clearfix		= required for mobile menu, do not remove!

        Example Usage:  class="clearfix sticky header-sm transparent b-0"
    -->
    <div id="header" class="navbar-toggleable-md transparent sticky clearfix header-md noshadow b-0">

        <!-- TOP NAV -->
        <header id="topNav">
            <div class="container">
                <!-- Mobile Menu Button -->
                <button class="btn btn-mobile" data-toggle="collapse" data-target=".nav-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>

                <!-- Logo -->
                <a class="logo float-left scrollTo" href="#top">
                    <img src="<?php echo get_template_directory_uri() ;?>/assets/images/logo-light.png" alt="" />
                    <img src="<?php echo get_template_directory_uri() ;?>/assets/images/logo-dark.png" alt="" />
                </a>

                <!--
                    Top Nav

                    AVAILABLE CLASSES:
                    submenu-dark = dark sub menu
                -->
                <div class="navbar-collapse collapse float-right nav-main-collapse">
                    <nav class="nav-main">

                        <!--
                            .nav-onepage
                            Required for onepage navigation links

                            Add .external for an external link!
                        -->
                        <ul id="topMain" class="nav nav-pills nav-main nav-onepage">
                            <?php
                            if ( has_nav_menu( 'primary-menu' ) ) {
                                wp_nav_menu( array(
                                    'container' 		=> '',
                                    'items_wrap' 		=> '%3$s',
                                    'theme_location' 	=> 'primary-menu',
                                ) );
                            } else {
                                wp_list_pages( array(
                                    'container' => '',
                                    'title_li' 	=> '',
                                ) );
                            }
                            ?>
                        </ul>

                    </nav>
                </div>

            </div>
        </header>
        <!-- /Top Nav -->

    </div>