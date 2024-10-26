<?php
// Fetch the ACF fields from the slug named as virtual_tour_heanding and video....... comment by hassan
$virtual_tour_heading = get_field('virtual_tour_heading'); 
$video = get_field('video'); 

if ($virtual_tour_heading || $video): ?>
    <section class="virtual-tour-section">
        <h2 class="virtual-tour-heading"><?php echo esc_html($virtual_tour_heading); ?></h2>
        <div class="virtual-tour-video">
            <a href="<?php echo esc_url($video); ?>" target="_blank">
                <div class="video-thumbnail">
                    <span class="play-icon">
                        <img src="http://ikonic-task.local/wp-content/uploads/2024/10/play-button-1-2.png" alt="Play Button">
                    </span>
                </div>
            </a>
        </div>
    </section>
<?php endif; ?>
