<?php if ( $half_sections = get_sub_field('half_section') ) : foreach ( $half_sections as $single_section ) :
    

    $img = $single_section['image'];
    $content = $single_section['content'];
    $orientation = $single_section['orientation'];
    $no_margin_bottom = $single_section['no_margin_bottom'];

    
?>

    <div class="section rel half-section-with-img<?php if($no_margin_bottom): echo ' nmb'; endif; ?> clearfix">


    	<span class="thumbnail <?php if($orientation == 'left'): echo 'right'; else: echo 'left'; endif; ?>" style="background-image:url(<?php echo $img['sizes']['half'] ?>)"></span>


    	<div class="container">
    		
    		<div class="half text-block <?php if($orientation == 'left'): echo 'f-left'; else: echo 'f-right'; endif; ?>">
    			
    			<?php echo $content ?>

    		</div>

    	</div>

    </div>

<?php endforeach;  endif; ?>
