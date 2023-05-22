document.addEventListener("DOMContentLoaded", function () {
  const dataPie = {
    labels: ["Excellent", "Satisfactory", "Very Poor", "Good", "Poor"],
    datasets: [
      {
        label: "Customer Ratings",
        data: [45, 15, 10, 15, 15],
        backgroundColor: [
          "rgb(41, 134, 204)",
          "rgb(252, 213, 96)",
          "rgb(183, 0, 0)",
          "rgb(74, 117, 55)",
          "rgb(255, 165, 0)",
        ],
        hoverOffset: 4,
      },
    ],
  };

  const configPie = {
    type: "pie",
    data: dataPie,
    options: {},
  };

  var chartPie = new Chart(document.getElementById("chartPie"), configPie);
});