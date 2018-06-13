<?php
/**
 * The main template file.
 *
 * @package Inhabitent_Theme
 */

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
	<!-- <div class="search-bar">
				<form role="search" method="get" class="search-toolbar" action="http://localhost:3000/Inhabitent/">
					<fieldset>
						<a href="#" class="toggle-search-bar">
							<i class="fa fa-search"></i>
						</a>
						<label>
							<input type="search" class="search-field-input">
						</label>
						<input type="submit" value="Search" class="search-input">
					</fieldset>
				</form>
			</div>search-bar -->
		<div class="front-page-main">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/images/logos/inhabitent-logo-full.svg">
			
				
		</div> <!--front-page-main-->


		<div class="shop-stuff">
			<h1 class="main-headings">SHOP STUFF</h1>
			<?php
			$terms = get_terms( array(
				'taxonomy'  => 'product_type', 
				'hide_empty' => 0,
			) );

			if ( ! empty( $terms ) && ! is_wp_error( $terms ) ) : ?>
			<div class="shop-flex">
				<?php foreach ( $terms as $term ) : ?>
				<div class="product-flex">
					<img src="<?php echo get_template_directory_uri() . '/assets/images/product-type-icons/' . $term->slug; ?>.svg">
					<p><?php echo $term->description; ?></p>
					<p><a href="<?php echo get_term_link( $term ); ?>" class="btn"><?php echo $term->name; ?> Stuff</a></p>
				</div><!--product-flex-->
			<?php endforeach; ?>
			</div><!--shop-flex-->
			<?php endif; ?>
		</div><!--shop-stuff-->
		

		<div class="inhabitent-journal">
			<h1>INHABITENT JOURNAL</h1>
			<?php
   				$args = array( 
					'post_type' => 'post', 
					'order' => 'ASC', 
					'numberposts' => 3, );
   				$post_posts = get_posts( $args ); // returns an array of posts
				?>
				<div class="journal-flex">
					<?php foreach ( $post_posts as $post ) : setup_postdata( $post ); ?>
					<div class="journal-item">
						<?php  the_post_thumbnail( 'medium' ); ?>
						<?php red_starter_posted_on(); ?> / <?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?> / <?php red_starter_posted_by(); ?>
						<h3><?php the_title()?></h3>
						<a href="<?php the_permalink(); ?>">READ ENTRY</a>
					</div><!--journal-item-->
					<?php endforeach; wp_reset_postdata(); ?>
				</div><!--journal-flex-->
		</div> <!--inhabitent-journal -->
				
				
		<div class="grid-post">
			<h1>LATEST ADVENTURE</h1>
			<div class="grid-section">

				<div class="grid-item item-one">
					<div class="thumbnail-grid-post">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/adventure-photos/canoe-girl.jpg">
				   	</div> <!--thumbnail-grid-post-->
				   	<div class="title-grid-post">
					   <p class="main-title-grid">Getting Back to Nature in a Canoe</p>
					   <a class="read-more-btn" href="#">READ MORE</a>
					</div><!--title-grid-post-->
					   
				</div><!--grid-item item-one-->

				<div class="grid-item item-two">
					<div class="thumbnail-grid-post">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/adventure-photos/beach-bonfire.jpg">
				   	</div> <!--thumbnail-grid-post-->
				   	<div class="title-grid-post">
					   <p class="main-title-grid">A Night with Friends at the Beach</p>
					   <a class="read-more-btn" href="#">READ MORE</a>
					</div><!--title-grid-post-->
					   
				</div><!--grid-item item-two-->

				<div class="grid-item item-three">
					<div class="thumbnail-grid-post">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/adventure-photos/mountain-hikers.jpg">
				   	</div> <!--thumbnail-grid-post-->
				   	<div class="title-grid-post">
					   <p class="main-title-grid">Taking in the View at Big Mountain</p>
					   <a class="read-more-btn" href="#">READ MORE</a>
					</div><!--title-grid-post-->
					   
				</div><!--grid-item item-three-->

				<div class="grid-item item-four">
					<div class="thumbnail-grid-post">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/adventure-photos/night-sky.jpg">
				   	</div> <!--thumbnail-grid-post-->
				   	<div class="title-grid-post">
					   <p class="main-title-grid">Star-Gazing at the Night Sky</p>
					   <a class="read-more-btn" href="#">READ MORE</a>
					</div><!--title-grid-post-->
					   
				</div><!--grid-item item-four-->

			</div> <!--grid-section-->

		</div> <!--grid-post-->
		
		<div class="last-section">
			<h3><a href="<?php the_permalink(); ?>">More Adventures</a></h3>
		</div>

	</main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>
