<?php
/**
 * The template for displaying archive shop pages.
 *
 * @package Inhabitent_Theme
 */

get_header(); ?>

    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">

        <?php if ( have_posts() ) : ?>

            <header class="page-header-container">
            <h1>
                <?php
                single_term_title( $prefix = '', $display = true );?></h1>

                <?php
                the_archive_description( '<p class="taxonomy-description">', '</p>' );?>

            </header>

            <div class="product-flex-container">
                
                <?php /* Start the Loop */ ?>

                <?php while ( have_posts() ) : the_post(); ?>
                
                    <div class="product-flex-item">
                        <div class="product-item-thumbnail">
                            <a href=<?php echo get_post_permalink() ?>><?php the_post_thumbnail( 'medium' ); ?></a>
                        </div>
                    
                        <div class="product-item-info">
                            <?php the_title( '<p class="entry-title">', '</p>' ); ?>
                            <p class="price dots">................</p>
                            <p class="price"><?php echo CFS()->get( 'price' ); ?></p>
                        </div>
                    </div> <!--product-flex-item-->
                <?php endwhile; ?>
            </div><!--product-flex-container-->

        <?php else : ?>
            <?php get_template_part( 'template-parts/content', 'none' ); ?>
        <?php endif; ?>

        </main><!-- #main -->

    </div><!-- #primary -->

<?php get_footer(); ?>
