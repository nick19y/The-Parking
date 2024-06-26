const btnRegistrarVeiculo = document.querySelector("#registrar-item");
const popUpRegistro = document.querySelector(".pop-up-registrar");
const btnRegistroPlacaVeiculo = document.querySelector("#btn-registro-placa-veiculo");
const inputRadioRegistro = document.getElementsByName("veiculo");
const btnConfiguracoes = document.querySelector("#configuracoes-item");
const btnFecharRegistro = document.querySelector(".btn-fechar-registro");



// pagamento

const btnFecharPagamento = document.querySelector(".img-fechar-pagamento");
const popUpPagamento = document.querySelector(".pop-up-flexbox1");
const btnRealizarPagamentoAll = document.querySelectorAll(".btn-fechar-pagamento-display");
const botaoHoraSaida = document.getElementById("btnHoraSaida");

// fazer função abaixo funcionar

async function pegarDadosEstacionamento(id){
    const requisicao = await fetch("http://localhost:8080/admin/registro/buscar/" + id);
    // console.log(requisicao);
    const json = await requisicao.json();
    let veiculo = json.veiculo;
    let placa = json.placa_veiculo;
    let preco = json.preco;
    let tempo = json.intervalo;
    // pegar esse id no php e fazer a execução do update pela função da Model
    botaoHoraSaida.setAttribute("href","/admin/registro/atribuirHorarioSaida/"+id);
    // let veiculo = json.veiculo;
    // console.log(json);
    let dados_veiculo = {veiculo, placa, preco, tempo, id};
    // console.log(dados_veiculo);
    return dados_veiculo;
}

// pegarDadosEstacionamento(4);

const valorVeiculo = document.querySelector(".p-total1");
const valorPlaca = document.querySelector(".p-total2");
const valorTotalAPagar = document.querySelector(".p-total3");
const tempoDecorrido = document.querySelector(".p-total4");
valorPlaca.style.textTransform = "uppercase";
valorVeiculo.style.textTransform = "uppercase";
valorTotalAPagar.style.textTransform = "uppercase";
tempoDecorrido.style.textTransform = "uppercase";
// element.style.color = 'red';
async function listarDadosPagamento(id){
    const dados_veiculo = await pegarDadosEstacionamento(id);
    if(dados_veiculo.veiculo == "carro"){
        valorVeiculo.innerText = "Veículo: " + dados_veiculo.veiculo;
        valorPlaca.innerText = "Placa: " + dados_veiculo.placa;
        tempoDecorrido.innerText = "Tempo: " + dados_veiculo.tempo;
        valorTotalAPagar.innerText = "Preço: " + dados_veiculo.preco;
    }
    else if(dados_veiculo.veiculo == "moto"){
        valorVeiculo.innerText = "Veículo: " + dados_veiculo.veiculo;
        valorPlaca.innerText = "Placa: " + dados_veiculo.placa;
        tempoDecorrido.innerText = "Tempo: " + dados_veiculo.tempo;
        valorTotalAPagar.innerText = "Preço: " + dados_veiculo.preco;
    }
}


btnRealizarPagamentoAll.forEach(btn => {
    btn.addEventListener('click', ()=>{
        popUpPagamento.style.display = 'block';
        const idRegistro = btn.getAttribute("registro");
        listarDadosPagamento(idRegistro);

    })
});

btnFecharPagamento.addEventListener('click', ()=>{
    popUpPagamento.style.display = 'none';
})




const btnFaturamento = document.querySelector(".btnFaturamento");
const btnHistorico = document.querySelector(".btnHistorico");
const btnGraficos = document.querySelector(".btnGraficos");


btnRegistroPlacaVeiculo.addEventListener("click", function(inputRadioRegistro){
    popUpRegistro.style.display = 'none';
});
function mostrarPopUpRegistro(){
    popUpRegistro.style.display = 'block';
}
// executar a função acima com o click do botao registrar
btnRegistrarVeiculo.onclick = mostrarPopUpRegistro;

btnFecharRegistro.addEventListener("click", function(){
    popUpRegistro.style.display = 'none';
});



btnFaturamento.addEventListener("click", function(){
    window.open("faturamento", "_self")
});
btnHistorico.addEventListener("click", function(){
    window.open("historico", "_self");
});
btnGraficos.addEventListener("click", function(){
    window.open("graficos", "_self");
});








function atualizarHorario() {
    const elementoData = document.querySelector(".dia-mes-ano-data");
    const horario = document.querySelector(".hora-cabecalho");
    const diaSemanaAtual = document.querySelector(".dia-semana-atual");

    const meses = ["Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho",
        "Julho", "Agusto", "Setembro", "Outubro", "Novembro", "Dezembro"
    ];
    const diasDaSemana = ["domingo", "segunda-feira", "terça-feira", "quarta-feira", "quinta-feira", "sexta-feira", "sábado"];
    
    const data = new Date();


    const hora = String(data.getHours());
    const minutos = String(data.getMinutes());
    const segundos = String(data.getSeconds());

    const dia = data.getDate();

    const mes = meses[data.getMonth()];

    const ano = data.getFullYear();

    const diaSemana = diasDaSemana[data.getDay()];

    const horarioCompleto = `${hora.padStart(2, '0')}:${minutos.padStart(2, '0')}:${segundos.padStart(2, '0')}`;
    const mesCompleto = `${dia} de ${mes} de ${ano}`;

    elementoData.innerText = mesCompleto;
    horario.innerText = horarioCompleto;
    diaSemanaAtual.innerText = diaSemana;


}

setInterval(atualizarHorario, 1000);

// colocar faturamento mesal