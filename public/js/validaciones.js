// Actualizar la lista de salas al cargar la página
document.addEventListener('DOMContentLoaded', () => {
    actualizarSalas();
    document.querySelector("#crearSala").addEventListener('click', (e) => {
        e.preventDefault();
        crearSala();
    });
    document.querySelector("#crearAsiento").addEventListener('click', (e) => {
        e.preventDefault();
        crearAsiento();
    });
});

let salaId = null

// CREAR SALA
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
        .then((resultado) => {
            console.log(resultado)
            actualizarSalas()
        })
        .then(() => actualizarSalas())
        .catch(error => console.error('Error al crear la sala:', error));
}

// FUNCION CREAR ASIENTO
function crearAsiento() {

    fetch('/createsilla', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': csrf
        },
        body: JSON.stringify({ sala_id: salaId })
    })
        .then((respuesta) => {
            console.log(respuesta)
            respuesta.json()
        })
        .then(() => clickSala(salaId))
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
        // <div class="sala-btn-group">
        //     <button class="btn btn-light border-3 border-dark text-white fw-bold sala-btn">Sala 1</button>
        //     <button class="btn btn-danger border-3 border-danger text-white fw-bold delete-btn">X</button>
        // </div>
        let salaDiv = document.createElement('div');
        salaDiv.classList.add('sala-btn-group');
        let salaBtn = document.createElement('button');
        salaBtn.textContent = nombre;
        salaBtn.classList.add('btn', 'btn-light', 'border-3', 'border-dark', 'text-white', 'fw-bold', 'sala-btn');
        salaDiv.appendChild(salaBtn);
        let deleteBtn = document.createElement('button');
        deleteBtn.textContent = 'X';
        deleteBtn.classList.add('btn', 'btn-danger', 'border-3', 'border-danger', 'text-white', 'fw-bold', 'delete-btn');
        salaDiv.appendChild(deleteBtn);
        // salaDiv.textContent = nombre;
        // salaDiv.classList.add('btn', 'btn-light', 'border', 'border-3', 'border-primary', 'text-dark', 'fw-bold', 'rounded-pill', 'btn-custom', 'mb-2');
        salasDiv.appendChild(salaDiv);

        deleteBtn.addEventListener('click', () => {
            deleteSala(id); // Llamar a la función para eliminar la sala
        });

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

// BORRAR UNA SALA
/* function borrarSala(id) {


    fetch("/deletesala", {
        method: 'POST',
        headers: {
            'content-type': 'application/json',
            'X-CSRF-TOKEN': csrf
        },
        body: JSON.stringify({ id : id })
    })
        .then((respuesta) => {
            console.log(respuesta)
            respuesta.json()
        })

        .catch(error => console.error('Error al borrar la sala:', error));
} */

function deleteSala(id) {
    fetch('/deletesala', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': csrf
        },
        body: JSON.stringify({ id: id })
    })
        .then(() => actualizarSalas())
        .catch(error => console.error('Error al eliminar la sala:', error));
}

// Mostrar las sillas en el DOM
function mostrarSillas(sillas, salaId) {
    const pelisDiv = document.querySelector('#pelis');
    clearElement(pelisDiv);

    let contador = 0;

    sillas.forEach(silla => {
        contador++;
        const { id, ocupada } = silla;

        // <button class="btn btn-light bg-transparent border-3 border-primary m-1 boton_silla">
        //                     <img src="img/ocupado1.png" alt="Asiento ocupado">
        //                     <button class="btn btn-light bg-transparent border-3 border-danger text-danger m-1">X</button>
        //                 </button>

        let sillaDiv = document.createElement('button');
        sillaDiv.classList.add('btn', 'btn-light', 'bg-transparent', 'border-3', 'border-primary', 'm-1');
        let img = document.createElement('img');
        img.src = (ocupada == 1)? "img/ocupado1.png" : "img/libre1.png";
        img.alt = (ocupada == 1)? "Asiento ocupado" : "Asiento libre";
        sillaDiv.appendChild(img);
        let deleteBtn = document.createElement('button');
        deleteBtn.textContent = 'X';
        deleteBtn.classList.add('btn', 'btn-light', 'bg-transparent', 'border-3', 'border-danger', 'text-danger', 'm-1');
        sillaDiv.appendChild(deleteBtn);

        pelisDiv.appendChild(sillaDiv);

        img.addEventListener('click', () => {
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
