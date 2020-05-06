"use strict";

function initMainPage() {

    const platos = [
        {
            nombre : "nombre plato 1",
            descripcion: "descripcion del plato 1"
        },{
            nombre : "nombre plato 2",
            descripcion: "descripcion del plato 2"
        },{
            nombre : "nombre plato 3",
            descripcion: "descripcion del plato 3"
        }
    ];

    const nombre = document.querySelector('#nombre-plato-dia');
    const descripcion = document.querySelector('#descripcion-plato-dia');
    const plato = platos[Math.floor(Math.random() * platos.length)];

    nombre.innerHTML = plato.nombre;
    descripcion.innerHTML = plato.descripcion;

}

document.addEventListener("DOMContentLoaded", initMainPage);