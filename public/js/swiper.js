const swiper = new Swiper(".swiper", {
  // Optional parameters
  direction: "horizontal",
  loop: true,
  slidesPerView: 2,
  spaceBetween: 2,

  // If we need pagination
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },

  // breakpoints
  breakpoints: {
    1028: {
      slidesPerView: 4,
    },

    480: {
      slidesPerView: 3,
    },
  },
});
