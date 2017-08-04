<?php 
/**
 * The is the archive page for resources
 *
 *
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Hazleton Pumps
 * @since Hazleton Pumps 1.0
 */


   get_header(); ?>

            <div class="container">
               <?php while ( have_posts() ) : the_post(); ?>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="section-title">
                                <h1><?php the_title(); ?></h1>
                                <p><?php the_content(); ?></p>
                            </div>
                        </div>
                        <div class="container">
                            <div class="row">
                                <div class="col-md-6">
                               
                                    <h4><a href="http://localhost/hp-2018/case-studies/"> Case Studies </a></h4>
                                    <p>Please visit our case studies page to view our pumps and pumps systems in action in various industries and applications</p>
                                </div>
                                <div class="col-md-6">
                                    <h4><a href="http://localhost/hp-2018/pump-curves/"> Pump Curves </a></h4>
                                    <p>Our pump curves are handy guides in understading our pumps' capabilities.</p>
                                
                                </div>
                            
                            </div>
                        </div>
                        



                    </div>

                <?php endwhile;?>
                <div class="ws-40"></div>

               
</div>
</div>


        <?php get_footer(); ?>