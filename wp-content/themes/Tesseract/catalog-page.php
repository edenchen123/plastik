<?php
/**
 * Template Name: Catalog Page
 *
 * @package Tesseract
 */

get_header(); ?>

	<div class="row">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php
					/* Include the Post-Format-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
					get_template_part( 'content', 'page' );
					
					// If comments are open or we have at least one comment, load up the comment template
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;
				?>

			<?php endwhile; ?>

			<?php tesseract_paging_nav(); ?>

		<?php else : ?>

			<?php get_template_part( 'content', 'none' ); ?>

		<?php endif; ?>

		
	</div><!-- #primary -->
<?php $containers = new WP_Query(array('post_type' => 'containers'));?>
        <div class="row">
            <?php while ($containers->have_posts()): $containers->the_post(); ?> 
            <div class="col-lg-4">
                <h4><?php the_title() ?></h4>
            </div>
        <?php endwhile; ?>
        </div>
</main>
<?php get_footer(); ?>
