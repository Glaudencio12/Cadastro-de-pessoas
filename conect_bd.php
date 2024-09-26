<?php

try {
    $con = new PDO("mysql:host=localhost;dbname=cadastro_de_pessoas", "root", "");
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $E) {
    echo "Erro: " . $E->getMessage();
}

?>