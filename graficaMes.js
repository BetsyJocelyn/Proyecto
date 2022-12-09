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
    type: "bar",
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
