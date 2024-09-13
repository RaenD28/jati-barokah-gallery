// Toggle
const navMenu = document.querySelector(".navbar-menu");
const navExtra = document.querySelector(".navbar-extra");

// Ketika diklik
document.querySelector("#hamburger-menu").onclick = () => {
  navMenu.classList.toggle("active");
  navExtra.classList.toggle("active");
};

// Klik di luar sidebar untuk menutup
const hm = document.querySelector("#hamburger-menu");

document.addEventListener("click", function (e) {
  if (!hm.contains(e.target) && !navMenu.contains(e.target) && !navExtra.contains(e.target)) {
    navMenu.classList.remove("active");
    navExtra.classList.remove("active");
  }
});
