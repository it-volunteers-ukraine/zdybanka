let line = document.querySelector('.icon-menu');
let links = document.querySelectorAll('.menu-item');
let menu = document.querySelector('.menu__body');
const navList = document.querySelector('.header__list');

line.addEventListener('click', toogleMenu);

function toogleMenu() {
  document.body.classList.toggle('lock');   
  line.classList.toggle('active');  
  menu.classList.toggle('active');
}

for (let link of links) { 
  link.addEventListener('click', closeMenu);  
}

function closeMenu() {
  document.body.classList.remove('lock'); 
  line.classList.remove('active');  
  menu.classList.remove('active');    
}


//Fixed header when scrolling + Active class in menu when scrolling
const header = document.querySelector('.header');
const firstSection = document.querySelector('main').children[0];
const headerHeight = header.offsetHeight;
const firstSectionHeight = firstSection.offsetHeight;

window.addEventListener('scroll', () => {
  let scrollDistance = window.scrollY;  
  
  //Fixed header when scrolling   
  if (scrollDistance >= firstSectionHeight) {
    header.classList.add('header--fixed');
    firstSection.style.marginTop = `${headerHeight}px`; //+ headerHeight;
  } else {
    header.classList.remove('header--fixed');
    firstSection.style.marginTop = null;
  }

  // Active class in menu when scrolling
  document.querySelectorAll('.section-nav').forEach((el, i) => {
    
    if (el.offsetTop - headerHeight <= scrollDistance) {
      document.querySelectorAll('.header__list a').forEach((el) => {
        if (el.classList.contains('custom_active')) {
          el.classList.remove('custom_active');
        }
      });
      document.querySelectorAll('.header__list .current-menu-item')[i].querySelector('a').classList.add('custom_active');      
    }
  });

  //Scroll to top
  const scrollBtn = document.querySelector('.scroll-top')
  if (scrollDistance > 700) {
    scrollBtn.classList.add('scroll-top-show');
  } else {
    scrollBtn.classList.remove('scroll-top-show');
  }
});
