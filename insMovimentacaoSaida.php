<?php
    include 'conexao.php';

    $codigo = trim($_POST['frmCodigo']);
    $tipo = trim($_POST['frmTipo']);
    $codprod = trim($_POST['frmCodprod']);
    $quantidade = trim($_POST['frmQtd']);

    $pdo = Conexao::conectar();
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "SELECT * FROM produto WHERE codigo=?;";
    $query = $pdo->prepare($sql);
    $query->execute(array($codprod));
    $dados = $query->fetch(PDO::FETCH_ASSOC);
    $estoque = $dados['estoque'];;


    if ($estoque < $quantidade) {
        Conexao::desconectar();
        header("location: frmInsMovimentacaoSaida.php?codprod=$codprod&erro=1");
    }
    else {
        $novoestoque = $estoque - $quantidade;

        $sql = "INSERT INTO movimentacao (codigo, tipo, codprod, quantidade) VALUES (?, ?, ?, ?);";
        $query = $pdo->prepare($sql);
        $query->execute(array($codigo, $tipo, $codprod, $quantidade));
        
        $sql = "UPDATE produto SET estoque=? WHERE codigo=?;";
        $query = $pdo->prepare($sql);
        $query->execute(array($novoestoque, $codprod));

        Conexao::desconectar();
        header("location: cadastroProdutos.php");
    }
?>