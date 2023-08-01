<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Expires" content="0">
  <meta http-equiv="Last-Modified" content="0">
  <meta http-equiv="Cache-Control" content="no-cache, mustrevalidate">
  <meta http-equiv="Pragma" content="no-cache">
    <title>StoryScape</title>
    <link rel="stylesheet" href="assets/css/libros.css">
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
<section class="books-container">
    <div class="books">
        <div class="buscar">
            <input class="imput-buscar" type="text" name="buscar" id="buscar" placeholder="Buscar...">
            <button class="filtro-btn" onclick="filtrado()">
                <i class="fa-solid fa-list fa-xl" style="color: #a26a42;"></i>
                <span>Filtro</span>
            </button>
        </div>
        <div class="filtro" id="filtro">
            <div class="filtro-body">
                <div class="filtro-titulo">
                    <h4>Genero</h4>
                </div>
                <div class="filtro-opciones">
                    <div>
                        <input class="f-check" type="checkbox" name="business" id="f-check" onclick="clickcheck(this)" onclick="ob()">
                    <label for="fiction">Negocios</label>
                    </div>
                    <div>
                        <input class="f-check" type="checkbox" name="mod_cook" id="f-check" onclick="clickcheck(this)">
                    <label for="fiction">Cocina Moderna</label>
                    </div>
                    <div>
                        <input class="f-check" type="checkbox" name="popular_comp" id="f-check" onclick="clickcheck(this)">
                    <label for="fiction">Computacion opular</label>
                    </div>
                    <div>
                        <input class="f-check" type="checkbox" name="psychology" id="f-check" onclick="clickcheck(this)">
                    <label for="fiction">Psicologia</label>
                    </div>
                    <div>
                        <input class="f-check" type="checkbox" name="trad_cook" id="f-check" onclick="clickcheck(this)">
                    <label for="fiction">Cocina Tradicional</label>
                    </div>
                </div>
            </div>
            
        </div>
    <div class="elemento">
        <div class="card" style="width: 18rem;">
      <img src="assets/img/harry-potter.webp" class="card-img-top" alt="...">
      <div class="card-body">
        <p class="card-text">Harry Potter y la piedra filosofal</p>
        <i class="fa-regular fa-star fa-2xl" style="color: #ffffff;"></i>
      </div>
      <p class="card-text autor">J.K. Rowlin</p>
    </div></div>
    <div class="elemento">
        <div class="card" style="width: 18rem;">
      <img src="assets/img/harry-potter.webp" class="card-img-top" alt="...">
      <div class="card-body">
        <p class="card-text">Harry Potter y la piedra filosofal</p>
        <i class="fa-regular fa-star fa-2xl" style="color: #ffffff;"></i>
      </div>
      <p class="card-text autor">J.K. Rowlin</p>
    </div></div>
    <div class="elemento">
        <div class="card" style="width: 18rem;">
      <img src="assets/img/harry-potter.webp" class="card-img-top" alt="...">
      <div class="card-body">
        <p class="card-text">Harry Potter y la piedra filosofal</p>
        <i class="fa-regular fa-star fa-2xl" style="color: #ffffff;"></i>
      </div>
      <p class="card-text autor">J.K. Rowlin</p>
    </div></div>
    <div class="elemento">
        <div class="card" style="width: 18rem;">
      <img src="assets/img/harry-potter.webp" class="card-img-top" alt="...">
      <div class="card-body">
        <p class="card-text">Harry Potter y la piedra filosofal</p>
        <i class="fa-regular fa-star fa-2xl" style="color: #ffffff;"></i>
      </div>
      <p class="card-text autor">J.K. Rowlin</p>
    </div></div>
    <div class="elemento">
        <div class="card" style="width: 18rem;">
      <img src="assets/img/harry-potter.webp" class="card-img-top" alt="...">
      <div class="card-body">
        <p class="card-text">Harry Potter y la piedra filosofal</p>
        <i class="fa-regular fa-star fa-2xl" style="color: #ffffff;"></i>
      </div>
      <p class="card-text autor">J.K. Rowlin</p>
    </div></div>
    <div class="elemento">
        <div class="card" style="width: 18rem;">
      <img src="assets/img/harry-potter.webp" class="card-img-top" alt="...">
      <div class="card-body">
        <p class="card-text">Harry Potter y la piedra filosofal</p>
        <i class="fa-regular fa-star fa-2xl" style="color: #ffffff;"></i>
      </div>
      <p class="card-text autor">J.K. Rowlin</p>
    </div></div>
    <div class="elemento">
        <div class="card" style="width: 18rem;">
      <img src="assets/img/harry-potter.webp" class="card-img-top" alt="...">
      <div class="card-body">
        <p class="card-text">Harry Potter y la piedra filosofal</p>
        <i class="fa-regular fa-star fa-2xl" style="color: #ffffff;"></i>
      </div>
      <p class="card-text autor">J.K. Rowlin</p>
    </div></div>
    <div class="elemento">
        <div class="card" style="width: 18rem;">
      <img src="assets/img/harry-potter.webp" class="card-img-top" alt="...">
      <div class="card-body">
        <p class="card-text">Harry Potter y la piedra filosofal</p>
        <i class="fa-regular fa-star fa-2xl" style="color: #ffffff;"></i>
      </div>
      <p class="card-text autor">J.K. Rowlin</p>
    </div></div>
    </div>
</section>











<footer>
<img class="footer-logo" src="assets/img/logo.webp" alt="">
    <ul class="footer-list">
        <li class="footer-items"><a href="" class="footer-links">Inicio</a></li>
        <li class="footer-items"><a href="" class="footer-links">Autores</a></li>
        <li class="footer-items"><a href="" class="footer-links">Contacto</a></li>
    </ul>
<h4 class="footer-copy">Leny Alejandro Garcia Mercedes</h4>
</footer>
<script src="assets/js/libros.js"></script>
<script src="assets/js/script.js"></script>
<script src="https://kit.fontawesome.com/e8a9d64781.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
<script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>

</body>
</html>