<?php if ( get_sub_field( 'image' ) && get_sub_field( 'content' ) && get_sub_field( 'align_image' ) ) : ?>
    <?php 
        $alignClass = ( get_sub_field( 'align_image' ) === "right" ) ? "image-right" : "image-left";
        $image = get_sub_field( 'image' );
    ?>
    <div class="section two-column">
        <div class="two-column__wrapper <?php echo $alignClass; ?>">

            <div class="image">
                <img src="<?php echo $image['url'] ?>" alt="<?php echo $image['title']; ?>">
            </div>

            <div class="content text-block"><?php echo get_sub_field( 'content' ); ?></div>
        
        </div>
    </div>

<?php endif; ?>