<?php
    // Include Navbar (verifica se o usuário está logado)
    include('./import/navbar.php');
?>

<!doctype html>
<html lang="pt-br" class="h-100">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <!-- CSS e/ou ícone -->
    <link rel="stylesheet" type="text/css" href="./css/cadastroFuncionarios.css">
    <link rel="shortcut icon" href="./imagens/icon-principal.ico">

    <title>Cadastro de Funcionários</title>
</head>

<body class="d-flex flex-column h-100">
    <h1 class="text-center ps-3 pt-5 pb-5 display-6">Cadastro de Funcionários</h1>
    <div class="container">
        <div class="row">
            <div class="col">
                <button class="btn-novo" onclick="JavaScript:location.href='frmInsFuncionario.php'"><span class="pe-2">Novo</span><i class="fas fa-plus-circle"></i></button>
            </div>
            <div class="col">
                <form class="d-flex">
                    <input class="form-control me-2 fs-5" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn-pesquisa" type="submit"><i class="fas fa-search"></i></button>
                </form>
            </div>
        </div>
        <br>
        <table class="table table-striped table-hover align-middle fs-5">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nome</th>
                    <th scope="col">DRM</th>
                    <th scope="col">Cidade</th>
                    <th scope="col">Ações</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Felipe</td>
                    <td>123</td>
                    <td>Assis</td>
                    <td>
                        <span class="pe-1"><button class="botao-pequeno editar"><i class="fas fa-edit"></i></button></span>
                        <span class="pe-1"><button class="botao-pequeno deletar"><i class="fas fa-trash-alt"></i></button></span>
                        <button class="botao-pequeno visualizar"><i class="fas fa-eye"></i></i></button>
                    </td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>456</td>
                    <td>Assis</td>
                    <td>
                        <span class="pe-1"><button class="botao-pequeno editar"><i class="fas fa-edit"></i></button></span>
                        <span class="pe-1"><button class="botao-pequeno deletar"><i class="fas fa-trash-alt"></i></button></span>
                        <button class="botao-pequeno visualizar"><i class="fas fa-eye"></i></i></button>
                    </td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Renata</td>
                    <td>789</td>
                    <td>Assis</td>
                    <td>
                        <span class="pe-1"><button class="botao-pequeno editar"><i class="fas fa-edit"></i></button></span>
                        <span class="pe-1"><button class="botao-pequeno deletar"><i class="fas fa-trash-alt"></i></button></span>
                        <button class="botao-pequeno visualizar"><i class="fas fa-eye"></i></i></button>
                    </td>
                </tr>
                <tr>
                    <th scope="row">4</th>
                    <td>Rafaela</td>
                    <td>101112</td>
                    <td>Assis</td>
                    <td>
                        <span class="pe-1"><button class="botao-pequeno editar"><i class="fas fa-edit"></i></button></span>
                        <span class="pe-1"><button class="botao-pequeno deletar"><i class="fas fa-trash-alt"></i></button></span>
                        <button class="botao-pequeno visualizar"><i class="fas fa-eye"></i></i></button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <!-- Include Footer -->
    <?php include './import/footer.php'; ?>

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    
    <!-- Font Awesome JS -->
    <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" data-auto-a11y="true"></script>
</body>

</html>