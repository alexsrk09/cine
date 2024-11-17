<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cine Medac</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        .height{
            height: 82vh;
            overflow: scroll;   
        }
        .width{
            height: 87vh;
            width: 48%;
            margin-right: 28%;
            margin-top: 40px;
        }
        .width2{
            height: 77vh;
            margin-left: 80%;
            overflow: scroll;
            width: 28%;
        }
        .text-wrap{
            overflow-wrap: break-word
        }
        html, body {
        height: 100%;
        margin: 0;
        }

        /* Flexbox en el body para manejar el layout */
        body {
            display: flex;
            flex-direction: column;
        }

        /* El contenido principal ocupa el espacio restante */
        main {
            flex: 1;
        }

    
    </style>
</head>
<body>
    <header class="bg-success ">
        <div class="container text-center">
            <h1 class="fw-bold ">Cine Medac</h1>
            <h3>Aquí se encuentra la reserva de asientos de nuestra sala</h3>
        </div>
    </header>

    <main>

        <aside>
            <div class=" d-flex justify-content-center flex-wrap gap-3 mt-4 w-25 border border-5 row position-absolute top-50 start-0 translate-middle-y height">
                <div>
                <button class="col-3 btn btn-light border border-3 border-primary text-dark p-2 rounded-pill fw-bold m-3" id="btnsala">Crear Sala</button>
                <button class="col-3 btn btn-light border border-3 border-primary text-dark p-2 rounded-pill fw-bold m-3" id="btnsala">Sala 1</button>
                <button class="col-3 btn btn-light border border-3 border-primary text-dark p-2 rounded-pill fw-bold m-3" id="btnsala">Sala 2</button>
                <button class="col-3 btn btn-light border border-3 border-primary text-dark p-2 rounded-pill fw-bold m-3" id="btnsala">Sala 3</button>
                <button class="col-3 btn btn-light border border-3 border-primary text-dark p-2 rounded-pill fw-bold m-3" id="btnsala">Sala 4</button>
                <button class="col-3 btn btn-light border border-3 border-primary text-dark p-2 rounded-pill fw-bold m-3" id="btnsala">Sala 5</button>
                <button class="col-3 btn btn-light border border-3 border-primary text-dark p-2 rounded-pill fw-bold m-3" id="btnsala">Sala 1</button>
                <button class="col-3 btn btn-light border border-3 border-primary text-dark p-2 rounded-pill fw-bold m-3" id="btnsala">Sala 2</button>
                </div>
            </div>
        </aside>

        <section>
            <div class="border border-5 col-3 width top-50 end-0 translate-middle-y">
                <h1>SPIDERMAN 3</h1>        
                <h2>Elección de asientos</h2>
                <button class="col-3 btn btn-light border border-3 border-primary text-dark p-2 rounded-pill fw-bold m-3" id="btnsala">Crear Asiento</button>
                <h3>1 2 3 4 5 6 7 8 9 10 1 2 3 4 5 6 7 8 9 10 11 12 13 14 15 16 17 18 19 20</h3>
            </div>
        </section>

        <section>
            <div class="container text-center mt-4">
                <div class="border border-5 width2 text-wrap position-absolute top-50 end-0 translate-middle-y ">
                    <h2>Info de Spiderman 3</h2>
                    <div>
                    El superhéroe de ficción Spider-Man, creado por Stan Lee y Steve Ditko y que aparece en los cómics de Marvel Comics, ha aparecido como personaje principal en múltiples películas teatrales y hechas para televisión.

                    Nicholas Hammond actuó por primera vez como Peter Parker / Spider-Man en la película de 1977 hecha para televisión Spider-Man y aparecería como el personaje en otras dos ocasiones. En 1978, Toei Company creó un spin-off teatral de su serie de televisión Spider-Man, con Shinji Todō retomando su papel de Takuya Yamashiro / Spider-Man. En 1999, Sony Pictures Entertainment había adquirido los derechos cinematográficos del personaje, creando dos series de películas hasta 2014: la trilogía Spider-Man de Sam Raimi (2002-2007) protagonizada por Tobey Maguire, y las películas The Amazing Spider-Man de Marc Webb (2012 y 2014) protagonizada por Andrew Garfield.

                    En febrero de 2015, Disney, Marvel Studios y Sony hicieron un trato para compartir los derechos cinematográficos de Spider-Man, lo que llevó a una nueva versión de Spider-Man que se introdujo e integró en el Universo cinematográfico de Marvel. El acuerdo permitió a Sony Pictures continuar siendo la propietaria, financiar, distribuir y tener el control creativo final de las películas en solitario de Spider-Man, y Walt Disney Studios Motion Pictures distribuyó las películas con sus otras apariciones. Tom Holland interpreta esta versión de Spider-Man y ha aparecido en seis películas hasta la fecha, desde Capitán América: Civil War (2016) hasta Spider-Man: No Way Home (2021). En septiembre de 2019, luego de un breve desacuerdo que resultó en la rescisión del antiguo acuerdo, Disney y Sony cedieron ante las protestas de los fanáticos e hicieron un nuevo acuerdo para que la versión de Holland hiciera al menos dos apariciones más: en otra película en solitario, Spider-Man: No Way Home (2021) y otra película de equipo.
                    </div>
                </div>
            </div>
        </section>
    </main>
    

    <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
        <div class="col-md-4 d-flex align-items-center">
        <a href="/" class="mb-3 me-2 mb-md-0 text-body-secondary text-decoration-none lh-1">
            <svg class="bi" width="30" height="24"><use xlink:href="#bootstrap"/></svg>
        </a>
        <span class="mb-3 mb-md-0 text-body-secondary">&copy; 2024 Company, Inc</span>
        </div>

        <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
        <li class="ms-3"><a class="text-body-secondary" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#twitter"/></svg></a>A</li>
        <li class="ms-3"><a class="text-body-secondary" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#instagram"/></svg></a>A</li>
        <li class="ms-3"><a class="text-body-secondary" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#facebook"/></svg></a>A</li>
        </ul>
    </footer>
    
    
        

        <!-- <button id="crearSala">Crear sala</button> -->

        <!-- <div id="tabla" class="text-success bg-primary text-white font-weight-bold display-4 p-4 rounded-lg shadow w-100 w-md-50 text-center"></div> -->
        <!-- <section id="salas" >

        </section>
        
        <div id="conteiner-asientos"></div> -->

        <!-- <div class="d-flex justify-content-center flex-wrap gap-3 mt-4">
            <button class="btn btn-primary rounded-pill" id="btnsala">Sala 6</button>
            <button class="btn btn-primary rounded-pill" id="btnsala">Sala 7</button>
            <button class="btn btn-primary rounded-pill" id="btnsala">Sala 8</button>
            <button class="btn btn-primary rounded-pill" id="btnsala">Sala 9</button>
            <button class="btn btn-primary rounded-pill" id="btnsala">Sala 10</button>
        </div> -->

       
        <!-- <div id="asientos-2" class="mt-3">
            <h3>Ver disponibilidad sala 6-10</h3>
        </div> -->

        <!-- <div id="tabla" class="text-success bg-primary text-white font-weight-bold display-4 p-4 rounded-lg shadow w-100 w-md-50 text-center"></div> -->
        

    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="js/prueba.js"></script>
</body>
</html>
