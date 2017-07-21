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
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="https://www.linkedin.com/company-beta/9005735/"><i class="fa fa-linkedin"></i></a></li>
                                </ul>

                            </div>
                        </div> <!-- col-md-3 -->

                        <div class="col-md-3">
                            <div class="widget widget_nav_menu">
                                <h3>Quick links</h3>
                                <ul>
                                    <li><a href="#">Pump Systems</a></li>
                                    <li><a href="#">Hippo Slurry Pump Range</a></li>
                                    <li><a href="#">Resources</a></li>
                                    <li><a href="#">Case Studies</a></li>
                                    <li><a href="#">Pump Curves</a></li>
                                    <li><a href="#">Press</a></li>
                                </ul>
                            </div>
                        </div>  <!-- col-md-3 -->

                        <div class="col-md-3">
                            <div class="widget widget_recent_entries">
                                <h3>Latest News</h3>
                                <ul>
                                    <li>
                                        <div class="post-thumb">
                                            <a href="#">
                                                <img src="assets/img/featured/01.jpg" alt="Blog / News">
                                            </a>
                                        </div>
                                        <div class="post-content">
                                            <a href="#">
                                                <h3>Great news title news title</h3>
                                                <span class="date">12th May, 2017</span>
                                            </a>
                                            <p>Lorem ipsum dolor sit amet, </p>
                                        </div>
                                    </li> <!-- / single blog post -->

                                    <li>
                                        <div class="post-thumb">
                                            <a href="#">
                                                <img src="assets/img/featured/01.jpg" alt="Blog / News">
                                            </a>
                                        </div>
                                        <div class="post-content">
                                            <a href="#">
                                                <h3>Great news title news title</h3>
                                                <span class="date">12th May, 2017</span>
                                            </a>
                                            <p>Lorem ipsum dolor sit amet, </p>
                                        </div>
                                    </li> <!-- / single blog post -->

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