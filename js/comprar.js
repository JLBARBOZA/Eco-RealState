let Alojamientos = [
    {
        "img": "Alojamiento1.jpg",
        "nombre": "Casa en Playa Hermosa",
        "descripcion": "Lectus a condimentum. Aliquam vitae diam sed ante tincidunt consequat. Suspendisse egestas magna at auctor convallis.",
        "precio": 19000
    },
    {
        "img": "Alojamiento2.jpg",
        "nombre": "Alojamiento en las Montañas",
        "descripcion": "Lectus a condimentum. Aliquam vitae diam sed ante tincidunt consequat. Suspendisse egestas magna at auctor convallis.",
        "precio": 9900
    },
    {
        "img": "Alojamiento3.jpg",
        "nombre": "Alojamiento en la Fortuna",
        "descripcion": "Lectus a condimentum. Aliquam vitae diam sed ante tincidunt consequat. Suspendisse egestas magna at auctor convallis.",
        "precio": 29000
    },
    {
        "img": "Alojamiento4.jpg",
        "nombre": "Bungalow en Puerto Viejo",
        "descripcion": "Lectus a condimentum. Aliquam vitae diam sed ante tincidunt consequat. Suspendisse egestas magna at auctor convallis.",
        "precio": 39000
    }
]

Alojamientos.forEach(alojamiento => {
    const img = alojamiento.img;
    const nombre = alojamiento.nombre;
    const precio = alojamiento.precio;
    const descripcion = alojamiento.descripcion;

    const imgAlojamiento = document.createElement("img");
    imgAlojamiento.src = "img/Alojamientos/" + img;
    imgAlojamiento.alt = "Alojamiento";

    const nombreAlojamiento = document.createElement("h3");
    nombreAlojamiento.id = "nombreAlojamiento";
    nombreAlojamiento.textContent = nombre;

    const precioAlojamiento = document.createElement("h4");
    precioAlojamiento.innerHTML = `Precio de venta: ₡${precio}`;

    const descripcionAlojamiento = document.createElement("p");
    descripcionAlojamiento.textContent = descripcion;

    const btnAlojamiento = document.createElement("button");
    btnAlojamiento.id = "btnDetalles";
    btnAlojamiento.classList.add("detalles");
    btnAlojamiento.onclick = detalles
    btnAlojamiento.textContent = "Detalles"

    const AlojamientoDiv = document.createElement("div");
    AlojamientoDiv.classList.add("alojamiento");
    // AlojamientoDiv.onclick = seleccionarProducto;
    AlojamientoDiv.appendChild(imgAlojamiento);
    AlojamientoDiv.appendChild(nombreAlojamiento);
    AlojamientoDiv.appendChild(descripcionAlojamiento);
    AlojamientoDiv.appendChild(precioAlojamiento);
    AlojamientoDiv.appendChild(btnAlojamiento);
    document.querySelector("#alojamientos").appendChild(AlojamientoDiv);
});

function detalles(){
    let productModal = document.getElementsByClassName('modalProduct')[0];
    let ModalOverlay = document.getElementsByClassName('overlay')[0];
    productModal.classList.remove('hide');
    ModalOverlay.classList.remove('hide');
}

function close(){
    let productModal = document.getElementsByClassName('modalProduct')[0];
    let ModalOverlay = document.getElementsByClassName('overlay')[0];
    productModal.classList.add("hide");
    ModalOverlay.classList.add('hide');
}

document.querySelector("#close").onclick = close;