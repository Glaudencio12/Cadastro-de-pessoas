<?php
include 'conectBd.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];
    $sexo = isset($_POST['sexo']) ? 'Masculino' : 'Feminino';
    $data_nascimento = $_POST['data_nascimento'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $endereco = $_POST['endereco'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];

    $inserecao = "INSERT INTO 
    pessoas(nome, cpf, sexo, data_nascimento, email, telefone, endereco, cidade, estado) 
    VALUES(?,?,?,?,?,?,?,?,?)";
    $in = $con->prepare($inserecao);
    $in->bindParam(1, $nome);
    $in->bindParam(2, $cpf);
    $in->bindParam(3, $sexo);
    $in->bindParam(4, $data_nascimento);
    $in->bindParam(5, $email);
    $in->bindParam(6, $telefone);
    $in->bindParam(7, $endereco);
    $in->bindParam(8, $cidade);
    $in->bindParam(9, $estado);


    if ( $in->execute()) {
        header('Location: visualizar_dados.php');
    }else{
        echo"Erro ao cadastrar usuário";
    }
}
?>