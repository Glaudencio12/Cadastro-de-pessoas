<?php
include 'conectBd.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];


    $comando = 'SELECT * FROM pessoas WHERE id = ?';
    $r = $con->prepare($comando);
    $r->bindParam(1, $id);
    $r->execute();
    $user = $r->fetch(PDO::FETCH_ASSOC);

    
    if ($user) {
        $nome = $user['nome'];
        $cpf = $user['cpf'];
        $sexo = $user['sexo'];
        $data_nascimento = $user['data_nascimento'];
        $email = $user['email'];
        $telefone = $user['telefone'];
        $endereco = $user['endereco'];
        $cidade = $user['cidade'];
        $estado = $user['estado'];
    } else {
        echo "Usuário não encontrado.";
        exit;
    }

    
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

        
        $comando = "UPDATE pessoas 
                    SET nome = ?, cpf = ?, sexo = ?, data_nascimento = ?, email = ?, telefone = ?, endereco = ?, cidade = ?, estado = ? 
                    WHERE id = ?";
        
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
        $in->bindParam(10, $id);


        if ($in->execute()) {
            header('Location: visualization_dados.php');
            exit;
        } else {
            echo "Erro ao atualizar dados: ";
        }
    }
} else {
    echo "ID não fornecido.";
}
?>