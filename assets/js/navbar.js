let hamburger = document.getElementById("menu");
hamburger.addEventListener("click", animateMenu);
let line1_menu = document.querySelector(".span-line--1");
let line2_menu = document.querySelector(".span-line--2");
let line3_menu = document.querySelector(".span-line--3");
let bodymenu = document.querySelector(".c-nav-menu");

function animateMenu() {
  line1_menu.classList.toggle("active-span-line--1");
  line2_menu.classList.toggle("active-span-line--2");
  line3_menu.classList.toggle("active-span-line--3");

  bodymenu.classList.toggle("menu-active");
}
