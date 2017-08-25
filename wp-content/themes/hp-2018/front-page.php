<?php
/**
 * The template for displaying the homepage
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Hazleton Pumps
 * @since Hazleton Pumps 1.0
 */
     get_header(); ?>    
        


         <section class="alert">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <div class="notice well">
                            <p>Hazleton Pumps can provide spare parts and services to all Hazleton Pumps products and systems. This includes pumps originally manufactured in North America & Canada. </p> 
                            </div>
                        </div>
                    </div>
        </section>

        <!--=================================
        =            SLIDER AREA            =
        ==================================-->
        <section class="slider">
            <div class="container">
                <div class="ws-190"></div>
                    <div class="row">
                        <div class="col-md-7">
                            <div class="slider-text-block">
                              
                              <div class="ws-100"></div>
                                <!--                                
                                <div class="slider-btns">
                                    <a href="" class="btn btn-style1">OUR SOLUTIONS</a> 
                                    <a href="" class="btn btn-style2">CONTACT US</a> 
                                </div>
                                --> 
                                <h1>Hazleton Pumps<br> Getting to the bottom, faster!</h1>
                            </div>

                        </div>
                    </div>
                <div class="ws-190"></div>
            </div>
        </section>
        
        
        <!--====  End of SLIDER AREA  ====-->

        <div class="ws-50"></div>
        <hr>

         
        <!--===================================
        =     SERVICES AREA/PUMP SYSTEMS     =
        ====================================-->


        <section class="service-area">

            <div class="ws-100"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-title">
                            <h1>Pumping Systems</h1>
                        </div>
                    </div>
                </div>

           
            <div class="well well-lg">
                
                 <ul class="ul no-spaces row">
                    <?php query_posts('posts_per_page=4&post_type=pump_systems'); ?>
                        <?php while ( have_posts() ) : the_post(); 
                            $diagram = get_field ( 'diagram');
                            $size = "medium";
                            ?>

                            <li class="list-col-md-6">
                                <div class="single-service"> 
                                    <h3><a href="<?php the_permalink (); ?>"><?php echo wp_trim_words( get_the_title(), 4 ); ?></a></h3>
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
                    <?php wp_reset_query(); ?>
                </ul>
            </div>
        </div>
    </section>
        <!--====  End of SERVICES AREA  ====-->
        
        <div class="ws-50"></div>
        <hr>
       
         <!--===================================
        =      HIPPO SLURRY PUMP RANGE         =
        ====================================-->

         <section class="hippo-pump-range">

            <div class="ws-100"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="section-title">
                                <h1>The Hippo Slurry Pump Range</h1>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-7">
                            <h3>Your ally in pumping corrosive and acidic slurries</h3>
                            <p>The award-winning Hippo Slurry Pump Range is the perfect workhorse to deal with the continuous and harsh demands of the mining and mineral processing industries. Custom built, the Hippo Slurry Pump Range provides pumping solutions that are robust, rugged, reliable and flexible. <br><br>The pumps capacities are extremely diverse and can assist in applications ranging from high-volume dewatering applications to settled out acidic and corrosive slurries. The Hippo Slurry Pump Range can be built to explosion-proof standard IEC 60097-1:2005 and is available in various formats and applications. Click here for more.... </p>
                        </div>
                        <div class="col-md-offset-1 col-md-3">
                            <a href="<?php echo home_url(); ?>/hippo-range">
                                 <img class="img-responsive center-block" src="<?php echo get_template_directory_uri(); ?>/assets/img/hippo-logo.png" alt="The Hippo Slurry Pump Range Logo"> 
                                 <img class="center-block" src="<?php echo get_template_directory_uri(); ?>/assets/img/ally-in-pumping-corrosive-liquids.png" alt="The Hippo Slurry Pump Range Logo">   
                            </a>
                        </div>
                     </div>
                </div>
        </section>
               

