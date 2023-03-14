const btnIniciarSessao = document.querySelector(".btn-iniciar");
const btnCriarConta = document.querySelector(".btn-criar-conta");

btnIniciarSessao.addEventListener("click", function(){
    window.open("iniciarSessao.php", "_self");
});
btnCriarConta.addEventListener("click", function(){
    window.open("criarConta.php", "_self");
});