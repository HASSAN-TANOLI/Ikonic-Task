<?php
// Fetch the ACF fields from the slug named as Hero Heading, Hero text, Hero image....... comment by hassan
$hero_heading = get_field('hero_heading');
$hero_subheading = get_field('hero_subheading');
$hero_banner_image = get_field('banner_image'); 


if ($hero_heading  || $hero_subheading || $hero_banner_image): ?> 
<section class="hero-section" style="background-image: url('<?php echo esc_url($hero_banner_image['url']); ?>');">
<div class="banner-overlay">
        <div class="banner-content">
            <h1 class="banner-heading">Cornerstone Specialty Hospitals</h1>
            <p class="banner-subheading">West Monroe</p>
        </div>
    </div>
</section>
<?php endif; ?>







