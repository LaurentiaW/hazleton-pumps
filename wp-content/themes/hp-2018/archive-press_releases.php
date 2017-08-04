
<?php 
/**
 * The is the archive page for press releases
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
                            <h1>Press Releases</h1>
                            <p>Hazleton Pumps latest newsworthy mentions</p>
                        </div>
                    </div>
                </div>
         <?php while ( have_posts() ) : the_post(); 

                        $date = get_field ( 'date');
                        $primg1 = get_field ( 'primg1' );
                        $size = "medium";
                ?>

                <div class="alternating-content">

                  <div class="item">  
                    <div class="pr-img">  
                      <a href="<?php the_permalink (); ?>"> 
                        <?php  if($primg1 ) { 
                            echo wp_get_attachment_image ($primg1, $size);
                        } ?>    
                      </a>
                    </div>
                    
                    <div class="caption">  
                        <ul>
                          <li><h3><a href="<?php the_permalink (); ?>"><?php the_title(); ?></a></h3></li>
                          <li><p><?php echo $date; ?></p></li>
                          <li><p><?php the_excerpt(); ?><a class="read-more-link" href="<?php the_permalink(); ?>">Read More <span>&rsaquo;</span></a></p></li>
                        </ul>
                    </div>  
                  </div>
                </div>
              <?php endwhile; ?> 
              <div class="ws-60"></div>
              <hr>

               <div class="row">
               <div class="col-md-12 center">
                    <p>For more information on any of our press releases, please don't hesitate to contact us!</p>    
                   <div class="header-request-quote">
                        <a href="http://localhost/hp-2018/contact/" class="btn btn-style1"><strong> Get in touch</strong></a>
                    </div>
               </div>
               
            </div>
          </div>
<div class="ws-60"></div>
                

        <?php get_footer(); ?>