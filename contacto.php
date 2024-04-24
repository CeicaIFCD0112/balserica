<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img src="media/img/ceica.png" alt="Logo" height="30">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="index2.php">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="servicios.php">Servicios</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="proyectos.php">Proyectos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contacto.php">Contacto</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Contenido restante de tu página -->
<hr>
<div class="container">
    <table class="table">
        <th>
            <td><a href="https://maps.app.goo.gl/GUj2dfH7eAq1vLmj6"><img src="media/img/oficinas.jpg" alt=""></a></td>
            <td><a href="https://xploracion.com/"><img src="media/img/xploracion2021.jpg" alt=""></a></td>
        </th>
    </table>
</div>
<hr>
<div class="container">
    <h2 class="mt-5">Formulario de Contacto</h2>
    <form action="procesar_formulario.php" method="POST">
        <div class="form-group">
            <label for="nombre">Nombre:</label>
            <input type="text" class="form-control" id="nombre" name="nombre" required>
        </div>
        <div class="form-group">
            <label for="email">Correo Electrónico:</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="form-group">
            <label for="mensaje">Mensaje:</label>
            <textarea class="form-control" id="mensaje" name="mensaje" rows="5" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Enviar Mensaje</button>
    </form>
</div>
<hr>
<div class="container">
    <table class="table">
        <th>
            <td><a href="http://www.facebook.com/"><img src="media/img/i-facebook.jpg" alt=""></a></td>
            <td><a href="http://instagram.com/"><img src="media/img/i-instagram.jpg" alt=""></a></td>
            <td><a href="https://web.whatsapp.com/"><img src="media/img/i-whatsapp.jpg" alt=""></a></td>
            <td><img src="ruta_a_la_imagen_4.jpg" alt="" href=""></td>
        </th>
    </table>
</div>
<!-- Agrega los enlaces a Bootstrap JS (opcional, si necesitas funcionalidades adicionales de Bootstrap) -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>