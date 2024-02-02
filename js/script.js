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
