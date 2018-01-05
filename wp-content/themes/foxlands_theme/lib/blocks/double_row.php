<div class="double-row section rel clearfix">

	<?php if ($content_top = get_sub_field( 'content_top' ) ) : ?>
		<div class="top-row">
			<?php if ($img_top_left = get_sub_field( 'image_top_left' ) ) : ?>
			<div class="col col1" data-mh="col">
				<img src="<?php echo $img_top_left['url'] ?>" class="abs top_left" alt="<?php echo $img_top_left['title'] ?>">
			</div>
			<div class="col col2" data-mh="col"></div>
			<?php endif ?>

			<div class="<?php if ($img_top_left = get_sub_field( 'image_top_left' ) ) : ?>col col3<?php endif; ?> text-block container small" data-mh="col"><div class="constrained"><?php echo $content_top ?></div></div>

		</div>
	<?php endif; ?>


	<div class="bottom-row  clearfix">
		
		<div class="content-wrapper container">
				
			<?php

				$title_left = get_sub_field( 'title_left' );
				$content_left = get_sub_field( 'content_left' );

				$title_right = get_sub_field( 'title_right' );
				$content_right = get_sub_field( 'content_right' );

			?>
			
			<div class="f-left half text-block">

				<div class="header-height" data-mh="header-row"><?php if ($title_left): ?><h2><?php echo $title_left ?><?php endif; ?></h2></div>

				<div class="content"><?php echo $content_left ?></div>

			</div>

			<div class="f-right half rel text-block">

				<div class="header-height" data-mh="header-row"><?php if ($title_right): ?><h2><?php echo $title_right ?></h2><?php endif; ?></div>

				<div class="content"><?php echo $content_right ?></div>


				<?php if ($img_br = get_sub_field( 'image_bottom_right' ) ) : ?>
					<img src="<?php echo $img_br['url'] ?>" class="abs bottom_right" alt="<?php echo $img_br['title']; ?>">
				<?php endif; ?>

			</div>

		</div>

	</div>

</div>