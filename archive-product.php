<?php
/**
 * The template for displaying archive pages.
 *
 * @package Inhabitent_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<?php
					the_archive_title( '<h1 class="page-title">', '</h1>' );
                ?>
            </header><!-- .page-header -->

            <div class="contents-arrange">
              <?php  $terms = get_terms( array(
                    'taxonomy' => 'product_type',
                    'hide_empty' => 0,
              ));
              ?>
              
            <?php    
			if ( ! empty( $terms ) && ! is_wp_error( $terms ) ) : ?>
				<?php foreach ( $terms as $term ) : ?>
					<p><a href="<?php echo get_term_link( $term ); ?>"class="btn"><?php echo $term->name; ?></a></p>
				
			<?php endforeach; ?>
			
            <?php endif; ?>
            </div> <!-- contents-arrange-->
            
			
            <?php /* Start the Loop */ ?>
            <div class="page-articles-products">
            <?php while ( have_posts() ) : the_post(); ?>
            
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                        <?php if ( has_post_thumbnail() ) : ?>
                        <a href=<?php echo get_post_permalink() ?>><?php the_post_thumbnail( 'medium' ); ?></a>
                        <?php endif; ?>
                        
                        <div class="product-item-info">
                            <?php the_title( '<h2 class="entry-title">', '</h2>' ); ?>
                            <p class="price dots">...................</p>
                            <p class="price"><?php echo CFS()->get( 'price' ); ?></p>
                        </div>

                </article><!-- #post-## -->

			<?php endwhile; ?>

            <?php the_posts_navigation(); ?>
        
		    <?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

            <?php endif; ?>
            </div> <!--page-articles-products-->

		</main><!-- #main -->
	</div><!-- #primary -->
<?php get_footer(); ?>
