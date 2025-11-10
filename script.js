const sidenav = document.getElementById("sidenav");
const menuToggle = document.getElementById("menuToggle");
const menuIcon = document.getElementById("menuIcon");
const closeBtn = document.getElementById("closeNav");

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

// const sidenav = document.getElementById("sidenav");
// const menuToggle = document.getElementById("menuToggle");
// const menuIcon = document.querySelector("#menuIcon use");

// menuToggle.addEventListener("click", () => {
//   sidenav.classList.toggle("open");

//   if (sidenav.classList.contains("open")) {
//     // Switch to "X" icon
//     menuIcon.setAttribute("href", "assets/icons/icons.svg#icon-close");
//   } else {
//     // Switch back to hamburger
//     menuIcon.setAttribute("href", "assets/icons/icons.svg#icon-hamburger");
//   }
// });
