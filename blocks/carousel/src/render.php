<?php
if ( have_rows('carousel_slides') ): ?>
    <div class="carousel-wrapper">
        <?php while ( have_rows('carousel_slides') ) : the_row();
            $image = get_sub_field('image');
            $header = get_sub_field('header');
            $text = get_sub_field('text');
            $button_text = get_sub_field('button_text');
            $button_url = get_sub_field('button_url'); ?>

            <div class="slide">
                <?php if ($image): ?>
                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
                <?php endif; ?>
                <?php if ($header): ?>
                    <h2><?php echo esc_html($header); ?></h2>
                <?php endif; ?>
                <?php if ($text): ?>
                    <p><?php echo esc_html($text); ?></p>
                <?php endif; ?>
                <?php if ($button_text): ?>
                    <a href="<?php echo esc_url($button_url); ?>" class="button"><?php echo esc_html($button_text); ?></a>
                <?php endif; ?>
            </div>
        <?php endwhile; ?>
    </div>
<?php else: ?>
    <p>Please add some slides to the Carousel.</p>
<?php endif; ?>