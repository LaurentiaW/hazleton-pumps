<?php 
/**
 * The is the archive page for verticals
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
      <?php query_posts('post_type=hippo'); ?>
        <?php if ( have_posts() ) : while ( have_posts() ): the_post(); 
                    $ver_range_title = get_field ( 'ver_range_title');
                    $vertical_description = get_field ( 'vertical_description');
                ?>

		<div class="container">
			<div class="row">
                <div class="col-md-12">
                    <div class="section-title">
                        <h1><?php echo $ver_range_title; ?></h1>
                    </div>
                </div>
            </div>

        <?php endwhile; ?>
		<?php wp_reset_query(); ?>
        		
			<?php while ( have_posts() ) : the_post();
                    $intro = get_field ( 'intro' )
                    $pump_diagram = get_field ( 'pump_diagram');
                    $size = "medium";
             ?>
			<ul class="ul no-spaces row">
                <section class="vertical-spindles">
                    <div class="row">
                        <div class="col-md-6">
                            <ul>
                                <li><a href="<?php the_permalink (); ?>"><h3><?php the_title(); ?></h3></a></li>
                                <li><?php echo $intro; ?></li>
                            </ul>
                        </div>
                        <div class="col-md-6 pump-sys-img">
                            <a href="<?php the_permalink (); ?>">
                            <?php  if($diagram ) { 
                               echo wp_get_attachment_image ($diagram, $size);
                            } ?>   
                            </a>
                        </div>

                    </div>
                    <hr>  
                </section>


                    <?php query_posts('posts_per_page=4&post_type=pump_systems'); ?>
                        <?php while ( have_posts() ) : the_post(); 
                            $diagram = get_field ( 'diagram');
                            $size = "medium";
                            ?>

                            <li class="list-col-md-6">
                                <div class="single-service"> 
                                    <h3><a href="<?php the_permalink (); ?>"><?php echo wp_trim_words( get_the_title(), 6 ); ?></a></h3>
                                    <div class="serv-img-wrap">
                                        <article class="pump-systems"> 
                                            <p><?php the_excerpt(); ?> </p>
                                             <a href="<?php the_permalink (); ?>">More &raquo; </a>
                                        </article>
                                        <figure class="pump-systems-img">
                                           <a href="<?php the_permalink (); ?>">
                                                <?php  if($diagram ) { 
                                                    echo wp_get_attachment_image ($diagram, $size);
                                                } ?>   
                                            </a>
                                        </figure>
                                    </div>       
                                </div>                    
                            </li>
                    <?php endwhile; ?> 
                </ul>
        </div>
    </section>
            
	        <?php endwhile; // end of the loop. ?>
        
            
        </div>
			<div class="ws-50"></div>

        <?php get_footer(); ?>