"use strict";

function initNavMenu() {

    function menuToggle() {
        const menu = document.querySelector('.nav-links'); // pasar a id menu-items
        const button = document.querySelector('#js-dropdown');
        document.querySelector('nav').appendChild(menu);
        menu.classList.toggle('dropdown');
        button.classList.toggle('activo');
    }

    document.querySelector('#js-dropdown').addEventListener('click', menuToggle);

}

document.addEventListener("DOMContentLoaded", initNavMenu);