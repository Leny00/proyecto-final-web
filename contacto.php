<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Expires" content="0">
  <meta http-equiv="Last-Modified" content="0">
  <meta http-equiv="Cache-Control" content="no-cache, mustrevalidate">
  <meta http-equiv="Pragma" content="no-cache">
    <title>StoryScape</title>
    <link rel="stylesheet" href="assets/css/contacto.css">
    <link rel="stylesheet" href="assets/css/layout.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    
</head>
<body>
    <header>
        <nav class="navbar-n">
            <img src="assets/img/logo.webp" alt="logo">
                <div class="menu" id="menu">
                    <i class="fa-solid fa-bars fa-2xl" style="color: #ffffff;"></i>
                </div>
                <ul class="navbar-list" id="navbar-list">
                <li class="navbar-items"><a href="index.php" class="navbar-links">Inicio</a></li>
                <li class="navbar-items"><a href="libros.php" class="navbar-links">Libros</a></li>
                <li class="navbar-items"><a href="autor.php" class="navbar-links">Autores</a></li>
                <li class="navbar-items"><a href="contacto.php" class="navbar-links">Contacto</a></li>
                </ul>
        </nav>
    </header>
<main class="form-container">
        <div class="formulario">
            <h2>CONTACTO</h2>
            <form action="assets/elements/infocontacto.php" method="post" id="form_insert">
                    <label for="nombre">Nombre</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingrese su nombre" required>
                    <label for="correo">Correo</label>
                    <input type="email" class="form-control" id="correo" name="correo" placeholder="Ingrese su correo" required>
                    <label for="fecha">Fecha</label>
                    <input type="date" class="form-control" id="fecha" name="fecha" placeholder="" required>
                    <label for="asunto">Asunto</label>
                    <input type="text" class="form-control" id="asunto" name="asunto" placeholder="Escriba un asunto" required>
                    <label for="comentario">Comentario</label>
                    <textarea class="form-control" name="comentario" placeholder="Hola 👋!" id="comentario" cols="30" rows="10" required></textarea>
                    <div class="form-btn-container">
                        <button type="submit" class="form-btn"><span>Enviar</span></button>
                    </div>
            </form>
        </div>
</main>


<footer>
<img class="footer-logo" src="assets/img/logo.webp" alt="">
    <ul class="footer-list">
        <li class="footer-items"><a href="" class="footer-links">Inicio</a></li>
        <li class="footer-items"><a href="" class="footer-links">Autores</a></li>
        <li class="footer-items"><a href="" class="footer-links">Contacto</a></li>
    </ul>
<h4 class="footer-copy">Leny Alejandro Garcia Mercedes</h4>
</footer>
<script src="assets/js/script.js"></script>
<script src="https://kit.fontawesome.com/e8a9d64781.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
<script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>

</body>
</html>