// Set new default font family and font color to mimic Bootstrap's default styling
Chart.defaults.font.family = '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
Chart.defaults.color = '#292b2c';

// Pie Chart Example
function initPieChart(categories, values) {
    var ctx = document.getElementById("myPieChart");
    if (ctx) {
        new Chart(ctx, {
            type: 'pie',
            data: {
                // labels: categories,
                labels: ['IF', 'SE', 'IT', 'DS'],
                datasets: [{
                    data: values,
                    backgroundColor: ['#134363', '#3a1e4f', '#28411c', '#99aeca'],
                }],
            },
        });
    }
}
