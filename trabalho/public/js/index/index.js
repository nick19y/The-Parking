const btnIniciarSessao = document.querySelector(".btn-iniciar");
const btnCriarConta = document.querySelector(".btn-criar-conta");

btnIniciarSessao.addEventListener("click", function(){
    window.open("iniciarSessao", "_self");
});
btnCriarConta.addEventListener("click", function(){
    window.open("criarConta", "_self");
});