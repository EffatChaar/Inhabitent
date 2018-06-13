<?php
/**
 * Template part for displaying single posts.
 *
 * @package Inhabitent_Theme
 */

?>

<?php get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<header class="entry-header">
		
	<?php if ( has_post_thumbnail() ) : ?>
			<?php the_post_thumbnail( 'large' ); ?>
		<?php endif; ?>

	</header><!-- .entry-header -->
	<div class="thumbnail-info">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		<div class="entry-content">
			<p class="price-tag"><?php echo CFS()->get( 'price' ); ?></p>
			<?php the_content(); ?>
			<?php
				wp_link_pages( array(
					'before' => '<div class="page-links">' . esc_html( 'Pages:' ),
					'after'  => '</div>',
				) );
			?>
			<div class="social-media">
			<button type="button" class="button"><i class="fa fa-facebook"></i>   Like</button>
			<button type="button" class="button"><i class="fa fa-twitter"></i>   Tweet</button>
			<button type="button" class="button"><i class="fa fa-pinterest"></i>   Pin</button>
	</div> <!--social-media-->
		</div><!-- .entry-content -->
	</div> <!--thumbnail-info-->

	
</article><!-- #post-## -->

<?php endwhile; ?>
<?php get_footer(); ?>
