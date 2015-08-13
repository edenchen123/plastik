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
<h1><?php 
$title = single_cat_title();
echo $title."(".$containers_query->found_posts.")"; ?></h1>
        <div class="row">
            <?php while ($containers_query->have_posts()): $containers_query->the_post(); ?>
            <div class="list-item">
                <div class="list-item-thumbnail">
                    <div class="thumb">
                        <?php the_post_thumbnail('thumbnail'); ?>
                    </div>
                </div>
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
            </div>
        <?php endwhile; ?>
        </div>


<?php get_footer(); ?>
