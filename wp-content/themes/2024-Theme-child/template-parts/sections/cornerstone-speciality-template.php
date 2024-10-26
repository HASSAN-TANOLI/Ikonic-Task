<?php
// Fetch the ACF fields from the slug named as hospital_heading, hospital_text....... comment by hassan
$hospital_heading = get_field('hospital_heading');
$hospital_text = get_field('hospital_text');
$hospital_address = get_field('address');
$hospital_phone = get_field('phone-no');
$hospital_follow = get_field('follow_us');
$hospital_success = get_field('success_stories');


if ($hospital_heading || $hospital_text): ?> 
    <section class="hospitals-section">
        <h2 class="hospitals-heading"><?php echo esc_html($hospital_heading); ?></h2>
        <p class="hospitals-text"><?php echo esc_html($hospital_text); ?></p>
        <div class="info-cards">
        <div class="info-card">
        <img src="http://ikonic-task.local/wp-content/uploads/2024/10/map.png" alt="Location Icon" class="info-icon">
        <p><?php echo esc_html($hospital_address); ?></p>
    </div>
    
    <div class="info-card">
        <img src="http://ikonic-task.local/wp-content/uploads/2024/10/phonr.png" alt="Phone Icon" class="info-icon">
        <p><?php echo esc_html($hospital_phone); ?></p>
    </div>
    <div class="info-card">
        <img src="http://ikonic-task.local/wp-content/uploads/2024/10/facebook.png" alt="Facebook Icon" class="info-icon">
        <p>Follow us</p>
    </div>
    <div class="info-card">
        <img src="http://ikonic-task.local/wp-content/uploads/2024/10/heart.png" alt="Success Icon" class="info-icon">
        <p>Success Stories</p>
    </div>
</div>
    </section>
<?php endif; ?>