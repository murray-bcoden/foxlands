<?php
/** 
 * Template Name: Contact Us
 *
 * @author    Murray Creative
 * @copyright 2017 Murray Creative
 * @version   1.0
 */

get_header(); ?>
	
	<main class="contact">
		
		<div class="title-block">
			
			<h1><?php the_title(); ?></h1>

		</div>

		<div class="main-content clearfix">
			
			<div class="googlemaps" data-mh="maps">

				<?php 

				$location = get_field('location');

				if( !empty($location) ): ?>
				<div class="acf-map">

					<div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>"><?php the_field('address', 'option'); ?></div>
				</div>

				<?php endif; ?>

			</div>

			<div class="content" data-mh="maps">
				<ul class="no-format text-align left">
					
					<?php if ($email_address = get_field( 'email_address' ) ) : ?>
						<li>						
							<h2 class="grey-title">ALL ENQUIRIES</h2>
							<a href="mailto:<?php echo $email_address ?>" class="email"><?php echo $email_address ?></a>
						</li>
					<?php endif; ?>


					<?php if ($telephone_number = get_field( 'telephone_number' ) ) : ?>
						<li>						
							<h2 class="grey-title">CONTACT NUMBER</h2>
							<p class="large"><?php echo $telephone_number; ?></p>
						</li>
					<?php endif; ?>


					<?php if ($address = get_field( 'address' ) ) : ?>
						<li>						
							<h2 class="grey-title">ADDRESS</h2>
							<p class="address"><?php echo $address; ?></p>
						</li>
					<?php endif; ?>
			
				</ul>

			</div>



		</div>

	</main>
	
<?php get_footer(); ?>