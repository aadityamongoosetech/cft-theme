<?php
/**
* Template Name: Contact Us
*
* @package CFT
* @subpackage CFT
* @since CFT 1.0
*/
 get_header(); ?>

 	<!-- Top Banner Start -->  
	<section class="home-banner-wrapper services-banner">
	    <div class="home-banner-content-wrapper">	        	
	    	<div class="container">
				<div class="row">						
					<div class="col-sm-12">
						<div class="home-banner-content-wrap banner-title-wrap">
							<div class="home-banner-content">
								<div class="home-banner-content-title animate" data-animate="fadeIn" data-duration="1.0s" data-delay="0.1s">Let's Connect</div>
							</div>
							<div class="home-banner-content-img animate" data-animate="fadeIn" data-duration="1.0s" data-delay="0.1s">
								<img src="<?=get_stylesheet_directory_uri();?>/images/circle-red.png" class="circle-red" alt="" />
								<img src="<?=get_stylesheet_directory_uri();?>/images/circle-black.png" class="circle-black" alt="" />
								<img src="<?=get_stylesheet_directory_uri();?>/images/pattern-1.png" class="pattern-1" alt="" />
								<img src="<?=get_stylesheet_directory_uri();?>/images/pattern-2.png" class="pattern-2" alt="" />
								<img src="<?=get_stylesheet_directory_uri();?>/images/post-meta/services-banner.png" class="home-banner-image" alt="" />	
							</div>
						</div>
					</div>
				</div>
			</div>
	    </div>	
	</section>
	<!-- Top Banner Start -->

	<!-- Contact Us Section -->
	<section class="contact-us-sec">
  <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14716.3946188364!2d75.8667923!3d22.7617198!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x6e056d7a609a95de!2sCodes%20For%20Tomorrow!5e0!3m2!1sen!2sin!4v1609751090772!5m2!1sen!2sin" width="100%" height="1120" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>  
		<div class="contact-us-form">
			<div class="address">
			<h1>Let's Have a coffee together</h1>
			<h3>Our office Address</h3>
			 <span>B-35, Veena Nagar, MR-10 Square</span>
			 <span>Near Shri Ram Rameshwar Mandir, Indore</span>
			 <span> Madhya Pradesh, 452010</span>
			 <span><i class="icon-phone"></i> 0731-4058698</span>
			 <span><i class="icon-mail"></i> hr@codesfortomorrow.com</span>
			</div> 
			<h1>Wanna share a requirement with us </h1>
			<h3>Please drop a message</h3>
			<div class="mandate-field">Fields marked with an <span>*</span> are required</div>
			<?php echo do_shortcode('[contact-form-7 id="97" title="Contact form 1" html_class="form-container"] ')?>
			</div>
	</section>
	<!-- Contact Us Section End -->

<?php get_footer(); ?>