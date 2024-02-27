<!DOCTYPE html data-bs-theme = "">
<html lang="pt-pt">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Sistema de Noc Criado pela empresa ABCDEVS">
    <meta name="author" content="ABCDEVS">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NOC MOSTEC | LOGIN</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="icons/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/preloader.css">
    <link rel="stylesheet" href="css/styleLogin.css">
</head>
<body>

<div id="preloader">
    <div class="loader"></div>
</div>

<div class="container">
    <div class="row">
        <div class="card mb-3 col-sm-12 col-md-6 col-xl-6 position-absolute start-50 top-50 translate-middle p-3 gradient-bg">
            <div class="row g-0">
                <div class="col-md-6">
                    <h3 class="text-center text-light" style="margin-top: 130px;">Seja bem-vindo ao Noc MOSTEC</h3>
                </div>
                <div class="col-md-6">
                    <div class="card-body">
                        <h5 class="card-title text-center text-light">FAÇA O LOGIN</h5>
                        <!--Formulário de login-->
                        <form action="#" method="POST" name="frmLogin" id="loginForm">
                            <div class="row">
                                <div class="col-md-12 text-light">
                                    <div class="input-group flex-nowrap">
                                        <span class="input-group-text" id="addon-wrapping">@</span>
                                        <input type="text" class="form-control" placeholder="exemplo@abcdevs.com" name="email" aria-label="email" aria-describedby="addon-wrapping">
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-12 text-light position-relative">
                                    <div class="input-group flex-nowrap">
                                        <span class="input-group-text" id="addon-wrapping"><i class="bi bi-key-fill"></i></span>
                                        <input type="password" class="form-control rounded-end" placeholder="password" name="password" aria-label="password" aria-describedby="addon-wrapping">
                                        <button type="button" class="btn btn-outline-secondary" id="togglePassword">
                                            <i class="bi bi-eye"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="form-check mt-1 text-light">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                                <label class="form-check-label" for="flexCheckChecked">
                                    Manter-me Conectado.
                                </label>
                            </div>
                            <input type="submit" class="btn btn-md btn-primary mt-2 col-xl-12" name="btnEntrar" value="Entrar">
                            <p class="card-text text-light text-center text-primary"><small class="text-center text-light"><a href="#" class="text-decoration-none text-light link-primary">Esqueceste a sua senha?</a></small></p>
                            <div class="row">
                                <p class="card-text text-light text-center" style="margin-top: -15px"><small class="text-center text-light">Todos direitos reservados abcdevs&copy;<?php echo date("Y");?></small></p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="js/bootstrap.bundle.min.js.transferir"></script>
<script src="js/manterMeConectado.js"></script>
<script src="js/preload.js"></script>
<script src="js/abcScripts.js"></script>


</body>
</html>
