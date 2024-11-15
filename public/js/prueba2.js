// Recoger los datos del json de salas

// mandar header y body
// {{csrf_token()}}

const url = '/getallsalas'

document-addEventListener('DOMContentLoaded', ()=>{
    const salas = document.querySelector('#salas')
    actualizar()
    salas.removeChild()
    actualizar()
    // console.log(csrf)
})


function actualizar() {

    fetch(url)
    .then(respuesta => respuesta.json())
        .then(result => mostrarDatos(result))
        .catch(error => console.log(error))
    }

    function mostrarDatos(datos) {

        datos.forEach(sala => {
            const { id, nombre, created_at, updated_at } = sala
            // console.log("ID: " + id)
            // console.log("Nombre sala: " + nombre)
            // console.log("Creada: " + created_at)
            // console.log("Actualizada: " + updated_at)
            // console.log("")

        let saladiv = document.createElement('div')
        saladiv.style.backgroundColor = 'green'
        saladiv.style.margin = '5px'
        saladiv.style.height = '30px'
        saladiv.textContent = nombre
        salas.appendChild(saladiv)

        saladiv.addEventListener('click', () => {

            fetch('/getsillas/' + id)
                .then(respuesta => respuesta.json())
                .then(result => mostrarSillas(result))
                .catch(error => console.log(error))
        })
    })
}

function mostrarSillas(datos) {
    const pelisdiv = document.querySelector('#pelis')

    pelisdiv.textContent = ""
    let contador = 0

    datos.forEach(silla => {
        contador++
        const {id, ocupada} = silla;
        let cuadrado = document.createElement('div')
        cuadrado.textContent = contador
        pelisdiv.appendChild(cuadrado)
        silla.addEventListener('click', () => {
            console.log(silla)
        })
    })
}



