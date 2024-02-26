const navToggle = document.querySelector(".navbar__toggle");
const navSubmenu = document.querySelector(".navbar_Propio");

navToggle.addEventListener("click",() => {
    navSubmenu.classList.toggle("navbar-active");
})