<?php
    include 'conexao.php';

    $codigo = trim($_POST['frmCodigo']);
    $nome = trim($_POST['frmNome']);
    $sobrenome = trim($_POST['frmSobrenome']);
    $nascimento = trim($_POST['frmNascimento']);
    $cep = trim($_POST['frmCep']);
    $cidade = trim($_POST['frmCidade']);
    $estado = trim($_POST['frmEstado']);

    $pdo = Conexao::conectar();
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "UPDATE paciente SET nome=?, sobrenome=?, nascimento=?, cep=?, cidade=?, estado=? WHERE codigo=?";
    $query = $pdo->prepare($sql);
    $query->execute(array($nome, $sobrenome, $nascimento, $cep, $cidade, $estado, $codigo));
    Conexao::desconectar();
    header("location: cadastroPacientes.php");
?>