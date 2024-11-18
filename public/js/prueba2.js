document.addEventListener('DOMContentLoaded', () => {
    // Actualizar la lista de salas al cargar la página
    let salaId = null
    actualizarSalas();
    document.querySelector("#crear_sala").addEventListener('click', (e) => {
        e.preventDefault();
        crearSala();
    });
    document.querySelector("#crearAsiento").addEventListener('click', (e) => {
        e.preventDefault();
        crearAsiento();
    });
});
function crearSala() {
    fetch("/createsala", {
        method: 'POST',
        headers: {
            'content-type': 'application/json',
            'X-CSRF-TOKEN': csrf
        },
        body: JSON.stringify({
            nombre: prompt('Nombre de la sala:'),
            descripcion: prompt('Descripción de la sala:')
        })
    })
    .then((respuesta) => {
        console.log(respuesta)
        respuesta.json()
    })
    .then((resultado ) => {
        console.log(resultado)
        actualizarSalas()
    })
    .then(() => actualizarSalas())
    .catch(error => console.error('Error al crear la sala:', error));
}

// FUNCION CREAR ASIENTO
function crearAsiento(){
    let id_todo = '' + salaId + '' + sillaId

    fetch('/createsilla', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': csrf
        },
        body: JSON.stringify({ id: salaId })
    })
    .then((respuesta) => {
        console.log(respuesta)
        respuesta.json()
    })
    .then(() => actualizarSalas())
    .catch(error => console.error('Error al crear el asiento:', error));
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
        // <button
        //         class="btn btn-light border border-3 border-primary text-dark fw-bold rounded-pill btn-custom mb-2">Sala
        //         1</button>
        let salaDiv = document.createElement('button');
        salaDiv.textContent = nombre;
        salaDiv.classList.add('btn', 'btn-light', 'border', 'border-3', 'border-primary', 'text-dark', 'fw-bold', 'rounded-pill', 'btn-custom', 'mb-2');
        salasDiv.appendChild(salaDiv);

        salaDiv.addEventListener('click', () => {
            clickSala(id); // Llamar a la función para mostrar las sillas
            // mostrar la descripcion de la sala
            document.querySelector('#descripcion').textContent = sala.descripcion;
        });
    });
}

// Función para manejar el clic en una sala y mostrar las sillas
function clickSala(id) {
    salaId = id
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

        // <button class="btn btn-outline-secondary m-1">1</button>
        let sillaDiv = document.createElement('button');
        sillaDiv.classList.add('btn', 'btn-outline-secondary', 'm-1');
        if (sillaDiv.textContent != ocupada)  {
            sillaDiv.appendChild(document.createElement('img')).src = "img/ocupado1.png";
        }
        else {
            sillaDiv.appendChild(document.createElement('img')).src = "img/libre1.png";
        }

        // sillaDiv.textContent = (sillaDiv.textContent == ocupada)? 'X' : contador;

        pelisDiv.appendChild(sillaDiv);

        sillaDiv.addEventListener('click', () => {
            actualizarSilla(id, salaId); // Actualizar silla y refrescar vista
        });
    });
}

// Función para actualizar una silla y refrescar las sillas de la sala
function actualizarSilla(sillaId, salaId) {
    fetch('/updatesilla', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': csrf
        },
        body: JSON.stringify({ id: sillaId })
    })
    .then(() => clickSala(salaId)) // Refrescar las sillas de la sala
    .catch(error => console.error('Error al actualizar la silla:', error));
}
