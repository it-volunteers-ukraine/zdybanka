const list = document.querySelector(".docs__list");
list.addEventListener("click", (e) => {
  const el = e.target;
  const parentEl = el.parentElement;
  const exp = "docs__expanded";

  if (!el.classList.contains("docs__name")) return;

  if (parentEl.classList.contains(exp)) {
    console.log("hide");
    parentEl.classList.remove(exp);
  } else {
    console.log("show");
    parentEl.classList.add(exp);
  }
});
