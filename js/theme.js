/*
Copyright (c) 2024-ABCDEVS
CREATED BY MANUEL ISOLA
GITHub: https://github.com/ManuelIsola
VERSÃO: 1.0.0
*/
$(document).ready(function() {

    // Função para remover a classe 'active' de todos os itens de tema
    function removerActiveClassTheme() {
        $('.themes-list li a').removeClass('active');
    }

    // Função para alterar o atributo data-bs-theme do elemento html
    function changeHtmlTheme(theme) {
        // Seleciona o elemento html
        var htmlElement = $("html");
        // Altera o valor do atributo data-bs-theme do elemento html
        htmlElement.attr("data-bs-theme", theme);
    }

    // Adiciona um evento de clique aos itens do menu dropdown do tema
    $('.themes-list li a').on('click', function(event) {
        event.preventDefault(); // Impede o comportamento padrão do link
        // Obtém o tema selecionado
        var theme = $(this).data('theme');
        // Salva o tema selecionado no localStorage
        localStorage.setItem('theme', theme);
        // Remove a classe 'active' de todos os itens de tema
        removerActiveClassTheme();
        // Adiciona a classe 'active' ao item clicado
        $(this).addClass('active');
        // Define o texto do tema selecionado no link de tema principal
        var themeText = $(this).text();
        var themeIcon = $(this).find('i').prop('outerHTML'); // Obtém o HTML do ícone
        // Limpa o conteúdo anterior dentro da span.theme-icon
        $('.current-theme .theme-icon').empty();
        // Insere o HTML do ícone na span.theme-icon
        $('.current-theme .theme-icon').html(themeIcon);
        // Limpa o conteúdo anterior dentro do link de tema principal
        $('.current-theme').empty();
        // Adiciona o texto do tema ao link de tema principal
        $('.current-theme').append('<span class="theme-icon">' + themeIcon + '</span>' + themeText);
        // Chama a função para alterar o atributo data-bs-theme do elemento html
        changeHtmlTheme(theme);
    });

    // Função para carregar o tema salvo no localStorage
    function loadTheme() {
        // Obtém o tema salvo no localStorage ou usa o padrão 'light'
        var savedTheme = localStorage.getItem("theme") || "light";
        // Seleciona o item de tema correspondente ao tema salvo
        var $selectedTheme = $('.themes-list li a[data-theme="' + savedTheme + '"]');
        // Remove a classe 'active' de todos os itens de tema
        removerActiveClassTheme();
        // Adiciona a classe 'active' ao item de tema salvo
        $selectedTheme.addClass('active');
        // Define o texto do tema selecionado no link de tema principal
        var themeText = $selectedTheme.text();
        var themeIcon = $selectedTheme.find('i').prop('outerHTML'); // Obtém o HTML do ícone
        // Limpa o conteúdo anterior dentro da span.theme-icon
        $('.current-theme .theme-icon').empty();
        // Insere o HTML do ícone na span.theme-icon
        $('.current-theme .theme-icon').html(themeIcon);
        // Limpa o conteúdo anterior dentro do link de tema principal
        $('.current-theme').empty();
        // Adiciona o texto do tema ao link de tema principal
        $('.current-theme').append('<span class="theme-icon">' + themeIcon + '</span>' + themeText);
        // Chama a função para alterar o tema do elemento html
        changeHtmlTheme(savedTheme);
    }

    // Chama a função para carregar o tema salvo quando a página for carregada
    loadTheme();
});
