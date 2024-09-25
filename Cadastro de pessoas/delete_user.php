<?php
include 'conectBd.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
}
$comando = "DELETE FROM pessoas WHERE id = ?";
$del = $con->prepare($comando);
$del->bindParam(1, $id);

if ($del->execute()) {
    header('Location: visualizar_dados.php');
    exit;
} else {
    echo "Erro ao excluir os dados: ";
}

?>