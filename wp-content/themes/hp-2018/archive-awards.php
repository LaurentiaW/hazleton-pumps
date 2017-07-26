<?php 
/**
 * The is the archive page for awards
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
                            <h1>Our awards</h1>
                        </div>
                    </div>
                </div>
				
				<?php while ( have_posts() ) : the_post();
				 	$awarded_by = get_field ( 'awarded_by');
                    $category = get_field ( 'category' );
                    $certificate = get_field ( 'certificate');
                    $date = get_field ( 'date');
			 ?>
			
				<table class="case-studies">
					<tr>
						<th>Award</th>
    					<th>Awarded by</th>
    					<th>Category</th>
    					<th>Date</th>
  					</tr>
  					<tr>
  						<td><a href="<?php the_permalink (); ?>"><?php the_title(); ?></a></td>
    					<td><a href="<?php the_permalink (); ?>"><?php echo $awarded_by; ?></a></td>
    					<td><a href="<?php the_permalink (); ?>"><?php echo $category; ?></a></td>
    					<td><a href="<?php the_permalink (); ?>"><?php echo $date; ?></a></td>
    				</tr>					
				</table>

			
			</div>
			<div class="ws-50"></div>

                <div class="featured-slider">
                    <div id="featured_slider" class="owl-carousel owl-theme">
                        <div class="item sf-project">
                         	<img src="<?php echo $certificate; ?>"/>
                         	
                           
                            <div class="overlay">
                            	<a href="<?php the_permalink (); ?>"><?php the_title(); ?></a>
                            </div>
                        </div> <!-- item -->
                                      
                    </div>
                </div> <!-- / featured slider -->


	
			<?php endwhile; // end of the loop. ?>

			<div class="ws-50">
				
			</div>

<?php get_footer(); ?>