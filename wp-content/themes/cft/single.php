<?php

/**
* Template Name: Services
* @package CFT
* @subpackage CFT
* @since CFT 1.0
*/
global $post;

get_header(); ?>
<style>
    .blog-inner-wrap a{
        color: #F44336;
    }
blockquote {
    max-width: 100%;
    text-align: left;
    margin: 20px;
    padding: 20px;
    font-family: Arial,Helvetica Neue,Helvetica,sans-serif;
    font-size: 20px;
    color: #fff;
    background: #250505;
    border-left: 5px solid #ff0d0d;
	display: -webkit-box;
}
.blog-block-content blockquote p {
	color: #fff;
}
.saboxplugin-authorname a {
	color: #595959;
}
.blog-inner-wrap img {
	float: right;
    height: 100%;
    display: inline-block;
    margin-left: 15px;}
	.author_bio_section{
background-color: #F5F5F5;
padding: 15px;
border: 1px solid #ccc;
}
.awsm-job-content, .awsm-job-form{float:left; width: 50%}
</style>

	<section class="blog-sec  data-visualization-sec">
		<div class="container">
			<div class="row">	
            <?php
                // Start the Loop.
                while ( have_posts() ) :
                    the_post();			
            ?>		
			<?php get_template_part( 'template-parts/content/content', 'single' ); ?>
            <?php
                endwhile; // End the loop.
			?>
			</div>
		</div>
	
    </section>
	<!-- Data Visualization Section End -->


	<!-- Process Optimization Section End -->
<?php get_footer(); ?>