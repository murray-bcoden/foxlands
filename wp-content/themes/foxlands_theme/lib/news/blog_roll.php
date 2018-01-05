<div class="single-news-post">
	
	<a href="<?php the_permalink() ?>"><span class="thumbnail" style="background-image: url(<?php if ( has_post_thumbnail()) : the_post_thumbnail_url('half'); else: echo 'http://placehold.it/1200x600'; endif; ?>)"></span></a>

	<div class="content" data-mh="news_content">
		

		<span class="cat"><?php echo get_the_category_list( ', ' ) ?></span>

		<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

		<span class="date"><?php the_time('d F Y') ?></span>

		<?php the_excerpt(); ?>


		<a class="go_button" href="<?php the_permalink(); ?>"></a>

	</div>	

</div>