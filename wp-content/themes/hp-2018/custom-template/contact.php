<?php 
/**
 * Template Name: Contact
*
* The template for displaying a contact page with sidebar-1 and footer-sidebar
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Hazleton Pumps
 * @since Hazleton Pumps 1.0
 */


        get_header(); ?>

        
         <section class="contact-us-promo">
            <div class="container">
                <div class="section-title">
                    <h1>Contact Us</h1>
                    </div>
                <div class="row">
                    <div class="col-md-8">
                        <div class="contact-us-left">
                           <p>How can we assist you today?</p>
                            <?php if ( have_posts() ) : while ( have_posts() ): the_post(); ?>

                				<p><?php the_content(); ?></p>
                			<?php endwhile; else: ?>

                				<p>Sorry, no page found.</p>

                			<?php endif; ?>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="contact-us-right">
                            <div class="contact-info-block">
                                <h2 class="heading">Hazleton Pumps</h2>

                                <div class="ci-info">
                                     <?php get_sidebar(); ?>
                                	 <?php get_footer(); ?>