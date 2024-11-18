<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cine Medac</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        :root {
            --var-primary: url('img/cine.webp');
        }

        body {
            font-family: Arial, sans-serif;
            background-image: var(--var-primary);
        }

        header {
            height: 15vh;
            /* Ocupa el 15% de la altura de la ventana */
            padding-top: 1%;
            color: white;
        }

        header h1,
        header p {
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

        section:nth-child(1){
            flex: 1;
            /* Ancho igual para las secciones laterales */
            background-color: #e5edf1b4;
            border-radius: 10px;
        }
        /* primer section */
        section:nth-child(3)

        /* tercer section */
            {
            flex: 1;
            /* Ancho igual para las secciones laterales */
        }

        section:nth-child(2){
            
        /* tercero section */
            flex: 2;
            /* Doble ancho para la sección central */
            background-color: #95c1dbb4;
        }

        footer {
            height: 10vh;
            /* Ocupa el 10% de la altura */
            background-color: #E5EDF1;
            display: flex;
            align-items: center;
            padding: 0 1%;
        }

        .btn-custom {
            width: 100%;
            max-width: 150px;
        }
        #pelis button {
            width: 10%;
        }
        #pelis button img {
            width: 100%;
            height: 100%;
        }
        .movie-info {
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
            padding: 1rem;
        }

    </style>
