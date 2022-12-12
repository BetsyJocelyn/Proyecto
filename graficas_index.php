<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <title>PASTELERIA</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@latest/dist/Chart.min.js"></script>
  </head>
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

  <body>
    <header>
      <a href="index.html" id="imagen1">
        <img src="imagenes/logo.jpg.webp" style="width: 400px" />
      </a>
      <nav>
        <a href="ayuda.html" id="2">AYUDA</a>
        <a href="contactanos_index.html" id="3">CONTACTANOS</a>
        <a href="sus_index.html" id="4">SUSCRIBETE</a>
        <a href="graficas_index.php" id="5">GRÁFICAS</a>
        <a href="nosotros.html" id="6">NOSOTROS</a>
        <button
          type="button"
          onclick="login();"
          class="btn btn-success"
          style="font-size: 30px"
        >
          INGRESAR
        </button>
        <script>
          function login() {
            window.open("captcha.html");
          }
        </script>
      </nav>
    </header>
    
    <div class="container">
      <h1>Graficar Ventas</h1><br>
      <button id="btnGrafica1" type="button" class="btn_form">Ventas Mensuales</button>
      <button id="btnGrafica2" type="button" class="btn_form">Inventario</button><br>
    </div>

    <script>
      $(document).ready(function(){ 
        $("#btnGrafica1").click(function(){
          window.open('grafica1.php');
        });

        $("#btnGrafica2").click(function(){
          window.open('grafica2.php');
        });
      });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

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
  </body>
</html>