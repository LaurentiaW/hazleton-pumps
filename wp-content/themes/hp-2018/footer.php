<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Hazleton Pumps
 * @since Hazleton Pumps 1.0
 */
?>

<!--=================================
        =            FOOTER AREA            =
        ==================================-->
        
        <footer>
            <div class="footer-top">
                <div class="ws-50"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="widget footer-about-widget">
                                <h3>Hazleton Pumps</h3>
                                <h4>Customise technology | Incomparable Quality</h4>
                                <p>Hazleton Pumps develops and manufactures heavy duty pump and pump systems. Custom build and design for our clients' specific needs and requirements. Proudly made in South Africa and deployed worldwide.</p>

                                <h4>Get in touch</h4>

                                <ul>
                                    <li><a href="https://twitter.com/HazletonPumps" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="https://www.linkedin.com/company-beta/9005735/" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                                </ul>

                            </div>
                        </div> <!-- col-md-3 -->

                        <div class="col-md-3">
                            <div class="widget widget_nav_menu">
                                <h3>Quick links</h3>
                                <ul>
                                    <li><a href="http://localhost/hp-2018/pump-systems/">Pump Systems</a></li>
                                    <li><a href="http://localhost/hp-2018/hippo-range/">Hippo Slurry Pump Range</a></li>
                                    <li><a href="http://localhost/hp-2018/resources/">Resources</a></li>
                                    <li><a href="http://localhost/hp-2018/case-studies/">Case Studies</a></li>
                                    <li><a href="http://localhost/hp-2018/pump-curves/">Pump Curves</a></li>
                                    <li><a href="http://localhost/hp-2018/press-releases/">Press</a></li>
                                </ul>
                            </div>
                        </div>  <!-- col-md-3 -->

                        <div class="col-md-3">
                            <div class="widget widget_recent_entries" id="footer-pr">
                                <h3>Latest News</h3>
                                 
                                <ul class="footer-pr">

                                    <?php query_posts('posts_per_page=2&post_type=press_releases'); ?>
                                        <?php while ( have_posts() ) : the_post(); 
                                        $date = get_field ( 'date');
                                        $primg1 = get_field ( 'primg1' );
                                        $caption_image_1 = get_field ( 'caption_image_1' );
                                        $size = "thumbnail";
                                    ?>
                                    <li>
                                        <div class="post-thumb">
                                            <a href="<?php the_permalink (); ?>">
                                               <?php if($primg1) { 
                                                    echo wp_get_attachment_image ($primg1, $size );
                                                } ?>
                                            </a>
                                        </div>
                                        <div class="post-content">
                                            <a href="<?php the_permalink (); ?>">
                                                <h3><?php the_title(); ?></h3>
                                                <span class="date"><?php echo $date; ?></span>
                                            </a>
                                            <p><?php echo wp_trim_words( get_the_excerpt(), 10 ); ?></p>
                                        </div>
                                    </li> <!-- / single blog post -->

                                <?php endwhile; ?> 

                                </ul>
                            </div>
                        </div>  <!-- col-md-3 -->

                        <div class="col-md-3">
                            <div class="widget">
                                <h3>QUICK CONTACT</h3>
                                  <address>
                                    <strong>Address:</strong> 33 Van Tonder Street, Sunderland Ridge, Centurion <br> P.O. Box 10116, Centurion, 0046. Gauteng, South Africa <br>
                                    <strong>Email:</strong> <a href="mailto:info@hazletonpumps.co">info@hazletonpumps.co</a> <br>
                                </address>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="footer-btm">
                <div class="container">
                    <div class="row">
                        <div class="inner-ftr-btm">
                            

                            <div class="col-md-6 col-md-push-6">
                                <div class="footer-logo">
                                    <img src="<?php echo get_bloginfo( 'template_directory' ); ?> /assets/img/logowhite.png" alt="Hazleton Pumps Hippo Logo">
                                </div>
                            </div> <!-- col-md-6 -->

                            <div class="col-md-6 col-md-pull-6">
                                <div class="copyright">
                                    <p>&copy;  2017 - All rights reserved </p>
                                </div>
                            </div> <!-- col-md-6 -->


                        </div>


                    </div>
                </div>
            </div> <!-- / footer-btm -->
        </footer>
        
        <!--====  End of FOOTER AREA  ====-->
        
        <?php wp_footer(); ?>
    </body>
</html>