<!--create slider of hippo pump range -->


        <section class="pump-line-up">

            <div class="ws-100"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-title">
                            <h3>The Hippo Pump Range line-up</h3>
                        </div>
                    </div>
                </div>
            <div class="row text-center">
                
           
                <ul class="ul no-spaces row">
                    <?php query_posts('post_type=pump_img'); ?>
                        <?php while ( have_posts() ) : the_post(); 
                            $abbreviation = get_field ( 'abbreviation');
                            $img = get_field ( 'img');
                            $size = "medium";
                            ?>
                    <li class="col-md-4 col-xs-10 col-xs-offset-1 col-sm-offset-0 col-sm-6 center-block">
                        <div class="single-service">
                            <div class="serv-img-wrap">
                               <figure class="pump-systems-img">
                                   <a href="http://localhost/hp-2018/hippo-range/">

                                    <?php  if($img ) { 
                                                    echo wp_get_attachment_image ($img, $size);
                                                } ?>   
                                    <h4><?php echo $abbreviation; ?> </h4>
                                    <p><?php the_title(); ?></p>
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
    </section>

    
       
         <!--=================================
        =      COMPETITIVE ADVANTAGE      =
        ==================================-->
       <hr>
       <div class="ws-50"></div>
             <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="section-title">
                                <h1>Our competitive advantage</h1>
                                <p>What set Hazleton Pumps and the Hippo Slurry Pump Range above the rest</p>
                            </div>
                        </div>
                    </div>
                    <div class="ws-50"></div>
                    <div class="row">
                        <div class="col-md-4 col-xs-10 col-xs-offset-1 col-sm-offset-0 col-sm-6">
                            <div class="cust-tech">
                                <h4>Customize Technology</h4>
                                    <i class="fa fa-pencil-square-o"></i>
                                    <p> Hazleton Pump systems are custom build with custom designed with pumps from The Hippo Slurry Pump Range, for each of our clients' specific needs.</p>  
                            </div>
                        </div>
                        <div class="col-md-4 col-xs-10 col-xs-offset-1 col-sm-offset-0 col-sm-6">
                            <div class="cust-tech">
                                <h4>Adaptative Materials</h4>
                                    <i class="fa fa-arrows"></i>
                                    <p>The materials can be adjusted according to the type of the applications from standard alloys to flameproof stainless steel.</p>  
                            </div>
                        </div>

                        <div class="col-md-4 col-xs-10 col-xs-offset-1 col-sm-offset-3 col-sm-6 col-md-offset-0">
                            <div class="cust-tech">
                                <h4>Variable Capabilities</h4>
                                    <i class="fa fa-flash "></i>
                                    <p>Motors can be selected depending on the voltage and pole speeds.  </p>  
                            </div>
                        </div>
                    </div>
                </div>
         <div class="ws-50"></div>
        <!--=================================
        =           MAP AREA            =
        ==================================-->
         <hr>
       <div class="ws-50"></div>
         <section class="world-map">
             <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                                <h2>Made in South Africa, relied on worldwide</h2>
                        </div>
                    </div>
                    <div class="ws-50"></div>
                    <div class="row">
                        <div class="col-xs-12">
                            <img class="img-responsive center-block" src="<?php echo get_template_directory_uri(); ?>/assets/img/world-map-with-hippos.png" alt="A world map with where Hazleton Pumps have pumps in operation">
                        </div>
                        <div class="col-xs-12">
                            <p>The Hippo Slurry Pump Range was designed and developed to meet the harsh and continuous conditions set by the mining and mineral processing industries found in Souther Africa.  Creating a slurry pump range that is capable of running dry and operate in a wide variety of temperatures the Hippo Pump Range is the ideal solution for dealing with high volume dewatering situation to harsh and abrasive applications; with a custom build solution for each application. Our pumps and pump systems have proven to be equally effective in other parts of the world including Canada, South America, Australia, Middle-East and Russia.</p>
                        </div>
                    </div>
            </div>
        </section>
        <div class="ws-50"></div>
        <hr>
    
       <!--=================================
        =     APPLICATIONS PER INDUSTRY    =
        ==================================-->
                             

        <section class="app-per-ind">

            <div class="ws-50"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-title">
                            <h1>Our experience by Industry</h1>
                        </div>
                    </div>
                </div>




                 <ul class="ul no-spaces row">
                    <li class="list-col-md-3">
                        <div class="single-service">
                          <div class="serv-img-wrap icon">
                                <a href="<?php echo home_url(); ?>/case-studies/">
                                    <img class="img-responsive center-block icon" src="<?php echo get_template_directory_uri(); ?>/assets/img/industries/mining.png" alt="Mining is an industry in which Hazleton Pumps has experience in">
                                    <h4>Mining</h4>
                                    <p>All sectoirs of Mining & Mineral extraction: coal, platinum, gold, iron & ore</p>
                                </a>
                            </div>
                        </div>
                        <!-- single service high head high volume medium high voltage pump systems -->
                    </li>

                    <li class="list-col-md-3">
                        <div class="single-service icon">
                            <div class="serv-img-wrap">
                                <a href="<?php echo home_url(); ?>/case-studies/">
                                    <img class="img-responsive center-block" src="<?php echo get_template_directory_uri(); ?>/assets/img/industries/nuclear.png" alt="Mining is an industry in which Hazleton Pumps has experience in">
                                    <h4>Nuclear</h4>
                                    <p>All sectoirs of Mining & Mineral extraction: coal, platinum, gold, iron & ore</p>
                                </a>
                            </div>
                        </div>
                        <!-- single service high head high volume medium high voltage pump systems -->
                    </li>

                    <li class="list-col-md-3">
                        <div class="single-service icon">
                            <div class="serv-img-wrap">
                                <a href="<?php echo home_url(); ?>/case-studies/">
                                    <img class="img-responsive center-block" src="<?php echo get_template_directory_uri(); ?>/assets/img/industries/chemical.png" alt="Mining is an industry in which Hazleton Pumps has experience in">
                                    <h4>Chemical & Processing</h4>
                                    <p>All sectoirs of Mining & Mineral extraction: coal, platinum, gold, iron & ore</p>
                                </a>
                            </div>
                        </div>
                        <!-- single service high head high volume medium high voltage pump systems -->
                    </li>

                    <li class="list-col-md-3">
                        <div class="single-service">
                            <div class="serv-img-wrap icon">
                                <a href="<?php echo home_url(); ?>/case-studies/">
                                    <img class="img-responsive center-block" src="<?php echo get_template_directory_uri(); ?>/assets/img/industries/foundries.png" alt="Mining is an industry in which Hazleton Pumps has experience in">
                                    <h4>Foundries & Steel </h4>
                                    <p>All sectoirs of Mining & Mineral extraction: coal, platinum, gold, iron & ore</p>
                                </a>
                            </div>
                        </div>
                        <!-- single service high head high volume medium high voltage pump systems -->
                    </li>

                    <li class="list-col-md-3">
                        <div class="single-service">
                            <div class="serv-img-wrap icon">
                                <a href="<?php echo home_url(); ?>/case-studies/">
                                    <img class="img-responsive center-block" src="<?php echo get_template_directory_uri(); ?>/assets/img/industries/power.png" alt="Mining is an industry in which Hazleton Pumps has experience in">
                                    <h4>Power Generation, Municapal Services, & Waste management</h4>
                                    <p>All sectoirs of Mining & Mineral extraction: coal, platinum, gold, iron & ore</p>
                                </a>
                            </div>
                        </div>
                        <!-- single service high head high volume medium high voltage pump systems -->
                    </li>

                    <li class="list-col-md-3">
                        <div class="single-service">
                            <div class="serv-img-wrap icon">
                                <a href="<?php echo home_url(); ?>/case-studies/">
                                    <img class="img-responsive center-block icon" src="<?php echo get_template_directory_uri(); ?>/assets/img/industries/pulp.png" alt="Mining is an industry in which Hazleton Pumps has experience in">
                                    <h4>Pulp, Paper & Sugar</h4>
                                    <p>All sectoirs of Mining & Mineral extraction: coal, platinum, gold, iron & ore</p>
                                </a>
                            </div>
                        </div>
                        <!-- single service high head high volume medium high voltage pump systems -->
                    </li>

                    <li class="list-col-md-3">
                        <div class="single-service">
                            <div class="serv-img-wrap icon">
                                <a href="<?php echo home_url(); ?>/case-studies/">
                                    <img class="img-responsive center-block" src="<?php echo get_template_directory_uri(); ?>/assets/img/industries/sand.png" alt="Mining is an industry in which Hazleton Pumps has experience in">
                                    <h4>Sand, Gravel, Ceramic & Steel Production</h4>
                                    <p>All sectoirs of Mining & Mineral extraction: coal, platinum, gold, iron & ore</p>
                                </a>
                            </div>
                        </div>
                        <!-- single service high head high volume medium high voltage pump systems -->
                    </li>

                </ul>

            </div>
        </section>
        <!--=================================
          =            PROUDLY            =
         ==================================-->


        <div class="ws-50"></div>
        <hr>

        <section class="proudly">

            <div class="ws-50"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-title">
                            <h2>Proudly</h2>
                        </div>
                    </div>
                </div>
                <div class="ws-50"></div>
                <div class="row">
                    <div class="col-md-4 col-xs-4">
                        <h6>Associated by</h6>
                        <img  class="img-responsive center-block" src="<?php echo get_template_directory_uri(); ?>/assets/img/proudly/sapsda.png" alt="Hazleton Pumps is associated with the SAPSDA Southern African Pump Systems Development Association">

                    </div>

                    <div class="col-md-4 col-xs-4">
                        <h6>Accredited by</h6>
                        <img  class="img-responsive center-block" src="<?php echo get_template_directory_uri(); ?>/assets/img/proudly/SABS.png" alt="Hazleton Pumps is associated with the SAPSDA Southern African Pump Systems Development Association">

                    </div>

                    <div class="col-md-4 col-xs-4">
                        <h6>Awarded by</h6>
                        <img  class="img-responsive center-block" src="<?php echo get_template_directory_uri(); ?>/assets/img/proudly/sassda.png" alt="Hazleton Pumps is associated with the SAPSDA Southern African Pump Systems Development Association">

                    </div>
                    
                </div>


             </div>   
        </section>
        <div class="ws-100"></div>
     <?php get_footer(); ?>