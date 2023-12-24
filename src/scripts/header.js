let menuRef = document.querySelector(".icon-menu");
let menuBodyRef = document.querySelector(".menu__body");
let menuItemRef = document.querySelectorAll(".menu-item a");

console.log(menuItemRef);
console.log(document.baseURI)

for (const el of menuItemRef ){
  if (el.href === document.baseURI){
    el.classList.add("current-menu-item");
  }
}

function toogleMenu() {
  document.body.classList.toggle("lock");
  menuRef.classList.toggle("active");
  menuBodyRef.classList.toggle("active");
}

const menuLinkPress = (e) => {
  const elem = e.target;
  const parentUl = elem.parentElement.parentElement;

  for (const parentUlLi of parentUl.children) {
    const aRef = parentUlLi.children[0];

    if (aRef === elem) {
      aRef.classList.add("current-menu-item");
    } else {
      aRef.classList.remove("current-menu-item");
    }
    if (menuBodyRef.classList.contains("active")) {
      toogleMenu();
    }
  }
};

for (let e of menuItemRef) {
  e.addEventListener("click", menuLinkPress);
}

menuRef.addEventListener("click", toogleMenu);
