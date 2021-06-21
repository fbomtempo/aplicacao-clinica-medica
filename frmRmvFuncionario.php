<?php
    // Verifica se o usuário está logado
    include 'verificaLogin.php';

    include 'conexao.php';

    $codigo = $_GET['codigo'];

    $pdo = Conexao::conectar();
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "SELECT * FROM funcionario WHERE codigo=?;";
    $query = $pdo->prepare($sql);
    $query->execute(array($codigo));

    $dados = $query->fetch(PDO::FETCH_ASSOC);

    $nome = $dados['nome'];;
    $sobrenome = $dados['sobrenome'];;
    $nascimento = $dados['nascimento'];
    $sexo = $dados['sexo'];
    $cargo = $dados['cargo'];
    $rg = $dados['rg'];
    $cpf = $dados['cpf'];
    $telres = $dados['telres'];
    $telcel = $dados['telcel'];
    $email = $dados['email'];
    $cep = $dados['cep'];
    $cidade = $dados['cidade'];
    $estado = $dados['estado'];
    $endereco = $dados['endereco'];
    $numero = $dados['numero'];
    $bairro = $dados['bairro'];
    $complemento = $dados['complemento']; 

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

    <title>Remover Funcionário</title>
</head>

<body class="d-flex flex-column h-100">
    <!-- Include Navbar -->
    <?php include './import/navbar.php'; ?>
    <div class="container">
        <h1 class="text-left pt-5 pb-5 display-6">Remover Funcionário</h1>
        <form action="rmvFuncionario.php" method="POST" class="row g-3 needs-validation" novalidate>
            <div class="col-md-1">
                <label class="form-label">Código</label>
                <input type="number" class="form-control" id="frmCodigo" name="frmCodigo" value="<?php echo $codigo ?>" readonly>
            </div>
            <div class="col-md-4">
                <label class="form-label">Nome</label>
                <input type="text" class="form-control" id="frmNome" name="frmNome" value="<?php echo $nome ?>" readonly>
            </div>
            <div class="col-md-4">
                <label class="form-label">Sobrenome</label>
                <input type="text" class="form-control" id="frmSobrenome" name="frmSobrenome" value="<?php echo $sobrenome ?>" readonly>
            </div>
            <div class="col-md-3">
                <label class="form-label">Nascimento</label>
                <input type="date" class="form-control" id="frmNascimento" name="frmNascimento" value="<?php echo $nascimento ?>" readonly>
            </div>
            <div class="col-md-2">
                <label class="form-label">Sexo</label>
                <select class="form-select" id="frmSexo" name="frmSexo" value="<?php echo $sexo ?>" disabled>
                    <option selected><?php echo $sexo ?></option>
                </select>
            </div>
            <div class="col-md-4">
                <label class="form-label">Cargo</label>
                <input type="text" class="form-control" id="frmCargo" name="frmCargo" value="<?php echo $cargo ?>" readonly>
            </div>
            <div class="col-md-6"></div>
            <div class="col-md-3">
                <label class="form-label">RG</label>
                <input type="text" class="form-control" id="frmRg" name="frmRg" value="<?php echo $rg ?>" readonly>
            </div>
            <div class="col-md-3">
                <label class="form-label">CPF</label>
                <input type="text" class="form-control" id="frmCpf" name="frmCpf" value="<?php echo $cpf ?>" readonly>
            </div>
            <div class="col-md-6"></div>
            <div class="col-md-4">
                <label class="form-label">Telefone Residencial</label>
                <input type="text" class="form-control" id="frmTelres" name="frmTelres" value="<?php echo $telres ?>" readonly>
            </div>
            <div class="col-md-4">
                <label class="form-label">Telefone Celular</label>
                <input type="text" class="form-control" id="frmTelcel" name="frmTelcel" value="<?php echo $telcel ?>" readonly>
            </div>
            <div class="col-md-4">
                <label class="form-label">Email</label>
                <div class="input-group has-validation">
                    <span class="input-group-text" id="inputGroupPrepend">@</span>
                    <input type="text" class="form-control" id="frmEmail" name="frmEmail" value="<?php echo $email ?>" aria-describedby="inputGroupPrepend" readonly>
                </div>
            </div>
            <div class="col-md-3">
                <label class="form-label">CEP</label>
                <input type="text" class="form-control" id="frmCep" name="frmCep" value="<?php echo $cep ?>" readonly>
            </div>
            <div class="col-md-6">
                <label class="form-label">Cidade</label>
                <input type="text" class="form-control" id="frmCidade" name="frmCidade" value="<?php echo $cidade ?>" readonly>
            </div>
            <div class="col-md-3">
                <label class="form-label">Estado</label>
                <select class="form-select" id="frmEstado" name="frmEstado" value="<?php echo $estado ?>" disabled>
                    <option selected><?php echo $estado ?></option>
                </select>
            </div>
            <div class="col-md-7">
                <label class="form-label">Endereço</label>
                <input type="text" class="form-control" id="frmEndereco" name="frmEndereco" value="<?php echo $endereco ?>" readonly>
            </div>
            <div class="col-md-2">
                <label class="form-label">Número</label>
                <input type="number" class="form-control" id="frmNumero" name="frmNumero" value="<?php echo $numero ?>" readonly>
            </div>
            <div class="col-md-3">
                <label class="form-label">Bairro</label>
                <input type="text" class="form-control" id="frmBairro" name="frmBairro" value="<?php echo $bairro ?>" readonly>
            </div>
            <div class="col-md-7">
                <label class="form-label">Complemento</label>
                <input type="text" class="form-control" id="frmComplemento" name="frmComplemento" value="<?php echo $complemento ?>" readonly>
            </div>
            <div class="col-12 pt-4 pb-5">
                <button class="btn btn-lg btn-danger" type="submit" name="btnDeletar">Deletar</button>
                <span class="px-1"></span>
                <button class="btn btn-lg btn-primary" type="reset" onclick="JavaScript:location.href='cadastroFuncionarios.php'">Voltar</button>
            </div>
        </form>
    </div>
    <br>
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