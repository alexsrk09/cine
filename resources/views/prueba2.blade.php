<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
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

        section:nth-child(1),
        /* primer section */
        section:nth-child(3)

        /* tercer section */
            {
            flex: 1;
            /* Ancho igual para las secciones laterales */
            background-color: #e5edf1b4;
        }

        section:nth-child(2)

        /* tercero section */
            {
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
    </style>
</head>
<body>
{{--
    <div id="salas"></div>

    <div id="pelis"></div>

    <button id="crear_sala">Crear sala  </button>

    --}}
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
        <button class="btn btn-light border border-3 border-primary text-dark fw-bold rounded-pill btn-custom mb-2"
            id="crearSala">Crear Sala</button>
        <hr>
        <div id="salas">
            {{-- <button
                class="btn btn-light border border-3 border-primary text-dark fw-bold rounded-pill btn-custom mb-2">Sala
                1</button> --}}
        </div>
    </section>

    <!-- Área de selección de asientos -->
    <section>
        <h2 class="mb-3">Spiderman 3</h2>
        <p class="lead">Elección de asientos</p>
        <button class="btn btn-light border border-3 border-primary text-dark fw-bold rounded-pill btn-custom mb-3"
            id="crearAsiento">Crear Asiento</button>
        <div class="d-flex flex-wrap" id="pelis">
            <!-- Representación de asientos -->
            {{-- <button class="btn btn-outline-secondary m-1">1</button> --}}
        </div>
    </section>

    <!-- Información de la película -->
    <section>
        <h2>Información de la Película</h2>
        <p id="descripcion">
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

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
</script>

</body>
</html>
<script>
    let csrf = '{{ csrf_token() }}'
</script>
<script src="js/prueba2.js"></script>
