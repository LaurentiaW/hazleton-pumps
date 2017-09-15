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

            <div class="container">
                <?php if ( have_posts() ) : while ( have_posts() ): the_post(); ?>

                <p><?php the_content(); ?></p>

                <?php endwhile; else: ?>

                <p>Sorry, no page found.</p>

                <?php endif; ?>
            </div>

         <?php get_sidebar(); ?>

        <?php get_footer(); ?>
        


     