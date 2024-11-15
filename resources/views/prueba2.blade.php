<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>

        #salas {
            width: 20%;
            height: fit-content;
            min-height: 40px;
            border: 3px solid black;
            border-radius: 5px;
            float: left;
        }

        #pelis {
            width: 70%;
            height: 80vh;
            border: 3px solid black;
            border-radius: 5px;
            float: right;
            margin: 10px;

        }

    </style>
</head>
<body>


    <div id="salas"></div>

    <div id="pelis"></div>

    <button id="crear_sala">Crear sala  </button>

    <script> let csrf = '{{csrf_token()}}'</script>

    <script src="js/prueba2.js"></script>

</body>
</html>
