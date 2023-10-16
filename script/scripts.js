const openModalButton = document.querySelector("#open-modal");
const closeModalButton = document.querySelector("#close-modal");
const modal = document.querySelector("#modal");
const fade = document.querySelector("#fade");

const toggleModal = () => {
  modal.classList.toggle("hide");
  fade.classList.toggle("hide");
};

[openModalButton, closeModalButton, fade].forEach((el) => {
  el.addEventListener("click", () => toggleModal());
});
document.addEventListener("DOMContentLoaded", function() {
  const container = document.querySelector(".carousel__container");
  const slides = document.querySelectorAll(".carousel__slide");
  const prevBtn = document.querySelector(".carousel__prev");
  const nextBtn = document.querySelector(".carousel__next");
  let currentSlide = 0;

  function showSlide(index) {
    slides.forEach((slide) => slide.style.transform = `translateX(-${index * 100}%)`);
    currentSlide = index;
  }

  prevBtn.addEventListener("click", function() {
    if (currentSlide > 0) {
      showSlide(currentSlide - 1);
    } else {
      showSlide(slides.length - 1);
    }
  });

  nextBtn.addEventListener("click", function() {
    if (currentSlide < slides.length - 1) {
      showSlide(currentSlide + 1);
    } else {
      showSlide(0);
    }
  });
});
