const grafico = document.getElementById('grafico');
console.log("Funciona");
new Chart(grafico, {
    type: 'bar',
    responsive: true,
    data: {
        labels: ["Domingo", "Segunda", "Terça", "Quarta", "Quinta", "Sexta", "Sábado"],
        datasets: [{
            label: 'Receita',
            data: [500, 450, 300, 600, 200, 900, 500],
            borderWidth: 5,
            backgroundColor: [
                '#F2C12E',
                '#F2C12E',
                '#F2C12E',
            ]
        }]
    },
    options: {
        maintainAspectRatio: false,
        scales: {
            y: {
                beginAtZero: true,
                ticks: { color: 'white', beginAtZero: true }
            },
            x: {
                ticks: { color: 'white', beginAtZero: true }
            }
        }
    }
});