<?php
/**
 * Single Template
 *
 * @author    Murray Creative
 * @copyright 2017 Murray Creative
 * @version   1.0
 */

get_header(); ?>
	
<main class="single-news-post">
	<div class="title-block">
		
		<h2>News</h2>

	</div>
	<div class="container clearfix">
		
		<div class="main-content  with_sidebar ">
			
			<span class="thumbnail" <?php if (has_post_thumbnail()): ?> style="background-image: url(<?php the_post_thumbnail_url('hero'); ?>)" <?php endif; ?>></span>



			<span class="cat"><?php echo get_the_category_list( ', ' ) ?></span>
			<div class="text-block-single">
					
				<h1 class="post_title"><?php the_title(); ?></h1>
				<div class="text-block">
					
				<?php the_content(); ?>

				</div>

			</div>
		</div>

		<?php 

			$args = array(

				'posts_per_page' => '10',
				'post_type' => 'post'

			);

		?>


		<div class="side-content f-right">
			
			<div class="single-sidebar-section">

				<h2 class="sidebar-section-title">Latest News</h2>

				<ul class="no-format text-align left">

					<?php if (have_posts()) : $c=1; query_posts( $args ); while (have_posts()) : the_post(); ?>

				    <li class="single-related-page">
				    	<a href="<?php echo get_permalink(); ?>"><?php echo get_the_title( ); ?></a>
				    </li>
				
					<?php $c++; endwhile; ?>

					<?php endif; wp_reset_query();?>

				</ul>

			</div>

			

			<div class="single-sidebar-section">

				<h2 class="sidebar-section-title">Related News</h2>

				<ul class="no-format text-align left">

					<?php
					// Default arguments
					$args = array(
						'posts_per_page' => 4, // How many items to display
						'post__not_in'   => array( get_the_ID() ), // Exclude current post
						'no_found_rows'  => true, // We don't ned pagination so this speeds up the query
					);

					// Check for current post category and add tax_query to the query arguments
					$cats = wp_get_post_terms( get_the_ID(), 'category' ); 
					$cats_ids = array();  
					foreach( $cats as $wpex_related_cat ) {
						$cats_ids[] = $wpex_related_cat->term_id; 
					}
					if ( ! empty( $cats_ids ) ) {
						$args['category__in'] = $cats_ids;
					}

					// Query posts
					$wpex_query = new wp_query( $args );

					// Loop through posts
					foreach( $wpex_query->posts as $post ) : setup_postdata( $post ); ?>
						<li>
							<a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( the_title_attribute( 'echo=0' ) ); ?>"><?php the_title(); ?></a>
						</li>
					<?php
					// End loop
					endforeach;

					// Reset post data
					wp_reset_postdata(); ?>

				</ul>

			</div>


		</div>


	</div>

</main>
	
<?php get_footer(); ?>
