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
			<div class="col-xl-8 col-lg-8">
				<div class="main-content">
				  <div class="sidebar-recent-post">
			              <h2><?php single_cat_title(); ?></h2>
			            </div>
					
<div class="row">
<?php // The Query

		while ( have_posts() ) :
			the_post(); ?>

                     <div class="col-md-6 col-xl-6">
                      <div class="bangla-recipe-content">
                          <a href=" <?php the_permalink(); ?>">
                            <div class="hover01 column">
                             <figure><?php the_post_thumbnail('my_post_image'); ?></figure>
                            </div>
                          </a>
                           <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                           <div class="category_option">
                           <hr>
                           <?php the_time('M d, Y'); ?> <span><?php the_category( ' | ' ); ?></span>
                            <hr>
                            </div>
                           <?php the_excerpt(); ?>
                          <a href="<?php the_permalink(); ?>" class="read-more"><?php _e('Read More', 'recipe-yard'); ?></a>
                      </div><!-- bangla-recipe-content -->
                    </div><!-- col-xl-6 -->  

<?php
    endwhile;
    wp_reset_postdata(); ?> 



</div><!-- row -->



		
				</div><!-- main-content -->
			</div><!-- col-xl-8 -->

			<div class="col-lg-4 col-xl-4">
				<?php get_template_part('right_sidebar'); ?>
			</div><!-- col-xl-4 -->
		</div><!-- row -->
	</div><!-- container -->
</section><!-- main-content-area -->





<?php

get_footer();
