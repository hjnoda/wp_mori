// PR swiper
new Swiper(".prSwiper", {
  loop: true,
  effect: "fade",
  autoplay: {
    delay: 4000,
    disableOnInteraction: false,
  },
  speed: 2000,
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
});

// message swiper
new Swiper(".messageSwiper", {
  direction: "horizontal",
  loop: true,
  autoHeight: false,
  autoplay: true,
  slidesPerView: 2,
  centeredSlides: true,
  spaceBetween: 100,
  pagination: {
    el: ".swiper-pagination",
  },
});

// news swiper
new Swiper(".newsSwiper", {
  direction: "horizontal",
  loop: true,
  autoHeight: false,
  centeredSlides: true,
  autoplay: true,
  slidesPerView: 2,
  spaceBetween: 20,
  pagination: {
    el: ".swiper-pagination",
  },
  breakpoints: {
    992: {
      slidesPerView: 3,
      spaceBetween: 40,
    },
    1400: {
      slidesPerView: 4,
      spaceBetween: 40,
    },
  },
});
