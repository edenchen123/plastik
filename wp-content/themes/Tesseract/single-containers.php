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

		<div class="col-md-7">
               <?php if ( function_exists( 'soliloquy' ) ) { soliloquy( '7-round-deep-bowl-container', 'slug' ); }?>
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
                    <li><?php the_field('carton_count'); ?></li>
                    <li><?php the_field('weight'); ?> &nbsp;g</li>
                    <!--            <li><?php the_field('model'); ?></li> -->
                    <li><?php the_field('size'); ?></li>

                </div>
            </div>
            <button class="btn btn-sm btn-primary" style="margin-top:115px" onclick="window.history.back();">Back</button>
		</div>

<?php get_footer(); ?>