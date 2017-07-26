<?php 
/**
 * The is the template page for custom post types press releases
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Hazleton Pumps
 * @since Hazleton Pumps 1.0
 */


        get_header(); ?>

            <div class="container">
                <?php if ( have_posts() ) : while ( have_posts() ): the_post(); 
                    $date = get_field ( 'date');
                    $primg1 = get_field ( 'primg1' );
                    $primg2 = get_field ( 'primg2');
                    $primg3 = get_field ( 'primg3');
                    $size = "full";
                ?>

                <div class="ws-40"></div>
                <div class="container">
                    <div class="row">
                    <div class="col-md-12">
                        <div class="section-title">
                            <h1><?php the_title(); ?></h1> 
                            <p><?php echo $date; ?></p>
                        </div>
                    </div>
                <div class="ws-40"></div>
                <div class="row">
                    <div class="col-md-7">
                        <p><?php the_content(); ?></p>
                    </div>
                    <div class="col-md-5">
                        <?php if($primg1) { 
                                echo wp_get_attachment_image ($primg1, $size );
                            } ?>
                        
                        <?php if($primg2) { 
                                echo wp_get_attachment_image ($primg2, $size );
                            } ?>

                        <?php if($primg3) { 
                                echo wp_get_attachment_image ($primg3, $size );
                            } ?>
                    </div>
                    
                </div>
                

                <?php endwhile; else: ?>

                <p>Sorry, no page found.</p>

                <?php endif; ?>
            </div>

            <div class="ws-40"></div>
        </div>
    </div>
        <?php get_footer(); ?>
        


     