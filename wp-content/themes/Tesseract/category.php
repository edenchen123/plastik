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
					<div class="col-md-3 col-sm-6">
						<div class="product-col">
							<div class="image">
								<img src="http://54.173.177.91/wp-content/uploads/2015/08/pl23_round.png" alt="product" class="img-responsive">
							</div>
							<div class="caption">
								<h4><a href="#"><?php the_title() ?></a></h4>
								<div class="list-item-info">
				                    <div class="sku-title">
				                        <a href="#"><?php the_title() ?></a>
				                    </div>
				                    <div class="sku-model">
				                        <label>Model:</label>MGKL2LL
				                    </div>
				                    <div class="short-description">
				                        <li>15 oz</li>
				                        <li>black,white</li>
				                        <li>20 g</li>
				                        <li>150</li>
				                        <li>7x4</li>
				                        <li>Small/Medium/Large</li>
				                    </div>
                				</div>
								<div class="cart-button button-group">
									<button type="button" title="" class="btn btn-wishlist" data-original-title="Wishlist">
										<i class="fa fa-heart"></i>
									</button>
									<button type="button" title="" class="btn btn-compare" data-original-title="Compare">
										<i class="fa fa-bar-chart-o"></i>
									</button>
									<button type="button" class="btn btn-cart">
										Add to cart
										<i class="fa fa-shopping-cart"></i> 
									</button>									
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
