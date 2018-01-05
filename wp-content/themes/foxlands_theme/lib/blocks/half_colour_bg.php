<div class="rel half_block_bg section <?php if ( get_sub_field( 'nmb' ) ) : echo ' nmb'; endif; ?>">

		<span class="left-colour-underlay underlay"></span>	
		<span class="right-colour-underlay underlay"></span>
		
	<div class="container rel clearfix">

		<?php if (get_sub_field( 'left_content' ) || get_sub_field( 'left_image' ) ) : ?>

			<div class="half left-content f-left rel ib">
				
				<?php if ($l_image = get_sub_field( 'left_image' ) ) : ?>
					<div class="image-block" data-mh="image"><div class="table"><div class="cell middle"><img src="<?php echo $l_image['url']; ?>" alt="<?php echo $l_image['title'] ?>"></div></div></div>
				<?php endif; ?>
				<div class="text-block"><?php the_sub_field( 'left_content' ) ?></div>

			</div>

		<?php endif; ?>

		<?php if (get_sub_field( 'right_content' ) || get_sub_field( 'right_image' ) ) : ?>

			<div class="half right-content f-right rel ib">
				

				<?php if ($r_image = get_sub_field( 'right_image' ) ) : ?>
					<div class="image-block" data-mh="image"><div class="table"><div class="cell middle"><img src="<?php echo $r_image['url']; ?>" alt="<?php echo $r_image['title'] ?>"></div></div></div>
				<?php endif; ?>
				<div class="text-block"><?php the_sub_field( 'right_content' ); ?></div>

			</div>

		<?php endif; ?>


	</div>



</div>