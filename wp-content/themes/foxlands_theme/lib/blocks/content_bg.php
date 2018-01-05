<?php if ($content = get_sub_field( 'content' ) ) : ?>
<div class="bg-section section<?php if ( get_sub_field( 'nmb' ) ) : echo ' nmb'; endif; ?>" style="background-image: url(<?php if ($bg = get_sub_field( 'background_image' ) ) : echo $bg['url']; else: echo 'http://placehold.it/1920x1080'; endif; ?>)">

	<div class="container clearfix">
		
		<div class="half text-block white-text f-left">
			
			<?php echo $content; ?>

		</div>

	</div>


</div>
<?php endif; ?>