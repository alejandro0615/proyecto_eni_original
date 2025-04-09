<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Panel del Aprendiz</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background-color: #f4f6f8;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #2c3e50;
            color: white;
            padding: 1rem;
            text-align: center;
        }

        /* Menú toggle */
        #menu-toggle {
            display: none;
        }

        label.menu-icon {
            background-color: #34495e;
            color: white;
            display: block;
            padding: 1rem;
            cursor: pointer;
            font-size: 1.2rem;
            text-align: left;
        }

        nav {
            background-color: #34495e;
            display: none;
            flex-direction: column;
        }

        nav a {
            display: block;
            padding: 1rem;
            color: white;
            text-decoration: none;
            border-top: 1px solid #2c3e50;
        }

        nav a:hover {
            background-color: #2c3e50;
        }

        #menu-toggle:checked+label+nav {
            display: flex;
        }

        .container {
            padding: 2rem;
        }

        .card {
            background-color: white;
            border-radius: 8px;
            padding: 1rem;
            margin-bottom: 1rem;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .card h3 {
            margin-top: 0;
        }

        @media (min-width: 768px) {
            label.menu-icon {
                display: none;
            }

            nav {
                display: flex !important;
                flex-direction: row;
                justify-content: center;
            }

            nav a {
                border: none;
                padding: 1rem 2rem;
            }
        }
    </style>
</head>

<body>

    <header>
        <h1>ESCELA NACIONAL DE INSTRUCTORES</h1>
        <h1>SENA - Panel de Aprendiz</h1>
    </header>

    <!-- Toggle del menú -->
    <input type="checkbox" id="menu-toggle">
    <label for="menu-toggle" class="menu-icon">☰ Menú Principal</label>

    <!-- Menú -->
    <nav>
        <a href="#">INICIO</a>
        <a href="#">CURSOS</a>
        <a href="#">BANDEJA DE ENTRADA</a>
        <a href="#">CONFIGURACION</a>
    </nav>

    <!-- Contenido -->
    <div class="container">
        <div class="card">
            <h3>Bienvenido</h3>
            <p>Desde aquí puedes gestionar el sistema, visualizar estadísticas y realizar configuraciones.</p>
        </div>

        <div class="card">
            <h3>Resumen del Sistema</h3>
        </div>
    </div>

    <footer>
        &copy; 2025 Todos los derechos reservados.
    </footer>
</body>

</html>