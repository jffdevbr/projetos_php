<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Back-end</title>
</head>

<body>
    <?php
    $nome = $_GET['nome'];
    $p1 = $_GET['nota1'];
    $p2 = $_GET['nota2'];
    $p3 = $_GET['nota3'];
    $p4 = $_GET['nota4'];
    $p5 = $_GET['nota5'];
    $nf = ($p1 + $p2 + $p3 + $p4 + $p5) / 5;
    echo (' Média = ' . $nf);
    if ($nf < 6) {
        echo "<br><span class='frase1'  style='color:blue;'>Reprovado</span>"; //azul
        echo "<br><span class='frase2'  style='color:red;'>$nome, você precisa se esforçar mais!</span>"; //vermelho
    } else if ($nf >= 6 && $nf < 7) {
        echo "<br><span class='frase1'  style='color:yellow;'>Aprovado com Regular</span>"; //amarelo
        echo "<br><span class='frase2' style='color:black;'>$nome, bom trabalho, mas você pode melhorar!</span>"; //preto
    } else if ($nf >= 7 && $nf < 9) {
        echo "<br><span class='frase1' style='color:green;'>Aprovado</span>"; //verde
        echo "<br><span class='frase2' style='color:blueviolet;'>$nome, você foi bom, parabéns!</span>";//roxo
    } else if ($nf >= 9 && $nf <= 10) {
        echo "<br><span class='frase1' style='color:gold;'>Aprovado com Muito Bom</span>"; //dourado
        echo "<br><span class='frase2' style='color:pink;'>$nome, você arrasou, parabéns!</span>"; //rosa
    }
    ?>
</body>
</html>