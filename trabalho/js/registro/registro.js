const btnRegistrarVeiculo = document.querySelector("#registrar-item");
const popUpRegistro = document.querySelector(".pop-up-registrar");
const containerRegistro = document.querySelector(".container-registro");
const btnRegistroPlacaVeiculo = document.querySelector("#btn-registro-placa-veiculo");
const inputRadioRegistro = document.getElementsByName("veiculo");
const selecaoMoto = document.getElementById("id-moto");
const selecaoCarro = document.getElementById("id-carro");
const btnFecharRegistro = document.querySelector(".btn-fechar");
function mostrarPopUpRegistro(){
    popUpRegistro.style.display = 'block';
}
function registrarVeiculo(veiculo){
    if(selecaoCarro.checked){
        containerRegistro.innerHTML +=
        `<div class="registro registro-carro">
        <div class="placa-tipo">
            <div class="placa-veiculo">ZYK4R53</div>
            <img src="img/carro.svg" alt="" class="imagem-veiculo">
        </div>
        <div class="horario horario-registro-2">00:12:53</div>
        <button class="btn-fechar">X</button>
        </div>`
    }
    else if(selecaoMoto.checked){
        containerRegistro.innerHTML +=
        `<div class="registro registro-moto">
        <div class="placa-tipo">
            <div class="placa-veiculo">ZYK4R53</div>
            <img src="img/moto.svg" alt="" class="imagem-veiculo">
        </div>
        <div class="horario horario-registro-2">05:03:08</div>
        <button class="btn-fechar">X</button>
        </div>`
    }
}

btnRegistroPlacaVeiculo.addEventListener("click", function(inputRadioRegistro){
    registrarVeiculo(inputRadioRegistro);
    popUpRegistro.style.display = 'none';
});
// executar a função acima com o click do botao registrar
btnRegistrarVeiculo.onclick = mostrarPopUpRegistro;