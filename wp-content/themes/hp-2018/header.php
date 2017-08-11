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
                            <a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" alt="Logo"/>  
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
                                    <li>
                                       <span class="title">Flameproof Certification</span>
                                       <span class="content">IEC 60097-1:2005</span>
                                </li> 
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
                            $defaults = array (
                                'container' => 'ul', 
                                'theme_location' => 'primary-menu',
                                'menu_class' => 'slicknav_nav slicknav_hidden',
                                'menu_id' => 'menu',
                                'aria-hidden'=>'true',
                                'role' => 'menu',
                                );

                            wp_nav_menu ( $defaults );


                        ?>


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





<!--
               <nav role="navigation" class="navbar">
        <!-- Brand and toggle get grouped for better mobile display -->
 <!--       <div class="navbar-header">
          <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>


                <div class="row menu-area">
                    <div class="main-menu">
                        <?php 
                            $defaults = array (
                                'container' => 'ul', 
                                'theme_location' => 'primary-menu',
                                'menu_class' => 'clearfix navbar-nav',
                                'menu_id' => 'menu'
                                );

                            wp_nav_menu ( $defaults );


                        ?>
         
                    </div>
                    <div class="menu-row-search-box">
                        <form action="#">
                            <input type="search" placeholder="SEARCH">
                            <button type="submit"><img src="<?php echo get_bloginfo( 'template_directory' ); ?>/assets/img/search-icon.png" alt="search icon"></button>
                        </form>
                    </div>
                </div>
            </div>
        </header>
-->
<div class="ws-40"></div>
  <!--      <section>
      <nav role="navigation" class="navbar navbar-fixed-top">
        <!-- Brand and toggle get grouped for better mobile display 
        <div class="navbar-header">
          <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
            <!-- Collection of nav links, forms, and other content for toggling
        <div id="navbarCollapse" class="collapse navbar-collapse">
          <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
              <a data-toggle="dropdown" class="dropdown-toggle" href="hippo-slurry-pump-range/index.html">Hippo Pump Range<b class="caret"></b></a>
                <ul role="menu" class="dropdown-menu">
                  <li><a href="hippo-slurry-pump-range/index.html">The Hippo Slurry Pump Range</a></li>
                  <li class="divider"></li>
                  <li><a href="hippo-slurry-pump-range/submersible/index.html">Submersible Slurry Pump Range</a></li>
                  <li><a href="hippo-slurry-pump-range/vertical/index.html">Vertical Slurry Pump Range</a></li>
                  <li class="divider"></li>
                  <li><a href="pump-performance-curves/index.html">Pump Curves</a></li>
                </ul>
            </li>
            <li class="dropdown">
              <a data-toggle="dropdown" class="dropdown-toggle" href="about/company-profile.html">About <b class="caret"></b></a>
                <ul role="menu" class="dropdown-menu">
                  <li><a href="about/company-profile.html">Company Profile</a></li>
                  <li><a href="about/awards.html">Awards</a></li>
                </ul>
            </li>
            <li><a href="services-and-support/index.html">Service & Support</a></li>
            <li><a href="contact/index.html">Contact</a></li>
          </ul>
        </div>
      </nav>
    </section> -->