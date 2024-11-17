<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cine Medac</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        :root{
            --var-primary:"img/cine.webp";
        }
        body {
            font-family: Arial, sans-serif;
        }
        header {
            height: 15vh; /* Ocupa el 15% de la altura de la ventana */
            padding-top: 1%;
            background-image: var(--var-primary);
            color: white;
        }
        header h1, header p {
            margin: 0;
        }
        main {
            display: flex;
            height: 75vh; /* Ocupa el 75% de la altura */
        }
        section {
            padding: 15px;
            border: 3px solid var(--var-primary);
            overflow: auto;
        }
        section:nth-child(1), /* primer section */
        section:nth-child(3) /* tercer section */{
            flex: 1; /* Ancho igual para las secciones laterales */
            background-color: #E5EDF1;
        }
        section:nth-child(2) /* tercero section */{
            flex: 2; /* Doble ancho para la sección central */
            background-color: #96C2DB;
        }
        footer {
            height: 10vh; /* Ocupa el 10% de la altura */
            background-color: #E5EDF1;
            display: flex;
            align-items: center;
            padding: 0 1%;
        }
        .btn-custom {
            width: 100%;
            max-width: 150px;
        }
    </style>
</head>
<body>
    <header class="text-center text-dark">
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
            <div class="d-flex flex-wrap">
                <!-- Representación de asientos -->
                <button class="btn btn-outline-secondary m-1">1</button>
                <button class="btn btn-outline-secondary m-1">2</button>
                <button class="btn btn-outline-secondary m-1">3</button>
                <button class="btn btn-outline-secondary m-1">4</button>
                <button class="btn btn-outline-secondary m-1">1</button>
                <button class="btn btn-outline-secondary m-1">2</button>
                <button class="btn btn-outline-secondary m-1">3</button>
                <button class="btn btn-outline-secondary m-1">4</button>
                <button class="btn btn-outline-secondary m-1">1</button>
                <button class="btn btn-outline-secondary m-1">2</button>
                <button class="btn btn-outline-secondary m-1">3</button>
                <button class="btn btn-outline-secondary m-1">4</button>
                <button class="btn btn-outline-secondary m-1">1</button>
                <button class="btn btn-outline-secondary m-1">2</button>
                <button class="btn btn-outline-secondary m-1">3</button>
                <button class="btn btn-outline-secondary m-1">4</button>
                <button class="btn btn-outline-secondary m-1">1</button>
                <button class="btn btn-outline-secondary m-1">2</button>
                <button class="btn btn-outline-secondary m-1">3</button>
                <button class="btn btn-outline-secondary m-1">4</button>
                <button class="btn btn-outline-secondary m-1">1</button>
                <button class="btn btn-outline-secondary m-1">2</button>
                <button class="btn btn-outline-secondary m-1">3</button>
                <button class="btn btn-outline-secondary m-1">4</button>
                <button class="btn btn-outline-secondary m-1">1</button>
                <button class="btn btn-outline-secondary m-1">2</button>
                <button class="btn btn-outline-secondary m-1">3</button>
                <button class="btn btn-outline-secondary m-1">4</button>
                <button class="btn btn-outline-secondary m-1">1</button>
                <button class="btn btn-outline-secondary m-1">2</button>
                <button class="btn btn-outline-secondary m-1">3</button>
                <button class="btn btn-outline-secondary m-1">4</button>
                <button class="btn btn-outline-secondary m-1">1</button>
                <button class="btn btn-outline-secondary m-1">2</button>
                <button class="btn btn-outline-secondary m-1">3</button>
                <button class="btn btn-outline-secondary m-1">4</button>
                <button class="btn btn-outline-secondary m-1">1</button>
                <button class="btn btn-outline-secondary m-1">2</button>
                <button class="btn btn-outline-secondary m-1">3</button>
                <button class="btn btn-outline-secondary m-1">4</button>
                <button class="btn btn-outline-secondary m-1">1</button>
                <button class="btn btn-outline-secondary m-1">2</button>
                <button class="btn btn-outline-secondary m-1">3</button>
                <button class="btn btn-outline-secondary m-1">4</button>
                <button class="btn btn-outline-secondary m-1">1</button>
                <button class="btn btn-outline-secondary m-1">2</button>
                <button class="btn btn-outline-secondary m-1">3</button>
                <button class="btn btn-outline-secondary m-1">4</button>
                <button class="btn btn-outline-secondary m-1">1</button>
                <button class="btn btn-outline-secondary m-1">2</button>
                <button class="btn btn-outline-secondary m-1">3</button>
                <button class="btn btn-outline-secondary m-1">4</button>
                <button class="btn btn-outline-secondary m-1">1</button>
                <button class="btn btn-outline-secondary m-1">2</button>
                <button class="btn btn-outline-secondary m-1">3</button>
                <button class="btn btn-outline-secondary m-1">4</button>
                <button class="btn btn-outline-secondary m-1">1</button>
            </div>
        </section>

        <!-- Información de la película -->
        <section>
            <h2>Información de la Película</h2>
            <p>
                El superhéroe de ficción Spider-Man, creado por Stan Lee y Steve Ditko, aparece en múltiples películas. Desde las primeras adaptaciones hasta la actual versión del Universo Cinematográfico de Marvel, este icónico personaje ha sido interpretado por Nicholas Hammond, Tobey Maguire, Andrew Garfield, y Tom Holland.
                Tom Holland, bajo el acuerdo entre Marvel Studios y Sony Pictures, ha aparecido en varias películas, destacándose por su integración en el MCU desde 2016.
            </p>
        </section>
    </main>

    <footer>
        <span>&copy; 2024 Cine Medac</span>
        <ul class="list-unstyled d-flex mb-0">
            <li class="ms-3"><a class="text-dark" href="#"><i class="bi bi-twitter"></i></a></li>
            <li class="ms-3"><a class="text-dark" href="#"><i class="bi bi-instagram"></i></a></li>
            <li class="ms-3"><a class="text-dark" href="#"><i class="bi bi-facebook"></i></a></li>
        </ul>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="js/prueba.js"></script>
</body>
</html>
