let line = document.querySelector('.icon-menu');
let links = document.querySelectorAll('.menu-item');
let menu = document.querySelector('.menu__body');
const navList = document.querySelector('.header__list');

line.addEventListener('click', toogleMenu);

function toogleMenu() {
  line.classList.toggle('active');  
  menu.classList.toggle('active');
  document.body.classList.toggle('lock');   
}

for (let link of links) { 
  link.addEventListener('click', closeMenu);
}

function closeMenu() {
  line.classList.remove('active');  
  menu.classList.remove('active');
  document.body.classList.remove('lock');   
}

//Add custom links active style in Nav  
// navList.addEventListener('click', function(e) {
// 	const navLinks = document.querySelectorAll('.menu-item-object-custom a');	
//   Array.from(navLinks).forEach(navLink => {
//   	navLink.classList.remove('current-menu-item');    
//   })
//   e.target.classList.add('current-menu-item');   
// });

const header = document.querySelector('.header');
const firstSection = document.querySelector('.logo');
const headerHeight = header.offsetHeight;
console.log(headerHeight);
const firstSectionHeight = firstSection.offsetHeight;
console.log(firstSectionHeight);

window.addEventListener('scroll', () => {
  let scrollDistance = window.scrollY;
  //console.log(scrollDistance);
  
  //Fixed header when scrolling
  if (scrollDistance >= firstSectionHeight) {
    header.classList.add('header--fixed');
    firstSection.style.marginTop = `${headerHeight}px` + headerHeight;
  } else {
    header.classList.remove('header--fixed');
    firstSection.style.marginTop = null;
  }

  // Active class in menu when scrolling
  document.querySelectorAll('.section').forEach((el, i) => {
    
    if (el.offsetTop - header.clientHeight <= scrollDistance) {
      document.querySelectorAll('.header__list a').forEach((el) => {
        if (el.classList.contains('custom_active')) {
          el.classList.remove('custom_active');
        }
      });

      let id = el.id;
      let links = document.querySelectorAll('.header__list a');
      links.forEach(link => {   
        let str = link.hash; 
        let hash = str.slice(1);  
        console.log(id, hash, [i]);        
        
        if (id ) {document.querySelectorAll('.header__list li')[i].querySelector('a').classList.add('custom_active');}        
      })
    }
  });
});

