document.addEventListener('DOMContentLoaded', () => {
    // Actualizar la lista de salas al cargar la página
    actualizarSalas();
    document.querySelector("#crear_sala").addEventListener('click', (e) => {
        e.preventDefault();
        crearSala();
    });
});
function crearSala() {
    fetch('/createsala/', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': csrf
        },
        body: JSON.stringify({ 
            nombre: 'Sala nueva',
            descripcion: 'Sala de prueba nueva'
         })
    })
    .then(() => actualizarSalas())
    .catch(error => console.error('Error al crear la sala:', error));
}
// Función para limpiar el contenido de un elemento
function clearElement(element) {
    while (element.firstChild) {
        element.removeChild(element.firstChild);
    }
}

// Función para actualizar la lista de salas
function actualizarSalas() {
    fetch("/getallsalas")
        .then(response => response.json())
        .then(datos => mostrarSalas(datos))
        .catch(error => console.error('Error al obtener las salas:', error));
}

// Mostrar las salas en el DOM
function mostrarSalas(salas) {
    const salasDiv = document.querySelector('#salas');
    clearElement(salasDiv);

    salas.forEach(sala => {
        const { id, nombre } = sala;

        let salaDiv = document.createElement('div');
        salaDiv.style.backgroundColor = 'green';
        salaDiv.style.margin = '5px';
        salaDiv.style.height = '30px';
        salaDiv.textContent = nombre;

        salasDiv.appendChild(salaDiv);

        salaDiv.addEventListener('click', () => {
            clickSala(id); // Llamar a la función para mostrar las sillas
        });
    });
}

// Función para manejar el clic en una sala y mostrar las sillas
function clickSala(id) {
    fetch('/getsillas/' + id)
        .then(response => response.json())
        .then(datos => mostrarSillas(datos, id)) // Pasar id para reutilizarlo al actualizar
        .catch(error => console.error('Error al obtener las sillas:', error));
}

// Mostrar las sillas en el DOM
function mostrarSillas(sillas, salaId) {
    const pelisDiv = document.querySelector('#pelis');
    clearElement(pelisDiv);

    let contador = 0;

    sillas.forEach(silla => {
        contador++;
        const { id, ocupada } = silla;

        let sillaDiv = document.createElement('div');
        
        if (sillaDiv.textContent != ocupada)  sillaDiv.textContent = "X";
        else sillaDiv.textContent = contador;

        // sillaDiv.textContent = (sillaDiv.textContent == ocupada)? 'X' : contador;

        pelisDiv.appendChild(sillaDiv);

        sillaDiv.addEventListener('click', () => {
            actualizarSilla(id, salaId); // Actualizar silla y refrescar vista
        });
    });
}

// Función para actualizar una silla y refrescar las sillas de la sala
function actualizarSilla(idSilla, salaId) {
    fetch('/updatesilla', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': csrf
        },
        body: JSON.stringify({ id: idSilla })
    })
    .then(() => clickSala(salaId)) // Refrescar las sillas de la sala
    .catch(error => console.error('Error al actualizar la silla:', error));
}