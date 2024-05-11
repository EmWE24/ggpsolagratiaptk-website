function setUmur() {
  alert("wahduwa");
}

const cboValue = document.querySelector(".value");
const cbo = document.querySelector(".cbo");
cbo.onclick = () => {
  cboValue.classList.toggle("show");
};

document.addEventListener("scroll", () => {
  const navBar = document.querySelector(".navbar");
  const NavbarNav = document.querySelector(".nav-navbar");

  if (window.scrollY > 90) {
    navBar.classList.remove("transparent");
  } else {
    if (!NavbarNav.classList.contains("active")) {
      navBar.classList.add("transparent");
    }
  }
});

const Nav = document.querySelectorAll(".nav");
for (let i = 0; i < Nav.length; i++) {
  Nav[i].onclick = () => {
    for (let j = 0; j < Nav.length; j++) {
      Nav[j].classList.remove("select");
    }
    Nav[i].classList.add("select");
  };
}

const navBar = document.querySelector(".navbar");
const NavbarNav = document.querySelector(".nav-navbar");
document.querySelector("#Menu").onclick = () => {
  NavbarNav.classList.toggle("active");
  if (window.scrollY < 90) {
    navBar.classList.toggle("transparent");
  }
};

const Menu = document.querySelector("#Menu");
document.addEventListener(
  (onclick = function (e) {
    if (!Menu.contains(e.target) && !NavbarNav.contains(e.target)) {
      NavbarNav.classList.remove("active");
      if (window.scrollY < 90) {
        navBar.classList.add("transparent");
      }
    }

    if (!cbo.contains(e.target) && !cboValue.contains(e.target)) {
      cboValue.classList.remove("show");
    }
  })
);
