<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Recipe_Yard
 */
?>



<section class="top-footer">
  <div class="container">
    <div class="row">

      <div class="col-12 col-md-6 col-lg-3 col-xl-3">
        <div class="footer-recipe">
          <h2><?php _e('Browse Recipe', 'recipe-yard'); ?></h2>

 <div class="footer-menu">
         <?php
                wp_nav_menu( array(
                'theme_location' => 'fmenu-1',
              ) );
                ?>
 </div> 

  <div class="footer-menu">
         <?php
                wp_nav_menu( array(
                'theme_location' => 'fmenu-2',
              ) );
                ?>
 </div>         
           
        </div>
      </div><!-- col-xl-3 -->


      <div class="col-12 col-md-6 col-lg-6 col-xl-6">
        <div class="footer-recipe">
          <h2><?php _e('Post Gallery', 'recipe-yard'); ?></h2>
           
            <?php 
                     // the query
                     $the_query = new WP_Query( array(
                         'posts_per_page' => 12,
                          'order'=> 'ASC',
                          'orderby' => 'rand',
               
                     )); 
                  ?>

                  <?php if ( $the_query->have_posts() ) : ?>
                    <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
     

                      <div class="footer-post">
                          <a href=" <?php the_permalink(); ?>">
                            <div class="hover01 column">
                             <figure><?php the_post_thumbnail('my_post_image'); ?></figure>
                            </div>
                          </a>
                      </div><!-- bangla-recipe-content -->
   

                    <?php endwhile; ?>

                    <?php wp_reset_postdata(); ?>

                  <?php else : ?>
                    <p><?php __('No Post'); ?></p>
                  <?php endif; ?>


        </div>
      </div><!-- col-xl-3 -->

         <div class="col-12 col-md-6 col-lg-3 col-xl-3">
        <div class="footer-recipe">
          <h2><?php _e('Subscribe Newsletter', 'recipe-yard'); ?></h2>
          <p><?php _e('Subscripbe to our mailing list to get the update post to you mail ', 'recipe-yard'); ?></p>
          <?php echo do_shortcode('[contact-form-7 id="771" title="Subscribe Form"]'); ?> 
        </div>
          <div class="button-social">
          <ul>
            <li><a href="https://www.facebook.com/monirecipe/" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
            <li><a href="" target="_blank"><i class="fab fa-twitter"></i></a></li>
            <li><a href="" target="_blank"><i class="fab fa-youtube"></i></a></li>
            <li><a href="" target="_blank"><i class="fab fa-instagram"></i></a></li>
            <li><a href="" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
          </ul>
        </div><!-- top-social -->
      </div><!-- col-xl-3 -->


    </div><!-- row -->
  </div><!-- container -->
</section><!-- button-footer -->



<section class="button-footer">
  <div class="container">
    <div class="row">
      <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
        <div class="button-menu">       
            <?php
                wp_nav_menu( array(
                'theme_location' => 'footer-m',
              ) );
                ?>
        </div>
      </div><!-- col-xl-6 -->

      <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
        <div class="footer-text">
          <p><?php _e('Copyright', 'recipe-yard'); ?> &copy; <?php echo date("Y");?> <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php _e('monirecipe.com', 'recipe-yard'); ?></a></p>
        </div>
      </div><!-- col-xl-6 -->
    </div><!-- row -->
  </div><!-- container -->
</section><!-- button-footer -->
	

<?php wp_footer(); ?>

</body>
</html>
