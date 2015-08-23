<?php
/**
 * Template Name: Category Page
 *
 * @package Tesseract
 */

get_header(); ?>
<?php
$cat = get_query_var('category');
$category = get_category ($cat);
$args = array('post_type' => 'containers','category' => $cat);
$containers_query = new WP_query($args);


function the_slug($echo=true){
  $slug = basename(get_permalink());
  do_action('before_slug', $slug);
  $slug = apply_filters('slug_filter', $slug);
  if( $echo ) echo $slug;
  do_action('after_slug', $slug);
  return $slug;
}
?>
<section class="products-list">			
			<div class="container">
			<!-- Heading Starts -->
				<h2 class="product-head">
					<?php 
$title = single_cat_title();
echo $title."(".$containers_query->found_posts.")"; ?></h2>
			<!-- Heading Ends -->
			<!-- Products Row Starts -->
				<div class="row">
					<?php while ($containers_query->have_posts()): $containers_query->the_post(); ?>
				<!-- Product #1 Starts -->
					<div class="col-md-4 col-sm-6">
						<div class="product-col">
							<div class="image">
								<a href="/containers/<?php the_slug();?>">
									<img src="http://54.173.177.91/wp-content/uploads/2015/08/pl23_round.png" alt="product" class="img-responsive">
								</a>	
							</div>
							<div class="caption">
								<div class="list-item-info">
				                    <div class="sku-title">
				                        <a href="/containers/<?php the_slug();?>"><?php the_title()?></a>
				                    </div>
				                    <div class="sku-model">
				                        <label>Model:</label>&nbsp;<?php the_field('model'); ?>
				                    </div>
				                    <div class="short-description">
				                    	<li><?php the_field('available_color'); ?></li>
				                    	<li><?php the_field('carton_count'); ?></li>
				                        <li><?php the_field('volume'); ?>&nbsp;oz</li>
				                        <li><?php the_field('tiorhi'); ?></li>
				                        <li><?php the_field('cbm'); ?></li>
				                    </div>
                				</div>
								<div class="cart-button button-group">
									<button type="button" title="" class="btn btn-wishlist" data-original-title="Wishlist">
										<i class="fa fa-heart"></i>
									</button>
									<!-- <button type="button" title="" class="btn btn-compare" data-original-title="Compare">
										<i class="fa fa-bar-chart-o"></i>
									</button> -->
									<a href="/containers/<?php the_slug();?>">
									<button type="button" class="btn btn-cart">
										View Details
										<i class="fa fa-shopping-cart"></i> 
									</button>	
									</a>								
								</div>
							</div>
						</div>
					</div>
				<!-- Product #1 Ends -->		
				     <?php endwhile; ?>
				</div>
			<!-- Products Row Ends -->
			</div>
		</section>
<?php get_footer(); ?>
