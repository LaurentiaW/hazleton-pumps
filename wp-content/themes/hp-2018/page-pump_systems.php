<?php 
/**
 * The is the archive page for pump systems
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
			<div class="row">
                <div class="col-md-12">
                    <div class="section-title">
                        <h1>Pump Systems</h1>
                    </div>
                </div>
            </div>
				
			<?php while ( have_posts() ) : the_post();
				    $diagram = get_field ( 'diagram');
                    $image = get_field ( 'image');
                    $size = "medium";
                    $align = "center-block"
			 ?>
			
                <section class="pump-system-content">
                    <div class="row">
                        <div class="col-md-6 pump-head-content">
                            <ul>
                                <li><h3><a href="<?php the_permalink (); ?>"><?php the_title(); ?><?php the_title(); ?></h3></a></li>
                                <li><?php the_content(); ?></li>
                            </ul>
                        </div>
                        <div class="col-md-6 pump-sys-img">
                            <a class="center-block"> href="<?php the_permalink (); ?>">
                            <?php  if($diagram ) { 
                               echo wp_get_attachment_image ($diagram, $size, $align );
                            } ?>   
                            </a>
                        </div>

                    </div>
                    <hr>  
                </section>
            
	        <?php endwhile; // end of the loop. ?>
        
            <div class="row">
               <div class="col-md-12">
                    <p>Our pump solutions can be custom made to your pumping requirements. Don't see a solution to your current pumping problem? Let us help you configure a solution!</p>    
                    <button type="submit">Contact Us!</button>
               </div>
               
                
            </div>
        </div>
			<div class="ws-50"></div>

        <?php get_footer(); ?>