<div class="col-sm-12">
					<div class="blog-inner-wrap">
						<div class="blog-block animate" data-animate="fadeInLeft" data-duration="1.0s" data-delay="0.5s">
						<div class="blog-block-content">
						<?php if(get_post_type()=='post'):?>
                        <div class="heading-title animate animate__fadeIn animate__animated" data-animate="fadeIn" data-duration="1.0s" data-delay="0.1s" style="animation-duration: 1s; animation-delay: 0.1s; visibility: visible;">
								<span><i class="fa fa-play"></i> <?php $categories = get_the_category(); $category = current($categories); echo ucfirst($category->name) ?> </span>
							</div>		
                        <?php endif; ?>
								<div class="blog-title"><?php echo get_the_title() ?></div>
                                <?php if(get_post_type()=='post'):?>
                                <div class="blog-author">
									<p><i class="fa fa-user"></i>&nbsp;<?=ucfirst(get_the_author())?> | <i class="fa fa-clock"></i>&nbsp;<?=get_the_date('F, m Y');?>
								</div>
                                <?php else: echo '<hr/>'; endif; ?>
								
									<img src="<?=get_the_post_thumbnail_url()?>">
									<?php the_content();?>
									<br/>
                                    <?php if(get_post_type()=='post'):?>
									<?php if ( function_exists( 'wpsabox_author_box' ) ) echo wpsabox_author_box(); ?>
                                    <?php endif; ?>    
                                </div>
						</div>						
					</div>
				</div>