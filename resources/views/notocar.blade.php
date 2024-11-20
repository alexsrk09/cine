<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cine Medac</title>
    <link rel="shortcut icon" href="img/dorado.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>

        body {
            margin: 0;
            padding: 0;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        header {
            background-color: orange;
            height: 14vh;
            margin-bottom: 1vh;
        }

        main {
            flex: 1;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-evenly;
            align-content: center;
        }

        section {
            height: 70vh;
            width: 30%;
            min-width: 250px;
        }

        .salas {
            background-color: red;
        }

        .asientos {
            background-color: blue;
        }

        .info {
            background-color: green;
        }

        footer {
            background-color: orange;
            height: 14vh;
            margin-bottom: 1vh;
        }



            section {
                width: 90%;
                height: auto;
                min-height: 30vh;
            }


            body {
            margin: 0;
            padding: 0;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        main {
            flex: 1;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-evenly;
            gap: 1rem; /* Espaciado entre secciones */
            padding: 1rem;
        }

        section {
            flex: 1;
            min-width: 250px;
            max-width: 30%;
            height: auto;
            padding: 1rem;
            border-radius: 8px;
            color: white;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .salas {
            background-color: red;
        }

        .asientos {
            background-color: blue;
        }

        .info {
            background-color: green;
        }

        @media (max-width: 768px) {
            section {
                max-width: 100%; /* Cada sección ocupará toda la fila */
            }
        }

        footer {
            background-color: #222;
            color: #fff;
            text-align: center;
            padding: 0.5rem 0;
        }
        </style>
</head>
<body>

    <header></header>

    <main>

        <!-- Sidebar de Salas -->
        <section class="salas"></section>



        <!-- Área de selección de asientos -->
        <section class="asientos"></section>



        <!-- Información de la película -->
        <section class="info"></section>

    </main>

    {{-- Logo, redes sociales, informacion --}}
    <footer></footer>


    <script>
        let csrf = '{{ csrf_token() }}'
    </script>
    <script src="js/prueba2.js"></script>

</body>
</html>
