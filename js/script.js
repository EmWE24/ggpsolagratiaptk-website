document.addEventListener("scroll", () => {
  const navBar = document.querySelector(".navbar");
  const NavbarNav = document.querySelector(".nav-navbar");

  if (window.scrollY > 500) {
    navBar.classList.remove("transparent");
  } else {
    if (!NavbarNav.classList.contains("active")) {
      navBar.classList.add("transparent");
    }
  }
});

let headerImage = document.querySelectorAll(".background");
let imageIndex = 0;

function changeBackground() {
  headerImage[imageIndex].classList.remove("showing");

  imageIndex++;

  if (imageIndex >= headerImage.length) {
    imageIndex = 0;
  }

  headerImage[imageIndex].classList.add("showing");
}

setInterval(changeBackground, 5000);

const navBar = document.querySelector(".navbar");
const NavbarNav = document.querySelector(".nav-navbar");
document.querySelector("#Menu").onclick = () => {
  NavbarNav.classList.toggle("active");
  if (window.scrollY < 500) {
    navBar.classList.toggle("transparent");
  }
};

const Menu = document.querySelector("#Menu");
document.addEventListener(
  (onclick = function (e) {
    if (!Menu.contains(e.target) && !NavbarNav.contains(e.target)) {
      NavbarNav.classList.remove("active");
      if (window.scrollY < 500) {
        navBar.classList.add("transparent");
      }
    }
  })
);
