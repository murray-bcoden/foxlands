<div class="section housing-needs-stats">
    <div class="housing-needs-stats__wrapper">
        <?php if ($title = get_sub_field( 'title' ) ) : ?>
            <div class="content text-block">
                <h2><?php echo $title; ?></h2>
            </div>
        <?php endif; ?>

        <div class="housing-needs-stats__graphs__wrapper">
            
            <?php if ( have_rows('graphs') ) : ?>
            
                <?php while( have_rows('graphs') ) : the_row(); ?>
                    <?php $image = get_sub_field('graph'); ?>
                    <div class="image">
                        <img src="<?php echo $image['url'] ?>" alt="<?php echo $image['title']; ?>">
                    </div>
            
                <?php endwhile; ?>
            
            <?php endif; ?>
                
        </div>

        <div class="housing-needs-stats__content__wrapper">

            <?php if ( have_rows('stats_details') ) : ?>
            
                <?php while( have_rows('stats_details') ) : the_row(); ?>
                    <div class="housing-needs-stats__content__detail">
                        <?php the_sub_field('detail'); ?>
                    </div>
            
                <?php endwhile; ?>
            
            <?php endif; ?>
            
        </div>

        <div class="housing-needs-stats__source">

            <?php if ( get_sub_field('stats_source') ) : ?>
                <p><?php echo get_sub_field('stats_source'); ?></p>
            <?php endif; ?>

        </div>

    </div>
</div>