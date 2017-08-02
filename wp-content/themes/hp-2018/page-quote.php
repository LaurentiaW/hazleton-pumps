<?php 
/**
 * The is the template page for the quote page
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
        =            REQUEST A QUOTE         =
        ===================================-->
        <section class="contact-us-promo">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="request-a-quote">
                            <h4>Need a price estimate for your next project?</h4>
                            <p>Provide us with as much detail as possible and we will get in touch as soon as possible!</p>

                            <form action="#" method="post">

                                <div class="row">
                                    <div class="col-md-6">

                                        <div class="form-group">
                                            <label for="name">Name </label>
                                            <input type="text" name="name" id="name" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="email">Email </label>
                                            <input type="text" name="email" id="email" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="phone-number">Phone number </label>
                                            <input type="text" name="phone-number" id="phone-number" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="company-name">Company Name </label>
                                            <input type="text" name="company-name" id="company-name" class="form-control">
                                        </div>

                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="project-title">Project Title </label>
                                            <input type="text" name="project-title" id="project-title" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="message">Your requirements</label>
                                            <textarea name="message" id="message" class="form-control"> </textarea>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group submit-btn-grp">
                                    <button class="btn btn-style1">REQUEST A QUOTE</button>
                                </div>

                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--====  End of request a quote   ====-->


        
        <div class="ws-100"></div>
        
       

    <?php get_footer(); ?>