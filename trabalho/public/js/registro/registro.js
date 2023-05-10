const btnRegistrarVeiculo = document.querySelector("#registrar-item");
const popUpRegistro = document.querySelector(".pop-up-registrar");
const btnRegistroPlacaVeiculo = document.querySelector("#btn-registro-placa-veiculo");
const inputRadioRegistro = document.getElementsByName("veiculo");
const btnConfiguracoes = document.querySelector("#configuracoes-item");
const btnFecharRegistro = document.querySelector(".btn-fechar-registro");


const btnFecharPagamento = document.querySelector(".img-fechar-pagamento");
const popUpPagamento = document.querySelector(".pop-up-flexbox1");
const btnRealizarPagamento = document.querySelector(".btn-fechar-pagamento-display");

btnRealizarPagamento.addEventListener('click', ()=>{
    popUpPagamento.style.display = 'block';
})

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

