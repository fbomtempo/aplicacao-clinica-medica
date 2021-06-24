<?php
    // Verifica se o usuário está logado
    include 'verificaLogin.php';
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
    <link rel="stylesheet" type="text/css" href="./css/menu.css">
    <link rel="shortcut icon" href="./imagens/icon-principal.ico">

    <title>Menu</title>
</head>

<body class="d-flex flex-column h-100">
    <!-- Include Navbar -->
    <?php include './import/navbar.php'; ?>
    <h1 class="text-center pt-5 display-4">Bem-vindo(a) de volta, <?php echo $_SESSION['nome']; ?>!</h1>
    <div class="container" style="padding-top: 9vh">
        <div class="row">
            <div class="pb-5 col d-flex justify-content-center">
                <a href="" class="icon-link">
                    <div class="card" style="width: 18rem;">
                        <div class="text-center" style="font-size: 100px"><i class="fas fa-calendar-day text-center"></i></div>
                        <div class="card-body">
                            <h5 class="text-center card-title h3">Agendamento</h5>
                        </div>
                    </div>
                </a>
            </div>
            <div class="pb-5 col d-flex justify-content-center">
                <a href="" class="icon-link">
                    <div class="card" style="width: 18rem;">
                        <div class="text-center" style="font-size: 100px"><i class="fas fa-stethoscope"></i></div>
                        <div class="card-body">
                            <h5 class="text-center card-title h3">Atendimento</h5>
                        </div>
                    </div>
                </a>
            </div>
            <div class="pb-5 col d-flex justify-content-center">
                <a href="" class="icon-link">
                    <div class="card" style="width: 18rem;">
                        <div class="text-center" style="font-size: 100px"><i class="fas fa-briefcase-medical"></i></div>
                        <div class="card-body">
                            <h5 class="text-center card-title h3">Prontuário E.</h5>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <div class="container pb-5">
        <div class="row">
            <div class="pb-5 col d-flex justify-content-center">
                <a href="" class="icon-link">
                    <div class="card" style="width: 18rem;">
                        <div class="text-center" style="font-size: 100px"><i class="fas fa-chart-pie"></i></div>
                        <div class="card-body">
                            <h5 class="text-center card-title h3">Relatório</h5>
                        </div>
                    </div>
                </a>
            </div>
            <div class="pb-5 col d-flex justify-content-center">
                <a href="" class="icon-link">
                    <div class="card" style="width: 18rem;">
                        <div class="text-center" style="font-size: 100px"><i class="fas fa-dollar-sign"></i></div>
                        <div class="card-body">
                            <h5 class="text-center card-title h3">Recebimento</h5>
                        </div>
                    </div>
                </a>
            </div>
            <div class="pb-5 col d-flex justify-content-center">
                <a href="" class="icon-link">
                    <div class="card" style="width: 18rem;">
                        <div class="text-center" style="font-size: 100px"><i class="fas fa-file-code"></i></div>
                        <div class="card-body">
                            <h5 class="text-center card-title h3">XML</h5>
                        </div>
                    </div>
                </a>
            </div>
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