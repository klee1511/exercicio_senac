<?php
$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$confirmaSenha = $_POST['conf_senha'];
$nomeCartao = $_POST['nome_cartao'];
$numCartao = $_POST['num_cartao'];
$codValidacao = $_POST['cod_val'];
$vencimento = $_POST['vencimento'];
$cpf = $_POST['cpf'];
$plano = $_POST['plano'];
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Preferências</title>
</head>

<body>
    <form action="etapa4.php" method="POST">
        <div class="row">
            <h3>Diga-nos sobre você:</h3>
            <div class="col-6">
                <label>Nome do perfil:</label>
                <br>
                <input type="text" name="nome_perfil" id="nome_perfil">
                <br>
                <label>Selecione suas categorias favoritas:</label>
                <br>
                <input type="checkbox" id="categoria" name="categoria[]" value="Comédia">
                <label for="html">Comédia</label><br>
                <input type="checkbox" id="categoria" name="categoria[]" value="Romance">
                <label for="html">Romance</label><br>
                <input type="checkbox" id="categoria" name="categoria[]" value="Terror">
                <label for="html">Terror</label><br>
                <input type="checkbox" id="categoria" name="categoria[]" value="Suspense">
                <label for="html">Suspense</label><br>
            </div>
            <input type="hidden" name="nome" value="<?=$nome?>">
            <input type="hidden" name="email" value="<?=$email?>">
            <input type="hidden" name="senha" value="<?=$senha?>">
            <input type="hidden" name="conf_senha" value="<?=$confirmaSenha?>">
            
            <input type="hidden" name="nome_cartao" value="<?=$nomeCartao?>">
            <input type="hidden" name="num_cartao" value="<?=$numCartao?>">
            <input type="hidden" name="cod_val" value="<?=$codValidacao?>">
            <input type="hidden" name="vencimento" value="<?=$vencimento?>">
            <input type="hidden" name="cpf" value="<?=$cpf?>">
            <input type="hidden" name="plano" value="<?=$plano?>">
        </div>
        <br>
        <input type="submit" value="ENVIAR">
    </form>

</body>

</html>