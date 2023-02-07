const btnRegistrarVeiculo = document.querySelector("#registrar-item");
const popUpRegistro = document.querySelector(".pop-up-registrar");
const containerRegistro = document.querySelector(".container-registro");
function mostrarPopUpRegistro(){
    popUpRegistro.style.display = 'block';
}
function registrarVeiculo(veiculo){
    if(veiculo=="moto"){
        // desenvolver lógica
    }
    else if(veiculo=="carro"){
        // desenvolver lógica
    }
}
btnRegistrarVeiculo.onclick = mostrarPopUpRegistro;