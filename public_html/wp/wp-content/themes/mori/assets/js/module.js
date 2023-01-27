//loading
const loader = document.getElementById("loading");
window.addEventListener("load", () => {
  const ms = 400;
  loader.style.transition = "opacity " + ms + "ms";

  const loaderOpacity = function () {
    loader.style.opacity = 0;
  };
  const loaderDisplay = function () {
    loader.style.display = "none";
  };
  setTimeout(loaderOpacity, 1000);
  setTimeout(loaderDisplay, 1000 + ms);
});

//banner
window.addEventListener("DOMContentLoaded", function () {
  const popupClose = document.getElementById("popupClose");
  const popup = document.getElementById("popup");

  popupClose.addEventListener("click", function () {
    sessionStorage.setItem("popup", "on");
    popup.classList.add("d-none");
  });

  const slideUp = function () {
    popup.style.bottom = 0;
  };
  setTimeout(slideUp, 3000);
});
