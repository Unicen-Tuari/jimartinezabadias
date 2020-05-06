"use strict";

function initMainPage() {

    const platos = [
        {
            nombre: "Sandwich de bondiola a la cerveza negra",
            descripcion: "Con batatas fritas, ensalada de repollo, vinagreta de Dijon",
            imagen: "images/sandwich_de_cerdo.jpg"
        },{
            nombre: "Goulash con Spatzle",
            descripcion: "Estofado de carne a la paprika con ñoquis hungaros en manteca de hierbas",
            imagen: "images/gulash.jpg"
        },{
            nombre: "Cremoso de limón",
            descripcion: "Con merengue flambeado, crocante de pistachos, ganache de chocolate blanco",
            imagen: "images/cremoso_de_limon.jpg"
        }
    ];

    const nombre = document.querySelector('#nombre-plato-dia');
    const descripcion = document.querySelector('#descripcion-plato-dia');
    const imagen = document.querySelector('#img-plato-dia');
    const plato = platos[Math.floor(Math.random() * platos.length)];

    nombre.innerHTML = plato.nombre;
    descripcion.innerHTML = plato.descripcion;
    imagen.src = plato.imagen;

}

document.addEventListener("DOMContentLoaded", initMainPage);