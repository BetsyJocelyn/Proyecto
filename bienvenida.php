
  <link rel="stylesheet" href="estilos.css" />
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
    integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
    crossorigin="anonymous"
    referrerpolicy="no-referrer"
  />
  <link rel="shortcut icon" href="imagenes/logo.jpg.webp" />
  <link
    href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@1,300&display=swap"
    rel="stylesheet"
  />

    <header>
      <a href="bienvenida.php" id="imagen1">
        <img src="imagenes/logo.jpg.webp" style="width: 400px" />
        <?php
        session_start();
        if(empty($_SESSION["username"])){
            header("Location: index_login.php");
            exit();
        }
        echo "Bienvenido".$_SESSION['username'];
        ?>
      </a>
      <nav>
        <a href="cupon/terminado/index.php" id="1">MENU</a>
        <a href="index.html" id="7">SALIR</a>
        <script>
          function login() {
            window.open("captcha.html");
          }
        </script>
      </nav>
    </header>
    <div class="social-bar">
    <a href="https://www.facebook.com/profile.php?id=100088749604950&mibextid=LQQJ4d" class="icon icon-facebook" target="_blank"></a>
    <a href="https://twitter.com/altapintap?s=21&t=A7OWnzl_3ik2Qt9rPgIA7A" class="icon icon-twitter" target="_blank"></a>
    <a href="https://www.youtube.com/@Altapinta_pasteleria" class="icon icon-youtube" target="_blank"></a>
    <a href="https://instagram.com/pasteleria_altapinta_uaa?igshid=Nzg3NjI1NGI=" class="icon icon-instagram" target="_blank"></a>
  </div>
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <footer>
      <a href="index.html" id="imagen1">
        <img src="imagenes/logo.jpg.webp" style="width: 200px" />
      </a>
      <p id="F">
        ©Betsy Jocelyn Ortega Lopez Mitzy Yulheny Tierrablanca Ana Laura Jimenez
        Diaz Saul Tomas Vega Osmar Alvarez Barronco Diego Marquez Gomez 2022 –
        2022– Todos los derechos reservados <br />
        Pagina recreada con fines educativos (PROYECTO FINAL) <br />
        Universidad Autonoma de Aguascalientes
      </p>
    </footer>
  

