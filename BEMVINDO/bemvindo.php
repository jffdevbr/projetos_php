<?php
//variaveis sao espacos volateis ocupados na memoria ram
$nome = $_GET["txtNome"];
$genero = $_GET["genero"];

if($genero=="masculino"){
    echo("Olá {$nome}, seja bem vindo!");
}
if($genero=="feminino"){
    echo("Olá {$nome}, seja bem vinda!");
}
if($genero=="outro"){
    echo("Olá {$nome}, seja bem vindo, bem vinda ou bem vinde");
}
if($genero==NULL){
    echo("Olá {$nome}, informe seu gênero, por favor.");
}

?>