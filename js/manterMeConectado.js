/*
Copyright (c) 2024-ABCDEVS
CREATED BY MANUEL ISOLA
GITHub: https://github.com/ManuelIsola
VERSÃO: 1.0.0
*/
// Script para configurar o checkbox "Manter-me Conectado"
document.addEventListener('DOMContentLoaded', function () {
    const checkbox = document.getElementById('flexCheckChecked');
    const loginForm = document.getElementById('loginForm');
    
    // Verifica se há um valor salvo para "Manter-me Conectado" no armazenamento local
    const isChecked = localStorage.getItem('keepMeLoggedIn') === 'true';
    
    // Define o estado do checkbox com base no valor salvo
    checkbox.checked = isChecked;
    
    // Adiciona um evento para salvar o estado do checkbox quando for alterado
    checkbox.addEventListener('change', function () {
        localStorage.setItem('keepMeLoggedIn', this.checked);
    });
    
    // Se o checkbox estiver marcado, envia automaticamente o formulário ao carregar a página
    if (isChecked) {
        loginForm.submit();
    }
});