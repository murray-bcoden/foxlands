<?php
/** 
 * Template Name: Planning & Development Journey
 * @author    Murray Creative
 * @copyright 2017 Murray Creative
 * @version   1.0
 */
get_header(); ?>
    <main class="section_submenu planning-development">
        <?php 
        /* layout blocks */
        if( have_rows('page_builder') ):
            while ( have_rows('page_builder') ) : the_row();
                if( get_row_layout() == 'section_title' ):
                    echo get_template_part('lib/blocks/section_title');
                
                elseif( get_row_layout() == 'content_bg' ):
                    echo get_template_part('lib/blocks/content_bg');

                elseif( get_row_layout() == 'planning_details' ):
                    echo get_template_part('lib/blocks/planning_details');
                
                endif;
            endwhile;
        else : echo get_template_part('lib/blocks/no_content'); endif;  
        ?>

        <div class="housing-footer">
            <img src="<?php echo get_template_directory_uri(); ?>/img/planning-houses.gif" />
        </div>

    </main>
<?php get_footer(); ?>