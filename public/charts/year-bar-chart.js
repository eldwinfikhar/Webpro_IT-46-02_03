// Set new default font family and font color to mimic Bootstrap's default styling
Chart.defaults.font.family = '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
Chart.defaults.color = '#292b2c';

// Bar Chart Example
// Bar Chart (Jumlah Anggota per Angkatan)
function initYearBarChart(yearLabels, yearValues) {
  var ctx = document.getElementById("myBarChart");
  if (ctx) {
      new Chart(ctx, {
          type: 'bar',
          data: {
              labels: yearLabels,
              datasets: [{
                  label: "Member Count",
                  backgroundColor: "#0454d3",
                  data: yearValues,
              }],
          },
          options: {
              scales: {
                  x: {
                      grid: {
                          display: false
                      },
                      ticks: {
                          beginAtZero: true
                      }
                  },
                  y: {
                      ticks: {
                          beginAtZero: true
                      },
                      grid: {
                          display: true
                      }
                  },
              },
              plugins: {
                  legend: {
                      display: true
                  }
              }
          }
      });
  }
}
