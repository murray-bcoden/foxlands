<div class="row clearfix single" style="background-image: url(<?php if ($img = get_sub_field( 'background_image' ) ) : echo $img['url']; else: echo 'http://placehold.it/1920x600'; endif;?> )">

	<div class="table"><div class="cell middle">

		<div class="container">
			<?php if ($img = get_sub_field( 'main_image' ) ) : ?>
				<img src="<?php echo $img['url'] ?>" <?php if ( get_sub_field( 'content' ) ) : ?> class="with_content" <?php endif; ?> alt="<?php echo $img['url']; ?>" >
			<?php endif; ?>

			<?php if ($content = get_sub_field( 'content' ) ) : ?>
				
				<div class="content">
					
					<?php echo $content; ?>

				</div>

			<?php endif; ?>

		</div>
	
	</div></div>

</div>