<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage 
 * @since Twenty Sixteen 1.0
 */

?>
<!DOCTYPE html>
<html lang="en-US">
    <head>
        <meta charset="UTF-8">
		<!--[if IE]>
	        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<![endif]-->
        		
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php endif; ?>
	

     


<link rel='stylesheet' id='rtb-booking-form-css'  href='<?php echo get_template_directory_uri(); ?>/css/booking-form.css?ver=4.5' type='text/css' media='all' />
<link rel='stylesheet' id='pickadate-default-css'  href='<?php echo get_template_directory_uri(); ?>/css/default.css?ver=4.5' type='text/css' media='all' />
<link rel='stylesheet' id='pickadate-date-css'  href='<?php echo get_template_directory_uri(); ?>/css/default.date.css?ver=4.5' type='text/css' media='all' />
<link rel='stylesheet' id='pickadate-time-css'  href='<?php echo get_template_directory_uri(); ?>/css/default.time.css?ver=4.5' type='text/css' media='all' />
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap-select.css">
<!-- <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/meanmenu.css"> -->

<link rel='stylesheet' id='mytheme-theme-css'  href='http://fonts.googleapis.com/css?family=Open+Sans%3A300%2C400%2C600%2C800%2C700&#038;ver=4.5' type='text/css' media='all' />
<link href="https://fonts.googleapis.com/css?family=Exo+2:400,700" rel="stylesheet">
<link rel='stylesheet' id='style-css'  href='<?php echo get_template_directory_uri(); ?>/css/style.css?ver=4.5' type='text/css' media='all' />



<script type='text/javascript' src='<?php echo get_template_directory_uri(); ?>/js/jquery.js'></script>
<script type='text/javascript' src='<?php echo get_template_directory_uri(); ?>/js/jquery-migrate.min.js'></script>
<script type='text/javascript' src='<?php echo get_template_directory_uri(); ?>/js/custom.min.js'></script>
<script type='text/javascript' src='<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js'></script>
<script type='text/javascript' src='<?php echo get_template_directory_uri(); ?>/js/jquery.flexslider-min.js'></script>
<script type='text/javascript' src='<?php echo get_template_directory_uri(); ?>/js/jquery.bxslider.min.js'></script>
<script type='text/javascript' src='<?php echo get_template_directory_uri(); ?>/js/lightbox-2.6.min.js'></script>
<script type='text/javascript' src='<?php echo get_template_directory_uri(); ?>/js/accordion.js'></script>
<script type='text/javascript' src='<?php echo get_template_directory_uri(); ?>/js/skroll.js'></script>
<script type='text/javascript' src='<?php echo get_template_directory_uri(); ?>/js/main.js'></script>
<!-- <script type='text/javascript' src='<?php echo get_template_directory_uri(); ?>/js/jquery.meanmenu.min.js'></script> -->
<?php wp_head(); ?>
	
    </head>
    <body <?php body_class(); ?>>
 	<!-- START FIXED TOP NAVIGATION & LOGO -->
			<div class="navbar navbar-fixed-top navbar-inverse" role="navigation">
			 	<div class="container">
                <!-- START LOGO -->
	              	<div class="logo">
                    	<a href="<?php echo home_url(); ?>">
                    	<img src="<?php echo get_template_directory_uri(); ?>/image/logo.png" alt="lepizzariabd" />                        </a>
                    </div>
                 <!-- END LOGO -->   
                 
                    <div class="top-right col-md-6 pull-right text-right">
                    <p>Need help ordering?(11 AM to 11 PM)</p>
                    	<h3>Call us: 01700-690383</h3>
                    </div>
                    
  			   </div>
		    </div>
