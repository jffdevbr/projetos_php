<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Back-end</title>
</head>
<body>
    <header class="header">
        <h1 class="titulo">Resultado</h1>
    </header>
        <main>
            <section class="caixa">
                <?php
                $idade = $_POST['idade'];
                $peso = $_POST['peso'];
                $altura = $_POST['altura'];
                $imc = $peso/($altura^2);
                echo"<p class='resultado'>Seu IMC é igual à: $imc kg/m².</p>";
                if($imc<18.5){
                    echo"<p class='resultado'>A Classificação do IMC é: Abaixo do peso</p>";
                }else if($imc>=18.5 && $imc<=24.9){
                    echo"<p class='resultado'>A Classificação do IMC é: Peso normal</p>";
                }else if($imc>=25 && $imc<=29.9){
                    echo"<p class='resultado'>A Classificação do IMC é: Sobrepeso</p>";
                }else if($imc>=30){
                    echo"<p class='resultado'>A Classificação do IMC é: Obesidade</p>";
                }
                echo"<p class='resultado'>Fonte: <a id='link' href='https://bvsms.saude.gov.br/bvs/dicas/215_obesidade.html'>Biblioteca Virtual em Saúde do Ministério da Saúde</a></p>"
                ?>
            </section>
        </main>
    <footer>
        <p>Desenvolvido por jffdevbr</p>
    </footer>
</body>
</html>