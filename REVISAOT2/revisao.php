<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
</head>
<body>
    <?php
    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    $nomecompleto = $nome." ".$sobrenome;
    echo($nomecompleto);

    $idade = $_POST['idade'];
    $classificacao= array("bebê", "criança", "adolescente", "adulto", "idoso");
    if($idade<18){
        echo"<br><label>Menor de idade</label>";
    }

    switch($idade){
        case $idade>0 && $idade<2:
            echo(", você é um ".$classificacao[0]);
        break;
        case $idade>=2 && $idade<12:
            echo(", você é uma ".$classificacao[1]);
        break;
        case $idade>=12 && $idade<18:
            echo(", você é um ".$classificacao[2]);
        break;
        case $idade>=18 && $idade<60:
            echo(", você é uma ".$classificacao[3]);
        break;
        case $idade>=60:
            echo(", você é um ".$classificacao[4]);
        break;
    }

    $carteira = $_POST['carteira'];
    $aptidao=($carteira == 1)? "<br> <label>Apto para dirigir</label>": "<br><label>Inapto para dirigir</label>";
    echo($aptidao);

    if($carteira == 0 && $idade<18){
        $acumulador=0;
        for($contador=$idade; $contador<18; $contador++){
                $acumulador++;
        }
        echo("<br><label>Em ".$acumulador." anos, você poderá tirar sua carteira de mortorista!</label>");
    }else{
        echo("<br><label> Você já pode tirar sua carteira de motorista!</label>");
    }
    ?>
</body>
</html>