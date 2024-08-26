document.addEventListener("DOMContentLoaded", () => {
  const pictures = document.querySelectorAll(".carousel-picture, .carousel-main-picture");
  const dots = document.querySelectorAll(".carousel-dot");
  const reviewTexts = document.querySelectorAll(".carousel-review-text");
  const reviewAuthors = document.querySelectorAll(".carousel-review-author");
  const reviewSubtitles = document.querySelectorAll(".carousel-review-subtitle");

  let currentIndex = 0;

  function updateCarousel(index) {
    // Update pictures
    pictures.forEach((pic, i) => {
      pic.style.transform = `translateX(-${index * 100}%)`;
    });

    // Update reviews
    reviewTexts.forEach((text) => {
      text.style.display = text.dataset.index == index ? "block" : "none";
    });
    reviewAuthors.forEach((author) => {
      author.style.display = author.dataset.index == index ? "block" : "none";
    });
    reviewSubtitles.forEach((subtitle) => {
      subtitle.style.display = subtitle.dataset.index == index ? "block" : "none";
    });

    // Update dots
    dots.forEach((dot, i) => {
      dot.classList.toggle("active", i === index);
    });

    currentIndex = index;
  }

  // Event listener for dots
  dots.forEach((dot) => {
    dot.addEventListener("click", () => {
      const index = parseInt(dot.dataset.index);
      updateCarousel(index);
    });
  });

  // Optional: Auto-rotate carousel every 5 seconds
  setInterval(() => {
    const nextIndex = (currentIndex + 1) % pictures.length;
    updateCarousel(nextIndex);
  }, 5000);
});
