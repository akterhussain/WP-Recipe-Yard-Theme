<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Recipe_Yard
 */

get_header();
?>

<section class="page-content-area">
	<div class="container">
		<div class="row">
			<div class="col-12 col-sm-12 col-md-12 col-lg-8 col-xl-8">
				<div class="main-content">
					<div class="sidebar-recent-post">
			              <h2><?php wp_title( ' ' ); ?></h2>
			            </div>
								
						<?php
						if (have_posts()):
						  while (have_posts()) : the_post();
						    the_content();
						  endwhile;
						else:
						  echo '<p>Sorry, no posts matched your criteria.</p>';
						endif;
						?>

		
				</div><!-- main-content -->


			</div><!-- col-xl-8 -->
		<div class="col-12 col-sm-12 col-md-12 col-lg-4 ccol-xl-4">
				<?php get_template_part('right_sidebar'); ?>
			</div><!-- col-xl-4 -->
		</div><!-- row -->
	</div><!-- container -->
</section><!-- main-content-area -->





<?php

get_footer();
