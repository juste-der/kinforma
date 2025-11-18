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

/* reusable click active function */

function activeOnClick(selector) {
  const items = document.querySelectorAll(selector);
  items.forEach((item) => {
    item.addEventListener("click", () => {
      items.forEach((i) => i.classList.remove("active"));
      item.classList.add("active");
    });
  });
}

function setActiveByIndex(items, index) {
  items.forEach((item, i) => {
    item.classList.toggle("active", i === index);
  });
}

activeOnClick(".filter-buttons .btn");
activeOnClick(".dot-container .dot");

/* product carousel */
function initProductSlider(card) {
  const slider = card.querySelector(".slider");
  const slides = card.querySelectorAll(".slide");
  const prevBtn = card.querySelector(".prev");
  const nextBtn = card.querySelector(".next");
  const progressSegments = card.querySelectorAll(
    ".slide-progress .progress-segment"
  );

  let index = 0;

  function updateSlider() {
    slider.style.transform = `translateX(-${index * 100}%)`;
    setActiveByIndex(progressSegments, index);
  }
  nextBtn.addEventListener("click", () => {
    index = (index + 1) % slides.length;
    updateSlider();
  });

  prevBtn.addEventListener("click", () => {
    index = (index - 1 + slides.length) % slides.length;
    updateSlider();
  });
}

document.querySelectorAll(".product-card").forEach((card) => {
  initProductSlider(card);
});
