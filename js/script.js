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

const Navbar = document.querySelector(".nav-navbar");
document.querySelector("#Menu").onclick = () => {
  Navbar.classList.toggle("active");
};

const Menu = document.querySelector("#Menu");
document.addEventListener(
  (onclick = function (e) {
    if (!Menu.contains(e.target) && !Navbar.contains(e.target)) {
      Navbar.classList.remove("active");
    }
  })
);
