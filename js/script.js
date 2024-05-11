const cboValue = document.querySelector(".value");
const cbo = document.querySelector(".cbo");
cbo.onclick = () => {
  cboValue.classList.toggle("show");
};

const sections = document.querySelectorAll("section");
const Nav = document.querySelectorAll(".nav");
window.addEventListener("scroll", () => {
  let current = "";
  sections.forEach((section) => {
    const sectionTop = section.offsetTop;
    if (pageYOffset >= sectionTop - 70) {
      current = section.getAttribute("id");
    }
  });

  for (let i = 0; i < Nav.length; i++) {
    Nav[i].classList.remove("select");
    if (Nav[i].classList.contains(current)) {
      Nav[i].classList.add("select");
      cboValue.classList.remove("show");
    }
  }
});

for (let i = 0; i < Nav.length; i++) {
  Nav[i].onclick = () => {
    for (let j = 0; j < Nav.length; j++) {
      Nav[j].classList.remove("select");
    }
    Nav[i].classList.add("select");
  };
}

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

    if (!cbo.contains(e.target) && !cboValue.contains(e.target)) {
      cboValue.classList.remove("show");
    }
  })
);

const date = new Date();
var this_month = date.getMonth() + 1;

document.getElementById("bulan").value = this_month;
