<link rel="stylesheet" type="text/css" href="./css/navbar.css">

<nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
    <div class="container-fluid" style="font-size: 22px">
        <a href="menu.php"><img src="./imagens/icon-principal.png" width="60" class="navbar-brand"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="menu.php">Home</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Cadastros
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="cadastroPacientes.php">Cadastro de Pacientes</a></li>
                        <li><a class="dropdown-item" href="cadastroMedicos.php">Cadastro de Médicos</a></li>
                        <li><a class="dropdown-item" href="cadastroFuncionarios.php">Cadastro de Funcionários</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </li>
            </ul>
            <span class="underline">USUÁRIO: felipe</span>
            <form class="ps-4 d-flex">
                <button class="btn-outline logout" type="submit">Logout<i class="fas fa-sign-out-alt" style="margin-left: 0.5vw"></i></button>
            </form>
        </div>
    </div>
</nav>