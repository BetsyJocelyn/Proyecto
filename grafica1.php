<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Gráficas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@latest/dist/Chart.min.js"></script>
  </head>
  <body>
    <div class="container-fluid text-center">
      <h1>Ventas Mensuales</h1><br>
      <canvas width="800px" height="300em" id="graficaMes"></canvas>
    </div>

    <script>
      $.ajax({
        url: "./datos.php",
      }).done(function (respuesta) {
        const ventas = JSON.parse(respuesta);

        const $grafica = document.querySelector("#graficaMes");
        const etiquetas = [
          "Enero",
          "Febrero",
          "Marzo",
          "Abril",
          "Mayo",
          "Junio",
          "Julio",
          "Agosto",
          "Septiembre",
          "Octubre",
          "Noviembre",
          "Diciembre",
        ];
        const datos = {
          label: "Ventas por Mes",
          data: ventas,
          backgroundColor: "rgba(54,162,235,0.2)",
          borderColor: "rgba(54,162,235,1)",
          borderWidth: 1,
        };
        new Chart($grafica, {
          type: "line",
          data: {
            labels: etiquetas,
            datasets: [datos],
          },
          options: {
            scales: {
              yAxes: [
                {
                  ticks: {
                    beginAtZero: true,
                  },
                },
              ],
            },
          },
        });
      });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>