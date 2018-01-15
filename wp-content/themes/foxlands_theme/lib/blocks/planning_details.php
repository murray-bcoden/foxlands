<section class="planning-details">
    <?php if ( have_rows('planning_details_columns') ) : ?>
        <div class="planning-details__wrapper">
            
            <?php while( have_rows('planning_details_columns') ) : the_row(); ?>
                <div class="planning-details__item">
                    <div class="planning-details__icon">
                        <?php the_sub_field('icon'); ?>
                    </div>

                    <div class="planning-details__details">
                        <?php the_sub_field('details'); ?>   
                    </div>
                </div>
            <?php endwhile; ?>
            
        </div>
    <?php endif; ?>

</section>