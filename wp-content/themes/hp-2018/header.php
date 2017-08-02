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
                            <a href="<?php echo home_url(); ?>"><img src="<?php echo get_bloginfo( 'template_directory' ); ?> /assets/img/logo.png" alt="Logo"></a>
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