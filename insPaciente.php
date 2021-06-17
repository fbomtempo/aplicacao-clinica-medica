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
    $sql = "INSERT INTO paciente (codigo, nome, sobrenome, nascimento, cep, cidade, estado) VALUES (?, ?, ?, ?, ?, ?, ?);";
    $query = $pdo->prepare($sql);
    $query->execute(array($codigo, $nome, $sobrenome, $nascimento, $cep, $cidade, $estado));
    Conexao::desconectar();
    header("location: cadastroPacientes.php");
?>