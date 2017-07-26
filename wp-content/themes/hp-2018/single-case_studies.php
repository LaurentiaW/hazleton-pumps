<?php 
/**
 * The template for case studies
 *
 * @package WordPress
 * @subpackage Hazleton Pumps
 * @since Hazleton Pumps 1.0
 */


        get_header(); ?>

            <div class="container">
                <?php if ( have_posts() ) : while ( have_posts() ): the_post(); 
                    $industry = get_field( 'industry');
                    $application = get_field( 'application');
                    $pump_configuration = get_field( 'pump_configuration');
                    $customer_concern = get_field( 'customer_concern');
                    $challange_met = get_field( 'challange_met');
                    $img1 = get_field( 'img1');
                    $img2 = get_field( 'img2');
                    $img3 = get_field( 'img3');
                    $size = "full";
                ?>
                 <div class="row">
                    <div class="col-md-12">
                        <div class="section-title">
                            <h1><?php the_title(); ?></h1>
                        </div>
                    </div>
                </div>


                <div class="col-md-3  col-sm-6 col-xs-6">
                    <div class="case-study-img">
             
                        <?php if($img1) { 
                            echo wp_get_attachment_image( $img1, $size ); 
                         } ?>

                        <?php if($img2) { 
                            echo wp_get_attachment_image( $img2, $size );
                        } ?>

                        <?php if($img3) { 
                            echo wp_get_attachment_image( $img3, $size );
                        } ?>
                        
                    </div>
                </div>

                <div class="col-md-offset-1 col-md-8 col-sm-6 col-xs-6">

                    <h4>Industry: <?php echo $industry; ?></h4>
                    <h4>Application: <?php echo $application; ?></h4>
                    <h4>Pump Configuration and/or Pump System: <?php echo $pump_configuration; ?></h4>
                    <p><strong>Customer's Pumping Challenge: </strong> <?php echo $customer_concern; ?></p> 
                    <p><strong>How the customer's pumping challenge was solved:</strong> <?php echo $challange_met; ?>  </p>
                </div>
               <div class="row">
                   <div class="ws-50"></div>
               </div>
                
                <p><?php the_content(); ?></p>
                <div class="row">
                   <div class="ws-50"></div>
               </div>
        </div>
                
                <?php endwhile; else: ?>

                <p>Sorry, no page found.</p>

                <?php endif; ?>
        </div>

        <?php get_footer(); ?>
        