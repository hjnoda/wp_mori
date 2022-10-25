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
