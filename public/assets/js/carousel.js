import Review from "./Classes/Review";

const fetchReviews = async () => {
  const response = await fetch(HOME_URL + "api/GetReviews");
  const data = await response.json();
  const reviews = data.map((reviewData) => new Review(reviewData));
  return reviews;
};

fetchReviews().then((reviews) => {
  const carouselPictures = document.querySelector(".carousel-pictures");
  const carouselReviews = document.querySelector(".carousel-review");
  const carouselDots = document.querySelector(".carousel-dots");

  reviews.forEach((review, index) => {
    // Picture element
    const pictureDiv = document.createElement("div");
    pictureDiv.className = index === 0 ? "carousel-main-picture" : "carousel-picture";
    pictureDiv.dataset.index = index;

    const img = document.createElement("img");
    img.src = review.pictureUrl;
    img.alt = review.fullName;
    img.width = 80;

    pictureDiv.appendChild(img);
    carouselPictures.appendChild(pictureDiv);

    // Review text element
    const reviewText = document.createElement("p");
    reviewText.className = "carousel-review-text";
    reviewText.dataset.index = index;
    reviewText.textContent = review.comments;
    reviewText.style.display = index === 0 ? "block" : "none";
    carouselReviews.appendChild(reviewText);

    // Author name element
    const reviewAuthor = document.createElement("p");
    reviewAuthor.className = "carousel-review-author";
    reviewAuthor.dataset.index = index;
    reviewAuthor.textContent = review.fullName;
    reviewAuthor.style.display = index === 0 ? "block" : "none";
    carouselReviews.appendChild(reviewAuthor);

    // Role/Subtitle element
    const reviewSubtitle = document.createElement("p");
    reviewSubtitle.className = "carousel-review-subtitle";
    reviewSubtitle.dataset.index = index;
    reviewSubtitle.textContent = review.role;
    reviewSubtitle.style.display = index === 0 ? "block" : "none";
    carouselReviews.appendChild(reviewSubtitle);

    // Dot element
    const dot = document.createElement("span");
    dot.className = index === 0 ? "carousel-dot active" : "carousel-dot";
    dot.dataset.index = index;
    carouselDots.appendChild(dot);
  });

  initializeCarousel();
});

function initializeCarousel() {
  const pictures = document.querySelectorAll(".carousel-picture, .carousel-main-picture");
  const dots = document.querySelectorAll(".carousel-dot");
  const reviewTexts = document.querySelectorAll(".carousel-review-text");
  const reviewAuthors = document.querySelectorAll(".carousel-review-author");
  const reviewSubtitles = document.querySelectorAll(".carousel-review-subtitle");

  let currentIndex = 0;

  function updateCarousel(index) {
    pictures.forEach((pic, i) => {
      pic.style.transform = `translateX(-${index * 100}%)`;
    });

    reviewTexts.forEach((text) => {
      text.style.display = text.dataset.index == index ? "block" : "none";
    });
    reviewAuthors.forEach((author) => {
      author.style.display = author.dataset.index == index ? "block" : "none";
    });
    reviewSubtitles.forEach((subtitle) => {
      subtitle.style.display = subtitle.dataset.index == index ? "block" : "none";
    });

    dots.forEach((dot, i) => {
      dot.classList.toggle("active", i === index);
    });

    currentIndex = index;
  }

  dots.forEach((dot) => {
    dot.addEventListener("click", () => {
      const index = parseInt(dot.dataset.index);
      updateCarousel(index);
    });
  });

  setInterval(() => {
    const nextIndex = (currentIndex + 1) % pictures.length;
    updateCarousel(nextIndex);
  }, 5000);
}
