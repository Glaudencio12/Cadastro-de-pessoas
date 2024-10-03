<?php
include 'conect_bd.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
}
$comando = "DELETE FROM pessoas WHERE id = ?";
$delete = $con->prepare($comando);
$delete->bindParam(1, $id);

if ($delete->execute()) {
    header('Location: view_data.php');
    exit;
} else {
    echo "Erro ao excluir os dados: ";
}

?>