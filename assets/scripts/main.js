let line=document.querySelector(".icon-menu"),links=document.querySelectorAll(".menu-item"),menu=document.querySelector(".menu__body");const navList=document.querySelector(".header__list");function toogleMenu(){document.body.classList.toggle("lock"),line.classList.toggle("active"),menu.classList.toggle("active")}line.addEventListener("click",toogleMenu);for(let e of links)e.addEventListener("click",closeMenu);function closeMenu(){document.body.classList.remove("lock"),line.classList.remove("active"),menu.classList.remove("active")}const header=document.querySelector(".header"),firstSection=document.querySelector("main").children[0],headerHeight=header.offsetHeight,firstSectionHeight=firstSection.offsetHeight;window.addEventListener("scroll",(()=>{let e=window.scrollY;e>=firstSectionHeight?(header.classList.add("header--fixed"),firstSection.style.marginTop=`${headerHeight}px`):(header.classList.remove("header--fixed"),firstSection.style.marginTop=null),document.querySelectorAll(".section-nav").forEach(((t,o)=>{t.offsetTop-headerHeight<=e&&(document.querySelectorAll(".header__list a").forEach((e=>{e.classList.contains("custom_active")&&e.classList.remove("custom_active")})),document.querySelectorAll(".header__list .current-menu-item")[o].querySelector("a").classList.add("custom_active"))}));const t=document.querySelector(".scroll-top");e>700?t.classList.add("scroll-top-show"):t.classList.remove("scroll-top-show")}));