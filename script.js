const sidenav = document.getElementById("sidenav");
const menuToggle = document.getElementById("menuToggle");
const menuIcon = document.getElementById("menuIcon");
const closeBtn = document.getElementById("closeNav");
const languageToggles = document.querySelectorAll(".language-toggle");
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

languageToggles.forEach((toggle) => {
  toggle.addEventListener("click", () => {
    toggle.classList.toggle("open");
  });
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
activeOnClick(".filter-buttons .btn");

function setActiveByIndex(items, index) {
  items.forEach((item, i) => {
    item.classList.toggle("active", i === index);
  });
}

/*product carousel */

function initProductCard(card) {
  const product = card.dataset.product;
  const slider = card.querySelector(".slider");
  const slides = card.querySelectorAll(".slide img");
  const prevBtn = card.querySelector(".prev");
  const nextBtn = card.querySelector(".next");
  const progressSegments = card.querySelectorAll(
    ".slide-progress .progress-segment"
  );
  const colorDots = card.querySelectorAll(".dot-container .dot");

  let index = 0;

  /*shift slider to correct image */
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

  /*load images */

  function loadColorImages(color) {
    for (let i = 0; i < slides.length; i++) {
      slides[i].src = `assets/products/${product}/${color}/${i + 1}.png`;
    }
    index = 0;
    updateSlider();
  }

  /*update dots */

  colorDots.forEach((dot) => {
    dot.addEventListener("click", () => {
      colorDots.forEach((d) => d.classList.remove("active"));
      dot.classList.add("active");

      loadColorImages(dot.dataset.color);
    });
  });

  loadColorImages(colorDots[0].dataset.color);
}
document.querySelectorAll(".product-card").forEach(initProductCard);
