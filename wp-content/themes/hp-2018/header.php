<?php
/**
 * The Header for our theme
 *
 * Displays all of the <head> section and everything up till end of nav>
 *
 * @package WordPress
 * @subpackage Hazleton Pumps
 * @since Hazleton Pumps 1.0
 */
?>

<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title><?php wp_title(); ?></title>
        <?php wp_head(); ?>

        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <!-- Place favicon.ico in the root directory -->
        
        <!-- Importing Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans|Source+Sans+Pro:400,700" rel="stylesheet">
        
        
    </head>
    <body>


        
        <!--=====================================
        =            header content            =
        ======================================-->
         <div class="container upper-header-business-info">
            <div class="business-info-bar">
                <div class="business-info">
                    <ul class="clearfix ">
                        <li>
                           <span class="title">Phone Number</span>
                            <span class="content">+27 (0) 12 666 8203</span>
                        </li>
                        <li>
                            <span class="title">Email Address</span>
                                <span class="content">info@hazletonpumps.co</span>
                        </li>
                        <li>
                            <span class="title">Flameproof Certification</span>
                            <span class="content">IEC 60097-1:2005</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <header>
            <div class="container">
                <div class="row upper-header">
                    <div class="col-md-3 col-sm-6 col-xs-6">
                        <div class="logo">
                            <a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" alt="Logo"/>  </a>
                        </div>
                    </div>
                    <div class="col-md-6 in-h-b-col">
                        <div class="business-info">
                            <ul class="clearfix ">
                                <li>
                                     <span class="title">Phone Number</span>
                                      <span class="content">+27 (0) 12 666 8203</span>
                                    </li>
                                    <li>
                                      <span class="title">Email Address</span>
                                      <span class="content"><a href="mailto:info@hazletonpumps.co"> info@hazletonpumps.co </a> </span>
                                    </li>
                                  <!--  <li>
                                       <span class="title">Flameproof Certification</span>
                                       <span class="content">IEC 60097-1:2005</span>
                                </li> -->
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-6">
                        <div class="header-request-quote">
                            <a href="http://localhost/hp-2018/quote/" target="_blank" class="btn btn-style1"><strong> Request a quote</strong></a>
                        </div>
                    </div>
                </div>
                <div class="row menu-area">
                    <div class="main-menu">
                        <div class="slicknav_menu">
                            <a href="#" aria-haspopup="true" role="button" tabindex="0" class="slicknav_btn slicknav_collapsed">
                                <span class="slicknav_menutxt">MENU</span>
                                <span class="slicknav_icon">
                                        <span class="slicknav_icon-bar"></span>
                                        <span class="slicknav_icon-bar"></span>
                                        <span class="slicknav_icon-bar"></span>
                                </span>
                            </a>

                            <ul class="slicknav_nav slicknav_hidden" aria-hidden="true" role="menu" style="display: none;">
                    </div>
                       <?php 
                            wp_nav_menu( array(
                                'container' => 'ul', 
                                'menu' => 'primary',
                                'theme_location' => 'primary',
                                'depth'             => 2,
                                'menu_class' => 'slicknav_nav slicknav_hidden',
                                'menu_id' => 'menu',
                                'aria-hidden'=>'true',
                                'role' => 'menu',
                                'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                                )

                            );
 
                        ?>
<!-- wp_nav_menu( array(
                'menu'              => 'primary',
                'theme_location'    => 'primary',
                'depth'             => 2,
                'container'         => 'div',
                'container_class'   => 'collapse navbar-collapse',
                'container_id'      => 'bs-example-navbar-collapse-1',
                'menu_class'        => 'nav navbar-nav',
                'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                'walker'            => new WP_Bootstrap_Navwalker())
            );-->


                    </div>
                    <div class="menu-row-search-box">
                        <form class="search" action="#">
                            <input type="search" placeholder="SEARCH">
                            <button type="submit"><i class='glyphicon glyphicon-search'></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </header>





