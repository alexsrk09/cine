// arrayAsientos =[
//     "1","2","3","4","5",
//     "6","7","8","9","10",
//     "11","12","13","14","15",
//     "16","17","18","19","20",
//     "21","22","23","24","25",
// ]

arraySalas =["SALA 1","SALA 2","SALA 3","SALA 4","SALA 5","SALA 6","SALA 7"]
let br = document.createElement('br')
let salas = document.querySelector('#salas')


contador =0
arraySalas.forEach(sala => {
    let boton = document.createElement('button')
    boton.id = 'boton' + sala
    console.log(boton.id)
    boton.textContent= sala
    contador++
    if(sala=5){
        
        salas.appendChild(br)
        br.appendChild(boton)
    }
})

let botones = document.querySelectorAll('#btnsala')
console.log("botones")


const tablaHTML = document.querySelector('#tabla')

botones.forEach(pinon => {
    pinon.addEventListener('click',()=>{

    /* alert("HOLAAAAAAAAA") */
    
    /* arrayAsientos.forEach(element => {
        console.log(element)
    }); */
    
    let asientos = document.createElement('table')
    
    // let tablaHTML = document.createElement('tr')
    // tablaHTML.style.backgroundColor = 'blue'
    tablaHTML.textContent =  arrayAsientos
        asientos.appendChild(tablaHTML)


        document.body.appendChild(asientos)
    
})
})

