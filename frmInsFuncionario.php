<?php
    // Verifica se o usuário está logado
    include 'verificaLogin.php';

    include 'conexao.php';

    $pdo = Conexao::conectar();

    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "SELECT AUTO_INCREMENT FROM INFORMATION_SCHEMA.TABLES WHERE TABLE_SCHEMA = 'sistema_medico' AND TABLE_NAME = 'funcionario';";
    $query = $pdo->prepare($sql);
    $query->execute();
    $pk = $query->fetch(PDO::FETCH_ASSOC);

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

    <title>Novo Funcionário</title>
</head>

<body class="d-flex flex-column h-100">
    <!-- Include Navbar -->
    <?php include './import/navbar.php'; ?>
    <div class="container">
        <h1 class="text-left pt-5 pb-5 display-6">Novo Funcionário</h1>
        <form action="insFuncionario.php" method="POST" class="row g-3 needs-validation mb-3" novalidate>
            <div class="col-md-1">
                <label for="frmCodigo" class="form-label">Código</label>
                <input type="number" class="form-control" id="frmCodigo" name="frmCodigo" value="<?php echo $pk['AUTO_INCREMENT']; ?>" required>
                <div class="valid-feedback">
                    Parece bom!
                </div>
                <div class="invalid-feedback">
                    Informe um código.
                </div>
            </div>
            <div class="col-md-4">
                <label for="frmNome" class="form-label">Nome</label>
                <input type="text" class="form-control" id="frmNome" name="frmNome" required>
                <div class="valid-feedback">
                    Parece bom!
                </div>
                <div class="invalid-feedback">
                    Informe um nome.
                </div>
            </div>
            <div class="col-md-4">
                <label for="frmSobrenome" class="form-label">Sobrenome</label>
                <input type="text" class="form-control" id="frmSobrenome" name="frmSobrenome" required>
                <div class="valid-feedback">
                    Parece bom!
                </div>
                <div class="invalid-feedback">
                    Informe um sobrenome.
                </div>
            </div>
            <div class="col-md-3">
                <label for="frmNascimento" class="form-label">Nascimento</label>
                <input type="date" class="form-control" id="frmNascimento" name="frmNascimento" required>
                <div class="valid-feedback">
                    Parece bom!
                </div>
                <div class="invalid-feedback">
                    Informe uma data de nascimento.
                </div>
            </div>
            <div class="col-md-2">
                <label for="frmSexo" class="form-label">Sexo</label>
                <select class="form-select" id="frmSexo" name="frmSexo" required>
                    <option selected disabled value="">Selecione</option>
                    <option>Feminino</option>
                    <option>Masculino</option>
                </select>
                <div class="valid-feedback">
                    Parece bom!
                </div>
                <div class="invalid-feedback">
                    Por favor selecione um sexo.
                </div>
            </div>
            <div class="col-md-4">
                <label for="frmCargo" class="form-label">Cargo</label>
                <input type="text" class="form-control" id="frmCargo" name="frmCargo" required>
                <div class="valid-feedback">
                    Parece bom!
                </div>
                <div class="invalid-feedback">
                    Informe o cargo.
                </div>
            </div>
            <div class="col-md-6"></div>
            <div class="col-md-3">
                <label for="frmRg" class="form-label">RG</label>
                <input type="text" class="form-control" id="frmRg" name="frmRg" required>
                <div class="valid-feedback">
                    Parece bom!
                </div>
                <div class="invalid-feedback">
                    Informe o RG.
                </div>
            </div>
            <div class="col-md-3">
                <label for="frmCpf" class="form-label">CPF</label>
                <input type="text" class="form-control" id="frmCpf" name="frmCpf" required>
                <div class="valid-feedback">
                    Parece bom!
                </div>
                <div class="invalid-feedback">
                    Informe o CPF.
                </div>
            </div>
            <div class="col-md-6"></div>
            <div class="col-md-4">
                <label for="frmTelres" class="form-label">Telefone Residencial</label>
                <input type="text" class="form-control" id="frmTelres" name="frmTelres">
            </div>
            <div class="col-md-4">
                <label for="frmTelcel" class="form-label">Telefone Celular</label>
                <input type="text" class="form-control" id="frmTelcel" name="frmTelcel" required>
                <div class="valid-feedback">
                    Parece bom!
                </div>
                <div class="invalid-feedback">
                    Informe o telefone.
                </div>
            </div>
            <div class="col-md-4">
                <label for="frmEmail" class="form-label">Email</label>
                <div class="input-group has-validation">
                    <span class="input-group-text" id="inputGroupPrepend">@</span>
                    <input type="text" class="form-control" id="frmEmail" name="frmEmail" aria-describedby="inputGroupPrepend" required>
                    <div class="valid-feedback">
                        Parece bom!
                    </div>
                    <div class="invalid-feedback">
                        Informe o email.
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <label for="frmCep" class="form-label">CEP</label>
                <input type="text" class="form-control" id="frmCep" name="frmCep" required>
                <div class="valid-feedback">
                    Parece bom!
                </div>
                <div class="invalid-feedback">
                    Informe um CEP.
                </div>
            </div>
            <div class="col-md-6">
                <label for="frmCidade" class="form-label">Cidade</label>
                <input type="text" class="form-control" id="frmCidade" name="frmCidade" required>
                <div class="valid-feedback">
                    Parece bom!
                </div>
                <div class="invalid-feedback">
                    Informe uma cidade.
                </div>
            </div>
            <div class="col-md-3">
                <label for="frmEstado" class="form-label">Estado</label>
                <select class="form-select" id="frmEstado" name="frmEstado" required>
                    <option selected disabled value="">Selecione</option>
                    <option>AC</option>
                    <option>AL</option>
                    <option>AP</option>
                    <option>AM</option>
                    <option>BA</option>
                    <option>CE</option>
                    <option>DF</option>
                    <option>ES</option>
                    <option>GO</option>
                    <option>MA</option>
                    <option>MT</option>
                    <option>MS</option>
                    <option>MG</option>
                    <option>PA</option>
                    <option>PB</option>
                    <option>PR</option>
                    <option>PE</option>
                    <option>PI</option>
                    <option>RR</option>
                    <option>RO</option>
                    <option>RJ</option>
                    <option>RN</option>
                    <option>RS</option>
                    <option>SC</option>
                    <option>SP</option>
                    <option>SE</option>
                    <option>TO</option>
                </select>
                <div class="valid-feedback">
                    Parece bom!
                </div>
                <div class="invalid-feedback">
                    Por favor selecione um estado.
                </div>
            </div>
            <div class="col-md-7">
                <label for="frmEndereco" class="form-label">Endereço</label>
                <input type="text" class="form-control" id="frmEndereco" name="frmEndereco" required>
                <div class="valid-feedback">
                    Parece bom!
                </div>
                <div class="invalid-feedback">
                    Informe o endereço.
                </div>
            </div>
            <div class="col-md-1">
                <label for="frmNumero" class="form-label">Número</label>
                <input type="number" class="form-control" id="frmNumero" name="frmNumero" required>
                <div class="valid-feedback">
                    Parece bom!
                </div>
                <div class="invalid-feedback">
                    Informe um número.
                </div>
            </div>
            <div class="col-md-4">
                <label for="frmBairro" class="form-label">Bairro</label>
                <input type="text" class="form-control" id="frmBairro" name="frmBairro" required>
                <div class="valid-feedback">
                    Parece bom!
                </div>
                <div class="invalid-feedback">
                    Informe um bairro.
                </div>
            </div>
            <div class="col-md-7">
                <label for="frmComplemento" class="form-label">Complemento</label>
                <input type="text" class="form-control" id="frmComplemento" name="frmComplemento">
            </div>
            <div class="col-12 pt-4 pb-5">
                <button class="btn btn-lg btn-primary" type="submit">Salvar</button>
                <span class="px-1"></span>
                <button class="btn btn-lg btn-danger" type="reset" onclick="JavaScript:location.href='cadastroMedicos.php'">Cancelar</button>
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