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
      <h1>Disponibilidad de Items</h1>
      <br>
      <h6><a href="graficas_index.php">SALIR</a></h6>
      <canvas width="800px" height="300em" id="graficaStock"></canvas>
    </div>

    <script>
      $.ajax({
        url: "./datos2.php",
        dataType: 'json',
        contentType: "application/json; charset=utf-8",
        method: "GET",
      }).done(function(data){
          var nombre = [];
          var stock = [];

          console.log(data);

          for (var i in data){
            nombre.push(data[i].nombre);
            stock.push(data[i].existencia);
          }

          const $grafica = document.querySelector("#graficaStock");
          const datos = {
            label: "Inventario",
            data: stock,
            backgroundColor: "rgba(276,168,835,0.2)",
            borderColor: "rgba(276,168,835,1)",
            borderWidth: 1,
          };
          new Chart($grafica, {
            type: "bar",
            data: {
              labels: nombre,
              datasets: [datos],
            },
            options: {
              responsive: true,
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></scrip>
  </body>
</html>