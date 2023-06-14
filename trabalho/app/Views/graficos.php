<!doctype html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Gráficos</title>
  <link rel="stylesheet" href="/css/graficos/graf.css">
  <link rel="stylesheet" href="/css/styles.css">
  <script src="/js/graficos/graficos.js" defer></script>
  <script src="/js/botao-voltar/botao-voltar.js" defer></script>
</head>
<body>
  <div class="chartMenu">
    <a href="/admin/registro"></a>
    <button class="btn-voltar-sessao"><img src="/img/up.svg" alt=""></button>
  </div>
  <?= form_open(base_url("admin/graficos"))?>  
  <div class="tipo">Tipo do Gráfico</div>
  <select name="tipo" id="tipo">
    <option value="mes_total">
      Total em R$ mensalmente
    </option>
    <option value="mes_qtd">
      Quantidade de vendas mensalmente
    </option>
  </select>
  <div>
    <label for="ano">Ano</label>
    <input type="number" name="ano" min="2022" max="2030" value="2023">
  </div>
  <button class="gerar">Gerar</button>
  <?= form_close() ?>
  <div class="chartCard">
    <div class="chartBox">
      <h2 id="titulo-grafico">
        Faturamento Mensal
      </h2>
      <canvas id="myChart"></canvas>
    </div>
  </div>
  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/chart.js/dist/chart.umd.min.js"></script>
  <script>
    const informacoes = <?= json_encode($valor_mensal)?>;
    const quantidade = [0,0,0,0,0,0,0,0,0,0,0,0];
    informacoes.forEach(mes => {
      if(mes.quantidade_estacionamento){
        quantidade[Number(mes.mes-1)] = Number(mes.quantidade_estacionamento)
      } else if(mes.faturamento_mensal){
        quantidade[Number(mes.mes-1)] = Number(mes.faturamento_mensal)
      }
    });
    console.log(informacoes, quantidade);
    const meses = ["Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho", "Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro"];
    const data = {
      labels: meses,
      datasets: [{
        label: 'Faturamento mensal',
        data: quantidade,
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
  </script>
</body>
</html>