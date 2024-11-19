<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cine Medac</title>
    <link rel="shortcut icon" href="img/dorado.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        :root {
            --var-primary: url('img/cine7.png');
            --colorFondoHeader-Footer: #445899;
            --colorFondoSection1-2: #00000086;
            --colorBtnCrear: #162849;
            --colorFondoSection3: #162849;
            --colorTitulo: #caccff;
        }

        html,
        body {
            height: 100%;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: Arial, sans-serif;
            background-image: var(--var-primary);
            background-position: center;
            background-size: cover;
            background-attachment: fixed;
            display: flex;
            flex-direction: column;
        }

        main {
            flex-grow: 1;
            display: flex;
            flex-wrap: wrap;
            gap: 1rem;
            padding: 1rem;
            overflow: hidden;
            /* Evita desbordamiento del contenido principal */
        }

        section {
            padding: 15px;
            border: 3px solid var(--var-primary);
            border-radius: 10px;
            overflow: auto;
            /* Habilita scroll si es necesario */
        }

        section:nth-child(1){
            flex: 1;
            background-color: var(--colorFondoSection1-2);
            overflow-y: auto;
            
            height: 90%;
        }
        section:nth-child(3) {
            flex: 1;
            background-color: var(--colorFondoSection3);
            overflow-y: auto;
            
            height: 90%;
        }

        section:nth-child(2) {
            flex: 2;
            min-width: 300px;
            background-color: var(--colorFondoSection1-2);
            overflow-y: auto;
            /* Habilita scroll vertical */
            
            height: 90%;
            /* Ajusta el tamaño máximo restando el espacio del header y footer */
        }

        /* Asegura que el footer no cubra contenido */
        footer {
            background-color: var(--colorFondoHeader-Footer);
            padding: 1rem;
            flex-shrink: 0;
        }


        .InfoPeli {
            color: var(--colorTitulo);
        }

        .tamano {
            max-width: fit-content;
        }

        .movie-info {
            flex: 1;
            min-width: 200px;
            background-color: var(--colorFondoSection3);
        }

        footer {
            background-color: var(--colorFondoHeader-Footer);
            padding: 1rem;
        }

        .btn-custom {
            width: 100%;
            max-width: 150px;
            background-color: var(--colorBtnCrear);
        }

        #pelis button {
            width: 10%;
            min-width: 40px;
        }

        #pelis button img {
            width: 100%;
            height: auto;
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

        .colorTit {
            color: var(--colorTitulo);
        }

        .logo {
            width: 40px;
            height: auto;
        }
        #pelis {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }
        @media (max-width: 768px) {
            main {
                flex-direction: column;
            }

            .sidebar,.content,.movie-info {
                width: 100%;
            }
        }
    </style>
</head>

<body>
    <!-- HEADER -->
    <header class="text-center text-white">
        <div class="container">
            <h1 class="fw-bold colorTit"><em>Cine Medac</em></h1>
        </div>
    </header>

    <main>
        <!-- SALAS -->
        <section class="tamano m-3">
            <h5 class="mb-3 text-white text-center fw-bold">Gestionar Salas</h5>
            <button class="btn btn-light border border-3 border-dark text-light fw-bold rounded-pill btn-custom mb-2"
                id="crearSala">Crear Sala</button>
            <hr class="text-danger border-3">
            <div id="salas">
                {{-- <div class="sala-btn-group">
                    <button class="btn btn-light border-3 border-dark text-white fw-bold sala-btn">Sala 1</button>
                    <button class="btn btn-danger border-3 border-danger text-white fw-bold delete-btn">X</button>
                </div> --}}
            </div>
        </section>

        <!-- ASIENTOS -->
        <section class="m-3">
            <h5 class="text-white text-center fw-bold">Elección de asientos</h5>
            <button class="btn btn-light border border-3 border-dark text-light fw-bold rounded-pill btn-custom mb-3"
                id="crearAsiento">Crear Asiento</button>
            <p class="text-white" id="ocupados"></p>

            <hr class="text-danger border-3">
            <h2 class="mb-3 text-white" id="salaName"></h2>
            <div class="d-flex flex-wrap">
                <div class="divAsientos" id="pelis">
                    {{-- <button class="btn btn-light bg-transparent border-3 border-primary m-1">
                            <img src="img/ocupado1.png" alt="Asiento ocupado">
                            <button class="btn btn-light bg-transparent border-3 border-danger text-danger m-1">X</button>
                    </button> --}}
                </div>
            </div>
        </section>

        <!-- INFO PELI -->
        <section class="movie-info m-4">
            <h2 class="InfoPeli fw-bold">Información de la Película</h2>
            <hr class="text-danger border-4">
            <p class="text-white" id="descripcion"></p>
        </section>
    </main>
    <!-- FOOTER -->
    <footer class="text-white">
        <div class="row align-items-center">
            <div class="col-12 col-md-4 mb-3">
                <span>&copy; 2024 Cine Medac</span>
            </div>
            <div class="col-12 col-md-4 mb-3">
                <ul class="list-unstyled d-flex justify-content-center mb-0">
                    <li class="me-3"><a class="text-white" href="https://x.com/"><i class="bi bi-twitter"></i>
                            Twitter</a></li>
                    <li class="me-3"><a class="text-white" href="https://www.instagram.com/"><i
                                class="bi bi-instagram"></i> Instagram</a></li>
                    <li><a class="text-white" href="https://www.facebook.com/"><i class="bi bi-facebook"></i>
                            Facebook</a></li>
                </ul>
            </div>
            <div class="col-12 col-md-4 text-center text-md-end">
                <img class="logo" src="img/dorado.png" alt="Logo Cine">
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script src="js/prueba2.js"></script>
</body>

</html>
<script>
    let csrf = '{{ csrf_token() }}'
</script>