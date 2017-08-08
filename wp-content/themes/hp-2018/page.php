<?php 
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme and one
 * of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query,
 * e.g., it puts together the home page when no home.php file exists.
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
                	<div class="container">
                		<div class="row">
                    		<div class="col-md-12">
                        		<div class="section-title">
                           		<h1><?php the_title(); ?></h1>
                           		<p><?php the_content(); ?></p>
                           		</div>
                           	</div>
                        </div>
                    </div>

                <?php endwhile; else: ?>

                <p>Sorry, no page found.</p>

                <?php endif; ?>
            </div>
          <div class="ws-50"></div>
        <?php get_footer(); ?>
        


     