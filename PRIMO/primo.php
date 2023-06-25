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
  <div class="container">
    <?php
    $div = 2;
    $Num = $_GET['Num'];
    $print = 0;

    if($Num>0){
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
    } else {
      echo('O número '. $Num.' é negativo, logo não é primo.');
    }
    ?>
  </div>  
</body>
</html>
