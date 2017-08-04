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
			 ?>
			
                     <div class="row">
                        <div class="col-md-6 pump-head-content">
                            <ul>
                                <li><a href="<?php the_permalink (); ?>"><h3><?php the_title(); ?></h3></a></li>
                                <li><?php the_content(); ?></li>
                            </ul>
                        </div>
                        <div class="col-md-6 pump-sys-img">
                            <a href="<?php the_permalink (); ?>">
                            <?php  if($diagram ) { 
                               echo wp_get_attachment_image ($diagram, $size, $align );
                            } ?>   
                            </a>
                        </div>

                    </div>
                    <hr>  
              
            
	        <?php endwhile; // end of the loop. ?>
        
            <div class="row">
               <div class="col-md-12 center">
                    <p>Our pump solutions can be custom made to your pumping requirements. Don't see a solution to your current pumping problem?<br> Let us help you configure a solution!</p>    
                   <div class="header-request-quote">
                        <a href="" class="btn btn-style1"><strong> Get in touch</strong></a>
                    </div>
               </div>
               
                
            </div>
        </div>
			<div class="ws-50"></div>

        <?php get_footer(); ?>