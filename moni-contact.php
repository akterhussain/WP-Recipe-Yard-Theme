<?php

/**

 * Template Name: moni Contact

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

					

					<div class="moni-contact">

						<div class="row">

							<div class="col-12 col-sm-12 col-md-8 offset-md-2 col-lg-8 offset-lg-2  col-xl-6 offset-xl-3">
								<div class="moci-contact-form">
									<?php echo do_shortcode('[contact-form-7 id="779" title="Contact-form"]'); ?> 
								</div>
							</div><!-- col-xl-6 offset-xl-6 -->

						</div><!-- row -->

					</div><!-- moni-contact -->



		

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

