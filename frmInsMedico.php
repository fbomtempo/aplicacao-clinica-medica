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

    <title>Novo Médico</title>
</head>

<body class="d-flex flex-column h-100">
    <div class="container">
        <h1 class="text-left pt-5 pb-5 display-6">Novo Médico</h1>
        <form class="row g-3 needs-validation" novalidate>
            <div class="col-md-1">
                <label for="validationCustom01" class="form-label">Código</label>
                <input type="text" class="form-control" id="validationCustom01" value="" disabled>
                <div class="valid-feedback">
                    Parece bom!
                </div>

            </div>
            <div class="col-md-4">
                <label for="validationCustom02" class="form-label">Nome</label>
                <input type="text" class="form-control" id="validationCustom02" required>
                <div class="valid-feedback">
                    Parece bom!
                </div>
                <div class="invalid-feedback">
                    Informe um nome.
                </div>
            </div>
            <div class="col-md-4">
                <label for="validationCustom03" class="form-label">Sobrenome</label>
                <input type="text" class="form-control" id="validationCustom03" required>
                <div class="valid-feedback">
                    Parece bom!
                </div>
                <div class="invalid-feedback">
                    Informe um sobrenome.
                </div>
            </div>
            <div class="col-md-3">
                <label for="validationCustom04" class="form-label">Nascimento</label>
                <input type="date" class="form-control" id="validationCustom04" required>
                <div class="valid-feedback">
                    Parece bom!
                </div>
                <div class="invalid-feedback">
                    Informe uma data de nascimento.
                </div>
            </div>
            <div class="col-md-2">
                <label for="validationCustom05" class="form-label">Sexo</label>
                <select class="form-select" id="validationCustom05" required>
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
            <div class="col-md-3">
                <label for="validationCustom06" class="form-label">CRM</label>
                <input type="text" class="form-control" id="validationCustom06" required>
                <div class="valid-feedback">
                    Parece bom!
                </div>
                <div class="invalid-feedback">
                    Informe o CRM.
                </div>
            </div>
            <div class="col-md-4">
                <label for="validationCustom07" class="form-label">Especialidade</label>
                <input type="text" class="form-control" id="validationCustom07" required>
                <div class="valid-feedback">
                    Parece bom!
                </div>
                <div class="invalid-feedback">
                    Informe a especialidade.
                </div>
            </div>
            <div class="col-md-3"></div>
            <div class="col-md-3">
                <label for="validationCustom08" class="form-label">RG</label>
                <input type="text" class="form-control" id="validationCustom08" required>
                <div class="valid-feedback">
                    Parece bom!
                </div>
                <div class="invalid-feedback">
                    Informe o RG.
                </div>
            </div>
            <div class="col-md-3">
                <label for="validationCustom08" class="form-label">CPF</label>
                <input type="text" class="form-control" id="validationCustom08" required>
                <div class="valid-feedback">
                    Parece bom!
                </div>
                <div class="invalid-feedback">
                    Informe o CPF.
                </div>
            </div>
            <div class="col-md-6"></div>
            <div class="col-md-4">
                <label for="validationCustom09" class="form-label">Telefone Residencial</label>
                <input type="text" class="form-control" id="validationCustom09">
            </div>
            <div class="col-md-4">
                <label for="validationCustom10" class="form-label">Telefone Celular</label>
                <input type="text" class="form-control" id="validationCustom10" required>
                <div class="valid-feedback">
                    Parece bom!
                </div>
                <div class="invalid-feedback">
                    Informe o telefone.
                </div>
            </div>
            <div class="col-md-4">
                <label for="validationCustom11" class="form-label">Email</label>
                <div class="input-group has-validation">
                    <span class="input-group-text" id="inputGroupPrepend">@</span>
                    <input type="text" class="form-control" id="validationCustom11" aria-describedby="inputGroupPrepend" required>
                    <div class="valid-feedback">
                        Parece bom!
                    </div>
                    <div class="invalid-feedback">
                        Informe o email.
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <label for="validationCustom12" class="form-label">CEP</label>
                <input type="text" class="form-control" id="validationCustom12" required>
                <div class="valid-feedback">
                    Parece bom!
                </div>
                <div class="invalid-feedback">
                    Informe um CEP.
                </div>
            </div>
            <div class="col-md-6">
                <label for="validationCustom13" class="form-label">Cidade</label>
                <input type="text" class="form-control" id="validationCustom13" required>
                <div class="valid-feedback">
                    Parece bom!
                </div>
                <div class="invalid-feedback">
                    Informe uma cidade.
                </div>
            </div>
            <div class="col-md-3">
                <label for="validationCustom14" class="form-label">Estado</label>
                <select class="form-select" id="validationCustom14" required>
                    <option selected disabled value="">Selecione</option>
                    <option>Acre</option>
                    <option>Alagoas</option>
                    <option>Amapá</option>
                    <option>Amazonas</option>
                    <option>Bahia</option>
                    <option>Ceará</option>
                    <option>Distrito Federal</option>
                    <option>Espírito Santo</option>
                    <option>Goiás</option>
                    <option>Maranhão</option>
                    <option>Mato Grosso</option>
                    <option>Mato Grosso do Sul</option>
                    <option>Minas Gerais</option>
                    <option>Pará</option>
                    <option>Paraíba</option>
                    <option>Paraná</option>
                    <option>Pernambuco</option>
                    <option>Piauí</option>
                    <option>Roraima</option>
                    <option>Rondônia</option>
                    <option>Rio de Janeiro</option>
                    <option>Rio Grande do Norte</option>
                    <option>Rio Grande do Sul</option>
                    <option>Santa Catarina</option>
                    <option>São Paulo</option>
                    <option>Sergipe</option>
                    <option>Tocantins</option>
                </select>
                <div class="valid-feedback">
                    Parece bom!
                </div>
                <div class="invalid-feedback">
                    Por favor selecione um estado.
                </div>
            </div>
            <div class="col-md-7">
                <label for="validationCustom15" class="form-label">Endereço</label>
                <input type="text" class="form-control" id="validationCustom15" required>
                <div class="valid-feedback">
                    Parece bom!
                </div>
                <div class="invalid-feedback">
                    Informe o endereço.
                </div>
            </div>
            <div class="col-md-2">
                <label for="validationCustom16" class="form-label">Número</label>
                <input type="number" class="form-control" id="validationCustom16" required>
                <div class="valid-feedback">
                    Parece bom!
                </div>
                <div class="invalid-feedback">
                    Informe um número.
                </div>
            </div>
            <div class="col-md-3">
                <label for="validationCustom17" class="form-label">Bairro</label>
                <input type="text" class="form-control" id="validationCustom17" required>
                <div class="valid-feedback">
                    Parece bom!
                </div>
                <div class="invalid-feedback">
                    Informe um bairro.
                </div>
            </div>
            <div class="col-md-7">
                <label for="validationCustom18" class="form-label">Complemento</label>
                <input type="text" class="form-control" id="validationCustom18">
            </div>
            <div class="col-12 pt-4 pb-5">
                <button class="btn btn-lg btn-primary" type="submit">Salvar</button>
                <span class="px-1"></span>
                <button class="btn btn-lg btn-danger" type="reset" onclick="JavaScript:location.href='cadastroMedicos.php'">Cancelar</button>
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