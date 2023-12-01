const navToggle = document.querySelector(".navbar__toggle");
const navSubmenu = document.querySelector(".navbar");

navToggle.addEventListener("click",() => {
    navSubmenu.classList.toggle("navbar-active");
})