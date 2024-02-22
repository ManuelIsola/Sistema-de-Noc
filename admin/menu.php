<!DOCTYPE html data-bs-theme="auto">
<html lang="pt-pt">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Sistema de Noc Criado pela empresa ABCDEVS">
    <meta name="author" content="ABCDEVS">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NOC MOSTEC | LOGIN</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../icons/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../css/preloader.css">
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>

<div id="preloader">
    <div class="loader"></div>
</div>

<nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top" style=" background-image: linear-gradient(to right, #ff7e5f, #feb47b);">
  <div class="container">
    <a class="navbar-brand link-light" href="#">NOC MOSTEC</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      <li class="nav-item">
          <a class="nav-link link-light" href="#">Inicio</a>
      </li>
      <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle link-light" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Técnicos
          </a>
          <ul class="dropdown-menu" style=" background-image: linear-gradient(to right, #ff7e5f, #feb47b); border: none;">
            <li><a class="dropdown-item link-light" href="#">Cadastrar</a></li>
            <li><a class="dropdown-item link-light" href="#">Listar Téecnicos</a></li>
          </ul>
      </li>
      <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle link-light" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Clientes
          </a>
          <ul class="dropdown-menu" style=" background-image: linear-gradient(to right, #ff7e5f, #feb47b); border: none;">
            <li><a class="dropdown-item link-light" href="#">Cadastrar Sites</a></li>
            <li><a class="dropdown-item link-light" href="#">Listar Clientes</a></li>
          </ul>
      </li>
      <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle link-light" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Sites
          </a>
          <ul class="dropdown-menu" style=" background-image: linear-gradient(to right, #ff7e5f, #feb47b); border: none;">
            <li><a class="dropdown-item link-light" href="#">Cadastrar Sites</a></li>
            <li><a class="dropdown-item link-light" href="#">Listar Sites</a></li>
          </ul>
      </li>
      <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle link-light" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Alarmes
          </a>
          <ul class="dropdown-menu" style=" background-image: linear-gradient(to right, #ff7e5f, #feb47b); border: none;">
            <li><a class="dropdown-item link-light" href="#">Cadastrar Alarme</a></li>
            <li><a class="dropdown-item link-light" href="#">Listar Alarme</a></li>
          </ul>
      </li>
      <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle link-light" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Relatórios
          </a>
          <ul class="dropdown-menu" style=" background-image: linear-gradient(to right, #ff7e5f, #feb47b); border: none;">
            <li><a class="dropdown-item link-light" href="#">Cadastrar</a></li>
            <li><a class="dropdown-item link-light" href="#">Listar Téecnicos</a></li>
          </ul>
      </li>
        <li class="nav-item">
          <a class="nav-link link-light" href="#">Sobre</a>
        </li>
      </ul>
      <div class="d-flex">
        <ul class="nav">
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle link-light" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="bi bi-person-badge-fill"></i>  Monteiro Lando
            </a>
            <ul class="dropdown-menu" style=" background-image: linear-gradient(to right, #ff7e5f, #feb47b); border: none;">
                <li><a class="dropdown-item link-light" href="#">Ver perfil</a></li>
                <li><a class="dropdown-item link-light" href="#">Terminar Sessão</a></li>
            </ul>
            </li>
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle current-theme" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">
                <span class="theme-icon"></span>
            </a>
            <ul class="dropdown-menu themes-list" style=" background-image: linear-gradient(to right, #ff7e5f, #feb47b); border: none;">
                <li>
                    <a class="dropdown-item" href="#" data-theme="light">
                    <span class="theme-icon"></span> <i class="bi bi-brightness-high"></i> Claro
                    </a>
                </li>
                <li>
                    <a class="dropdown-item" href="#" data-theme="dark">
                        <i class="bi bi-moon-stars-fill"></i> Escuro
                    </a>
                </li>
                <li>
                    <a class="dropdown-item" href="#" data-theme="auto">
                        <i class="bi bi-circle-half"></i> Auto
                    </a>
                </li>
            </ul>
            </li>
        </ul>
      </div>
    </div>
  </div>
</nav>

<script src="../js/jquery.min.js"></script>
<script src="../js/bootstrap.bundle.min.js"></script>
<script src="../js/manterMeConectado.js"></script>
<script src="../js/preload.js"></script>
<script src="../js/abcScripts.js"></script>
<script src="../js/theme.js"></script>
