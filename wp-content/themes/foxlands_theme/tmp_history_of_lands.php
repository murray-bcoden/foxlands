<?php
/** 
 * Template Name: History Of Lands
 *
 * @author    Murray Creative
 * @copyright 2017 Murray Creative
 * @version   1.0
 */
get_header(); ?>

<main class="about_us_history">
    
    <section class="hero">

        <div class="hero__title">
        
            <?php if ( get_field('hero_title') ) : ?>
                <p><?php echo get_field('hero_title'); ?></p>
            <?php endif; ?>
        
        </div>
        
        <div class="hero__img">
            
            <?php if ( get_field('hero_image') ) : ?>
                <img src="<?php the_field('hero_image'); ?>" alt="<?php the_field(''); ?>">
            <?php endif; ?>
                
        </div>
        <div class="hero__intro">
            
            <?php if ( get_field('hero_intro') ) : ?>
                <p><?php echo get_field('hero_intro'); ?></p>
            <?php endif; ?>
                
        </div>
    </section>

    <section class="land-history">
        
        <?php if ( have_rows('history_item') ) : ?>
            <div class="content-wrapper">

                <?php while( have_rows('history_item') ) : the_row(); ?>
                    <div class="land-history__item">
                        <div class="land-history__item__year">
                            <?php the_sub_field('history_item_year'); ?>
                        </div>
                        
                        <div class="land-history__item__details">
                            <?php the_sub_field('history_item_details'); ?>
                        </div>
                    </div>
                <?php endwhile; ?>

            </div>
        <?php endif; ?>
    
    </section>
    
</main>
