<?php 
/**
 * The is the template page for custom post types submersible
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
                    $adv_pump_config = get_field ( 'adv_pump_config');
                    $applications = get_field ( 'applications');
                    $img = get_field ( 'img');
                    $pump_diagram = get_field ( 'pump_diagram');
                    $diagram_caption = get_field ( 'diagram_caption' );
                    $iec_stds = get_field ( 'iec_stds' );
                    $alternative_impeller = get_field ( 'alternative_impeller' );
                    $alternative_impeller2 = get_field ( 'alternative_impeller2' );
                    $alternative_impeller3 = get_field ( 'alternative_impeller3' );
                    $twin_volute = get_field ( 'twin_volute' );
                    $intro = get_field  ( 'intro' );
                    $diagram_with_description = get_field  ( 'diagram_with_description' );
                    $size = "medium";
                ?>

                <div class="ws-40"></div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="section-title">
                                <h1><?php the_title(); ?></h1> 
                            </div>
                        </div>

                    <div class="ws-40"></div>

                    <div class="row">
                        <div class="col-md-4">
                            <p><?php echo $intro; ?></p>
                        </div>
                        <div class="col-md-4 ">
                            <figure class="center-block">
                                <a href="<?php echo get_bloginfo( 'template_directory' ); ?> /assets/img/hippo-logo.png" alt="The Hippo Slurry Pump Range Logo" target="_blank">
                                <?php if($pump_diagram) { 
                                    echo wp_get_attachment_image ($pump_diagram, $size );
                                } ?>
                                
                                <figcaption><?php $id = $diagram_with_description; // ID of an attachment
                                    echo wp_get_attachment_link( $id, '' , false, false, 'Diagram of pump confifuration' ); 
                                    ?>
                                
                                </figcaption>
                                </a>
                            </figure>
                       
                        </div>
                        <div class="col-md-4">
                            <p><?php the_content(); ?></p>
                        </div>
                    </div>

                  

                    <div class="row">
                        <div class="col-md-5">
                            <?php if($adv_pump_config) { ?>
                                <h4>Advantages of the <?php the_title(); ?> pump configuration</h4>
                            <?php } ?> 
                            <figure>
                                <?php if($twin_volute) { 
                                echo wp_get_attachment_image ($twin_volute, $size );
                                } ?> 
                            </figure>
                            <p><?php echo $adv_pump_config; ?></p>
                        </div>
                        <div class="col-md-5 col-md-offset-1">

                            <?php if($applications) { ?>
                                <h4>Applications</h4>
                                <p><?php echo $applications; ?></p>
                            <?php } ?>

                            <br>
                            <?php if($iec_stds) { ?>

                                <h4>IEC (SANS) standards</h4>
                                <p><?php echo $iec_stds; ?></p>
                                <?php } ?> 
                            
                        </div>
                    </div>
                    <?php if($alternative_impeller) { ?>

                        <div class="row">
                            <div class="col-md-12">
                                <h4>Alternative Impeller types for the <?php the_title(); ?></h4>
                                <div class="col-md-4">
                                    <?php if($alternative_impeller) { 
                                echo wp_get_attachment_image ($alternative_impeller, $size );
                                } ?> 
                                </div>
                                <div class="col-md-4">
                                    <?php if($alternative_impeller2) { 
                                echo wp_get_attachment_image ($alternative_impeller2, $size );
                                } ?> 
                                </div>
                                <div class="col-md-4">
                                    <?php if($alternative_impeller3) { 
                                echo wp_get_attachment_image ($alternative_impeller3, $size );
                                } ?> 
                                </div>
                            </div>                
                        </div>
                     <?php } ?> 
                    
                    <div class="row">
                        <div class="col-md-12">
                            <div class="header-request-quote">
                                <a class="btn btn-style1" href="http://localhost/hp-2018/contact/" role="button">Contact our sales team »</a>
                            </div>
                        </div>    
                    </div>  




                </div>
                    
              

                <?php endwhile; else: ?>

                <p>Sorry, no page found.</p>

                <?php endif; ?>
            </div>
            
            <div class="ws-40"></div>
        
        <?php get_footer(); ?>
        