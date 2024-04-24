<!DOCTYPE html>
<html>
<head>
    <title>Registro de Usuarios</title>
    <!-- Estilos de Bootstrap -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" type="image/jpg" href="/assets/img/fav-ico.jpg"/>
    <style>
        /* Estilo adicional para los formularios */
        .form-container {
            margin-top: 20px;
            max-width: 400px;
        }
        .favorites {
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <img src="https://lucidea.com/wp-content/uploads/2023/03/Generative-AI-Relevance-to-Librarians.webp" width="400px" height="400px" align="center" class="img-fluid" alt="Imagen de cabecera">
        <div class="favorites">
            <h2>Registro de Usuarios</h2>
        </div>
        <div class="container">
            <form action="" method="post" class="form-container">
                <div class="form-group">
                    <label for="username">Nombre de usuario:</label>
                    <input type="text" class="form-control" name="username" id="username" required>
                </div>
                <div class="form-group">
                    <label for="email">Correo electrónico:</label>
                    <input type="email" class="form-control" name="email" id="email" required>
                </div>
                <div class="form-group">
                    <label for="password">Contraseña:</label>
                    <input type="password" class="form-control" name="password" id="password" required>
                </div>
                <button type="submit" class="btn btn-primary">Registrar</button>
            </form>
        </div>
    </div>

    <?php
    // Verificar si se ha enviado el formulario
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Obtener los datos del formulario
        $username = $_POST["username"];
        $email = $_POST["email"];
        $password = $_POST["password"];

        // Conexión a la base de datos
        $servername = "localhost";
        $db_username = "root";
        $db_password = "";
        $database = "id22073612_balserica";

        $conn = new mysqli($servername, $db_username, $db_password, $database);

        // Verificar la conexión
        if ($conn->connect_error) {
            die("Conexión fallida: " . $conn->connect_error);
        }

        // Preparar la consulta SQL para insertar un nuevo usuario
        $sql = "INSERT INTO user (username, email, password) VALUES ('$username', '$email', '$password')";

        // Ejecutar la consulta
        if ($conn->query($sql) === TRUE) {
            echo "<p class='text-success'>Usuario registrado correctamente.</p>";
        } else {
            echo "<p class='text-danger'>Error al registrar el usuario: " . $conn->error . "</p>";
        }

        // Cerrar conexión a la base de datos
        $conn->close();
    }
    ?>

    <!-- Agrega los enlaces a Bootstrap JS (opcional, si necesitas funcionalidades adicionales de Bootstrap) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
