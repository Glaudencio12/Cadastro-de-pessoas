<?php 
include 'update_user.php';
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Cadastro</title>
    <style>
        * {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100%;
            background-color: #d3d3d3;
        }

        h1 {
            text-align: center;
            border: none;
            border-radius: 5px;
            padding: 10px;
            background-color: rgba(177, 245, 18, 0.234);
        }

        .enviar, .button-return {
            width: 100%;
            font-size: 30px;
            border: none;
            padding: 15px;
            background-color: greenyellow;
            cursor: pointer;
            border-radius: 20px;
        }

        .enviar:hover {
            background-color: #cde808;
        }

        .button-return:hover {
            background-color: #cde808;
        }

        fieldset {
            width: 50%;
            border: 1px solid #e8e8e8;
            border-radius: 15px;
            padding: 16px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        form {
            display: flex;
            flex-direction: column;
        }

        label {
            margin-top: 10px;
        }

        input,
        select {
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #00000034;
            border-radius: 5px;
            outline: none;
            cursor: pointer;
        }

        input:hover {
            background-color: #0c0c0c19;
        }
    </style>
</head>

<body>
    <fieldset>
        <h1>FORMULÁRIO DE ATUALIZAÇÃO</h1>
        <form action="update_user.php?id=<?php echo $id; ?>" method="post" id="form">
            
            <label for="nome">NOME:</label>
            <input type="text" name="nome" id="nome" value="<?php echo htmlspecialchars($nomeUser); ?>"><br>

            <label for="CPF">CPF:</label>
            <input type="number" name="cpf" id="CPF" value="<?php echo htmlspecialchars($cpfUser); ?>"><br>

            <label for="sexo">SEXO:</label>
            <select name="sexo" id="sexo">
                <option value="<?php echo htmlspecialchars($sexoUser); ?>"><?php echo htmlspecialchars($sexoUser); ?></option>
                <option value="Masculino">Masculino</option>
                <option value="Feminino">Feminino</option>
                <option value="Outro">Outro</option>
            </select><br>

            <label for="data">DATA DE NASCIMENTO:</label>
            <input type="date" name="data_nascimento" id="data" value="<?php echo htmlspecialchars($data_nascimentoUser); ?>"><br>

            <label for="e-mail">E-MAIL:</label>
            <input type="email" name="email" id="e-mail" value="<?php echo htmlspecialchars($emailUser); ?>"><br>

            <label for="telefone">TELEFONE:</label>
            <input type="tel" name="telefone" id="telefone" value="<?php echo htmlspecialchars($telefoneUser); ?>"><br>

            <label for="endereco">ENDEREÇO:</label>
            <input type="text" name="endereco" id="endereco" value="<?php echo htmlspecialchars($enderecoUser); ?>"><br>


            <label for="estado">ESTADO:</label>
            <select id="estado" name="estado" >
                <option value="<?php echo htmlspecialchars($estadoUser); ?>"><?php echo htmlspecialchars($estadoUser); ?></option>
                <option value="AC">Acre</option>
                <option value="AL">Alagoas</option>
                <option value="AP">Amapá</option>
                <option value="AM">Amazonas</option>
                <option value="BA">Bahia</option>
                <option value="CE">Ceará</option>
                <option value="DF">Distrito Federal</option>
                <option value="ES">Espírito Santo</option>
                <option value="GO">Goiás</option>
                <option value="MA">Maranhão</option>
                <option value="MT">Mato Grosso</option>
                <option value="MS">Mato Grosso do Sul</option>
                <option value="MG">Minas Gerais</option>
                <option value="PA">Pará</option>
                <option value="PB">Paraíba</option>
                <option value="PR">Paraná</option>
                <option value="PE">Pernambuco</option>
                <option value="PI">Piauí</option>
                <option value="RJ">Rio de Janeiro</option>
                <option value="RN">Rio Grande do Norte</option>
                <option value="RS">Rio Grande do Sul</option>
                <option value="RO">Rondônia</option>
                <option value="RR">Roraima</option>
                <option value="SC">Santa Catarina</option>
                <option value="SP">São Paulo</option>
                <option value="SE">Sergipe</option>
                <option value="TO">Tocantins</option>
            </select><br>

            <label for="cidade">CIDADE:</label>
            <input type="text" name="cidade" id="cidade" value="<?php echo htmlspecialchars($cidadeUser); ?>"><br><br>

            <button type="submit" class="enviar">ATUALIZAR</button><br>
            <a href="view_data.php"> <button class="button-return">VOLTAR À TABELA DE DADOS</button></a>
        </form>

    </fieldset>
</body>

</html>