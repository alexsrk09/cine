<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cine Medac</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        :root {
            --primary-color: #3498db;
            --secondary-color: #e74c3c;
            --background-color: #ecf0f1;
            --text-color: #2c3e50;
            --light-color: #ffffff;
            --dark-color: #34495e;
            --accent-color: #f39c12;
        }

        body {
            background-image: url('img/cine.webp');
            font-family: 'Poppins', sans-serif;
            background-color: var(--background-color);
            color: var(--text-color);
            margin: 0;
            padding: 0;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        header {
            background-color: var(--primary-color);
            color: var(--light-color);
            padding: 2rem 0;
            text-align: center;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        header h1 {
            font-size: 3rem;
            font-weight: 700;
            margin: 0;
            letter-spacing: 2px;
        }

        header p {
            margin: 0.5rem 0 0;
            font-size: 1.2rem;
            opacity: 0.8;
        }

        main {
            flex-grow: 1;
            display: flex;
            gap: 2rem;
            padding: 2rem;
            flex-wrap: wrap;
        }

        section {
            background-color: var(--light-color);
            border-radius: 12px;
            padding: 2rem;
            box-shadow: 0 10px 15px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        section:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 20px rgba(0, 0, 0, 0.15);
        }

        section h2,
        section h5 {
            color: var(--primary-color);
            border-bottom: 2px solid var(--accent-color);
            padding-bottom: 0.5rem;
            margin-bottom: 1rem;
        }

        #salas {
            flex: 1;
            min-width: 250px;
        }

        #salas button {
            margin-bottom: 0.75rem;
            border-radius: 8px;
            transition: all 0.3s ease;
        }

        #salas button:hover {
            transform: translateX(5px);
        }

        #asientos {
            flex: 2;
            min-width: 300px;
        }

        #asientos .btn {
            background-color: transparent;
            border: none;
            padding: 0.25rem;
            transition: transform 0.3s ease;
        }

        #asientos .btn:hover {
            transform: scale(1.1);
        }

        #asientos .btn img {
            width: 50px;
            height: 50px;
            border-radius: 8px;
        }

        #info {
            flex: 1;
            min-width: 250px;
            background-color: var(--dark-color);
            color: var(--light-color);
        }

        #info p {
            font-size: 1rem;
            line-height: 1.6;
        }

        footer {
            background-color: var(--primary-color);
            color: var(--light-color);
            padding: 1rem 2rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
        }

        footer ul {
            list-style: none;
            display: flex;
            gap: 1rem;
            margin: 0;
            padding: 0;
        }

        footer ul li a {
            color: var(--light-color);
            font-size: 1.5rem;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        footer ul li a:hover {
            color: var(--accent-color);
        }

        @media (max-width: 768px) {
            main {
                flex-direction: column;
            }

            section {
                width: 100%;
            }
        }
    </style>
</head>

<body>
    <header>
        <h1>Cine Medac</h1>
        <p>Reserva tus asientos en nuestras salas</p>
    </header>

    <main>
        <section id="salas" class="p-3 ">
            <h5>Salas Disponibles</h5>
            <button class="btn btn-primary w-100 mb-3 ">Crear Sala</button>
            <div class="d-grid gap-2 fw-bold overflow-auto" >
                <button class="btn btn-outline-primary">Sala 1</button>
                <button class="btn btn-outline-primary">Sala 2</button>
                <button class="btn btn-outline-primary">Sala 3</button>
                <button class="btn btn-outline-primary">Sala 4</button>
                <button class="btn btn-outline-primary">Sala 5</button>
                <button class="btn btn-outline-primary">Sala 6</button>
                <button class="btn btn-outline-primary">Sala 7</button>
                <button class="btn btn-outline-primary">Sala 8</button>
                <button class="btn btn-outline-primary">Sala 9</button>
            </div>
        </section>
        

        <section id="asientos">
            <h2>Spiderman 3</h2>
            <p>Selecciona tus asientos:</p>
            <div class="d-flex flex-wrap gap-3 justify-content-center">
                <button class="btn" aria-label="Asiento ocupado">
                    <img src="https://via.placeholder.com/50x50/e74c3c/ffffff?text=O" alt="Asiento ocupado">
                </button>
                <button class="btn" aria-label="Asiento libre">
                    <img src="https://via.placeholder.com/50x50/2ecc71/ffffff?text=D" alt="Asiento libre">
                </button>
                <button class="btn" aria-label="Asiento libre">
                    <img src="https://via.placeholder.com/50x50/2ecc71/ffffff?text=D" alt="Asiento libre">
                </button>
                <button class="btn" aria-label="Asiento ocupado">
                    <img src="https://via.placeholder.com/50x50/e74c3c/ffffff?text=O" alt="Asiento ocupado">
                </button>
            </div>
        </section>

        <section id="info">
            <h2>Información de la Película</h2>
            <p>
                Spiderman 3 cuenta la historia de Peter Parker enfrentándose a sus mayores enemigos y luchando con su lado oscuro.
                Una aventura emocionante que no te puedes perder, llena de acción, drama y efectos especiales impresionantes.
            </p>
        </section>
    </main>

    <footer>
        <span>&copy; 2024 Cine Medac</span>
        <ul>
            <li>
                <a href="#" aria-label="Twitter">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 16 16">
                        <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"/>
                    </svg>
                </a>
            </li>
            <li>
                <a href="#" aria-label="Instagram">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 16 16">
                        <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
                    </svg>
                </a>
            </li>
            <li>
                <a href="#" aria-label="Facebook">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 16 16">
                        <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
                    </svg>
                </a>
            </li>
        </ul>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>