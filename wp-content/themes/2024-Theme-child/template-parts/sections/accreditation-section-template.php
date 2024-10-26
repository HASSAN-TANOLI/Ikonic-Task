<?php
// Fetch the ACF fields from the slug named as Accreditation section heading subheading and image....... comment by hassan
$accreditation_heading = get_field('accreditation');
$accreditation_text = get_field('accreditation_text');
$accreditation_image = get_field('acceredation_image'); 


if ($accreditation_heading || $accreditation_text || $accreditation_image): ?> 
    <section class="Accreditation-section">
        <h2 class="Accreditation-heading"><?php echo esc_html($accreditation_heading); ?></h2>
        <p class="Accreditation-text"><?php echo esc_html($accreditation_text); ?></p>
        
        <?php if ($accreditation_image): ?>
            <img class="Accreditation-image" src="<?php echo esc_url($accreditation_image['url']); ?>" alt="<?php echo esc_attr($accreditation_image['alt']); ?>">
        <?php endif; ?>
    </section>
<?php endif; ?>