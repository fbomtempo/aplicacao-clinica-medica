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

    <title>Editar Funcionário</title>
</head>

<body class="d-flex flex-column h-100">
    <!-- Include Navbar -->
    <?php include './import/navbar.php'; ?>
    <div class="container">
        <h1 class="text-left pt-5 pb-5 display-6">Editar Funcionário</h1>
        <form action="edtFuncionario.php" method="POST" class="row g-3 needs-validation" novalidate>
            <div class="col-md-1">
                <label for="frmCodigo" class="form-label">Código</label>
                <input type="number" class="form-control" id="frmCodigo" name="frmCodigo" value="<?php echo $codigo ?>" readonly>
            </div>
            <div class="col-md-4">
                <label for="frmNome" class="form-label">Nome</label>
                <input type="text" class="form-control" id="frmNome" name="frmNome" value="<?php echo $nome ?>" required>
                <div class="valid-feedback">
                    Parece bom!
                </div>
                <div class="invalid-feedback">
                    Informe um nome.
                </div>
            </div>
            <div class="col-md-4">
                <label for="frmSobrenome" class="form-label">Sobrenome</label>
                <input type="text" class="form-control" id="frmSobrenome" name="frmSobrenome" value="<?php echo $sobrenome ?>" required>
                <div class="valid-feedback">
                    Parece bom!
                </div>
                <div class="invalid-feedback">
                    Informe um sobrenome.
                </div>
            </div>
            <div class="col-md-3">
                <label for="frmNascimento" class="form-label">Nascimento</label>
                <input type="date" class="form-control" id="frmNascimento" name="frmNascimento" value="<?php echo $nascimento ?>" required>
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
                    <option selected disabled value=""><?php echo $sexo ?></option>
                    <option value="Feminino" <?php if($sexo == 'Feminino'){echo 'selected="selected"';} ?>>Feminino</option>
                    <option value="Masculino" <?php if($sexo == 'Masculino'){echo 'selected="selected"';} ?>>Masculino</option>
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
                <input type="text" class="form-control" id="frmCargo" name="frmCargo" value="<?php echo $cargo ?>" required>
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
                <input type="text" class="form-control" id="frmRg" name="frmRg" value="<?php echo $rg ?>" required>
                <div class="valid-feedback">
                    Parece bom!
                </div>
                <div class="invalid-feedback">
                    Informe o RG.
                </div>
            </div>
            <div class="col-md-3">
                <label for="frmCpf" class="form-label">CPF</label>
                <input type="text" class="form-control" id="frmCpf" name="frmCpf" value="<?php echo $cpf ?>" required>
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
                <input type="text" class="form-control" id="frmTelres" name="frmTelres" value="<?php echo $telres ?>">
            </div>
            <div class="col-md-4">
                <label for="frmTelcel" class="form-label">Telefone Celular</label>
                <input type="text" class="form-control" id="frmTelcel" name="frmTelcel" value="<?php echo $telcel ?>" required>
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
                    <input type="text" class="form-control" id="frmEmail" name="frmEmail" value="<?php echo $email ?>" aria-describedby="inputGroupPrepend" required>
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
                <input type="text" class="form-control" id="frmCep" name="frmCep" value="<?php echo $cep ?>" required>
                <div class="valid-feedback">
                    Parece bom!
                </div>
                <div class="invalid-feedback">
                    Informe um CEP.
                </div>
            </div>
            <div class="col-md-6">
                <label for="frmCidade" class="form-label">Cidade</label>
                <input type="text" class="form-control" id="frmCidade" name="frmCidade" value="<?php echo $cidade ?>" required>
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
                    <option selected disabled value=""><?php echo $estado ?></option>
                    <option value="AC" <?php if($estado == 'AC'){echo 'selected="selected"';} ?>>AC</option>
                    <option value="AL" <?php if($estado == 'AL'){echo 'selected="selected"';} ?>>AL</option>
                    <option value="AP" <?php if($estado == 'AP'){echo 'selected="selected"';} ?>>AP</option>
                    <option value="AM" <?php if($estado == 'AM'){echo 'selected="selected"';} ?>>AM</option>
                    <option value="BA" <?php if($estado == 'BA'){echo 'selected="selected"';} ?>>BA</option>
                    <option value="CE" <?php if($estado == 'CE'){echo 'selected="selected"';} ?>>CE</option>
                    <option value="DF" <?php if($estado == 'DF'){echo 'selected="selected"';} ?>>DF</option>
                    <option value="ES" <?php if($estado == 'ES'){echo 'selected="selected"';} ?>>ES</option>
                    <option value="GO" <?php if($estado == 'GO'){echo 'selected="selected"';} ?>>GO</option>
                    <option value="MA" <?php if($estado == 'MA'){echo 'selected="selected"';} ?>>MA</option>
                    <option value="MT" <?php if($estado == 'MT'){echo 'selected="selected"';} ?>>MT</option>
                    <option value="MS" <?php if($estado == 'MS'){echo 'selected="selected"';} ?>>MS</option>
                    <option value="MG" <?php if($estado == 'MG'){echo 'selected="selected"';} ?>>MG</option>
                    <option value="PA" <?php if($estado == 'PA'){echo 'selected="selected"';} ?>>PA</option>
                    <option value="PB" <?php if($estado == 'PB'){echo 'selected="selected"';} ?>>PB</option>
                    <option value="PR" <?php if($estado == 'PR'){echo 'selected="selected"';} ?>>PR</option>
                    <option value="PE" <?php if($estado == 'PE'){echo 'selected="selected"';} ?>>PE</option>
                    <option value="PI" <?php if($estado == 'PI'){echo 'selected="selected"';} ?>>PI</option>
                    <option value="RR" <?php if($estado == 'RR'){echo 'selected="selected"';} ?>>RR</option>
                    <option value="RO" <?php if($estado == 'RO'){echo 'selected="selected"';} ?>>RO</option>
                    <option value="RJ" <?php if($estado == 'RJ'){echo 'selected="selected"';} ?>>RJ</option>
                    <option value="RN" <?php if($estado == 'RN'){echo 'selected="selected"';} ?>>RN</option>
                    <option value="RS" <?php if($estado == 'RS'){echo 'selected="selected"';} ?>>RS</option>
                    <option value="SC" <?php if($estado == 'SC'){echo 'selected="selected"';} ?>>SC</option>
                    <option value="SP" <?php if($estado == 'SP'){echo 'selected="selected"';} ?>>SP</option>
                    <option value="SE" <?php if($estado == 'SE'){echo 'selected="selected"';} ?>>SE</option>
                    <option value="TO" <?php if($estado == 'TO'){echo 'selected="selected"';} ?>>TO</option>
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
                <input type="text" class="form-control" id="frmEndereco" name="frmEndereco" value="<?php echo $endereco ?>" required>
                <div class="valid-feedback">
                    Parece bom!
                </div>
                <div class="invalid-feedback">
                    Informe o endereço.
                </div>
            </div>
            <div class="col-md-2">
                <label for="frmNumero" class="form-label">Número</label>
                <input type="number" class="form-control" id="frmNumero" name="frmNumero" value="<?php echo $numero ?>" required>
                <div class="valid-feedback">
                    Parece bom!
                </div>
                <div class="invalid-feedback">
                    Informe um número.
                </div>
            </div>
            <div class="col-md-3">
                <label for="frmBairro" class="form-label">Bairro</label>
                <input type="text" class="form-control" id="frmBairro" name="frmBairro" value="<?php echo $bairro ?>" required>
                <div class="valid-feedback">
                    Parece bom!
                </div>
                <div class="invalid-feedback">
                    Informe um bairro.
                </div>
            </div>
            <div class="col-md-7">
                <label for="frmComplemento" class="form-label">Complemento</label>
                <input type="text" class="form-control" id="frmComplemento" name="frmComplemento" value="<?php echo $complemento ?>">
            </div>
            <div class="col-12 pt-4 pb-5">
                <button class="btn btn-lg btn-primary" type="submit">Salvar</button>
                <span class="px-1"></span>
                <button class="btn btn-lg btn-danger" type="reset" onclick="JavaScript:location.href='cadastroFuncionarios.php'">Cancelar</button>
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