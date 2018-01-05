<div class="row clearfix">

	<?php if ( get_sub_field( 'image_1' ) || get_sub_field( 'content_1' ) || get_sub_field( 'number_1' ) ) : ?>
		<div class="section third" data-mh="row">
			
			<?php if ($img =  get_sub_field( 'image_1' ) ) : ?>

				<div class="img-wrapper" data-mh="img_wrapper">
					<img src="<?php echo $img['url'] ?>" alt="<?php echo $img['title']; ?>">
				</div>
			<?php endif; ?>

			<?php if ($number = get_sub_field( 'number_1' ) ) : ?>
				<span class="large-number"><?php echo $number; ?></span>
			<?php endif; ?>
			<?php if ($content = get_sub_field( 'content_1' ) ) : ?>
			<div class="text-block">
					
				<?php echo $content; ?>

			</div>
		<?php endif; ?>

		</div>
	<?php endif; ?>

	<?php if ( get_sub_field( 'image_2' ) || get_sub_field( 'content_2' ) || get_sub_field( 'number_2' ) ) : ?>
		<div class="section third" data-mh="row">
			
			<?php if ($img =  get_sub_field( 'image_2' ) ) : ?>

				<div class="img-wrapper" data-mh="img_wrapper">
					<img src="<?php echo $img['url'] ?>" alt="<?php echo $img['title']; ?>">
				</div>
			<?php endif; ?>

			<?php if ($number = get_sub_field( 'number_2' ) ) : ?>
				<span class="large-number"><?php echo $number; ?></span>
			<?php endif; ?>
			<?php if ($content = get_sub_field( 'content_2' ) ) : ?>
			<div class="text-block">
					
				<?php echo $content; ?>

			</div>
		<?php endif; ?>

		</div>
	<?php endif; ?>

	<?php if ( get_sub_field( 'image_3' ) || get_sub_field( 'content_3' ) || get_sub_field( 'number_3' ) ) : ?>
		<div class="section third" data-mh="row">
			
			<?php if ($img =  get_sub_field( 'image_3' ) ) : ?>

				<div class="img-wrapper" data-mh="img_wrapper">
					<img src="<?php echo $img['url'] ?>" alt="<?php echo $img['title']; ?>">
				</div>
			<?php endif; ?>

			<?php if ($number = get_sub_field( 'number_3' ) ) : ?>
				<span class="large-number"><?php echo $number; ?></span>
			<?php endif; ?>
			<?php if ($content = get_sub_field( 'content_3' ) ) : ?>
			<div class="text-block">
					
				<?php echo $content; ?>

			</div>
		<?php endif; ?>

		</div>
	<?php endif; ?>




</div>