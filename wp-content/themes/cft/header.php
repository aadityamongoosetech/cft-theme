<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Codes For Tomorrow | <?=get_the_title();?> </title>
	<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
	<link rel="icon" type="image/favicon-icon" href="<?=get_stylesheet_directory_uri();?>/favicon.ico">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="<?=get_stylesheet_directory_uri()?>/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?=get_stylesheet_directory_uri()?>/css/animate.min.css">
	<link rel="stylesheet" type="text/css" href="<?=get_stylesheet_directory_uri()?>/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="<?=get_stylesheet_directory_uri()?>/css/slick.css">
	<link rel="stylesheet" type="text/css" href="<?=get_stylesheet_directory_uri()?>/css/slick-animate.min.css">
	<link rel="stylesheet" type="text/css" href="<?=get_stylesheet_directory_uri()?>/css/slick-theme.css">
  <link rel="stylesheet" type="text/css" href="<?=get_stylesheet_directory_uri()?>/css/style.css">
  <?php wp_head(); ?>
</head>
<body>
	<!-- Header Start -->
	<header class="header">
		<div class="header-wrapper header-sticky">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<div class="header-wrap">
							<a href="<?php echo site_url('/'); ?>" class="animate" data-animate="fadeInUp" data-duration="1.0s" data-delay="0.1s">
								<img src="https://www.codesfortomorrow.com/wp-content/uploads/2021/01/logo.png" class="logo" alt="Logo" />
								<img src="https://www.codesfortomorrow.com/wp-content/uploads/2021/01/logo.png" class="sticky-logo" alt="Logo" />
							</a>
							<!-- Web Menu -->
							<div class="web-menu top-nav animate" data-animate="fadeInUp" data-duration="1.0s" data-delay="0.1s">
								<ul>
									<li class="cool-link select">
										<div class="top-nav-title">
											<a href="<?php echo site_url('/')?>">Home</a>
										</div>
									</li>
									<li class="cool-link">
										<div class="top-nav-title">
											<a href="<?php echo site_url('/why-us')?>">Why Us</a>
										</div>
									</li>
									<li class="dropdown cool-link">
										<div class="top-nav-title">
								            <a href="<?php echo site_url('/services')?>" class="dropdown-toggle" data-toggle="dropdown">Services</a>
							          	</div>
							              <ul class="dropdown-menu">
							                <li><a href="<?php echo site_url('https:://www.codesfortomorro/services/data-visualization')?>">Data Visualization</a></li>
							                <li><a href="<?php echo site_url('/services/#infrastructure-management-service')?>">Infrastructure Management Service</a></li>
                              <li><a href="<?php echo site_url('/services/#sketch-to-product')?>">Sketch to Product</a></li>
                            </ul>							              
						            </li>
									<li class="cool-link">
										<div class="top-nav-title">
											<a href="<?php echo site_url('/work-culture')?>">Work Culture</a>
										</div>
									</li>
									<!-- <li class="cool-link">
										<div class="top-nav-title">
											<a href="javascript: void(0);">Blog</a>
										</div>
									</li> -->
									<li class="cool-link">
										<div class="top-nav-title top-nav-connect">
											<a href="<?php echo site_url('/contact-us')?>">Let’s Connect</a>
										</div>
									</li>
								</ul>
							</div>
							<!-- Web Menu End -->
							<!-- Mobile Menu -->
							<div class="menu-toggle">
					            <div class="hamburger">
					               <span></span>
					               <span></span>
					               <span></span>
					            </div>
					         </div>
					         <aside class="side-menu" id="menu">
						         <a href="javascript: void(0)" class="animate" data-animate="fadeInUp" data-duration="1.0s" data-delay="0.1s">
									<img src="<?=get_stylesheet_directory_uri();?>/images/LOGO.png" class="mob-logo" alt="Logo" />
								</a>         
					            <div class="site-menu top-nav">
					                <ul>
										<li>
											<div class="top-nav-title">
												<button class="accordion active"><a href="<?php echo site_url('/')?>">Home</a></button>
								          	</div>						              
							            </li>
							            <li>
											<div class="top-nav-title">
												<button class="accordion active"><a href="<?php echo site_url('/why-us')?>">Why Us</a></button>
								      </div>						              
							            </li>
										<li>
											<div class="top-nav-title">
												<button class="accordion active"><a href="<?php echo site_url('/services')?>">Services</a> <i class="fa fa-chevron-right"></i></button>
												<div class="panel">
													<ul class="dropdown-menu">
										                <li><a href="<?php echo site_url('/services/#data-visualization')?>">Data Visualization</a></li>
							                      <li><a href="<?php echo site_url('/services/#infrastructure-management-service')?>">Infrastructure Management Service</a></li>
                                    <li><a href="<?php echo site_url('/services/#sketch-to-product')?>">Sketch to Product</a></li>
										            </ul>	
												</div>
								          	</div>						              
							            </li>
							            <li>
											<div class="top-nav-title">
												<button class="accordion active"><a href="<?php echo site_url('/work-culture')?>">Work Culture</a></button>	
								          	</div>						              
							            </li>
							            <!-- <li>
											<div class="top-nav-title">
												<button class="accordion active">Blog</button>	
								          	</div>						              
							            </li> -->
							            <li>
											<div class="top-nav-title top-nav-connect">
												<button class="accordion active"><a href="<?php echo site_url('/contact-us')?>">Let’s Connect</a></button>	
								          	</div>						              
							            </li>
							        </ul>          
					            </div>
					         </aside>
					         <!-- Mobile Menu End -->
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
	<!-- Header End -->	
