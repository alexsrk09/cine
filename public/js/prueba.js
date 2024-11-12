arrayAsientos =[
    "1","2","3","4","5",
    "6","7","8","9","10",
    "11","12","13","14","15",
    "16","17","18","19","20",
    "21","22","23","24","25",
]

let botones = document.querySelectorAll('#btnsala')
console.log("botones")



botones.forEach(pinon => {
    pinon.addEventListener('click',()=>{

    /* alert("HOLAAAAAAAAA") */
    
    /* arrayAsientos.forEach(element => {
        console.log(element)
    }); */
    
    let asientos = document.createElement('table')
    
    let fila = document.createElement('tr')
    fila.style.backgroundColor = 'grey'
    fila.textContent =  arrayAsientos
        asientos.appendChild(fila)


        document.body.appendChild(asientos)
    
})
})

