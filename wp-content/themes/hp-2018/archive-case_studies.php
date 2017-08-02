<?php 
/**
 * The is the archive page for case-studies
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
                            <h1>Summary of case Studies</h1>
                        </div>
                    </div>
                </div>
				
				
				<table class="case-studies">
					<tr>
    					<th>Application:</th>
    					<th>Industry:</th>
    					<th>Pump Type and/or Pump System:</th>
  					</tr>
  					<?php while ( have_posts() ) : the_post();
					$industry = get_field("industry");
					$pump_configuration = get_field("pump_configuration");
					$application = get_field("application");
			 		?>
  					<tr>
    					<td><a href="<?php the_permalink (); ?>"><?php echo $application; ?></a></td>
    					<td><a href="<?php the_permalink (); ?>"><?php echo $industry; ?></a></td>
    					<td><a href="<?php the_permalink (); ?>"><?php echo $pump_configuration; ?></a></td>
    				</tr>		
    				<?php endwhile; // end of the loop. ?>
			
				</table>


			</div>
			
	
			
			<div class="ws-50"></div>

		<?php get_footer(); ?>