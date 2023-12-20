let line = document.querySelector('.icon-menu');
let links = document.querySelectorAll('.menu-item');
let menu = document.querySelector('.menu__body');

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
const navList = document.querySelector('.header__list');

navList.addEventListener('click', function(e) {
	const navLinks = document.querySelectorAll('.menu-item-object-custom a');	
  Array.from(navLinks).forEach(navLink => {
  	navLink.classList.remove('current-menu-item');    
  })
  e.target.classList.add('current-menu-item');   
});
