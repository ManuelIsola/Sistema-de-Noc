//Pergunta se desejas apagar
function exibirPergunta() {
    var resposta = confirm("Tens certeza que desejas apagar o registro do Paciente?");
}
// Função para alternar a visibilidade da senha
document.getElementById("togglePassword").addEventListener("click", function() {
    const passwordInput = document.querySelector('input[name="password"]');
    const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
    passwordInput.setAttribute('type', type);
    this.querySelector('i').classList.toggle('bi-eye');
    this.querySelector('i').classList.toggle('bi-eye-slash');
});
