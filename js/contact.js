"use strict";

function initContactForm() {

    const date_input = document.querySelector('#date-input');
    const current_date = new Date().toISOString().substring(0, 10);
    date_input.value = current_date;
    
}

document.addEventListener("DOMContentLoaded", initContactForm);