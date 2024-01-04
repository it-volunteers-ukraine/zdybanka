const list = document.querySelector(".docs__list");
list.addEventListener("click", (e) => {
  const el = e.target;
  const parentEl = el.parentElement;

  if (!el.classList.contains("docs__name")) return;

  const newSrc = parentEl.getAttribute("data-src");
  window.open(newSrc, "_blank");
});

// const partners = document.querySelectorAll(".partners__item");
// const partnersList = document.querySelector(".partners__list");
// const partnersCount = partners.length;
// if (partnersCount % 5 === 0) {
//   partnersList.classList.add("grid-five");
// } else if (partnersCount % 4 === 0) {
//   partnersList.classList.add("grid-four");
// } else if (partnersCount > 3 && partnersCount % 3 === 0) {
//   partnersList.classList.add("grid-three");
// } else {
//   partnersList.classList.add("grid-four");
// }

// swiper

$(document).ready(function () {
  $(".slider__inner").slick({
    slidesToShow: 3,

    slidesToScroll: 1,
    centerMode: true,
    speed: 2000,
    arrows: false,
    dots: false,
    fade: false,
    Infinite: true,
    autoplay: true,
    autoplaySpeed: 2000,
    pauseOnFocus: false,
    pauseOnHover: false,
    pauseOnDotsHover: false,
    variableWidth: true,
  });
});
