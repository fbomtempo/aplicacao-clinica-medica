<?php
    // Verifica se o usuário está logado
    include 'verificaLogin.php';  

    include 'conexao.php';

    $pdo = Conexao::conectar();
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "SELECT * FROM medico";

    if (isset($_GET['busca'])) {
        $busca = $_GET['busca'];
    } else {
        $busca = '';
    }

    if ($busca != '') {
        $sql = "SELECT * FROM medico WHERE nome LIKE '%" . $busca .  "%' ORDER BY nome, sobrenome";
    } else {
        $sql = "SELECT * FROM medico";
    }

    $listaMedicos = $pdo->query($sql);

    Conexao::desconectar();
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
    <link rel="stylesheet" type="text/css" href="./css/cadastros.css">
    <link rel="shortcut icon" href="./imagens/icon-principal.ico">

    <title>Cadastro de Médicos</title>
</head>

<body class="d-flex flex-column h-100">
    <!-- Include Navbar -->
    <?php include './import/navbar.php'; ?>
    <div class="container">
        <div class="col-md-12">
            <div class="pt-5 col-md-3">
                <a class="fs-4 voltar" href="./menu.php"><i class="fas fa-arrow-left"></i><span class="ms-2">Voltar</span></a>
            </div>
            <h1 class="text-center ps-3 pb-5 display-6">Cadastro de Médicos</h1>
        </div>
        <div class="row">
            <div class="col">
                <button class="btn-novo" onclick="JavaScript:location.href='frmInsMedico.php'"><span class="pe-2">Novo</span><i class="fas fa-plus-circle"></i></button>
            </div>
            <div class="col-xxl-6 col-xl-6 col-lg-8 col-md-9 col-sm-12 col-xs-12 pt-md-0 pt-3">
                <form action="cadastroMedicos.php" method="GET" class="d-flex">
                    <input class="form-control me-2 fs-5" type="search" placeholder="Digite o nome do médico" aria-label="Search" id="busca" name="busca">
                    <button class="btn-pesquisa pesquisar" type="submit"><i class="fas fa-search"></i></button>
                    <button class="btn-limpar pesquisar ms-2" type="button" onclick="JavaScript:location.href='cadastroMedicos.php'">Limpar</i></button>
                </form>
            </div>
        </div>
        <br>
        <div class="table-responsive">
            <table class="table table-striped table-hover align-middle fs-5 text-center">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Código</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Sobrenome</th>
                        <th scope="col">Especialidade</th>
                        <th scope="col">CRM</th>
                        <th scope="col">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($listaMedicos as $medico) {
                    ?>
                        <tr>
                            <th scope="row"><?php echo $medico['codigo']; ?></th>
                            <td><?php echo $medico['codigo']; ?></td>
                            <td><?php echo $medico['nome']; ?></td>
                            <td><?php echo $medico['sobrenome']; ?></td>
                            <td><?php echo $medico['especialidade']; ?></td>
                            <td><?php echo $medico['crm']; ?></td>
                            <td>
                                <button class="botao-pequeno editar" onclick="JavaScript:location.href='frmEdtMedico.php?codigo=' + <?php echo $medico['codigo']; ?>">
                                    <i class="fas fa-edit"></i>
                                </button>
                                <button class="botao-pequeno deletar" onclick="JavaScript:location.href='frmRmvMedico.php?codigo=' + <?php echo $medico['codigo']; ?>">
                                    <i class="fas fa-trash-alt"></i>
                                </button>
                                <button class="botao-pequeno visualizar" onclick="JavaScript:location.href='frmVisMedico.php?codigo=' + <?php echo $medico['codigo']; ?>">
                                    <i class="fas fa-eye" style="padding-right: 0.1vw"></i></i>
                                </button>
                            </td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
    <!-- Include Footer -->
    <?php include './import/footer.php'; ?>

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

    <!-- Font Awesome JS -->
    <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" data-auto-a11y="true"></script>
</body>

</html>