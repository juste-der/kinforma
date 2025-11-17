const sidenav = document.getElementById("sidenav");
const menuToggle = document.getElementById("menuToggle");
const menuIcon = document.getElementById("menuIcon");
const closeBtn = document.getElementById("closeNav");
const languageToggle = document.getElementById("languageToggle");
const header = document.querySelector(".site-header");
const productsBtn = document.querySelector(".products-btn");
const buttons = document.querySelectorAll(".filter-buttons .btn");
const slider = document.querySelector(".jacket-slider");
const slides = document.querySelectorAll(".slide");
const prevBtn = document.querySelector(".prev");
const nextBtn = document.querySelector(".next");

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
  if (window.scrollY > 1) {
    header.classList.add("scrolled");
  } else {
    header.classList.remove("scrolled");
  }
});

productsBtn.addEventListener("click", (e) => {
  e.preventDefault();
  header.classList.toggle("show-products");
});

/* filter button click */

buttons.forEach((button) => {
  button.addEventListener("click", () => {
    // Remove active class from all
    buttons.forEach((btn) => btn.classList.remove("active"));

    // Add active to the clicked one
    button.classList.add("active");
  });
});

/* product carousel */

let index = 0;

function updateSlider() {
  slider.style.transform = `translateX(-${index * 100}%)`;
}
nextBtn.addEventListener("click", () => {
  index = (index + 1) % slides.length;
  updateSlider();
});

prevBtn.addEventListener("click", () => {
  index = (index - 1 + slides.length) % slides.length;
  updateSlider();
});
