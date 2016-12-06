<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
 ?>
<?php get_header(); ?>
            <!-- Slider -->	
	<div class="main-benner">
	<div class="bannerimage"><img src="<?php echo get_template_directory_uri(); ?>/image/slider-1-1920x944.jpg" alt=""></div>

	<div class="location-search-outer">
		<div class="location-search-inner">
			<div class="location-search-area">
		<form class="form-inline" id="select-form" action="<?php echo home_url(); ?>/restaurant/le-pizzaria/" method="post" >
				<div class="input-group input-group-lg">
				<label class="home-text">You Hungry?</label>
			    <div class="form-group">
			    <select name="location" class="selectpicker">
			    <option value="">Select Location</option>
				  <option data-tokens="Banani">Banani</option>
			  <option data-tokens="Gulshan 1">Gulshan 1</option>
			  <option data-tokens="Gulshan 2">Gulshan 2</option>
			  <option data-tokens="Mohakhali">Mohakhali</option>
			</select>
			  </div>
			  
			    <div class="form-group">
			    <?php
			    $fooc_cat = json_decode(get_post_meta(4, 'fooc_cat', true));
			    ?>
			    <select class="selectpicker" id="select-menu" name="rest_menu" data-live-search="true">
			    <option value="">Select Menu</option>
			  <?php
			  if ($fooc_cat){ foreach ($fooc_cat as $key => $value){
			$p = (object) $value;
			  	?>
			  <option value="<?php echo $p->cat_id; ?>"><?php echo $p->cat_name; ?></option>
			  <?php } } ?>

			</select>

			  </div>
			  <div class="form-group">
			  	<button type="submit" class="btn btn-success home-search">Order Now</button>
			  </div>
			</div>
	</form>
	</div>
		</div>
	</div>
	
	
</div>
 		<!-- End Slider --><!-- Main Content -->
			
<!-- Products -->
  	<div class="container">
		<div class="row">
			<h2 class="head">Deals of the <strong>week</strong></h2>
			<?php
// The Query
$query = new WP_Query(array('post_type' => 'deals', 'posts_per_page'=>'3'));
query_posts( $query );

// The Loop
while ( $query->have_posts() ) : $query->the_post();  
$feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );

  ?>
<div class="col-md-4 col-sm-8 class="post-40 products type-products status-publish has-post-thumbnail hentry"
id="post-<?php echo $post->ID; ?>">
					<div class="blocks-frat">
                    	<!--<span class="price">$14.99</span>-->
						<img src="<?php echo $feat_image; ?>" alt="Spring Shrimps" class="img-responsive center-block" />					</div>
					<h4 class="subtitle"> <!-- <a href="<?php echo home_url(); ?>/restaurant/le-pizzaria/"> --><?php the_title(); ?><!-- </a> --> </h4>
                   	<p><?php the_content(); ?></p>
				</div>
			  <?php
			endwhile;

			// Reset Query
			wp_reset_query();
			?>
					
  	</div>
</div>
 <!-- End Products -->
<!-- Testimonials -->
		<div class="section p6" id="testimonial"></div>
 	
<?php get_footer(); ?>