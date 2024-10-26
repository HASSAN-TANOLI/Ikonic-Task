let currentSlide = 0;

function showSlide(index) {
  const slides = document.querySelectorAll(".main-slider .slide");
  const thumbnails = document.querySelectorAll(".thumbnail");
  const totalSlides = slides.length;

  if (index >= totalSlides) currentSlide = 0;
  if (index < 0) currentSlide = totalSlides - 1;

  slides.forEach((slide, i) => {
    slide.style.transform = `translateX(${-currentSlide * 100}%)`;
  });

  // Update thumbnail active state
  thumbnails.forEach((thumbnail, i) => {
    thumbnail.classList.toggle("active", i === currentSlide);
  });
}

function moveSlide(direction) {
  currentSlide += direction;
  showSlide(currentSlide);
}

// Initialize the first slide and active thumbnail
showSlide(currentSlide);
