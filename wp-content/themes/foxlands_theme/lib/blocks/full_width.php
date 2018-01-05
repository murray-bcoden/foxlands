
<?php if ( get_sub_field( 'image' ) || get_sub_field( 'column_content_1' ) || get_sub_field( 'column_content_2' ) || get_sub_field( 'column_content_3' ) ) : ?>

	<div class="section full-width">

		<?php if ($section_content = get_sub_field( 'section_content' ) ) : ?>

		<div class="title-block container">
		
			<?php echo $section_content; ?>
			
		</div>

		<?php endif; ?>
		
		<div class="clearfix columns">

			<?php if ($img = get_sub_field( 'image' ) ) : ?>
				<div class="f-left quarter image">
					
					<img src="<?php echo $img['url'] ?>" alt="<?php echo $img['title']; ?>">

				</div>
			<?php endif; ?>

			<?php if ( $contet = get_sub_field( 'column_content_1' ) ) : ?>
				<div class="f-left quarter text-block"><?php echo $contet; ?></div>
			<?php endif; ?>

			<?php if ( $contet = get_sub_field( 'column_content_2' ) ) : ?>
				<div class="f-left quarter text-block"><?php echo $contet; ?></div>
			<?php endif; ?>

			<?php if ( $contet = get_sub_field( 'column_content_3' ) ) : ?>
				<div class="f-left quarter text-block"><?php echo $contet; ?></div>
			<?php endif; ?>

		</div>

	</div>

<?php endif; ?>