<?php
$div = 2;
$Num = $_GET['Num'];
$print = 0;

while($div < $Num){
  if($Num % $div == 0){
    if($print == 0){
      echo('O número ' . $Num . ' não é primo, pois é divisível por: ' . $div);
      $print++;
    } else {
      echo(', ' . $div);
    }
  }
  $div++;
}

if ($print == 0) {
  echo('Número ' . $Num . ' é primo');
}
?>