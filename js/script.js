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
  if (
    !hm.contains(e.target) &&
    !navMenu.contains(e.target) &&
    !navExtra.contains(e.target)
  ) {
    navMenu.classList.remove("active");
    navExtra.classList.remove("active");
  }
});

// Fitur memunculkan pop-up foto galeri
document.querySelectorAll(".isi-foto-galeri img").forEach((image) => {
  image.onclick = () => {
    document.querySelector(".foto-popup").style.display = "block"; // display block supaya terlihat jelas untuk popup
    document.querySelector(".foto-popup img").src = image.getAttribute("src"); // ambil nilai src supaya gambar yang tampil sesuai dengan gambar yang di klik (karena sudah di looping)
  };
});

// Mengeluarkan popup melalui span (tombol x)
document.querySelector(".foto-popup span").onclick = () => {
  document.querySelector(".foto-popup").style.display = "none";
};
