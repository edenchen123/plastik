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
                        <h4><a href="#"> <?php the_title() ?></a></h4>
                    </div>
                    <div class="sku-model">
                        <label>Model:</label>MGKL2LL
                    </div>
                    <div class="short-description">
                        <li>9.7" Retina display</li>
                        <li>Apple iOS 8.1</li>
                        <li>64GB storage capacity</li>
                        <li>A8X chip </li>
                        <li>Wi-Fi</li>
                        <li>8MP iSight camera</li>
                    </div>
                </div>
            </div>
        <?php endwhile; ?>
        </div>


<?php get_footer(); ?>
