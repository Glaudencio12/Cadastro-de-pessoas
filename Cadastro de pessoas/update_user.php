<?php
include 'conectBd.php';


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome_usuario = $_POST['nome_usuario'];
    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];
    $sexo = isset($_POST['sexo']) ? 'Masculino' : 'Feminino';
    $data_nascimento = $_POST['data_nascimento'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $endereco = $_POST['endereco'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];

    $comando = "UPDATE pessoas 
    SET nome = ?, cpf = ?, sexo = ?, data_nascimento = ?, email = ?, telefone = ?, endereco = ?, cidade = ?, estado = ? WHERE nome = ?";
    
    $in = $con->prepare($comando);
    
    $in->bindParam(1, $nome);
    $in->bindParam(2, $cpf);
    $in->bindParam(3, $sexo);
    $in->bindParam(4, $data_nascimento);
    $in->bindParam(5, $email);
    $in->bindParam(6, $telefone);
    $in->bindParam(7, $endereco);
    $in->bindParam(8, $cidade);
    $in->bindParam(9, $estado);
    $in->bindParam(10, $nome_usuario);
    


    if ($in->execute()) {
        header('Location: visualizar_dados.php');
        exit;
    } else {
        echo "Erro ao atualizar dados: ";
    }
}
?>