</head>
<body>
    <header class="text-center text-black">
        <div class="container">
            <h1 class="fw-bold">Cine Medac</h1>
            <p>Aquí se encuentra la reserva de asientos de nuestra sala</p>
        </div>
    </header>

    <main>
        <!-- Sidebar de Salas -->
        <section>
            <h5 class="mb-3">Gestionar Salas</h5>
            <button class="btn btn-light border border-3 border-primary text-dark fw-bold rounded-pill btn-custom mb-2" id="crearSala">Crear Sala</button>
            <hr>
            <div id="lista-salas">
                <button class="btn btn-light border border-3 border-primary text-dark fw-bold btn-custom mb-2">Sala 1</button>
                <button class="btn btn-light border border-3 border-danger text-danger fw-bold btn-custom mb-2">X</button>
                <button class="btn btn-light border border-3 border-primary text-dark fw-bold rounded-pill btn-custom mb-2">Sala 2</button>
                <button class="btn btn-light border border-3 border-primary text-dark fw-bold rounded-pill btn-custom mb-2">Sala 3</button>
                <button class="btn btn-light border border-3 border-primary text-dark fw-bold rounded-pill btn-custom mb-2">Sala 4</button>
                <button class="btn btn-light border border-3 border-primary text-dark fw-bold rounded-pill btn-custom mb-2">Sala 5</button>
                <button class="btn btn-light border border-3 border-primary text-dark fw-bold rounded-pill btn-custom mb-2">Sala 1</button>
                <button class="btn btn-light border border-3 border-primary text-dark fw-bold rounded-pill btn-custom mb-2">Sala 2</button>
                <button class="btn btn-light border border-3 border-primary text-dark fw-bold rounded-pill btn-custom mb-2">Sala 3</button>
                <button class="btn btn-light border border-3 border-primary text-dark fw-bold rounded-pill btn-custom mb-2">Sala 4</button>
                <button class="btn btn-light border border-3 border-primary text-dark fw-bold rounded-pill btn-custom mb-2">Sala 5</button>
                <button class="btn btn-light border border-3 border-primary text-dark fw-bold rounded-pill btn-custom mb-2">Sala 1</button>
                <button class="btn btn-light border border-3 border-primary text-dark fw-bold rounded-pill btn-custom mb-2">Sala 2</button>
                <button class="btn btn-light border border-3 border-primary text-dark fw-bold rounded-pill btn-custom mb-2">Sala 3</button>
                <button class="btn btn-light border border-3 border-primary text-dark fw-bold rounded-pill btn-custom mb-2">Sala 4</button>
                <button class="btn btn-light border border-3 border-primary text-dark fw-bold rounded-pill btn-custom mb-2">Sala 5</button>
                <button class="btn btn-light border border-3 border-primary text-dark fw-bold rounded-pill btn-custom mb-2">Sala 1</button>
                <button class="btn btn-light border border-3 border-primary text-dark fw-bold rounded-pill btn-custom mb-2">Sala 2</button>
                <button class="btn btn-light border border-3 border-primary text-dark fw-bold rounded-pill btn-custom mb-2">Sala 3</button>
                <button class="btn btn-light border border-3 border-primary text-dark fw-bold rounded-pill btn-custom mb-2">Sala 4</button>
                <button class="btn btn-light border border-3 border-primary text-dark fw-bold rounded-pill btn-custom mb-2">Sala 5</button>
                <button class="btn btn-light border border-3 border-primary text-dark fw-bold rounded-pill btn-custom mb-2">Sala 1</button>
                <button class="btn btn-light border border-3 border-primary text-dark fw-bold rounded-pill btn-custom mb-2">Sala 2</button>
                <button class="btn btn-light border border-3 border-primary text-dark fw-bold rounded-pill btn-custom mb-2">Sala 3</button>
                <button class="btn btn-light border border-3 border-primary text-dark fw-bold rounded-pill btn-custom mb-2">Sala 4</button>
                <button class="btn btn-light border border-3 border-primary text-dark fw-bold rounded-pill btn-custom mb-2">Sala 5</button>
                <button class="btn btn-light border border-3 border-primary text-dark fw-bold rounded-pill btn-custom mb-2">Sala 1</button>
                <button class="btn btn-light border border-3 border-primary text-dark fw-bold rounded-pill btn-custom mb-2">Sala 2</button>
                <button class="btn btn-light border border-3 border-primary text-dark fw-bold rounded-pill btn-custom mb-2">Sala 3</button>
                <button class="btn btn-light border border-3 border-primary text-dark fw-bold rounded-pill btn-custom mb-2">Sala 4</button>
                <button class="btn btn-light border border-3 border-primary text-dark fw-bold rounded-pill btn-custom mb-2">Sala 5</button>
            </div>
        </section>

        <!-- Área de selección de asientos -->
        <section>
            <h2 class="mb-3">Spiderman 3</h2>
            <p class="lead">Elección de asientos</p>
            <button class="btn btn-light border border-3 border-primary text-dark fw-bold rounded-pill btn-custom mb-3" id="crearAsiento">Crear Asiento</button>
            <hr>
            <div class="d-flex flex-wrap" id="pelis">
            <button class="btn btn-light bg-transparent border-3 border-primary m-1">
                <img src="img/ocupado1.png" alt="Asiento ocupado">
                <button class="btn btn-light bg-transparent border-3 border-danger text-danger m-1">X</button>
            </button>
            <button class="btn bg-transparent border-3 border-primary m-1">
                <img src="img/libre1.png" alt="Asiento libre">
            </button>
            </div>
        </section>

        <!-- Información de la película -->
        <section class="movie-info">
            <h2>Información de la Película</h2>
            <hr>
            <p>
                El superhéroe de ficción Spider-Man, creado por Stan Lee y Steve Ditko, aparece en múltiples películas. Desde las primeras adaptaciones hasta la actual versión del Universo Cinematográfico de Marvel, este icónico personaje ha sido interpretado por Nicholas Hammond, Tobey Maguire, Andrew Garfield, y Tom Holland.
                Tom Holland, bajo el acuerdo entre Marvel Studios y Sony Pictures, ha aparecido en varias películas, destacándose por su integración en el MCU desde 2016.
            </p>
        </section>
    </main>

    <footer>
        <span>&copy; 2024 Cine Medac</span>
        <ul class="list-unstyled d-flex mb-0">
            <li class="ms-3"><a class="text-dark" href="https://x.com/"><i class="bi bi-twitter"></i></a>Twitter</li>
            <li class="ms-3"><a class="text-dark" href="https://www.instagram.com/"><i class="bi bi-instagram"></i></a>Instagram</li>
            <li class="ms-3"><a class="text-dark" href="https://www.facebook.com/"><i class="bi bi-facebook"></i></a>Facebook</li>
        </ul>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="js/prueba.js"></script>
</body>
</html>
