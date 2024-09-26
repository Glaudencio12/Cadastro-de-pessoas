<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
            font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px auto;
        }

        th,td {
            border: 1px solid #13010137;
            padding: 4px;
            text-align: left;
        }

        th {
            background-color: #cde808;
        }

        h1 {
            text-align: center;
            background-color: rgba(177, 245, 18, 0.234);
            padding: 10px;
        }
        h2{
            color: #4CAF50;
        }

        button {
            border: none;
            color: white;
            padding: 8px ;
            text-align: center;
            text-decoration: none;
            font-size: 14px;
            margin: 2px;
            cursor: pointer;
            border-radius: 5px;
            transition: background-color 0.3s, transform 0.2s;
        }

        button:hover {
            background-color: #005f73;
            transform: scale(1.05);
        }

        .delete-btn {
            background-color: #f44336;
        }

        .delete-btn:hover {
            background-color: #d32f2f;
        }

        .edit-btn {
            background-color: #4CAF50;
        }

        .edit-btn:hover {
            background-color: #388E3C;
        }
    </style>
</head>

<body>
    <h1>USUÁRIOS CADASTRADOS NO SISTEMA</h1>
    <table>
        <tr>
            <th>NOME</th>
            <th>CPF</th>
            <th>SEXO</th>
            <th>NASCIMENTO</th>
            <th>E-MAIL</th>
            <th>TELEFONE</th>
            <th>ENDEREÇO</th>
            <th>CIDADE</th>
            <th>ESTADO</th>
            <th>AÇÕES</th>
        </tr>
        <?php
        include 'conect_bd.php';
        $comando = 'SELECT * from pessoas';
        $r = $con->query($comando, PDO::FETCH_ASSOC);
        $consulta = $r->fetchAll();
        $total = count($consulta);    
        echo "<h2>Total de usuários cadastrados: <span>$total</span></h2>";
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
            echo "<td>  
                <a href='delete_user.php?id=" . $r['id'] . "'>  
                    <button class='delete-btn'>Excluir</button>  
                </a>  
                <a href='form_update.php?id=" . $r['id'] . "'>  
                    <button class='edit-btn'>Editar</button>  
                </a>  
            </td>";  

            echo "</tr>";
        }
        ?>
    </table><br>
</body>

</html>