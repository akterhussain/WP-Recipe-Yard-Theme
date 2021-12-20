		<section class="right-sidebar-area">
			<div class="row">
				<div class="col-xl-12">
					<div class="sidebar-recent-post">
						<h2><?php _e('Recent Posts', 'recipe-yard'); ?></h2>
						<div class="sidebar-post-content">
							<div class="row">
							 <?php 
                     // the query
                     $the_query = new WP_Query( array(
                        'post_type' => 'post',
    					'post_per_page' => 5,
               
                     )); 
                  ?>

                  <?php if ( $the_query->have_posts() ) : ?>
                    <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
     
                    	<div class="col-12 col-sm-12 col-md-6 col-lg-12 col-xl-12">
                      <div class="sidebar-post">
                          <a href=" <?php the_permalink(); ?>"> 
                         <?php the_post_thumbnail('my_post_image'); ?>
                          </a>
                           <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                      </div><!-- sidebar-post -->
                      </div>
                    <?php endwhile; ?>

                    <?php wp_reset_postdata(); ?>

                  <?php else : ?>
                    <p><?php __('No Post'); ?></p>
                  <?php endif; ?>

                  		</div>
						</div><!-- sidebar-post-content -->

					</div><!-- recent-post-area -->

				</div>
			</div>
			<div class="row">
				<div class="col-xl-12">
			
	     		<div class="popular-post-section">
			             <div class="sidebar-recent-post">
			              <h2><?php _e('Popular Posts', 'recipe-yard'); ?></h2>
			            </div>
			            <div class="row">
			            <?php
			              $popular_posts_args = array(
			                'posts_per_page' => 5,
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
			                  <div class="sidebar-post">
                          <a href=" <?php the_permalink(); ?>"> 
                         <?php the_post_thumbnail('my_post_image'); ?>
                          </a>
                           <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                      </div><!-- sidebar-post -->
                      	</div>

			                <?php
			              endwhile;
			              wp_reset_query();
			              ?>

			              </div>
			          </div><!-- popular-post-section -->
				</div>
			</div>
		</section><!-- right-sidebar- area -->