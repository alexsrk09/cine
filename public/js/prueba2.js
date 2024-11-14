const url = '/getallsalas'

fetch(url)
    .then(respuesta => respuesta.json())
    .then(result => mostrar(result))
    .catch(error => console.log(error))


function mostrar(datos) {


    const salas = document.querySelector('#salas')
    datos.forEach(sala => {
        const { id, nombre, created_at, updated_at } = sala
        // console.log("ID: " + id)
        // console.log("Nombre sala: " + nombre)
        // console.log("Creada: " + created_at)
        // console.log("Actualizada: " + updated_at)
        // console.log("")
        let salaDIV = document.createElement('div')
        salaDIV.style.backgroundColor = 'green'
        salaDIV.style.margin = '5px'
        salaDIV.style.height = '30px'
        salaDIV.textContent = nombre;
        salas.appendChild(salaDIV)

        salaDIV.addEventListener('click', () => {

            fetch('/getsillas/' + id)
                .then(respuesta => respuesta.json())
                .then(result => mostrarSillas(result))
                .catch(error => console.log(error))
        })
    })
}

function mostrarSillas(datos) {
    const pelisDIV = document.querySelector('#pelis')

    pelisDIV.textContent = ""
    let contador = 0

    datos.forEach(silla => {
        contador++
        const {id, ocupada} = silla;
        let cuadrado = document.createElement('div')
        cuadrado.textContent = contador
        pelisDIV.appendChild(cuadrado)
    })
}


// mandar header y body
//
// {{csrf_token()}}
