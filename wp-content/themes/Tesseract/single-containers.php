<?php
/**
 * The template for displaying all single posts.
 *
 * @package Tesseract
 */

get_header();?>

	<div class="row">
		<div class="col-md-6">
			<div class="row">
				<img src="http://54.173.177.91/wp-content/uploads/2015/08/pl23_round.png" width="498" height="498">
			</div>
			<div class="row">
				<img src="http://54.173.177.91/wp-content/uploads/2015/08/pl23_round.png" width="95" height="95">
				<img src="http://54.173.177.91/wp-content/uploads/2015/08/pl23_round.png" width="95" height="95">
			</div>
		</div>
		<div class="col-md-6">
			<div class="list-item-info">
                <div class="sku-title">
                  <?php the_title()?>
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
		</div>
	</div>	

<?php get_footer(); ?>