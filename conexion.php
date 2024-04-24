<!DOCTYPE html>
<html>
<head>
    <title>Inmertion On The Content</title>
    
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
            <h2>Mis Favoritos</h2>
            <!-- Aquí puedes agregar tus elementos favoritos -->
        </div>
        <div class="container">
        <h2>Tabla de Contenidos(Nombres, Apellidos, Apodos)</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>Nombres</th>
                    <th>Apellidos</th>
                    <th>Apodos</th>
                </tr>
            </thead>
            <tbody>
            <?php
                // Conexión a la base de datos
                $servername = "localhost";
                $username = "id22073612_balserica";
                $password = "@NadaRod2024";
                $database = "id22073612_inmertion";

                $conn = new mysqli($servername, $username, $password, $database);

                // Verificar la conexión
                if ($conn->connect_error) {
                    die("Conexión fallida: " . $conn->connect_error);
                }

            // Consulta para obtener los registros de la tabla
                $sql = "SELECT * FROM `datos`";
                $result = $conn->query($sql);

                // Si hay registros, mostrarlos en la tabla
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $row["nombre"] . "</td>";
                        echo "<td>" . $row["apellidos"] . "</td>";
                        echo "<td>" . $row["apodo"] . "</td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='5'>No se encontraron registros</td></tr>";
                }

                // Cerrar conexión a la base de datos
                $conn->close();
                ?>
            </tbody>
</body>
  <!-- Agrega los enlaces a Bootstrap JS (opcional, si necesitas funcionalidades adicionales de Bootstrap) -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>