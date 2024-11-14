// Recoger datos del json, a partir de la ruta localhost:8000/getallsalas

const url = 'salas.json'
// const url2 = 'localhost:8000/getallsalas'

fetch(url)
    .then(respuesta => {
        // Aquí le pongo para devolver cada sala, nombre y asientos
        console.log(respuesta)
        console.log(respuesta.status)
        console.log(respuesta.statusText)
        console.log(respuesta.url)

        // Retornamos la respuesta en texto para qu epueda ser procesada en el siguiente .then
        return respuesta.text()
    })

    //Desestructuramos objeto
    function mostrarDatos({id, nombre, created_at, updated_at}){
        console.log(id)
        console.log(nombre)
        console.log(created_at)
        console.log(updated_at)
    }

    // Recoger datos del json donde las salas
    function mostrarIds(resultado) {

        resultado.forEach(sala => {
            // Aplicamos destructuración
            const {id, nombre, created_at, updated_at} = sala
            console.log(id)
        })
    }
