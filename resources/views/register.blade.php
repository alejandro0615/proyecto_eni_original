<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Registro</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            padding: 0;
            background: linear-gradient(135deg, #8e44ad, #3498db);
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: 'Segoe UI', sans-serif;
        }

        .register-container {
            background-color: white;
            padding: 2rem 3rem;
            border-radius: 12px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
            width: 100%;
            max-width: 400px;
            text-align: center;
        }

        .register-container h2 {
            margin-bottom: 1.5rem;
            color: #2c3e50;
        }

        input[type="text"],
        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 0.75rem;
            margin: 0.5rem 0 1rem 0;
            border: 1px solid #ccc;
            border-radius: 6px;
            font-size: 1rem;
        }

        button {
            width: 100%;
            padding: 0.75rem;
            background-color: #8e44ad;
            border: none;
            border-radius: 6px;
            color: white;
            font-size: 1rem;
            font-weight: bold;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #732d91;
        }

        ::placeholder {
            color: #999;
        }
    </style>
</head>

<body>

    <div class="register-container">
        <h2>Registrarse</h2>
        <form method="POST" action="#">
            @csrf
            <input type="text" name="usuario" placeholder="Usuario" required>
            <input type="email" name="correo" placeholder="Correo" required>
            <input type="password" name="clave" placeholder="Contraseña" required>
            <button type="submit">Registrar</button>
        </form>
    </div>

</body>

</html>
