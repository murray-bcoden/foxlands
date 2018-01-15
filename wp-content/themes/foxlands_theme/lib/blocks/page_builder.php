<main class="page-blocks">

<?php
 
  /* layout blocks */
   if( have_rows('page_builder') ):
   while ( have_rows('page_builder') ) : the_row();

    // Half
    if( get_row_layout() == 'half_block' ): 
      echo get_template_part('lib/blocks/half');

    elseif( get_row_layout() == 'banner' ):
      echo get_template_part('lib/blocks/banner');

    elseif( get_row_layout() == 'double_row' ):
      echo get_template_part('lib/blocks/double_row');

    elseif( get_row_layout() == 'half_row' ):
      echo get_template_part('lib/blocks/half_row');

    elseif( get_row_layout() == 'contact_form' ):
      echo get_template_part('lib/blocks/form');

    elseif( get_row_layout() == 'full_width' ):
      echo get_template_part('lib/blocks/full_width');

    elseif( get_row_layout() == 'hero' ):
      echo get_template_part('lib/blocks/hero');

    elseif( get_row_layout() == 'content_bg' ):
      echo get_template_part('lib/blocks/content_bg');

    elseif( get_row_layout() == 'half_colour_bg' ):
      echo get_template_part('lib/blocks/half_colour_bg');

    elseif( get_row_layout() == 'generic_text_block' ):
      echo get_template_part('lib/blocks/generic_text');

    elseif( get_row_layout() == 'two_column_content' ):
        echo get_template_part('lib/blocks/two_column_content'); 

  /*

    elseif( get_row_layout() == 'block_name' ):
      echo get_template_part('lib/blocks/block_name');


  */
   endif;
   endwhile;
   else : echo get_template_part('lib/blocks/no_content'); endif; 
   
 ?>

</main>


