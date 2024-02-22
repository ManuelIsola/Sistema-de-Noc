    // Esconder o preloader quando a página estiver completamente carregada
    window.addEventListener('load', function () {
        const preloader = document.getElementById('preloader');
        preloader.style.opacity = '0';
        setTimeout(function () {
            preloader.style.display = 'none';
        }, 300);
    });
