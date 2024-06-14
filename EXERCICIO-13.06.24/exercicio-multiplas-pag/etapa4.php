<?php

    //dados pessoais
    $nome               = $_POST['nome'];
    $email              = $_POST['email'];
    $senha              = $_POST['senha'];
    $confirmaSenha      = $_POST['conf_senha'];

    //Dados Bancários
    $nomeCartao         = $_POST['nome_cartao'];
    $numCartao          = $_POST['num_cartao'];
    $codValidacao       = $_POST['cod_val'];
    $vencimento         = $_POST['vencimento'];
    $cpf                = $_POST['cpf'];
    $plano              = $_POST['plano'];

    //Diga-nos sobre você
    $nomePerfil         = $_POST['nome_perfil'];
    $categoria          = $_POST['categoria'];

    $matrizUsuario = [
        'dadosPessoais' => [
            'nome' => [$nome],
            'email' => [$email],
            'senha' => [$senha],
            'confSenha' => [$confirmaSenha],
        ],
        'dadosBancarios' => [
            'nomeCartao' => [$nomeCartao],
            'numCartao' => [$numCartao],
            'codValidacao' => [$codValidacao],
            'vencimento' => [$vencimento],
            'cpf' => [$cpf],
            'plano' => [$plano],
        ],
        'preferencias' => [
            'nomePerfil' => [$nomePerfil],
            'categoria' => [$categoria],
        ]
    ];
   
    // Seção de Dados Pessoais
    echo "Dados Pessoais:<br>";
    foreach ($matrizUsuario['dadosPessoais'] as $chave => $valor) {
        echo "$chave: $valor[0]<br>";
    }

    // Seção de Dados Bancários
    echo "<br>Dados Bancários:<br>";
    foreach ($matrizUsuario['dadosBancarios'] as $chave => $valor) {
        echo "$chave: $valor[0]<br>";
    }

    // Seção de Preferências
    echo "<br>Preferências:<br>";
    foreach ($matrizUsuario['preferencias'] as $chave => $valor) {
        echo "$chave: $valor[0]<br>";
    }
    ?>

    <!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Tabela</title>
    </head>
    <body>
    <table border=1 style="text-align:center;">
        <h3>Dados Pessoais</h3>
  <tr>
    <th>Nome</th>
    <th>E-mail</th>
    <th>Senha</th>
    <th>Conf Senha</th>
  </tr>
  <tr>
    <td><?php echo $matrizUsuario['dadosPessoais']['nome'][0]?></td>
    <td><?php echo $matrizUsuario['dadosPessoais']['email'][0]?></td>
    <td><?php echo $matrizUsuario['dadosPessoais']['confSenha'][0]?></td>
    
  </tr>
  
</table> 
<table border=1 style="text-align:center;">
        <h3>Dados Bancários</h3>
  <tr>
    <th>Nome Cartão</th>
    <th>Num Cartão</th>
    <th>Cod Vali</th>
    <th>Vencimento</th>
    <th>CPF</th>
    <th>Plano</th>
  </tr>
  <tr>
    <td><?php echo $matrizUsuario['dadosBancarios']['nomeCartao'][0]?></td>
    <td><?php echo $matrizUsuario['dadosBancarios']['numCartao'][0]?></td>
    <td><?php echo $matrizUsuario['dadosBancarios']['codValidacao'][0]?></td>
    <td><?php echo $matrizUsuario['dadosBancarios']['vencimento'][0]?></td>
    <td><?php echo $matrizUsuario['dadosBancarios']['cpf'][0]?></td>
    <td><?php echo $matrizUsuario['dadosBancarios']['plano'][0]?></td>
  </tr>

    

  
</table> 
<table border=1 style="text-align:center;">
        <h3>Preferências</h3>
  <tr>
    <th>Nome Perfil</th>
    <th>Categorias</th>
    
  </tr>
  <tr>
    <td><?php echo $matrizUsuario['preferencias']['nomePerfil'][0]?></td>

    <td><?php
                        foreach ($matrizUsuario['preferencias']['categoria'][0] as $categorias) {
                            echo "{$categorias}" . "<br>";
                        };?>
                        </td>
    
  </tr>

    

  
</table> 
        
    </body>
    </html>
