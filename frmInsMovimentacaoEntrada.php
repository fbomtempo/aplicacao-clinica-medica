<?php
    // Verifica se o usuário está logado
    include 'verificaLogin.php';

    include 'conexao.php';

    $pdo = Conexao::conectar();

    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "SELECT AUTO_INCREMENT FROM INFORMATION_SCHEMA.TABLES WHERE TABLE_SCHEMA = 'sistema_medico' AND TABLE_NAME = 'movimentacao';";
    $query = $pdo->prepare($sql);
    $query->execute();
    $pk = $query->fetch(PDO::FETCH_ASSOC);

    if (isset($_GET['codprod'])) {
        $codprod = $_GET['codprod'];
    }
    else {
        $codprod = '';
    }
    
    $sql = "SELECT * FROM produto WHERE codigo=?;";
    $query = $pdo->prepare($sql);
    $query->execute(array($codprod));
    $dados = $query->fetch(PDO::FETCH_ASSOC);
    $estoque = $dados['estoque'];
    $nomeproduto = $dados['descricao'];
    
    Conexao::desconectar();

    echo '<input type="hidden" id="estoque" value="<?php echo $estoque ?>">';
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

    <title>Nova Entrada de Produtos</title>
</head>

<body class="d-flex flex-column h-100">
    <!-- Include Navbar -->
    <?php include './import/navbar.php'; ?>
    <div class="container">
        <h1 class="text-left pt-5 pb-5 display-6">Nova Entrada de Produtos</h1>
        <form action="insMovimentacaoEntrada.php" method="POST" class="row g-3 needs-validation mb-3" novalidate>
            <div class="col-md-2">
                <label for="frmCodigo" class="form-label">Código da Mov.</label>
                <div class="col-md-6">
                    <input type="number" class="form-control" id="frmCodigo" name="frmCodigo" value="<?php echo $pk['AUTO_INCREMENT']; ?>" required>
                </div>
                <div class="valid-feedback">
                    Parece bom!
                </div>
                <div class="invalid-feedback">
                    Informe um código.
                </div>
            </div>
            <div class="col-md-2">
                <label class="form-label">Tipo</label>
                <input type="text" class="form-control" id="frmTipo" name="frmTipo" value="Entrada" readonly required>
            </div>
            <div class="col-md-7"></div>
            <hr>
            <div class="col-md-8">
                <label for="frmCodprod" id="lblFrmCodprod" class="form-label">Código do Produto</label>
                <div class="col-md-6">
                    <input type="text" class="form-control" value="<?php echo $nomeproduto ?>" readonly required>
                    <input type="hidden" class="form-control" id="frmCodprod" name="frmCodprod" value="<?php echo $codprod ?>" readonly required>
                </div>
            </div>
            <div class="col-md-4"></div>
            <div class="col-md-1">
                <label for="frmQtd" class="form-label">Quantidade</label>
                <input type="number" class="form-control" id="frmQtd" name="frmQtd" onblur="totalEstoque()" required>
                <div class="valid-feedback">
                    Parece bom!
                </div>
                <div class="invalid-feedback">
                    Informe a quantidade.
                </div>
            </div>
            <div class="col-md-11"></div>
            <div class="col-md-2">
                <label id="total">Novo Estoque: <span id="totalValor" value="Teste"></span></label>
            </div>
            <div class="col-12 pt-4 pb-5">
                <button class="btn btn-lg btn-primary" type="submit">Enviar</button>
                <span class="px-1"></span>
                <button class="btn btn-lg btn-danger" type="reset" onclick="JavaScript:location.href='cadastroProdutos.php'">Cancelar</button>
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

    <script type="text/javascript">
        function totalEstoque() {
            var estoque = parseInt(document.getElementById("estoque").value);
            var quantidade = parseInt(document.getElementById("frmQtd").value);
            var totalValor = document.getElementById("totalValor");
            var novoestoque = estoque + quantidade;
            totalValor.innerHTML = novoestoque;
            if (novoestoque >= 0) {
                document.getElementById("total").setAttribute("style", "color: green; text-decoration: underline")
            }
            else {
                document.getElementById("total").setAttribute("style", "color: red; text-decoration: underline")
            }
        }
    </script>
</body>

</html>