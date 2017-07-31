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
                    $objective = get_field ( 'objective');
                    $operation = get_field ( 'operation' );
                    $application = get_field ( 'application');
                    $duty = get_field ( 'duty');
                    $materials_of_construction = get_field ( 'materials_of_construction');
                    $diagram = get_field ( 'diagram');
                    $image = get_field ( 'image');
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
                    </div>
                <div class="ws-40"></div>
                <div class="row">
                    <div class="col-md-6 pump-system-img">
                        <ul>
                            <li>
                                <?php if($diagram) { 
                                echo wp_get_attachment_image ($diagram, $size );
                            } ?>
                            </li>
                            <li>
                                 <?php if($image) { 
                                echo wp_get_attachment_image ($image, $size );
                            } ?>
                            </li>
                        </ul>                   

                    </div>

                    <div class="col-md-6">
                        <ul>
                            <li><strong>Summary:</strong><br><?php the_content(); ?></li>
                            <li><strong>Objective:</strong><br><?php echo $objective; ?></li>
                            <li><strong>Operation:</strong><br><?php echo $operation; ?></li>
                            <li><strong>Application:</strong><br><?php echo $application; ?></li>
                            <li><strong>Duty:</strong><br><?php echo $duty; ?></li>
                            <li><strong>Materials of construction:</strong> <br><?php echo $materials_of_construction; ?></li>
                        </ul>
                        

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
        


     