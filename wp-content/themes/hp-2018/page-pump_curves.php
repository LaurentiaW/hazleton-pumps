<?php 
/**
 * The is the archive page for Pump Curves
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
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-title">
                            <h1>Pump Performance Curves</h1>
                        </div>
                    </div>
                </div>
                
                
            
            <?php while ( have_posts() ) : the_post();
                    $pole2 = get_field ( 'pole2');
                    $caption_2pole = get_field ( 'caption_2pole' );
                    $pole4 = get_field ( 'pole4');
                    $caption_4pole = get_field ( 'caption_4pole');
                    $pole6 = get_field ( 'pole6');
                    $caption_6pole = get_field ( 'caption_6pole');
                    $size = "thumbnail";
                    $icon = true;
             ?>
            
                <section class="pump-system-content">
                    <div class="row">
                        <div class="col-md-12>">
                            <a href="<?php the_permalink (); ?>"><h3><?php the_title(); ?></h3></a>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <figure>  
                                <a href="<?php the_permalink (); ?>">
                                    <?php if($pole2) { 
                                        echo wp_get_attachment_image ($pole2, $size );
                                    } ?>
                                    <figcaption><?php echo $caption_2pole; ?> </figcaption>
                                </a>
                            </figure> 
                        </div>
                        
                        <div class="col-md-4">
                            <figure>  
                                <a href="<?php the_permalink (); ?>">
                                    <?php if($pole4) { 
                                        echo wp_get_attachment_image ($pole4, $size );
                                    } ?>
                                    <figcaption><?php echo $caption_4pole; ?></figcaption>
                                </a>
                            </figure> 
                        </div>
                        
                        <div class="col-md-4">
                            <figure>
                                <a href="<?php the_permalink (); ?>">
                                    <?php if($pole6) { 
                                        echo wp_get_attachment_image ($pole6, $size );
                                    } ?>
                                    <figcaption><?php echo $caption_6pole; ?></figcaption>
                                </a>
                            </figure> 
                        </div>
                    
                    </div>
                        
                    <hr>  
                </section>
            
            <?php endwhile; // end of the loop. ?>
        
            <div class="row">
               <div class="col-md-12 center">
                    <p>Need more information on our pump performance curves? Our sales team are ready to assist you with any of your queries!</p>    
                   <div class="header-request-quote">
                        <a href="" class="btn btn-style1"><strong> Get in touch</strong></a>
                    </div>
               </div>
               
                
            </div>
        </div>
            <div class="ws-50"></div>

        <?php get_footer(); ?>