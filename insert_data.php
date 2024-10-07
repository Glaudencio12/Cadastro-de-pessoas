<?php
include 'conect_bd.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];
    $sexo = $_POST['sexo'];
    $data_nascimento = $_POST['data_nascimento'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $endereco = $_POST['endereco'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];

    
    $consultaEmail = "SELECT id FROM pessoas WHERE email = ?";
    $consultaCPF = "SELECT id FROM pessoas WHERE cpf = ?";

    $consultEmail = $con->prepare($consultaEmail);
    $consultCPF = $con->prepare($consultaCPF);

    $consultEmail->bindParam(1, $email);
    $consultCPF->bindParam(1, $cpf);

    $consultEmail->execute();
    $consultCPF->execute();
    
    $emailCadastrado = $consultEmail->rowCount() > 0;
    $cpfCadastrado = $consultCPF->rowCount() > 0;
    
    if ($emailCadastrado && $cpfCadastrado) {
        echo "E-mail e CPF inválidos. Por favor, corrija seus dados.";
    } 
    elseif ($emailCadastrado) {
        echo "E-mail inválido. Por favor, corrija seu e-mail.";
    } 
    elseif ($cpfCadastrado) {
        echo "CPF inválido. Por favor, corrija seu cpf";
    }     
    else{
        $inserecao = "INSERT INTO pessoas(nome, cpf, sexo, data_nascimento, email, telefone, endereco, cidade, estado) 
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
            header('Location: view_data.php');
            exit;
        }else{
            echo"Erro ao cadastrar o usuário";
        }
    }
}
?>