<?php
    $nome           = $_POST['nome'];
    $email          = $_POST['email'];
    $senha          = $_POST['senha'];
    $confirmaSenha  = $_POST['conf_senha'];
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dados Bancários</title>
</head>

<body>
    <form action="etapa3.php" method="POST">
        <div class="row">
            <h3>Dados Bancários:</h3>
            <div class="col-6">
                <label>Nome impresso no cartão:</label>
                <br>
                <input type="text" name="nome_cartao" id="nome_cartao">
                <br>
                <label>Número do cartão:</label>
                <br>
                <input type="text" name="num_cartao" id="num_cartao">
            </div>
            <div class="col-6">
                <label>Código de validação:</label>
                <br>
                <input type="text" name="cod_val" id="cod_val">
                <br>
                <label>Vencimento:</label>
                <br>
                <input type="text" name="vencimento" id="vencimento" placeholder="MM/AAAA">
            </div>
            <div class="col-6">
                <label>CPF:</label>
                <br>
                <input type="text" name="cpf" id="cpf">
                <br>
                <label>Selecione o plano:</label>
                <br>
                <select name="plano" id="plano">
                    <option value="Plano 1">Plano 1</option>
                    <option value="Plano 2">Plano 2</option>
                    <option value="Plano 3">Plano 3</option>
                    <option value="Plano 4">Plano 4</option>
                </select>
            </div>
            <input type="hidden" name="nome" value="<?=$nome?>">
            <input type="hidden" name="email" value="<?=$email?>">
            <input type="hidden" name="senha" value="<?=$senha?>">
            <input type="hidden" name="conf_senha" value="<?=$confirmaSenha?>">
        </div>
        <br>
        <input type="submit" value="PRÓXIMO">

    </form>

</body>

</html>