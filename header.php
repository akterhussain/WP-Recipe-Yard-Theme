<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Recipe_Yard
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
	
	<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-132863992-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-132863992-1');
</script>


</head>

<body <?php body_class(); ?>>

 <!--[if lte IE 9]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  <![endif]-->

  <!-- Add your site or application content here -->

<section class="main-header" id="myHeader">
  <div class="container">
    <div class="row">
      <div class="col-6 col-sm-2 col-md-2 col-lg-2 col-xl-2">
        <div class="logo-area">
          <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo esc_url( get_template_directory_uri()); ?>/assets/img/logo.png" alt="Moni Recipe"></a>
        </div><!-- logo-area -->
      </div><!-- col-xl-2 -->
      <div class="col-6 col-sm-7 col-md-8 col-lg-8 col-xl-8">
         <div class="top-social">
          <ul>
            <li><a href="https://www.facebook.com/monirecipe/" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
            <li><a href="" target="_blank"><i class="fab fa-twitter"></i></a></li>
            <li><a href="" target="_blank"><i class="fab fa-youtube"></i></a></li>
            <li><a href="" target="_blank"><i class="fab fa-instagram"></i></a></li>
            <li><a href="" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
          </ul>
        </div><!-- top-social -->
                <div class="main-menu-section menu-display-2">
                <button class="menu-button"><i class="fas fa-bars"></i> <?php _e( 'Recipes','recipe-yard' ); ?></button>
                <div class="menu-content-area">
                      <div class="menu-row">
                            <div class="main-menu">
                           <?php
                wp_nav_menu( array(
                'theme_location' => 'menu-1',
              ) );
                ?>
                            </div> <!-- main-menu -->
                      </div>
                      <div class="menu-row">
                         <div class="main-menu">
                             <?php
                wp_nav_menu( array(
                'theme_location' => 'menu-2',
              ) );
                ?>
                          </div> <!-- main-menu -->
                      </div><!-- col-xl-3 -->

                      <div class="menu-row">
                         <div class="main-menu">
                             <?php
                wp_nav_menu( array(
                'theme_location' => 'menu-3',
              ) );
                ?>
                          </div> <!-- main-menu -->
                      </div><!-- col-xl-3 -->

                      <div class="menu-row">
                         <div class="main-menu">
                             <?php
                wp_nav_menu( array(
                'theme_location' => 'menu-4',
              ) );
                ?>
                          </div> <!-- main-menu -->
                      </div><!-- col-xl-3 -->
                </div><!-- menu-content-area -->
        </div><!-- main-menu-section -->

      </div>
      <div class="col-sm-3 col-md-2 col-lg-2 col-xl-2">
        <div class="main-menu-section menu-display">
                <button class="menu-button"><i class="fas fa-bars"></i> <?php _e( 'Recipes','recipe-yard' ); ?></button>
                <div class="menu-content-area">
                      <div class="menu-row">
                            <div class="main-menu">
	                         <?php
								wp_nav_menu( array(
								'theme_location' => 'menu-1',
							) );
								?>
                            </div> <!-- main-menu -->
                      </div>
                      <div class="menu-row">
                         <div class="main-menu">
                             <?php
								wp_nav_menu( array(
								'theme_location' => 'menu-2',
							) );
								?>
                          </div> <!-- main-menu -->
                      </div><!-- col-xl-3 -->

                      <div class="menu-row">
                         <div class="main-menu">
                             <?php
								wp_nav_menu( array(
								'theme_location' => 'menu-3',
							) );
								?>
                          </div> <!-- main-menu -->
                      </div><!-- col-xl-3 -->

                      <div class="menu-row">
                         <div class="main-menu">
                             <?php
								wp_nav_menu( array(
								'theme_location' => 'menu-4',
							) );
								?>
                          </div> <!-- main-menu -->
                      </div><!-- col-xl-3 -->
                </div><!-- menu-content-area -->
        </div><!-- main-menu-section -->
      </div><!-- col-xl-2 -->
    </div><!-- row -->
  </div><!-- container -->
</section><!-- main-header-->