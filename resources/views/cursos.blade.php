<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cursos - Página Educativa</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #fafafa;
        }

        header {
            background-color: #007acc;
            color: white;
            padding: 1em;
            text-align: center;
        }

        nav {
            background-color: #f2f2f2;
            padding: 0.5em;
            text-align: center;
        }

        nav a {
            margin: 0 1em;
            text-decoration: none;
            color: #007acc;
        }

        main {
            padding: 2em;
        }

        .curso {
            background-color: white;
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 1em;
            margin-bottom: 1em;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .curso h3 {
            margin-top: 0;
        }

        footer {
            background-color: #eee;
            text-align: center;
            padding: 1em;
            margin-top: 2em;
        }

        .filtro-container {
            margin-bottom: 2em;
        }

        .select-wrapper {
            display: flex;
            gap: 1em;
            align-items: center;
            margin-top: 0.5em;
        }

        select {
            padding: 0.5em;
            border: 1px solid #007acc;
            border-radius: 5px;
            font-size: 1em;
            background-color: white;
            color: #333;
            width: 200px;
        }



        button {
            padding: 0.5em 1em;
            background-color: #007acc;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 1em;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #005f99;
        }
    </style>
</head>

<body>

    <header>
        <h1>Cursos Disponibles</h1>
    </header>

    <nav>
        <a href="prueba.html">Inicio</a>
        <a href="cursos.html">Cursos</a>
        <a href="informacion.html">Información</a>
        <a href="configuracion.html">Configuración</a>

    </nav>

    <main>
        <div class="filtro-container">
            <label for="buscar">Tipos De Cursos</label>
            <div class="select-wrapper">
                <select name="buscar" id="buscar">
                    <option value="" disabled selected>Selecciona un curso</option>
                    <option value="matemáticas">Matemáticas</option>
                    <option value="ciencias">Ciencias</option>
                    <option value="lengua">Lengua</option>
                    <option value="literatura">Literatura</option>
                </select>
                <button type="button" class="btn btn-primary flex ">Buscar</button>

            </div>
        </div>
        <br>


        <div class="curso">
            <h3>Matemáticas Básicas</h3>
            <p>Aprende los fundamentos de las matemáticas: suma, resta, multiplicación, división y más.</p>
        </div>

        <div class="curso">
            <h3>Introducción a la Ciencia</h3>
            <p>Explora los conceptos básicos de la física, química y biología con ejemplos prácticos.</p>
        </div>

        <div class="curso">
            <h3>Historia Universal</h3>
            <p>Un recorrido por los eventos más importantes que marcaron la historia de la humanidad.</p>
        </div>

        <div class="curso">
            <h3>Lengua y Literatura</h3>
            <p>Mejora tu comprensión lectora, ortografía y expresión escrita.</p>
        </div>


    </main>

    <footer>
        <p>&copy; 2025 Página Educativa. Todos los derechos reservados.</p>
    </footer>

</body>

</html>