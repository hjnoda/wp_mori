// nav scroll event
window.addEventListener("DOMContentLoaded", function () {
  const gnb = document.querySelector(".navbar");
  window.onscroll = function () {
    if (window.pageYOffset > 0) {
      gnb.classList.add("shadow", "is-scroll");
    } else {
      gnb.classList.remove("shadow", "is-scroll");
    }
  };
});

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
    el: ".swiper-pagination-pr",
    clickable: true,
  },
});

// message swiper
new Swiper(".messageSwiper", {
  direction: "horizontal",
  loop: true,
  autoHeight: false,
  autoplay: true,
  slidesPerView: 1,
  centeredSlides: true,
  spaceBetween: 30,
  pagination: {
    el: ".swiper-pagination-message",
  },
  breakpoints: {
    768: {
      slidesPerView: 2,
      spaceBetween: 30,
    },
    992: {
      slidesPerView: 2,
      spaceBetween: 100,
    },
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
    el: ".swiper-pagination-news",
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
