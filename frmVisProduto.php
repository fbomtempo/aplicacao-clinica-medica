<?php
    // Verifica se o usuário está logado
    include 'verificaLogin.php';

    include 'conexao.php';

    $codigo = $_GET['codigo'];

    $pdo = Conexao::conectar();
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "SELECT * FROM produto WHERE codigo=?;";
    $query = $pdo->prepare($sql);
    $query->execute(array($codigo));

    $dados = $query->fetch(PDO::FETCH_ASSOC);

    $descricao = $dados['descricao'];;
    $preco = $dados['preco'];;
    $estoque = $dados['estoque'];
     
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
    <link rel="shortcut icon" href="./imagens/icon-principal.ico">

    <title>Visualizar Produto</title>
</head>

<body class="d-flex flex-column h-100">
    <!-- Include Navbar -->
    <?php include './import/navbar.php'; ?>
    <div class="container">
        <h1 class="text-center text-left pt-5 pb-5 display-6">Visualizar Produto</h1>
        <form class="row g-3 needs-validation text-center mb-3" novalidate>
            <div class="col-md-12">
                <div class="col-md-4 position-relative start-50 translate-middle-x">
                    <label class="form-label">Código</label>
                    <input type="number" class="form-control" id="frmCodigo" value="<?php echo $codigo ?>" readonly>
                </div>
            </div>
            <div class="col-md-12">
                <div class="col-md-4 position-relative start-50 translate-middle-x">
                    <label class="form-label">Descrição</label>
                    <input type="text" class="form-control" id="frmDescricao" value="<?php echo $descricao ?>" readonly>
                </div>
            </div>
            <div class="col-md-12">
                <div class="col-md-4 position-relative start-50 translate-middle-x">
                    <label class="form-label">Preço</label>
                    <input type="text" class="form-control" id="frmPreco" value="<?php echo $preco ?>" readonly>
                </div>
            </div>
            <div class="col-md-12">
                <div class="col-md-4 position-relative start-50 translate-middle-x">
                    <label class="form-label">Estoque</label>
                    <input type="text" class="form-control" id="frmEstoque" value="<?php echo $estoque ?>" readonly>
                </div>
            </div>
            <div class="col-12 pt-4 pb-5">
                <button class="btn btn-lg btn-primary" type="reset" onclick="JavaScript:location.href='cadastroProdutos.php'">Voltar</button>
            </div>
        </form>
    </div>
    <!-- Include Footer -->
    <?php include './import/footer.php'; ?>

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

    <!-- Font Awesome JS -->
    <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" data-auto-a11y="true"></script>

    <!-- Validação -->
    <script src="./js/validacaoForms.js"></script>
</body>

</html>