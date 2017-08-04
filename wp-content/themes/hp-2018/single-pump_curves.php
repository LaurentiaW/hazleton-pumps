<?php 
/**
 * The is the template page for custom post type pump curves
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
                    $pole2 = get_field ( 'pole2');
                    $caption_2pole = get_field ( 'caption_2pole' );
                    $pole4 = get_field ( 'pole4');
                    $caption_4pole = get_field ( 'caption_4pole');
                    $pole6 = get_field ( 'pole6');
                    $caption_6pole = get_field ( 'caption_6pole');
                    $size = "medium";
                ?>

                <div class="ws-40"></div>
                <div class="container">
                    <div class="row">
                    <div class="col-md-12">
                        <div class="section-title">
                            <h1><?php the_title(); ?></h1> 
                        </div>
                    </div>
               
                <div class="row">
                    <div class="col-md-4">
                        <figure>
                            <?php if($pole2) { 
                                echo wp_get_attachment_image ($pole2, $size );
                            } ?>
                            <figcaption><a href="<?php echo $pole2; ?>" target="_blank"> <?php echo $caption_2pole; ?> </a></figcaption>
                        </figure> 
                    </div>
                     <div class="col-md-4">
                        <figure>
                            <?php if($pole4) { 
                                echo wp_get_attachment_image ($pole4, $size );
                            } ?>
                            <figcaption><?php echo $caption_4pole; ?></figcaption>
                        </figure> 
                    </div>
                   <div class="col-md-4">
                        <figure>
                            <?php if($pole6) { 
                                echo wp_get_attachment_image ($pole6, $size );
                            } ?>
                            <figcaption><?php echo $caption_6pole; ?></figcaption>
                        </figure> 
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
        


     