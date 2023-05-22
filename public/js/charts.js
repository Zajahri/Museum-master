// chart.js
document.addEventListener("DOMContentLoaded", function () {
  var ctx1 = document.getElementById("chart-line").getContext("2d");

  var gradientStroke1 = ctx1.createLinearGradient(0, 230, 0, 50);
  gradientStroke1.addColorStop(1, 'rgba(94, 114, 228, 0.2)');
  gradientStroke1.addColorStop(0.2, 'rgba(94, 114, 228, 0.0)');
  gradientStroke1.addColorStop(0, 'rgba(94, 114, 228, 0)');

  var gradientStroke2 = ctx1.createLinearGradient(0, 230, 0, 50);
  gradientStroke2.addColorStop(1, 'rgba(255, 0, 0, 0.2)');
  gradientStroke2.addColorStop(0.2, 'rgba(255, 0, 0, 0.0)');
  gradientStroke2.addColorStop(0, 'rgba(255, 0, 0, 0)');

  new Chart(ctx1, {
    type: "line",
    data: {
      labels: ["Mon", "Tue", "Wed", "Thu", "Fri"],
      datasets: [
        {
          label: "Most Visited",
          tension: 0.4,
          borderWidth: 0,
          pointRadius: 0,
          borderColor: "#5e72e4",
          backgroundColor: gradientStroke1,
          borderWidth: 3,
          fill: true,
          data: [100, 300, 200, 300, 500],
          maxBarThickness: 6,
        },
        {
          label: "Least Visited",
          tension: 0.4,
          borderWidth: 0,
          pointRadius: 0,
          borderColor: "red",
          backgroundColor: gradientStroke2,
          borderWidth: 3,
          fill: true,
          data: [50, 400, 100, 80, 90],
          maxBarThickness: 6,
        },
      ],
    },
    options: {
      responsive: true,
      maintainAspectRatio: false,
      plugins: {
        legend: {
          display: true,
        },
      },
      interaction: {
        intersect: false,
        mode: "index",
      },
      scales: {
        y: {
          grid: {
            drawBorder: false,
            display: true,
            drawOnChartArea: true,
            drawTicks: false,
            borderDash: [5, 5],
          },
          ticks: {
            display: true,
            padding: 10,
            color: "#fbfbfb",
            font: {
              size: 11,
              family: "Open Sans",
              style: "normal",
              lineHeight: 2,
            },
          },
        },
      },
    },
  });
});
