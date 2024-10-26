<?php
// Fetch video data from ACF fields
$video_section_title = get_field('video_section_title');
$video_banners = [
    get_field('video_banner_1'),
    get_field('video_banner_2'),
    get_field('video_banner_3')
];
$video_urls = [
    get_field('video_url_1'),
    get_field('video_url_2'),
    get_field('video_url_3')
];

// Check if there's content to display in the video section
if ($video_section_title || !empty($video_banners[0]) || !empty($video_urls[0])): 
?>

<div class="video-slider-container">
    <h2><?php echo esc_html($video_section_title); ?></h2>

    <div class="main-video-display">
        <video id="main-video" controls poster="<?php echo esc_url($video_banners[0]['url']); ?>">
            <source src="<?php echo esc_url($video_urls[0]); ?>" type="video/mp4">
        </video>
        <button id="play-button" class="play-button" onclick="togglePlay()">
            <img src="http://ikonic-task.local/wp-content/uploads/2024/10/play-button-1-1-1.png" alt="Play Button">
        </button>
        <button class="arrow left-arrow" onclick="previousSlide()">❮</button>
        <button class="arrow right-arrow" onclick="nextSlide()">❯</button>
    </div>

    <div class="thumbnail-slider">
        <div class="thumbnails">
            <?php foreach ($video_banners as $index => $banner): ?>
                <div class="thumbnail" onclick="changeVideo(<?php echo $index; ?>)">
                    <img src="<?php echo esc_url($banner['url']); ?>" alt="Video thumbnail <?php echo $index + 1; ?>">
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>

<?php endif; ?>


<script>
    // Array of video URLs
    const videoUrls = <?php echo json_encode($video_urls); ?>;
    const videoPosters = <?php echo json_encode(array_column($video_banners, 'url')); ?>;
    let currentVideoIndex = 0;

    const videoElement = document.getElementById('main-video');
    const playButton = document.getElementById('play-button');

    function changeVideo(index) {
        currentVideoIndex = index;
        videoElement.src = videoUrls[index];
        videoElement.poster = videoPosters[index];
        videoElement.load(); // Reload video with new source
        videoElement.pause();
        showPlayButton();
    }

    function previousSlide() {
        currentVideoIndex = (currentVideoIndex > 0) ? currentVideoIndex - 1 : videoUrls.length - 1;
        changeVideo(currentVideoIndex);
    }

    function nextSlide() {
        currentVideoIndex = (currentVideoIndex < videoUrls.length - 1) ? currentVideoIndex + 1 : 0;
        changeVideo(currentVideoIndex);
    }

    function togglePlay() {
        if (videoElement.paused) {
            videoElement.play();
            hidePlayButton();
        } else {
            videoElement.pause();
            showPlayButton();
        }
    }

    function showPlayButton() {
        playButton.style.display = 'block';
    }

    function hidePlayButton() {
        playButton.style.display = 'none';
    }

    videoElement.addEventListener('play', hidePlayButton);
    videoElement.addEventListener('pause', showPlayButton);
</script>

