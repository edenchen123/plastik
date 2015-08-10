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
$containers = new WP_Query($args); 
echo $args[1];
?>
<h1><?php echo $category."(".count($containers).")"; ?></h1>
        <div class="row">
            <?php while ($containers->have_posts()): $containers->the_post(); ?> 
            <div class="col-lg-4">
                <h4><?php the_title() ?></h4>
                <div class="thumbnail">
                	<?php the_post_thumbnail('thumbnail'); ?>
                </div>
            </div>
        <?php endwhile; ?>
        </div>
	
	
<?php get_footer(); ?>
