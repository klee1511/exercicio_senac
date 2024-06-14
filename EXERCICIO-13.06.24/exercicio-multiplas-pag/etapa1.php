<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dados Pessoais</title>
    <script>
        function validaSenha() {
            var senha = document.getElementById("senha").value;
            var confSenha = document.getElementById("conf_senha").value;

            if (senha !== confSenha) {
                alert("Senhas não conferem.");
                return false;
            }
        }

    </script>
</head>

<body>
    <form action="etapa2.php" method="POST" onsubmit="javascript: return validaSenha()">
        <div class="row">
            <h3>Dados pessoais:</h3>
            <div class="col-6">
                <label>Nome:</label>
                <br>
                <input type="text" name="nome" id="nome">
                <br>
                <label>E-mail:</label>
                <br>
                <input type="email" name="email" id="email">
            </div>
            <div class="col-6">
                <label>Senha:</label>
                <br>
                <input type="password" name="senha" id="senha">
                <br>
                <label>Confirme senha:</label>
                <br>
                <input type="password" name="conf_senha" id="conf_senha">
            </div>
        </div>
        <br>
        <input type="submit" value="proximo">
    </form>

</body>

</html>