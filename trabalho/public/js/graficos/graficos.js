const grafico = document.getElementById('grafico');
console.log("Funciona");
new Chart(grafico, {
    type: 'bar',
    data: {
        labels: ["Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho",
        "Julho", "Agusto", "Setembro", "Outubro", "Novembro", "Dezembro"],
        datasets: [{
            label: 'Receita',
            data: [500, 450, 300],
            borderWidth: 5,
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(255, 159, 64, 0.2)',
                'rgba(255, 205, 86, 0.2)',
            ]
        }]
    },
    options: {
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