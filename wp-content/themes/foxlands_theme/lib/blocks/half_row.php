<div class="section half-row-image-each">
	
	<div class="container clearfix">
		
		<div class="half f-left text-block clearfix">
			<?php if ($img_left = get_sub_field( 'image_left' ) ) : ?>
				<div class="ib <?php if ( get_sub_field( 'content_left' ) ) : ?>half <?php endif; ?>image">
					
					<img src="<?php echo $img_left['url'] ?>" alt="<?php echo $img_left['title'] ?>" class="half-image">

				</div>
			<?php endif; ?>

			<?php if ($content_left = get_sub_field( 'content_left' ) ) : ?>
				<div class="ib  half-content <?php if ( get_sub_field( 'image_left' ) ) : ?>half <?php endif; ?>content"><?php echo $content_left ?></div>
			<?php endif; ?>

		</div>

		<div class="half f-right text-block clearfix">
			<?php if ($img_right = get_sub_field( 'image_right' ) ) : ?>
				<div class="ib <?php if ( get_sub_field( 'content_right' ) ) : ?>half <?php endif; ?>image">
					
					<img src="<?php echo $img_right['url'] ?>" alt="<?php echo $img_right['title'] ?>" class="half-image">

				</div>
			<?php endif; ?>

			<?php if ($content_right = get_sub_field( 'content_right' ) ) : ?>
				<div class="ib half-content <?php if ( get_sub_field( 'image_right' ) ) : ?>half <?php endif; ?>content"><?php echo $content_right ?></div>
			<?php endif; ?>

		</div>


	</div>

</div>