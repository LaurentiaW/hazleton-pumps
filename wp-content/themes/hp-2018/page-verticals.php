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
        <?php while ( have_posts() ) : the_post(); 
                    $ver_range_title = get_field ( 'ver_range_title');
                    $intro_ver = get_field ( 'intro_ver');
                ?>

		<div class="container">
			<div class="row">
                <div class="col-md-12">
                    <div class="section-title">
                        <h1><?php echo $ver_range_title; ?></h1>
                        <p><?php echo $intro_ver; ?></p>
                    </div>
                </div>
            </div>

        <?php endwhile; ?>
		<?php wp_reset_query(); ?>		
		<ul class="ul no-spaces row">
                    <?php query_posts('post_type=verticals'); ?>
                        <?php while ( have_posts() ) : the_post(); 
                            $intro = get_field ( 'intro' );
                            $pump_diagram = get_field ( 'pump_diagram' );
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
                                                <?php  if($pump_diagram ) { 
                                                    echo wp_get_attachment_image ($pump_diagram, $size);
                                                } ?>   
                                            </a>
                                        </figure>
                                    </div>       
                                </div>                    
                            </li>
                    <?php endwhile; ?> 
        </ul>
        
    </div>
        
	<div class="ws-50"></div>

    <?php get_footer(); ?>

       