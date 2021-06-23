<?php
    $user = trim($_POST['user']);
    $senha = md5(trim($_POST['senha']));

    include 'conexao.php';

    $pdo = Conexao::conectar();
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "SELECT * FROM usuario WHERE user LIKE ?";
    $query = $pdo->prepare($sql);
    $query->execute(array($user));
    $usuario = $query->fetch(PDO::FETCH_ASSOC);
    Conexao::desconectar();

    if ($usuario['usuario'] != false) {
        header("location: index.php?erro=1");
    }
    if ($usuario['senha'] == $senha) {
        session_start();
        $_SESSION['usuario'] = $user;
        $_SESSION['nome'] = $usuario['nome'];
        header("location: menu.php");
    }
    else {
        header("location: index.php?erro=1");
    }
?>