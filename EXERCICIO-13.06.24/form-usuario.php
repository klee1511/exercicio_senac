<?php

//dados pessoais
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    //voltando o base64 para json e o json para um array no php
    $matrizAtual = json_decode(base64_decode($_POST["matrizAtual"]), true);

    //validando se a matriz não é vazia ou diferente de array
    if ($matrizAtual == "" || !is_array(($matrizAtual))) {
        $matrizAtual = array();
    }

    //die(print_r($matrizAtual));

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $confSenha = $_POST['conf_senha'];

    //Dados Bancários
    $nomeCartao = $_POST['nome_cartao'];
    $numCartao = $_POST['num_cartao'];
    $codValidacao = $_POST['cod_val'];
    $vencimento = $_POST['vencimento'];
    $cpf = $_POST['cpf'];
    $plano = $_POST['plano'];

    //Diga-nos sobre você
    $nomePerfil = $_POST['nome_perfil'];
    $categoria = $_POST['categoria'];

    $matrizUsuario = [
        'dadosPessoais' => [
            'nome' => $nome,
            'email' => $email,
            'senha' => $senha,
            'confSenha' => $confSenha
        ],
        'dadosBancarios' => [
            'nomeCartao' => $nomeCartao,
            'numCartao' => $numCartao,
            'codValidacao' => $codValidacao,
            'vencimento' => $vencimento,
            'cpf' => $cpf,
            'plano' => $plano
        ],
        'preferencias' => [
            'nomePerfil' => $nomePerfil,
            'categoria' => $categoria
        ]
    ];

    $matrizAtual[] = $matrizUsuario;

    //transformando a matriz em json para codificar no hidden
    $matrizJson = json_encode($matrizAtual);

    //convertendo o json em base64 para não ter problema de " no html
    $matrizB64 = base64_encode($matrizJson);


    //die($matrizJson);

    // die(print_r($matrizUsuario));

} else {
    $matrizAtual = array();
}

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de cadastro</title>

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
    <p>
        Crie um sistema em etapas usando formulario de HTML com PHP;
        <br>
        <br>
        1º etapa:
        <br>
        Captura os seguintes dados:
        <br>
        - Nome, email, senha, porém a senha com confirmação, logo os dois campos deve conter a mesma senha;
        <br>
        <br>
        2º etapa
        <br>
        Captura os dados bancários do cartão de credito:
        <br>
        - Nome do cartão, número, código de validação, mês e ano de vencimento, cpf, plano selecionado
        <br>
        <br>
        3º etapa
        <br>
        Perfil do usuário master captura o seguinte:
        <br>
        - Estilo de categorias que o usuário gosta para criar uma lista de opções no futuro, nome do perfil
        <br>
        <br>
        4º etapa
        <br>
        Com todos os dados acima organiza em uma matriz multidimensional
        <br>
        <br>

        5ª etapa
        <br>
        imprime em uma tabela em HTML toda a matriz.
    </p>
    <hr>

    <form action="" method="POST" onsubmit="javascript: return validaSenha()">
        <input type="hidden" name="matrizAtual" value="<?php echo $matrizB64 ?>" />
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
        <hr>
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
        </div>
        <br>
        <hr>
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

        </div>
        <button>Enviar</button>

    </form>
    <br><hr>

    <div class="tabela" style="
                                            <?php
                                            if (!is_array(($matrizAtual)) || count($matrizAtual) == 0) {
                                                echo 'display:none;';
                                            }
                                            ;
                                            ?>">
        <?php
        for ($i = 0; $i < count($matrizAtual); $i++) {

            ?>
            <h3>DADOS PESSOAIS</h3>
            <table border="1">
                <tr>
                    <th>Nome</th>
                    <th>E-mail</th>
                    <th>Senha</th>
                    <th>Conf Senha</th>
                </tr>
                <tr>
                    <td><?php echo $matrizAtual[$i]['dadosPessoais']['nome'] ?></td>
                    <td><?php echo $matrizAtual[$i]['dadosPessoais']['email'] ?></td>
                    <td><?php echo $matrizAtual[$i]['dadosPessoais']['senha'] ?></td>
                    <td><?php echo $matrizAtual[$i]['dadosPessoais']['confSenha'] ?></td>
                </tr>
            </table>
            <h3>DADOS BANCÁRIOS</h3>
            <table border="1">
                <tr>
                    <th>Nome Cartão</th>
                    <th>Número Cartão</th>
                    <th>Cód Validação</th>
                    <th>Vencimento</th>
                    <th>CPF</th>
                    <th>Plano</th>
                </tr>
                <tr>
                    <td><?php echo $matrizAtual[$i]['dadosBancarios']['nomeCartao'] ?></td>
                    <td><?php echo $matrizAtual[$i]['dadosBancarios']['numCartao'] ?></td>
                    <td><?php echo $matrizAtual[$i]['dadosBancarios']['codValidacao'] ?></td>
                    <td><?php echo $matrizAtual[$i]['dadosBancarios']['vencimento'] ?></td>
                    <td><?php echo $matrizAtual[$i]['dadosBancarios']['cpf'] ?></td>
                    <td><?php echo $matrizAtual[$i]['dadosBancarios']['plano'] ?></td>
                </tr>
            </table>
            <h3>PREFERÊNCIAS</h3>
            <table border="1">
                <tr>
                    <th>Nome Perfil</th>
                    <th>Categorias</th>
                </tr>
                <tr>
                    <td><?php echo $matrizAtual[$i]['preferencias']['nomePerfil'] ?></td>
                    <td>
                        <?php
                        foreach ($matrizAtual[$i]['preferencias']['categoria'] as $categorias) {
                            echo "{$categorias}" . "<br>";
                        }
                        ;
                        ?>
                    </td>

                </tr>
            </table>


            <br><br><hr><br><br>
            <?php
        }
        ?>

    </div>



</body>

</html>