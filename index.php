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
 * @package Recipe_Yard
 */

get_header();
?>


<section class="carousel-area">
              

        <!-- ++++++++++++++++++++++++++ BOOTSTRAP CAROUSEL +++++++++++++++++++++++++++++ -->

        <div id="kb" class="carousel kb_elastic animate_text kb_wrapper" data-ride="carousel" data-interval="6000" data-pause="hover">

            <!--======= Wrapper for Slides =======-->
            <div class="carousel-inner" role="listbox">

                 <?php

            $carosul = new WP_Query(array(

                    'post_type' => 'post',
                    'posts_per_page' => 20,
                    'order'=> 'DESE',
                    'orderby' => 'rand',

                ));
            $akter = 0;

             while($carosul->have_posts()) : $carosul->the_post(); $akter ++ ?>

            <?php if($akter == 1) : ?>
                <div class="item active">

            <?php else : ?>
                <div class="item">
            <?php endif ?>

            <!--========= First Slide =========-->

                   <?php the_post_thumbnail('my_post_image'); ?>
                 
                    <div class="carousel-caption kb_caption">
                          <a href="<?php the_permalink(); ?>"><h1 data-animation="animated flipInX"><?php the_title(); ?></h1> </a>
                        <a href="<?php the_permalink(); ?>"> <h2 data-animation="animated flipInX"> <?php the_excerpt(); ?> </h2> </a>
                    </div>
                   
                </div>

            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>

            </div>

            <!--======= Navigation Buttons =========-->

            <!--======= Left Button =========-->
            <a class="left carousel-control kb_control_left" href="#kb" role="button" data-slide="prev">
                <span class="fa fa-angle-left kb_icons" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>

            <!--======= Right Button =========-->
            <a class="right carousel-control kb_control_right" href="#kb" role="button" data-slide="next">
                <span class="fa fa-angle-right kb_icons" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>

        </div> <!-- ++++++++++++++++++++++ END BOOTSTRAP CAROUSEL +++++++++++++++++++++++ -->

</section>


<section class="main-section">
  <div class="container">
    <div class="row">
      <div class="col-12 col-sm-12 col-md-12 col-lg-9 col-xl-9">

        <div class="recent-post-section">
            <div class="section-title">
              <h2><?php _e('Recent Posts', 'recipe-yard'); ?></h2>
            </div>
            <div class="post-content">
                <div class="row">

<?php
$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
$args = array(
    'post_per_page' => 50,
    'paged'         => $paged,
);
$the_query = new WP_Query( $args );

global $wp_query;
// Put default query object in a temp variable
$tmp_query = $wp_query;
// Now wipe it out completely
$wp_query = null;
// Re-populate the global with our custom query
$wp_query = $the_query;

if ($the_query->have_posts()) : 
    while ($the_query->have_posts()) : $the_query->the_post(); ?>
                 <div class="col-md-6 col-lg-6 col-xl-6">
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


  <?php  endwhile;
?>

                <div class="col-xl-12">
                  <div class="pagination-content">
                 
<?php
    previous_posts_link('<i class="fas fa-long-arrow-alt-left"></i> Previous posts'); ?> | <?php
    next_posts_link( 'Next posts <i class="fas fa-long-arrow-alt-right"></i>', $the_query->max_num_pages );
    wp_reset_postdata();
?>
                  </div><!-- pagination-content -->
                </div>

<?php
else :
    // no post found code 
endif;

// Restore original query object
$wp_query = null;
$wp_query = $tmp_query;



 ?>
                </div><!-- row -->
            </div><!-- post-content -->
          </div><!-- recent-post-section -->

      </div><!-- col-xl-9 -->


       <div class="col-12 col-sm-12 col-md-12 col-lg-3 col-xl-3">
          <div class="popular-post-section">
             <div class="section-title">
              <h2><?php _e('Popular Posts', 'recipe-yard'); ?></h2>
            </div>
              <div class="row">
            <?php
              $popular_posts_args = array(
                'posts_per_page' => 10,
                'meta_key' => 'my_post_viewed',
                'orderby' => 'meta_value_num',
                'order'=> 'DESC'
              );
               
              $popular_posts_loop = new WP_Query( $popular_posts_args );
               
              while( $popular_posts_loop->have_posts() ):
                $popular_posts_loop->the_post();
                // Loop continues
                ?>
              
                <div class="col-12 col-sm-12 col-md-6 col-lg-12 col-xl-12">
                <div class="popular-post">
                  <a href="<?php the_permalink(); ?>">
                    <div class="hover01 column">
                        <figure><?php the_post_thumbnail('my_post_image'); ?></figure>
                      </div>
                    </a>
                  <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
              </div>
            </div>
    
                <?php
              endwhile;
              wp_reset_query();
              ?>
            </div>
         </div><!-- popular-post-section -->
      </div><!-- col-xl-3 -->

    </div><!-- row -->
  </div><!-- container -->
</section><!-- main-section -->

<?php
get_footer();
