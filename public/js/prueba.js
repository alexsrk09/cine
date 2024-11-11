arrayAsientos =[
    "1","2","3","4","5",
    "6","7","8","9","10",
    "11","12","13","14","15",
    "16","17","18","19","20",
    "21","22","23","24","25",
]

let pinon = document.querySelector('#btnsala')
console.log("pinon")
pinon.addEventListener('click',()=>{

    alert("HOLAAAAAAAAA")
    
    arrayAsientos.forEach(element => {
        
        

        console.log(element)
    });
    
    let asientos = document.createElement('table')
    
    let fila = document.createElement('tr')
    fila.style.backgroundColor = 'grey'
    fila.textContent =  
        asientos.appendChild(fila)


        document.body.appendChild(asientos)
    
   /*  for (let index = 0; index < arrayAsientos.length; index++) {
        const element = array[index];
        
    } */
})
