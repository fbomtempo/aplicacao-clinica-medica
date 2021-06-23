<?php
    include 'conexao.php';

    $codigo = trim($_POST['frmCodigo']);
    $nome = trim($_POST['frmNome']);
    $sobrenome = trim($_POST['frmSobrenome']);
    $nascimento = trim($_POST['frmNascimento']);
    $sexo = $_POST['frmSexo'];
    $rg = trim($_POST['frmRg']);
    $cpf = trim($_POST['frmCpf']);
    $telres = trim($_POST['frmTelres']);
    $telcel = trim($_POST['frmTelcel']);
    $email = trim($_POST['frmEmail']);
    $cep = trim($_POST['frmCep']);
    $cidade = trim($_POST['frmCidade']);
    $estado = $_POST['frmEstado'];
    $endereco = trim($_POST['frmEndereco']);
    $numero = trim($_POST['frmNumero']);
    $bairro = trim($_POST['frmBairro']);
    $complemento = trim($_POST['frmComplemento']); 

    $pdo = Conexao::conectar();
    
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "UPDATE paciente SET nome=?, sobrenome=?, nascimento=?, sexo=?, rg=?, cpf=?,
    telres=?, telcel=?, email=?, cep=?, cidade=?, estado=?, endereco=?, numero=?, bairro=?, complemento=?
    WHERE codigo=?";
    $query = $pdo->prepare($sql);
    $query->execute(array($nome, $sobrenome, $nascimento, $sexo, $rg, $cpf, $telres, $telcel, 
    $email, $cep, $cidade, $estado, $endereco, $numero, $bairro, $complemento, $codigo));

    Conexao::desconectar();
    header("location: cadastroPacientes.php");
?>