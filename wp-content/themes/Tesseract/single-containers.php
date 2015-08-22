<?php
/**
 * The template for displaying all single posts.
 *
 * @package Tesseract
 */

get_header();

function the_slug($echo=true){
  $slug = basename(get_permalink());
  do_action('before_slug', $slug);
  $slug = apply_filters('slug_filter', $slug);
  if( $echo ) echo $slug;
  do_action('after_slug', $slug);
  return $slug;
}
?>

	<div class="row">
		<div class="col-md-7">
			<div class="row">
				<!-- <img src="http://54.173.177.91/wp-content/uploads/2015/08/pl23_round.png" width="498" height="498"> -->

               <?php if ( function_exists( 'soliloquy' ) ) { soliloquy( '7-round-deep-bowl-container', 'slug' ); }?>
			</div>
			<!-- <div class="row">
				<img src="http://54.173.177.91/wp-content/uploads/2015/08/pl23_round.png" width="95" height="95">
				<img src="http://54.173.177.91/wp-content/uploads/2015/08/pl23_round.png" width="95" height="95">
			</div> -->
		</div>
		<div class="col-md-5">
			<div class="list-item-info">
                <div class="sku-title">
                  <?php the_title()?>
                </div>
                <div class="sku-model">
                    <label>Model:</label>&nbsp;<?php the_field('model'); ?>
                </div>
                <div class="short-description">
                    <li><?php the_field('volume'); ?>&nbsp;oz</li>
                    <li><?php the_field('available_color'); ?></li>
                    <li><?php the_field('carton_count'); ?>&nbsp;g</li>
                    <li><?php the_field('weight'); ?> &nbsp;g</li>
                    <!--            <li><?php the_field('model'); ?></li> -->
                    <li><?php the_field('size'); ?></li>
                </div>
            </div>
		</div>
	</div>	

<?php get_footer(); ?>