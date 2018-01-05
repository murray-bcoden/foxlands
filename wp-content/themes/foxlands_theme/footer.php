	<footer id="mastfoot" class="clearfix" role="contentinfo">
		
		<div class="container clearfix">
			<?php if ($content = get_field( 'footer_content', 'option' ) ) : ?>
				<div class="f-left"><?php echo $content; ?></div>
			<?php endif; ?>

			<div class="f-right"><img src="<?php bloginfo('template_directory'); ?>/img/marlet.png" alt="marlet"></div>
		
		</div>

	</footer>

	<?php wp_footer(); ?>

	</body>
</html>