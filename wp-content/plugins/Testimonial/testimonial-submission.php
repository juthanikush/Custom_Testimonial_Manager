<?php
function render_testimonial_submission_form() {
    ob_start();
    ?>
    <form id="testimonial-submission-form" method="post">
        <div>
            <label for="testimonial-author">Author Name:</label>
            <input type="text" name="testimonial_author" id="testimonial-author" required>
        </div>
        <div>
            <label for="testimonial-content">Testimonial Content:</label>
            <textarea name="testimonial_content" id="testimonial-content" required></textarea>
        </div>
        <div>
            <input type="submit" name="testimonial_submit" value="Submit">
        </div>
    </form>
    <?php
    return ob_get_clean();
}
add_shortcode('testimonial_submission_form', 'render_testimonial_submission_form');



?>