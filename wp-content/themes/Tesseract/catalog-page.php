<?php
/**
 * Template Name: Catalog Page
 *
 * @package Tesseract
 */

get_header(); ?>	

<?php
$category = $_GET['c'];
$containers = new WP_Query(array('post_type' => 'containers'); ?>
<h1><?php echo $_GET['c']."(".count($containers).")"; ?></h1>
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
