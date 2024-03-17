document.addEventListener("scroll", () => {
  const navBar = document.querySelector(".navbar");

  if (window.scrollY > 500) {
    navBar.classList.remove("transparent");
  } else {
    navBar.classList.add("transparent");
    NavbarNav.classList.remove("active");
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
