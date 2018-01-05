<div class="hero-block" style="background-image: url(<?php if ($bg_img = get_sub_field( 'background_image' ) ) : echo $bg_img['url']; else: echo 'http://placehold.it/1920x1080'; endif; ?>)">
	
	<div class="table"><div class="cell middle">
		
		

		<?php if ( get_sub_field( 'content' ) ) : ?>

			<div class="content container text-align center small">
			
				<h1><?php if ($title = get_sub_field( 'title' ) ) : echo $title; else: the_page_title(); endif; ?></h1>
			
				<?php the_sub_field( 'content' ); ?>

			</div>

		<?php endif; ?>
		
	</div></div>

</div>