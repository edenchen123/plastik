<?php
/**
 * Template Name: Catalog Page
 *
 * @package Tesseract
 */

get_header(); ?>
<?php
$_cat_ = get_query_var('cat');
$category = get_category ($_cat_);
$args = array('post_type' => 'containers','category' => $_cat_);
$containers_query = new WP_query($args);
?>
<h1><?php echo $category.title."(".$containers_query->found_posts.")"; ?></h1>
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
