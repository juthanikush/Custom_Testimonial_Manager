<?php
function render_testimonial_display($atts) {
    $atts = shortcode_atts(
        array(
            'format' => 'grid',
            'limit' => 6,
        ),
        $atts
    );

    $args = array(
        'post_type' => 'testimonial',
        'posts_per_page' => $atts['limit'],
    );

    $testimonials = new WP_Query($args);

    ob_start();

    if ($testimonials->have_posts()) :
        if ($atts['format'] === 'carousel') :
           
            // Display testimonials as rotating carousel
            ?>
            <div class="carousel">
                <div class="carousel-container">
                    <?php while ($testimonials->have_posts()) : $testimonials->the_post(); ?>
                        <div class="carousel-slide">
                            <h3><?php the_title(); ?></h3>
                            <div class="testimonial-content"><?php the_content(); ?></div>
                            <div class="testimonial-actions">
                                <a href="<?php echo get_edit_post_link(); ?>">Edit</a> |
                                <a href="<?php echo get_permalink(); ?>" target="_blank">View</a> |
                                <a href="<?php echo get_delete_post_link(); ?>" class="delete-testimonial">Delete</a>
                            </div>
                        </div>
                    <?php endwhile; ?>
                </div>
            </div>
            <?php
        elseif ($atts['format'] === 'grid') :
            
            // Display testimonials as grid
            ?>
            <div class="grid-container">
                <?php while ($testimonials->have_posts()) : $testimonials->the_post(); ?>
                    <div class="grid-item">
                        <h3><?php the_title(); ?></h3>
                        <div><?php the_content(); ?></div>
                        <div class="testimonial-actions">
                            <a href="<?php echo get_edit_post_link(); ?>">Edit</a> |
                            <a href="<?php echo get_permalink(); ?>" target="_blank">View</a> |
                            <a href="<?php echo get_delete_post_link(); ?>" class="delete-testimonial">Delete</a>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>
            <?php
        else :
            
            // Default: Display testimonials as a list
            ?>
            <ul class="testimonial-list">
                <?php while ($testimonials->have_posts()) : $testimonials->the_post(); ?>
                    <li>
                        <h3><?php the_title(); ?></h3>
                        <div class="testimonial-content"><?php the_content(); ?></div>
                        <div class="testimonial-actions">
                            <a href="<?php echo get_edit_post_link(); ?>">Edit</a> |
                            <a href="<?php echo get_permalink(); ?>" target="_blank">View</a> |
                            <a href="<?php echo get_delete_post_link(); ?>" class="delete-testimonial">Delete</a>
                        </div>
                    </li>
                <?php endwhile; ?>
            </ul>
            <?php
        endif;

        wp_reset_postdata();
    else :
        echo 'No testimonials found.';
    endif;

    return ob_get_clean();
}
add_shortcode('testimonial_display', 'render_testimonial_display');