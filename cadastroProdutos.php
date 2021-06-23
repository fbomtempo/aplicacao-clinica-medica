<?php
    // Verifica se o usuário está logado
    include 'verificaLogin.php';

    if (isset($_GET['busca'])) {
        $busca = $_GET['busca'];
    }
    else {
        $busca = '';
    }

    include 'conexao.php';

    $pdo = Conexao::conectar();
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "SELECT * FROM produto";

    if ($busca != '') {
        $sql = "SELECT * FROM produto WHERE descricao LIKE '%" . $busca .  "%' ORDER BY descricao"; 
    }
    else {
        $sql = "SELECT * FROM produto"; 
    }

    $listaProdutos = $pdo->query($sql);
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
    <link rel="stylesheet" type="text/css" href="./css/cadastroProdutos.css">
    <link rel="shortcut icon" href="./imagens/icon-principal.ico">

    <title>Cadastro de Produtos</title>
</head>

<body class="d-flex flex-column h-100">
    <!-- Include Navbar -->
    <?php include './import/navbar.php'; ?>
    <h1 class="text-center ps-3 pt-5 pb-5 display-6">Cadastro de Produtos</h1>
    <div class="container">
        <div class="row">
            <div class="col">
                <button class="btn-novo" onclick="JavaScript:location.href='frmInsProduto.php'"><span class="pe-2">Novo</span><i class="fas fa-plus-circle"></i></button>
            </div>
            <div class="col-xxl-6 col-xl-6 col-lg-8 col-md-9 col-sm-12 col-xs-12 pt-md-0 pt-3">
                <form action="cadastroProdutos.php" method="GET" class="d-flex">
                    <input class="form-control me-2 fs-5" type="search" placeholder="Digite a descrição do produto" aria-label="Search" id="busca" name="busca">
                    <button class="btn-pesquisa pesquisar" type="submit"><i class="fas fa-search"></i></button>
                    <button class="btn-limpar pesquisar ms-2" type="button" onclick="JavaScript:location.href='cadastroProdutos.php'">Limpar</i></button>
                </form>
            </div>
        </div>
        <br>
        <div class="table-responsive">
            <table class="table table-striped table-hover align-middle fs-5">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Código</th>
                        <th scope="col">Descrição</th>
                        <th scope="col">Preço Compra</th>
                        <th scope="col">Estoque</th>
                        <th scope="col">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        foreach ($listaProdutos as $produto) {
                    ?>
                        <tr>
                            <th scope="row"><?php echo $produto['codigo']; ?></th>
                            <td><?php echo $produto['codigo']; ?></td>
                            <td><?php echo $produto['descricao']; ?></td>
                            <td><?php echo $produto['preco']; ?></td>
                            <td><?php echo $produto['estoque']; ?></td>
                            <td>
                                <span class="pe-1"><button class="botao-pequeno editar" onclick="JavaScript:location.href='frmEdtProduto.php?codigo=' + 
                            <?php echo $produto['codigo']; ?>"><i class="fas fa-edit"></i></button></span>

                                <span class="pe-1"><button class="botao-pequeno deletar" onclick="JavaScript:location.href='frmRmvProduto.php?codigo=' + 
                            <?php echo $produto['codigo']; ?>"><i class="fas fa-trash-alt"></i></button></span>

                                <button class="botao-pequeno visualizar" onclick="JavaScript:location.href='frmVisProduto.php?codigo=' + 
                            <?php echo $produto['codigo']; ?>"><i class="fas fa-eye"></i></i></button>
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