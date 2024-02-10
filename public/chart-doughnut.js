const pieConfig = {
    type: 'doughnut',
    data: {
        datasets: [
            {
                data: [33, 33, 33],
                /**
                 * These colors come from Tailwind CSS palette
                 * https://tailwindcss.com/docs/customizing-colors/#default-color-palette
                 */
                backgroundColor: ['#0694a2', '#1c64f2', '#7e3af2'],
                label: 'Dataset 1',
            }
        ],
        labels: ['Shoes', 'Shirts', 'Bags'],
    },
    options: {
        cutout: '80%',
        aspectRatio: 2,
        /**
         * Default legends are ugly and impossible to style.
         * See examples in charts.html to add your own legends
         *  */
        plugins: {
            legend: {
                display: false,
            }
        },
    },
}

const pieEl = document.getElementById('pie');
window.myPie = new Chart(pieEl, pieConfig);
