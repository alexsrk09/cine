// arrayAsientos = [
//     "1",
//     "2",
//     "3",
//     "4",
//     "5",
//     "6",
//     "7",
//     "8",
//     "9",
//     "10",
//     "11",
//     "12",
//     "13",
//     "14",
//     "15",
//     "16",
//     "17",
//     "18",
//     "19",
//     "20",
//     "21",
//     "22",
//     "23",
//     "24",
//     "25",
// ];

// arraySalas = [
//     "SALA 1",
//     "SALA 2",
//     "SALA 3",
//     "SALA 4",
//     "SALA 5",
//     "SALA 6",
//     "SALA 7",
//     "SALA 8",
//     "SALA 9",
//     "SALA 10",
//     "SALA 11",
//     "SALA 12",
//     "SALA 13",
//     "SALA 14",
//     "SALA 15",
// ];
// let salas = document.querySelector("#salas");
// let contenedor_asientos = document.querySelector("#conteiner-asientos");
// // let crearSala = document.querySelector('#crearSala')

// let contador = 0;

// // crearSala.forEach(e =>{
// //     e.addEventListener('click',()=>{
// // linea de 5 botones junto con el div donde iran las sillas
// // let currentdiv = document.createElement("div");
// let divContenidoSala = document.createElement("div")



// // salas.appendChild(currentdiv);
// salas.className = "row position-absolute top-50 start-0 translate-middle-y"
// arraySalas.forEach((sala) => {
//     let boton = document.createElement("button");
//     boton.id = "boton" + sala;
//     // console.log(boton.id)
//     boton.textContent = sala;
//     boton.className = "col-3 btn btn-light border border-3 border-primary text-dark p-2 rounded-pill fw-bold m-3"
//     boton.style.width = "100px"
//     contador++;
//     salas.appendChild(boton);
//     // divContenidoSala.appendChild(salas)

//     if(contador==3){
//         let div = document.createElement("div");
//         salas.appendChild(div)
//         contador=0
//     }

//     //! if (contador == 3) {
//     //!     // creamos un nuevo div vacio (donde iran las sillas)
//     //!     let div = document.createElement("div");
//     //!     div.id = "sillas";
//     //!     //El row genera las filas
//     //!     div.className = "row rounded-pill text-danger";
//     //!     currentdiv.appendChild(div);
//     //!     // creamos la nueva fila
//     //!     currentdiv = document.createElement("div");
//     //!     salas.appendChild(currentdiv);
//     //!     contador = 0;
//     //! }
// });
// //! if (contador != 0) {
// //!     // por si no llega a completar la linea cuando el contador no llega 0
// //!     // creamos un nuevo div vacio (donde iran las sillas)
// //!     let div = document.createElement("div");
// //!     div.id = "sillas";
// //!     div.className = "row rounded-pill text-danger";
// //!     currentdiv.appendChild(div);
// //!     // creamos la nueva fila
// //!     currentdiv = document.createElement("div");
// //!     salas.appendChild(currentdiv);
// //!     contador = 0;
// //! }
// //!     })
// //! })

// // busca los botones donde el id contenga "boton" (id^="boton) ^= operador que contenga
// const botones = document.querySelectorAll('button[id^="boton"]');

// botones.forEach((boton) => {
//     boton.addEventListener("click", () => {
//         document.querySelectorAll("#sillas").forEach((borrado) => {
//             borrado.textContent = "";
//         });
//         let caja = boton.parentNode.querySelector("#sillas");
//         //Creamos un boton para que los asientos se puedan reservar u ocupar y con boostrap al usar col-2 crea columnas
//         arrayAsientos.forEach((element) => {
//             // caja
//             let botonAsiento = document.createElement("button");

//             botonAsiento.id = "botonAsiento" + element;
//             botonAsiento.className = "col-2 rounded-pill m-3 fw-bold ";
//             botonAsiento.textContent = element;
//             caja.appendChild(botonAsiento);
//             // botonAsiento.src = "./img/logo.jpg";
//         });
//     });
// });

// contenedor_asientos.className = "border border-5"
// botones.addEventListener('click',()=>{
//     contenedor_asientos.appendChild(arrayAsientos)
// })



// // console.log("botones")
// // botones.forEach(pinon => {kkkknnnnnnnnnnn
// //     pinon.addEventListener('click',()=>{

// //     /* alert("HOLAAAAAAAAA") */

// //     /* arrayAsientos.forEach(element => {
// //         console.log(element)
// //     }); */

// //     let asientos = document.createElement('table')

// //     let tablaHTML = document.createElement('tr')
// //     tablaHTML.style.backgroundColor = 'blue'
// //     tablaHTML.textContent =  arrayAsientos
// //         asientos.appendChild(tablaHTML)

// //         document.body.appendChild(asientos)

// // })
// // })
