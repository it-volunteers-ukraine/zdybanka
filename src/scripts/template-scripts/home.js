const list = document.querySelector(".docs__list");
list.addEventListener("click", (e) => {
  const el = e.target;
  const parentEl = el.parentElement;
  const exp = "docs__expanded";

  if (!el.classList.contains("docs__name")) return;

  if (parentEl.classList.contains(exp)) {
    parentEl.classList.remove(exp);
  } else {
    let docs_doc_element = parentEl.querySelector("iframe");

    if (docs_doc_element.getAttribute("src") == null) {
      docs_doc_element.setAttribute(
        "src",
        docs_doc_element.getAttribute("data-src")
      );
    }
    parentEl.classList.add(exp);
  }
});

const partners = document.querySelectorAll(".partners__item");
const partnersList = document.querySelector(".partners__list");
const partnersCount = partners.length;
if (partnersCount % 5 === 0) {
  partnersList.classList.add("grid-five");
} else if (partnersCount % 4 === 0) {
  partnersList.classList.add("grid-four");
} else if (partnersCount > 3 && partnersCount % 3 === 0) {
  partnersList.classList.add("grid-three");
} else {
  partnersList.classList.add("grid-four");
}
