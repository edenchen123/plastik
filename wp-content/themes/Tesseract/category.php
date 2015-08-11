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
            <div class="col-lg-4">
                <h4><?php the_title() ?></h4>
                <div class="thumbnail">
                        <?php the_post_thumbnail('thumbnail'); ?>
                </div>
            </div>
        <?php endwhile; ?>
        </div>


<?php get_footer(); ?>
