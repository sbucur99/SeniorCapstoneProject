let ctx = document.getElementById("results-pie-chart").getContext("2d");
let labels = [];
let scores = [];
let colors = [];
var pythonResult = "";

function drawChart() {
  let pieChart = new Chart(ctx, {
    type: "pie",
    data: {
      datasets: [
        {
          data: scores,
          backgroundColor: colors,
        },
      ],
      labels: labels,
    },
    options: {
      responsive: true,
      legend: {
        position: "right",
      },
      plugins: {
        datalabels: {
          color: "#fff",
          anchor: "end",
          align: "start",
          offset: -10,
          borderWidth: 1,
          borderColor: "#fff",
          borderRadius: 25,
          backgroundColor: (context) => {
            return context.dataset.backgroundColor;
          },
          font: {
            weight: "bold",
            size: "10",
          },
          formatter: (value) => {
            return value + " %";
          },
        },
      },
    },
  });
}

function getResults() {
  return new Promise((resolve) => {
    fetch("../php/get_results.php")
      .then((response) => response.json())
      .then((resultData) => {
        for (const result of resultData) {
          if (result.score > 0) {
            labels.push(result.feature_name);
            scores.push(result.score);
          }
        }

        //create chart
        setColors();
        drawChart();
      })
      .catch((error) => {
        console.error("Error:", error);
      });
  });
}

function setColors() {
  for (let i = 0; i < labels.length; i++) {
    var color = "#" + Math.floor(Math.random() * 16777215).toString(16);
    colors.push(color);
  }
}

getResults();
