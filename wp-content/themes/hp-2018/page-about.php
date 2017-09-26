     <?php 
/**
 * The is the template page for the about page
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



        <!--==================================
        =            ABOUT US PROMO            =
        ===================================-->
        <section class="about-us-promo">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="about-us-left">
                            <h4>A family owned and managed pump manufacturer</h4>
                            <p>
                                The shortest possible explanation of who we are. Founded in 1979 Hazleton Pumps, a family owned business located in Centurion, Gauteng, South Africa, repaired submersible pumps and electric motors for the mines and industries.  The harsh mining conditions in South Africa caused a high rate of failure of these repaired submersible pumps and this lead to the design, development and manufacture of specialised pumping solutions that are capable of pumping acidic liquids containing solids under various conditions.  <a class="read-more-link" href="http://localhost/hp-2018/company-profile/">Read More <span>&rsaquo;</span></a>
                            </p>
                           
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="about-us-right">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/about/about-industry-update.jpg" alt="About Industry" class="img-responsive">
                           
                        </div>   
                    </div>
                </div>
            </div>
        </section>

        <div class="ws-120"></div>

        <!--===================================
        =            SECTION PROMO            =
        ====================================-->
        
        <section class="section-promo-1 ">
            <div class="overlay-50">
                <div class="container">
                            <h1>Let our team help you find <br> <span>the perfect pump solution!</span></h1>
                            <a href="http://localhost/hp-2018/contact/" class="btn btn-style1 btn-lg">Get in touch</a>
                </div>
            </div>
        </section>
        
        <div class="ws-120"></div>
        <!--====  End of SECTION PROMO  ====-->
      
      <div class="container"> 
        <div class="row">
            <div class="col-md-12">
                <div class="section-title">
                    <h1>Accolades & Features</h1>
                        
                </div>
            </div>
            
        </div>
        
            
          <div class="row">
            <div class="col-md-6">
                <h3><a href="http://localhost/hp-2018/awards/">Our Recent Accolades & Awards</a></h3>
                    <ul class="ul no-spaces row">
                    <?php query_posts('posts_per_page=4&post_type=awards'); ?>
                        <?php while ( have_posts() ) : the_post(); 
                            $certificate = get_field ( 'certificate');
                            $size = "thumbnail";
                            ?>

                            <li class="list-col-md-3">
                                <div class="single-service"> 
                                    <h3><a href="<?php the_permalink (); ?>"></a></h3>
                                    <div class="serv-img-wrap">
                                        <figure class="pump-systems-img">
                                           <a href="<?php the_permalink (); ?>">
                                                <?php  if($certificate ) { 
                                                    echo wp_get_attachment_image ($certificate, $size);
                                                } ?>  
                                            <figcaption><?php echo wp_trim_words( get_the_title(), 4 ); ?></figcaption>
                                            </a>
                                        </figure>
                                    </div>       
                                </div>                    
                            </li>
                    <?php endwhile; ?> 
                    <?php wp_reset_query(); ?>
                </ul>

            </div>            
            <div class="col-md-6">
                <h3><a href="http://localhost/hp-2018/press-clippings/">Newsworthy features</a></h3>
                    <ul class="ul no-spaces row">
                    <?php query_posts('posts_per_page=4&post_type=press_clip'); ?>
                        <?php while ( have_posts() ) : the_post(); 
                            $image = get_field ( 'image');
                            $size = "thumbnail" 
                            ?>

                            <li class="list-col-md-3">
                                <div class="single-service"> 
                                    <h3><a href="<?php the_permalink (); ?>"></a></h3>
                                    <div class="serv-img-wrap">
                                        <figure class="pump-systems-img">
                                           <a href="<?php the_permalink (); ?>">
                                                <?php  if($image ) { 
                                                    echo wp_get_attachment_image ($image, $size);
                                                } ?>  
                                            <figcaption><?php echo wp_trim_words( get_the_title(), 4 ); ?></figcaption>
                                            </a>
                                        </figure>
                                    </div>       
                                </div>                    
                            </li>
                    <?php endwhile; ?> 
                    <?php wp_reset_query(); ?>
                </ul>

            </div>            
        </div>
  
    
         <section class="press-releases">
         <div class="row">
            <div class="col-md-12">
                <div class="section-title">
                    <h1><a href="http://localhost/hp-2018/press-releases/"> Press Releases</a></h1>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                
                <?php query_posts('posts_per_page=4&post_type=press_releases'); ?>
                    <?php while ( have_posts() ) : the_post(); 

                        $date = get_field ( 'date');
                        $primg1 = get_field ( 'primg1' );
                        $size = "medium";
                ?>

                <div class="alternating-content">

                  <div class="item">  
                    <div class="pr-img"> <a href="<?php the_permalink (); ?>"> 
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
          <?php wp_reset_query(); ?>
        </div>

        
        </section>
        <hr>

            </div>
        
    </div>
    <div class="ws-60"></div>   
<div class="row">
               <div class="col-md-12 center">
                    <p>Please feel free to contact us should you require any further more information about Hazleton Pumps</p>    
                   <div class="header-request-quote">
                        <a href="http://localhost/hp-2018/contact/" class="btn btn-style1"><strong> Get in touch</strong></a>
                    </div>
               </div>
               
                
            </div>

           
         <div class="ws-40"></div>   
       </div>
</section>
    <?php get_footer(); ?>