const menu = document.getElementById("menu-icon");
const navbar = document.querySelector('.navbar');

function toggleMenu() {
    menu.classList.toggle('bx-x');
    navbar.classList.toggle('open');
}

menu.addEventListener('click', toggleMenu);