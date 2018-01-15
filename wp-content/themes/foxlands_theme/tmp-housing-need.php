<?php
/** 
 * Template Name: Housing Need
 *
 * @author    Murray Creative
 * @copyright 2017 Murray Creative
 * @version   1.0
 */
get_header(); ?>

<main class="section_submenu about_housing_needs">
    <?php 
    /* layout blocks */
    if( have_rows('page_builder') ):
        while ( have_rows('page_builder') ) : the_row();
            if( get_row_layout() == 'section_title' ):
                echo get_template_part('lib/blocks/section_title');
            
            elseif( get_row_layout() == 'two_column_content' ):
                echo get_template_part('lib/blocks/two_column_content');
            
            elseif( get_row_layout() == 'housing_needs_stats' ):
                echo get_template_part('lib/blocks/housing_needs_stats');  
    
            endif;
        endwhile;
    else : echo get_template_part('lib/blocks/no_content'); endif;  
    ?>
</main>

<?php get_footer(); ?>  