<?php
    // Include Navbar (verifica se o usuário está logado)
    include './import/navbar.php';
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

    <title>Novo Paciente</title>

</head>

<body class="d-flex flex-column h-100">
    <div class="container">
        <h1 class="text-left pt-5 pb-5 display-6">Novo Paciente</h1>
        <form action="insPaciente.php" method="POST" class="row g-3 needs-validation" novalidate>
            <div class="col-md-1">
                <label for="frmCodigo" class="form-label">Código</label>
                <input type="number" class="form-control" id="frmCodigo" name="frmCodigo" required>
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
                <input type="text" class="form-control" id="frmNascimento" name="frmNascimento" required>
                <div class="valid-feedback">
                    Parece bom!
                </div>
                <div class="invalid-feedback">
                    Informe uma data de nascimento.
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
                <input type="text" class="form-control" id="frmEstado" name="frmEstado" required>
                <div class="valid-feedback">
                    Parece bom!
                </div>
                <div class="invalid-feedback">
                    Por favor selecione um estado.
                </div>
            </div>
            <div class="col-12 pt-4 pb-5">
                <button class="btn btn-lg btn-primary" type="submit" name="btnSalvar">Salvar</button>
                <span class="px-1"></span>
                <button class="btn btn-lg btn-danger" type="reset" onclick="JavaScript:location.href='cadastroPacientes.php'">Cancelar</button>
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