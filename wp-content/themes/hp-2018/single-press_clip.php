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

                    $publication = get_field ( 'publication');
                    $published_date = get_field ( 'published_date' );
                    $image = get_field ( 'image');
                    $visit_publication = get_field ( 'visit_publication');
                    $size = "full"  ?>

            <div class="ws-40"></div>
                <div class="container">
                    <div class="row">
                    <div class="col-md-12">
                        <div class="section-title">
                            <h1><?php the_title(); ?></h1> 
                        </div>
                    </div>
         
                    <ul class="ul no-spaces row">
                        <li class="list-col-md-4"><strong>Publication:</strong><br> <?php echo $publication; ?> </li>
                        <li class="list-col-md-4"><strong>Publication Date:</strong><br> <?php echo $published_date; ?> </li>

                        <li class="list-col-md-4"><strong><a href="<?php echo $visit_publication; ?>">Visit publication</a></strong>  </li>
                    </ul>
                    <div class="row">
                        <div class="col-md-12">
                             


                            <?php if($image) { 
                                echo wp_get_attachment_image ($image, $size );
                            } ?>
                        </div>
                       
                    </div>
                </div>


                <div class="ws-50"></div>
                	

                <p><?php the_content(); ?></p>

                <?php endwhile; else: ?>

                <p>Sorry, no page found.</p>

                <?php endif; ?>
            </div>
        </div>
        <?php get_footer(); ?>
        