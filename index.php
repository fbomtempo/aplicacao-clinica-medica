<?php
    if (isset($_GET['erro'])) { 
        if ($_GET['erro'] == 1) {
            echo '<script>window.alert("Login ou senha inválido!")</script>';
        }
    }
?> 

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <!-- CSS e/ou ícone -->
    <link rel="stylesheet" type="text/css" href="./css/index.css">
    <link rel="shortcut icon" href="./imagens/icon-principal.ico">

    <title>Login</title>
</head>

<body onload="loginErrado('Login ou senha inválidos!')">
    <img src="./imagens/background.jpg" style="position: fixed">
    <div class="wrapper fadeInDown">
        <div id="formContent">
            <!-- Tabs Titles -->

            <!-- Icon -->
            <div class="fadeIn first">
                <img src="./imagens/icon-principal.png" id="icon" alt="User Icon">
            </div>

            <!-- Login Form -->
            <form action="login.php" method="POST" class="needs-validation" novalidate>
                <input type="text" class="form-control fadeIn second" id="user" name="user" placeholder="login" required>
                <input type="password" class="form-control fadeIn third" id="senha" name="senha" placeholder="password" required>
                <input type="submit" class="fadeIn fourth" value="Log In">
            </form>

            <!-- Remind Passowrd -->
            <div id="formFooter">
                <a class="underlineHover" href="#">Forgot Password?</a>
            </div>         
        </div>
    </div>

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

    <!-- Validação -->
    <script src="./js/validacaoForms.js"></script>
    <!--<script type="text/javascript">
        function loginErrado(msg) {
            var erro = document.getElementById('erro').value;
            if (erro == 1) {
                window.alert(msg);
            }
        }
    </script>-->
</body>

</html>