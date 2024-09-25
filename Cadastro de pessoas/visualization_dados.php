<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Pessoas</title>
    <style>
        td {
            padding: 5px;
            text-align: center;
        }

        th {
            font-size: 20px;
            padding: 9px;
        }

    </style>
</head>

<body>
    <h1>USUÁRIOS CADASTRADOS</h1>
    <table border="1">
        <tr>
            <th>NOME</th>
            <th>CPF</th>
            <th>SEXO</th>
            <th>NASCIMENTO</th>
            <th>EMAIL</th>
            <th>TELEFONE</th>
            <th>ENDEREÇO</th>
            <th>CIDADE</th>
            <th>ESTADO</th>
            <th>AÇÕES</th>
        </tr>

        <?php
        include 'conectBd.php';
        $comando = 'SELECT * from pessoas';
        $r = $con->query($comando, PDO::FETCH_ASSOC);
        $consulta = $r->fetchAll();
        foreach ($consulta as $r) {
            echo "<tr>";
            echo "<td>" . htmlspecialchars($r['nome']) . "</td>";
            echo "<td>" . htmlspecialchars($r['cpf']) . "</td>";
            echo "<td>" . htmlspecialchars($r['sexo']) . "</td>";
            echo "<td>" . htmlspecialchars($r['data_nascimento']) . "</td>";
            echo "<td>" . htmlspecialchars($r['email']) . "</td>";
            echo "<td>" . htmlspecialchars($r['telefone']) . "</td>";
            echo "<td>" . htmlspecialchars($r['endereco']) . "</td>";
            echo "<td>" . htmlspecialchars($r['cidade']) . "</td>";
            echo "<td>" . htmlspecialchars($r['estado']) . "</td>";
            echo "<td><a href='delete_user.php?id=" . $r['id'] . "'><button>Excluir</button></a></td>";
            echo "</tr>";
        }
        ?>
    </table><br>

</body>

</html>
