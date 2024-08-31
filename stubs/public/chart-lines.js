const lineConfig = {
    type: 'line',
    data: {
        labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
        datasets: [
            {
                label: 'Organic',
                /**
                 * These colors come from Tailwind CSS palette
                 * https://tailwindcss.com/docs/customizing-colors/#default-color-palette
                 */
                backgroundColor: '#0694a2',
                borderColor: '#0694a2',
                data: [43, 48, 40, 54, 67, 73, 70],
                fill: false,
                tension: 0.5,
            },
            {
                label: 'Paid',
                /**
                 * These colors come from Tailwind CSS palette
                 * https://tailwindcss.com/docs/customizing-colors/#default-color-palette
                 */
                backgroundColor: '#7e3af2',
                borderColor: '#7e3af2',
                data: [24, 50, 64, 74, 52, 51, 65],
                fill: false,
                tension: 0.5,
            },
        ],
    },
    options: {
        /**
         * Default legends are ugly and impossible to style.
         * See examples in charts.html to add your own legends
         *  */
        plugins: {
            legend: {
                display: false,
            },
            tooltip: {
                mode: 'index',
                intersect: false,
            },
        },
        scales: {
            x: {
                display: true,
                scaleLabel: {
                    display: true,
                    labelString: 'Month',
                }
            },
            y: {
                display: true,
                scaleLabel: {
                    display: true,
                    labelString: 'Value',
                }
            }
        }
    }
}

// Change this to the id of your chart element in HTML
const lineEl = document.getElementById('line');
window.myLine = new Chart(lineEl, lineConfig);
