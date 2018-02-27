<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package bstohtml
 */

 get_header(); ?>
 <header class="masthead bg-primary text-white text-center">
      <div class="container">
        <img class="img-fluid mb-5 d-block mx-auto" src="<?php echo get_template_directory_uri();?>/img/profile.png" alt="">
        <h1 class="text-uppercase mb-0"><?php bloginfo('name'); ?></h1>
        <hr class="star-light">
        <h2 class="font-weight-light mb-0"><?php bloginfo('description'); ?></h2>
      </div>
    </header>

    <!-- Portfolio Grid Section -->
    <section class="portfolio" id="portfolio">
      <div class="container">
        <h2 class="text-center text-uppercase text-secondary mb-0">Portfolio</h2>
        <hr class="star-dark mb-5">
        <div class="row">
            <?php
            $i=1;
            if ( have_posts() ): while ( (have_posts()) ): the_post();
            ?>
                    <div class="col-md-6 col-lg-4">
                        <a class="portfolio-item d-block mx-auto" href="#portfolio-modal-<?php echo $i; ?>">
                            <div class="portfolio-item-caption d-flex position-absolute h-100 w-100">
                                <div class="portfolio-item-caption-content my-auto w-100 text-center text-white">
                                    <i class="fa fa-search-plus fa-3x"></i>
                                </div>
                            </div>
                            <?php the_post_thumbnail('full',array('class'=>'img-fluid')); ?>
                            <!--<img class="img-fluid" src="img/portfolio/cabin.png" alt="">-->
                        </a>
                    </div>
                    <?php $i++; ?>
      <?php endwhile; endif;  ?>
         <!-- <div class="col-md-6 col-lg-4">
            <a class="portfolio-item d-block mx-auto" href="#portfolio-modal-2">
              <div class="portfolio-item-caption d-flex position-absolute h-100 w-100">
                <div class="portfolio-item-caption-content my-auto w-100 text-center text-white">
                  <i class="fa fa-search-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="img/portfolio/cake.png" alt="">
            </a>
          </div>
          <div class="col-md-6 col-lg-4">
            <a class="portfolio-item d-block mx-auto" href="#portfolio-modal-3">
              <div class="portfolio-item-caption d-flex position-absolute h-100 w-100">
                <div class="portfolio-item-caption-content my-auto w-100 text-center text-white">
                  <i class="fa fa-search-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="img/portfolio/circus.png" alt="">
            </a>
          </div>
          <div class="col-md-6 col-lg-4">
            <a class="portfolio-item d-block mx-auto" href="#portfolio-modal-4">
              <div class="portfolio-item-caption d-flex position-absolute h-100 w-100">
                <div class="portfolio-item-caption-content my-auto w-100 text-center text-white">
                  <i class="fa fa-search-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="img/portfolio/game.png" alt="">
            </a>
          </div>
          <div class="col-md-6 col-lg-4">
            <a class="portfolio-item d-block mx-auto" href="#portfolio-modal-5">
              <div class="portfolio-item-caption d-flex position-absolute h-100 w-100">
                <div class="portfolio-item-caption-content my-auto w-100 text-center text-white">
                  <i class="fa fa-search-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="img/portfolio/safe.png" alt="">
            </a>
          </div>
          <div class="col-md-6 col-lg-4">
            <a class="portfolio-item d-block mx-auto" href="#portfolio-modal-6">
              <div class="portfolio-item-caption d-flex position-absolute h-100 w-100">
                <div class="portfolio-item-caption-content my-auto w-100 text-center text-white">
                  <i class="fa fa-search-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="img/portfolio/submarine.png" alt="">
            </a>
        </div>-->
        </div>
      </div>
    </section>

    <!-- About Section -->
    <section class="bg-primary text-white mb-0" id="about">
      <div class="container">
          <?php
          $args =array(
              'page_id'=> '1291',
          );

          $wp_query = new WP_QUERY($args);
                  if ( $wp_query-> have_posts() ): while ( ( $wp_query->have_posts()) ):  $wp_query->the_post();
           ?>
        <h2 class="text-center text-uppercase text-white"><?php the_title();?></h2>
        <hr class="star-light mb-5">
        <div class="row">
            <?php the_content(); ?>
        <!--  <div class="col-lg-4 ml-auto">
            <p class="lead">Freelancer is a free bootstrap theme created by Start Bootstrap. The download includes the complete source files including HTML, CSS, and JavaScript as well as optional LESS stylesheets for easy customization.</p>
          </div>
          <div class="col-lg-4 mr-auto">
            <p class="lead">Whether you're a student looking to showcase your work, a professional looking to attract clients, or a graphic artist looking to share your projects, this template is the perfect starting point!</p>
        </div>-->
        </div>

        <div class="text-center mt-4">
          <a class="btn btn-xl btn-outline-light" href="#">
            <i class="fa fa-download mr-2"></i>
            Download Now!
          </a>
      </div>
  <?php endwhile; endif;  wp_reset_query();?>
      </div>
    </section>

    <!-- Contact Section -->
    <section id="contact">
      <div class="container">
        <h2 class="text-center text-uppercase text-secondary mb-0">Contact Me</h2>
        <hr class="star-dark mb-5">
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
            <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
            <form name="sentMessage" id="contactForm" novalidate="novalidate">
              <div class="control-group">
                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                  <label>Name</label>
                  <input class="form-control" id="name" type="text" placeholder="Name" required="required" data-validation-required-message="Please enter your name.">
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <div class="control-group">
                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                  <label>Email Address</label>
                  <input class="form-control" id="email" type="email" placeholder="Email Address" required="required" data-validation-required-message="Please enter your email address.">
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <div class="control-group">
                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                  <label>Phone Number</label>
                  <input class="form-control" id="phone" type="tel" placeholder="Phone Number" required="required" data-validation-required-message="Please enter your phone number.">
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <div class="control-group">
                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                  <label>Message</label>
                  <textarea class="form-control" id="message" rows="5" placeholder="Message" required="required" data-validation-required-message="Please enter a message."></textarea>
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <br>
              <div id="success"></div>
              <div class="form-group">
                <button type="submit" class="btn btn-primary btn-xl" id="sendMessageButton">Send</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
    <!-- Portfolio Modals -->

 <!-- Portfolio Modal 1 -->

 <?php
 $i = 1;
 if ( have_posts() ): while ( (have_posts()) ): the_post();
 ?>
 <div class="portfolio-modal mfp-hide" id="portfolio-modal-<?php echo $i; ?>">
   <div class="portfolio-modal-dialog bg-white">
     <a class="close-button d-none d-md-block portfolio-modal-dismiss" href="#">
       <i class="fa fa-3x fa-times"></i>
     </a>
     <div class="container text-center">
       <div class="row">
         <div class="col-lg-8 mx-auto">
           <h2 class="text-secondary text-uppercase mb-0"><?php the_title(); ?></h2>
           <hr class="star-dark mb-5">
           <!--<img class="img-fluid mb-5" src="img/portfolio/cabin.png" alt="">-->
           <?php the_post_thumbnail('full',array('class'=>'img-fluid')); ?>
           <p class="mb-5"><?php the_content(); ?></p>

           <a class="btn btn-primary btn-lg rounded-pill portfolio-modal-dismiss" href="#">
             <i class="fa fa-close"></i>
             Close Project</a>
         </div>
       </div>
     </div>
   </div>
 </div>
 <?php $i++; ?>
  <?php endwhile; endif; ?>
 <!-- Portfolio Modal 2 -->
 <!--<div class="portfolio-modal mfp-hide" id="portfolio-modal-2">
   <div class="portfolio-modal-dialog bg-white">
     <a class="close-button d-none d-md-block portfolio-modal-dismiss" href="#">
       <i class="fa fa-3x fa-times"></i>
     </a>
     <div class="container text-center">
       <div class="row">
         <div class="col-lg-8 mx-auto">
           <h2 class="text-secondary text-uppercase mb-0">Project Name</h2>
           <hr class="star-dark mb-5">
           <img class="img-fluid mb-5" src="img/portfolio/cake.png" alt="">
           <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.</p>
           <a class="btn btn-primary btn-lg rounded-pill portfolio-modal-dismiss" href="#">
             <i class="fa fa-close"></i>
             Close Project</a>
         </div>
       </div>
     </div>
   </div>
 </div>

 <!-- Portfolio Modal 3 --
 <div class="portfolio-modal mfp-hide" id="portfolio-modal-3">
   <div class="portfolio-modal-dialog bg-white">
     <a class="close-button d-none d-md-block portfolio-modal-dismiss" href="#">
       <i class="fa fa-3x fa-times"></i>
     </a>
     <div class="container text-center">
       <div class="row">
         <div class="col-lg-8 mx-auto">
           <h2 class="text-secondary text-uppercase mb-0">Project Name</h2>
           <hr class="star-dark mb-5">
           <img class="img-fluid mb-5" src="img/portfolio/circus.png" alt="">
           <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.</p>
           <a class="btn btn-primary btn-lg rounded-pill portfolio-modal-dismiss" href="#">
             <i class="fa fa-close"></i>
             Close Project</a>
         </div>
       </div>
     </div>
   </div>
 </div>

 <!-- Portfolio Modal 4 --
 <div class="portfolio-modal mfp-hide" id="portfolio-modal-4">
   <div class="portfolio-modal-dialog bg-white">
     <a class="close-button d-none d-md-block portfolio-modal-dismiss" href="#">
       <i class="fa fa-3x fa-times"></i>
     </a>
     <div class="container text-center">
       <div class="row">
         <div class="col-lg-8 mx-auto">
           <h2 class="text-secondary text-uppercase mb-0">Project Name</h2>
           <hr class="star-dark mb-5">
           <img class="img-fluid mb-5" src="img/portfolio/game.png" alt="">
           <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.</p>
           <a class="btn btn-primary btn-lg rounded-pill portfolio-modal-dismiss" href="#">
             <i class="fa fa-close"></i>
             Close Project</a>
         </div>
       </div>
     </div>
   </div>
 </div>

 <!-- Portfolio Modal 5 --
 <div class="portfolio-modal mfp-hide" id="portfolio-modal-5">
   <div class="portfolio-modal-dialog bg-white">
     <a class="close-button d-none d-md-block portfolio-modal-dismiss" href="#">
       <i class="fa fa-3x fa-times"></i>
     </a>
     <div class="container text-center">
       <div class="row">
         <div class="col-lg-8 mx-auto">
           <h2 class="text-secondary text-uppercase mb-0">Project Name</h2>
           <hr class="star-dark mb-5">
           <img class="img-fluid mb-5" src="img/portfolio/safe.png" alt="">
           <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.</p>
           <a class="btn btn-primary btn-lg rounded-pill portfolio-modal-dismiss" href="#">
             <i class="fa fa-close"></i>
             Close Project</a>
         </div>
       </div>
     </div>
   </div>
 </div>

 <!-- Portfolio Modal 6 --
 <div class="portfolio-modal mfp-hide" id="portfolio-modal-6">
   <div class="portfolio-modal-dialog bg-white">
     <a class="close-button d-none d-md-block portfolio-modal-dismiss" href="#">
       <i class="fa fa-3x fa-times"></i>
     </a>
     <div class="container text-center">
       <div class="row">
         <div class="col-lg-8 mx-auto">
           <h2 class="text-secondary text-uppercase mb-0">Project Name</h2>
           <hr class="star-dark mb-5">
           <img class="img-fluid mb-5" src="img/portfolio/submarine.png" alt="">
           <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.</p>
           <a class="btn btn-primary btn-lg rounded-pill portfolio-modal-dismiss" href="#">
             <i class="fa fa-close"></i>
             Close Project</a>
         </div>
       </div>
     </div>
   </div>
</div>-->

<?php  get_footer();?>