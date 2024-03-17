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

const NavbarNav = document.querySelector(".nav-navbar");
document.querySelector("#Menu").onclick = () => {
  NavbarNav.classList.toggle("active");
};

const Menu = document.querySelector("#Menu");
document.addEventListener(
  (onclick = function (e) {
    if (!Menu.contains(e.target) && !NavbarNav.contains(e.target)) {
      NavbarNav.classList.remove("active");
    }
  })
);

const NavBar = document.querySelector(".navbar");
window.onscroll = function () {
  scrollFunction();
};

function scrollFunction() {
  if (window.scrollY > 20) {
    NavBar.classList.remove("transparent");
  } else {
    NavBar.classList.add("transparent");
  }
}
