<?php
/**
 * Index Template
 *
 * @author    Murray Creative
 * @copyright 2017 Murray Creative
 * @version   1.0
 */

get_header(); ?>

<main class="news_page">	

	<div class="title-block">
		
		<h1><?php if ($title = get_field( 'news_title', 'option' ) ) : echo $title; else: echo 'News'; endif;?></h1>

	</div>

	<div class="blog-roll container large">
		
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	       
			<?php echo get_template_part('lib/news/blog_roll') ?>
	    
	    <?php endwhile; ?>
	    
	    <?php endif; wp_reset_query();?>

	</div>
		
	<?php if ( $policies = get_field('policies_files', 'option') ) : ?>

		<div class="policies container" style="background-image: url(<?php if ($bg_img = get_field( 'policies_img', 'option' ) ) : echo $bg_img['url']; else: echo 'http://placehold.it/1400x600'; endif;?>)">

			<?php if ($title = get_field( 'policies_block_title', 'option' ) ) : ?>
				<h2><?php echo $title; ?></h2>
			<?php endif; ?>
		
		    <ul class="no-format text-align left clearfix">
		                
		        <?php foreach ( $policies as $single_policy ) : 

		            $title = $single_policy['title'];
		            $file = $single_policy['file']; 
		    
		        ?>	

			        <?php if($file): ?>
			        	
			        	<li>

			        		<a href="<?php echo $file; ?>"  target="_blank">

					        	<span class="icon-file ib"></span>
					        	<div class="wrapper ib">
						        		
						        	<p><?php echo $title; ?></p>

					        	</div>	

							</a>

			            </li>

			        <?php endif; ?>

		        <?php endforeach; ?>

		    </ul>
		   
		</div>

	<?php endif; ?>
	<div class="pagination">
			
		<?php 

		echo paginate_links(
			array(

				'prev_text'          => __(''),
				'next_text'          => __('')
			)

		); ?>

	</div>
</main>

<?php get_footer(); ?>