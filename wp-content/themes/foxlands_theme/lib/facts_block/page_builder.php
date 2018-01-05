<main class="facts">
  
  <div class="title-block-facts title-block">
    
      <?php if ( get_field( 'title' ) ) : the_field( 'title' ); else: ?>

      <h1><?php the_title(); ?></h1>

      <?php endif;  ?>

  </div>

  <div class="content-block-facts container small text-block">
    
    <?php 

      the_field( 'content' ); 

    ?>

  </div>

  <div class="facts_wrapper container">
    

    <?php
     
      /* layout blocks */
       if( have_rows('page_builder') ):
       while ( have_rows('page_builder') ) : the_row();


       if( get_row_layout() == 'triple' ): 
        echo get_template_part('lib/facts_block/triple');
       elseif( get_row_layout() == 'double' ): 
        echo get_template_part('lib/facts_block/double');
       elseif( get_row_layout() == 'single' ): 
        echo get_template_part('lib/facts_block/single');

      /*

       elseif( get_row_layout() == 'block' ):
        echo get_template_part('lib/facts_block/block');


      */
       endif;
       endwhile;
       else : endif; 
       
     ?>

  </div>
  
  <?php if ($disclaimer = get_field( 'disclaimer' ) ) : ?>
    <div class="container text-block disclaimer">
        
        <?php echo $disclaimer ?>

    </div>
  <?php endif; ?>


</main>
