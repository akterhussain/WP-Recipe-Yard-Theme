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

					<?php
					while ( have_posts() ) :
						the_post(); ?>

					<div class="single-contnet">
						 <?php the_post_thumbnail('my_post_image'); ?>
						<h2><?php the_title(); ?></h2>
						 <div class="category_option">
                           <hr>
                           <?php the_time('M d, Y'); ?> <span><?php the_category( ' | ' ); ?></span>
                            <hr>
                            </div>
                        <div class="content-image">
						<?php the_content(); ?>
                        </div>
					</div>
					
					

						<?PHP // If comments are open or we have at least one comment, load up the comment template.
						if ( comments_open() || get_comments_number() ) :
							comments_template();
						endif;

					endwhile; // End of the loop.
					?>

		


				<div class="related-post-content">
					<h2><?php _e('Related Posts', 'recipe-yard'); ?></h2>
					<div class="row">
					<?php

						$related = get_posts( array( 'category__in' => wp_get_post_categories($post->ID), 'numberposts' => 6, 'post__not_in' => array($post->ID) ) );
						if( $related ) foreach( $related as $post ) {
						setup_postdata($post); ?>
						 
 					<div class="col-12 col-sm-12 col-md-6 col-xl-4">
                      <div class="related-content">
                          <a href=" <?php the_permalink(); ?>">
                            <div class="hover01 column">
                             <figure><?php the_post_thumbnail('my_post_image'); ?></figure>
                            </div>
                          </a>
                           <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

                      </div><!-- related-content -->
                    </div><!-- col-xl-6 -->   

						<?php }
						wp_reset_postdata(); ?>
					</div><!-- row -->	
				</div><!-- related-post-content  -->
				</div><!-- main-content -->


			</div><!-- col-xl-8 -->
			<div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4">
				<?php get_template_part('right_sidebar'); ?>
			</div><!-- col-xl-4 -->
		</div><!-- row -->
	</div><!-- container -->
</section><!-- main-content-area -->





<?php

get_footer();
