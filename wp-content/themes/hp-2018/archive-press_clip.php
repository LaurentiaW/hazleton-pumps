
<?php 
/**
 * The is the archive page for press clippings
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
                            <h1>Press Clippings</h1>
                            <p>In the papers</p>
                        </div>
                    </div>
                </div>
         <?php while ( have_posts() ) : the_post(); 

                        $publication = get_field ( 'publication');
                        $published_date = get_field ( 'published_date' );
                        $image = get_field ( 'image');
                        $visit_publication = get_field ( 'visit_publication');
                        $size = "thumbnail" 
                    ?>

              
                     <div class="row">
                        <div class="col-md-6 pump-head-content">
                            <ul>
                                <li><a href="<?php the_permalink (); ?>"><h3><?php the_title(); ?></h3></a></li>
                                <li><?php echo $publication; ?></li>
                            </ul>
                        </div>
                        <div class="col-md-6 pump-sys-img">
                            <a href="<?php the_permalink (); ?>">
                            <?php  if($image ) { 
                               echo wp_get_attachment_image ($image, $size);
                            } ?>   
                            </a>
                        </div>

                    </div>
                    <hr>  
                </section>
            
          <?php endwhile; // end of the loop. ?>

              <div class="ws-60"></div>
              <hr>

             
               
            </div>
          </div>
<div class="ws-60"></div>
                

        <?php get_footer(); ?>