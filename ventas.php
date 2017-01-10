<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ventas</title>
  </head>
  <body>
    <?php
  include 'tm.php';

  $tm=new tm();

  $tm->Valor(5);

  $tm->Valor(8);
  $tm->Valor(11);
  $tm->Valor(200);
  

  $tm->Imprimir();
  $tm->Calcular();




     ?>

  </body>
</html>
