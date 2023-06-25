<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Back-end</title>
</head>
<body class="body2">
    <?php
    // Configurações do banco de dados
    $host = 'localhost:3307'; // Endereço do servidor MySQL
    $usuario = 'root';  //Nome de usuário do MySQL
    $senha = '';  // Senha do MySQL
    $banco = 'login';  //Nome do banco de dados
    // Conexão com o banco de dados
    $conexao = mysqli_connect($host, $usuario, $senha, $banco);
    
    //Verifica se ocorreu um erro na conexão
    if (mysqli_connect_errno()) {
        die('Falha na conexão com o MySQL: ' . mysqli_connect_error());
    }
    // Variáveis para o usuário e senha digitados
    $nu = $_POST['nomeusuario'];
    $pwd = $_POST['senha'];
    // Consulta na tabela de login e senha
    $sql = "SELECT login, senha FROM usuario";
    $resultado = mysqli_query($conexao, $sql);
    // Verificação do resultado da consulta
    if (!$resultado) {
        die('Erro na consulta: ' . mysqli_error($conexao));
    }
    // Flag para verificar se o usuário e senha correspondem
    $nuCorreto = false;
    $pwdCorreto = false;
    // Verifica se o usuário e senha correspondem
    while ($linha = mysqli_fetch_assoc($resultado)) {
        if($linha['login'] == $nu && $linha['senha'] == $pwd) {
            $nuCorreto = true;
            $pwdCorreto = true;
            break;
        }
    }
    // Exibe a mensagem de boas-vindas se o usuário e senha estiverem corretos
    if ($nuCorreto) {
        echo "<br><h1 class='fraseA'>Olá, Admin! Acesso concedido! Divirta-se explorando nosso sistema!</h1>";
        echo"<img class='imgB' src='concedido.png'>";
    } else {
        echo "<h1 class='fraseN'>Acesso negado! Verifique suas informações e tente novamente!</h1>";
        echo"<br><img class='imgB' src='negado.png'>";
        echo "<br><a class='link' href='index.html'>Clique aqui para voltar à página de login</a>";
    }
     mysqli_close($conexao);
//    /* if($nu=="admin" && $pwd=="123456"){
//         echo "<br><h1 class='fraseA'>Olá, Admin! Acesso concedido! Divirta-se explorando nosso sistema!</h1>";
//         echo"<img class='imgB' src='concedido.png'>";
//     } else {
//         echo "<h1 class='fraseN'>Acesso negado! Verifique suas informações e tente novamente!</h1>";
//         echo"<br><img class='imgB' src='negado.png'>";
//         echo "<br><a class='link' href='index.html'>Clique aqui para voltar à página de login</a>";
//     }*/
    ?>
</body>
</html>