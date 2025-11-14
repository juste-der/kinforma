const sidenav = document.getElementById("sidenav");
const menuToggle = document.getElementById("menuToggle");
const menuIcon = document.getElementById("menuIcon");
const closeBtn = document.getElementById("closeNav");
const languageToggle = document.getElementById("languageToggle");
const header = document.querySelector(".site-header");
const productsBtn = document.querySelector(".products-btn");

/*side bar menu */

menuToggle.addEventListener("click", () => {
  sidenav.classList.toggle("open");

  if (sidenav.classList.contains("open")) {
    menuIcon.src = "assets/icons/close.svg";
  } else {
    menuIcon.src = "assets/icons/hamburger.svg";
  }
});

closeBtn.addEventListener("click", (e) => {
  e.preventDefault();
  sidenav.classList.remove("open");
  menuIcon.src = "assets/icons/hamburger.svg";
});

languageToggle.addEventListener("click", () => {
  languageToggle.classList.toggle("open");
});

/*scroll menu */

window.addEventListener("scroll", () => {
  if (window.scrollY > 30) {
    header.classList.add("scrolled");
  } else {
    header.classList.remove("scrolled");
  }
});

productsBtn.addEventListener("click", (e) => {
  e.preventDefault();
  header.classList.toggle("show-products");
});
