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
                    $sub_range_title = get_field ( 'sub_range_title');
                    $sub_des = get_field ( 'sub_des' );
                    $sub_image = get_field ( 'sub_image');
                    $sub_button = get_field ( 'sub_button');
                    $ver_range_title = get_field ( 'ver_range_title');
                    $vertical_description = get_field ( 'vertical_description');
                    $ver_image = get_field ( 'ver_image');
                    $ver_button = get_field ( 'ver_button');
                    $size = "medium";
                ?>

                <div class="ws-40"></div>
                     <div class="row">
                        <div class="col-md-12">
                            <div class="section-title">
                                <h1><?php the_title(); ?></h1> 
                                <p><?php the_content(); ?></p>
                            </div>
                        </div>
                    </div>
                <div class="ws-40"></div>
                <div class="row">
                    <div class="col-md-12">
                        <h2><?php echo $sub_range_title; ?></h2>                          
                    </div>
                </div>
                 
                <div class="row">
                    <div class="col-md-3">
                        <?php if($sub_image) { 
                                echo wp_get_attachment_image ($sub_image, $size );
                        } ?>
                    </div>

                    <div class="col-md-8">
                        <p><?php echo $sub_des; ?></p>
                        <a class="btn btn-style1" href="http://localhost/hp-2018/contact/" role="button"><?php echo  $ver_button ?></a>
                    </div>
                </div>
                <div class="ws-40"></div>
                <div class="row">
                    <div class="col-md-12">
                        <h2><?php echo $ver_range_title; ?></h2>                          
                    </div>
                </div>
                <div class="row">
                       
                        <div class="col-md-8">
                            <p><?php echo $vertical_description; ?></p>
                            <a class="btn btn-style1" href="http://localhost/hp-2018/contact/" role="button"><?php echo  $ver_button ?></a>
                        </div>
                         <div class="col-md-3">
                             <?php if($ver_image) { 
                                echo wp_get_attachment_image ($ver_image, $size );
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
        


     