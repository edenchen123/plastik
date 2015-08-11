<?php
/**
 * Template Name: Catalog Page
 *
 * @package Tesseract
 */

get_header(); ?>

<?php
$category = $_GET['c'];
$args = array('post_type' => 'containers','category' => $category);
$containers_query = new WP_query($args);
?>
<h1><?php echo $category."(".$containers_query->found_posts.")"; ?></h1>
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
