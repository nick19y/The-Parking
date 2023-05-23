const btn_voltar1 = document.querySelector(".btn-voltar-sessao");
btn_voltar1.addEventListener("click", function(){
    window.history.back();
});


// https://www.youtube.com/watch?v=0VcybDX-kk0&ab_channel=ChartJS
const data = {
    labels: ['Domingo', 'Segunda', 'Terça', 'Quarta', 'Quinta', 'Sexta', 'Sábado'],
    datasets: [{
      label: 'Faturamento semanal',
      data: [18, 12, 6, 9, 12, 3, 9],
      backgroundColor: [
        'rgba(255, 26, 104, 0.2)',
        'rgba(54, 162, 235, 0.2)',
        'rgba(255, 206, 86, 0.2)',
        'rgba(75, 192, 192, 0.2)',
        'rgba(153, 102, 255, 0.2)',
        'rgba(255, 159, 64, 0.2)',
        'rgba(0, 0, 0, 0.2)'
      ],
      borderColor: [
        'rgba(255, 26, 104, 1)',
        'rgba(54, 162, 235, 1)',
        'rgba(255, 206, 86, 1)',
        'rgba(75, 192, 192, 1)',
        'rgba(153, 102, 255, 1)',
        'rgba(255, 159, 64, 1)',
        'rgba(0, 0, 0, 1)'
      ],
      borderWidth: 1
    }]
  };

  // config 
  const config = {
    type: 'bar',
    data,
    options: {
    maintainAspectRatio: false,
      plugins: {
        legend: {
          labels: {
            generateLabels: (chart) =>{
              console.log(chart);
            }
          }
        }
      },
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
  };


  const myChart = new Chart(
    document.getElementById('myChart'),
    config
  );
