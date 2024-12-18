<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cine Medac</title>
    <link rel="shortcut icon" href="img/dorado.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        :root {
            --var-primary: url('img/cine7.png');
            --colorFondoHeader-Footer: #445899;
            /* --secondary-color: #3498db; */
            --colorFondoSection1-2: #00000086;
            --colorBtnCrear: #162849;
            --colorFondoSection3: #162849;
            --colorTitulo: #caccff;
        }

        body {
            font-family: Arial, sans-serif;
            background-image: var(--var-primary);
            background-position: center;
            background-size:cover ;
        }

        header {
            height: 15vh;
            /* Ocupa el 15% de la altura de la ventana */
            padding-top: 1%;
            color: white;
            /* background-color: var(--colorFondoHeader-Footer); */
        }

        header h1{
            margin: 0;
        }

        main {
            display: flex;
            height: 75vh;
            /* Ocupa el 75% de la altura */
        }

        section {
            padding: 15px;
            border: 3px solid var(--var-primary);
            overflow: auto;
        }

        /* .overflow{
            background: #f1f1f1;
            border-radius: 10px;
            overflow-y: auto;
        } */

        section:nth-child(1) {
            flex: 1;
            /* Ancho igual para las secciones laterales */
            /* background-color: #e5edf1b4; */
            border-radius: 10px;
        }

        /* primer section */
        section:nth-child(3) {

            /* tercer section */

            flex: 1;
            background-color: var(--colorFondoSection3);

            /* Ancho igual para las secciones laterales */
        }

        section:nth-child(2) {

            /* tercero section */
            flex: 2;
            /* Doble ancho para la sección central */
            /* background-color: #95c1dbb4; */
        }

        footer {
            height: 10vh;
            /* Ocupa el 10% de la altura */
            /* background-color: #E5EDF1; */
            display: flex;
            align-items: center;
            padding: 0 1%;
            background-color: var(--colorFondoHeader-Footer);
        }

        .btn-custom {
            width: 100%;
            max-width: 150px;
            background-color: var(--colorBtnCrear);
        }

        #pelis button {
            width: 10%;
        }

        #pelis button img {
            width: 100%;
            height: 100%;
        }

        .movie-info {
            /* background-color: white; */
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            padding: 2rem;
        }

        .InfoPeli {
            color: var(--colorTitulo);
        }

        .divAsientos {
            border-color: black solid 1px;
        }

        .sala-btn-group {
            display: flex;
            margin-bottom: 0.5rem;
        }

        .sala-btn {
            flex-grow: 1;
            border-top-right-radius: 0 !important;
            border-bottom-right-radius: 0 !important;
            background-color: var(--colorBtnCrear);
            max-width: fit-content;
        }

        .delete-btn {
            border-top-left-radius: 0 !important;
            border-bottom-left-radius: 0 !important;
        }
        .background{
            background-color: var(--colorFondoSection1-2);
        }
        .tamano{
            max-width: fit-content;
        }
        .colorTit{
            color: var(--colorTitulo);
        }
        .logo{
            width:7%;
        }
        .cosas_footer {
            display: flex;
            justify-content: flex-end;
            margin-left: 10%;
        }
    </style>
</head>

<body>
    <header class="text-center text-white">
        <div class="container">
            <h1 class="fw-bold colorTit"><em>Cine Medac</em></h1>
        </div>
    </header>

    <main>
        <!-- Sidebar de Salas -->
        <section class="background m-3 tamano">
            <h5 class="mb-3 text-white text-center fw-bold">Gestionar Salas</h5>
            <button class="btn btn-light border border-3 border-dark text-light fw-bold rounded-pill btn-custom mb-2" id="crearSala">Crear Sala</button>
            <hr class="text-danger border-3">
            <div id="salas">
                {{-- <div class="sala-btn-group">
                    <button class="btn btn-light border-3 border-dark text-white fw-bold sala-btn">Sala 1</button>
                    <button class="btn btn-danger border-3 border-danger text-white fw-bold delete-btn">X</button>
                </div> --}}
            </div>
        </section>

        <!-- Área de selección de asientos -->
        <section class="background m-3">
            <h5 class="text-white text-center fw-bold">Elección de asientos</h5>
            <button class="btn btn-light border border-3 border-dark text-light fw-bold rounded-pill btn-custom mb-3" id="crearAsiento">Crear Asiento</button>
            <p class="text-white">Asientos ocupados: </p>

            <hr class="text-danger border-3">
            <h2 class="mb-3 text-white">Spiderman 3</h2>
            <div class="d-flex flex-wrap">
                <div class="divAsientos" id="pelis">
                        {{-- <button class="btn btn-light bg-transparent border-3 border-primary m-1">
                            <img src="img/ocupado1.png" alt="Asiento ocupado">
                            <button class="btn btn-light bg-transparent border-3 border-danger text-danger m-1">X</button>
                        </button> --}}
                </div>
            </div>

        </section>

        <!-- Información de la película -->
        <section class="movie-info m-4">
            <h2 class="InfoPeli fw-bold">Información de la Película</h2>
            <hr class="text-danger border-4">
            <p class="text-white">
                El superhéroe de ficción Spider-Man, creado por Stan Lee y Steve Ditko, aparece en múltiples películas. Desde las primeras adaptaciones hasta la actual versión del Universo Cinematográfico de Marvel, este icónico personaje ha sido interpretado por Nicholas Hammond, Tobey Maguire, Andrew Garfield, y Tom Holland.
                Tom Holland, bajo el acuerdo entre Marvel Studios y Sony Pictures, ha aparecido en varias películas, destacándose por su integración en el MCU desde 2016.
            </p>
        </section>
    </main>

    <footer class="text-white">
        <span>&copy; 2024 Cine Medac</span>
        <ul class="list-unstyled d-flex mb-0">
            <li class="ms-3"><a class="text-dark" href="https://x.com/"><i class="bi bi-twitter"></i></a>Twitter</li>
            <li class="ms-3"><a class="text-dark" href="https://www.instagram.com/"><i class="bi bi-instagram"></i></a>Instagram</li>
            <li class="ms-3"><a class="text-dark" href="https://www.facebook.com/"><i class="bi bi-facebook"></i></a>Facebook</li>
        </ul>
        <div class="cosas_footer">
            <img class="logo"src="img/dorado.png" alt="Logo Cine">
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="js/prueba.js"></script>
</body>

</html>
<script>
    let csrf = '{{ csrf_token() }}'
</script>
<script src="js/prueba2.js"></script>