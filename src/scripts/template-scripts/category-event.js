// import Swiper;

// console.log("event page");
const btnMoreRef = document.getElementById("btn-more");
const textContentRef = document.querySelector(".event-content");

btnMoreRef.addEventListener("click", (e) => {
  textContentRef.classList.toggle("clamp");
  textContentRef.scrollIntoView({ behavior: "smooth" });
});