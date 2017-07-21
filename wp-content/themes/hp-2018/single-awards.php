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

                    $awarded_by = get_field ( 'awarded_by');
                    $category = get_field ( 'category' );
                    $date = get_field ( 'date');
                    $certificate = get_field ( 'certificate');
                    $press_clipping = get_field (
                    'press_clipping');  ?>

            <div class="ws-40"></div>
                <div class="container">
                    <div class="row">
                    <div class="col-md-12">
                        <div class="section-title">
                            <h1><?php the_title(); ?></h1> 
                        </div>
                    </div>
         
                    <ul class="ul no-spaces row">
                        <li class="list-col-md-4"><strong>Awarded by:</strong><br> <?php echo $awarded_by; ?> </li>
                        <li class="list-col-md-4"><strong>Awarded by:</strong><br> <?php echo $awarded_by; ?> </li>
                        <li class="list-col-md-4"><strong>Date:</strong> <br> <?php echo $date; ?> </li>
                    </ul>
                    <div class="row">
                        <div class="col-md-6">
                            <?php if($certificate) { ?>
                                <img class="img-responsive" src="<?php echo $certificate; ?>"/>
                            <?php } ?>
                        </div>
                        <div class="col-md-6">
                            <?php if($press_clipping) { ?>
                                <img class="img-responsive center-block" src="<?php echo $press_clipping; ?>"/>
                            <?php } ?>
                        </div>
                    </div>
                </div>

                <div class="ws-50"></div>
                	

                <p><?php the_content(); ?></p>

                <?php endwhile; else: ?>

                <p>Sorry, no page found.</p>

                <?php endif; ?>
            </div>

        <?php get_footer(); ?>
        