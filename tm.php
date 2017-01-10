<?php
/**
 *
 */
class tm
{
  //creamos el array vacio que iremos dandole valores mas adelante
  private $ventas=[];
//creamos la funcion ventas qye la usamos par almacenar los valores ($ventas)
  public function Valor($ventas)
  {
    if ($ventas>=0) {
      $this->ventas[]=$ventas;
    }
    return $this->ventas;
  }
  //funcion que imprime los valores con el foreach que recorre el array
 public function Imprimir()
 {
   foreach ($this->ventas as $key => $value) {
    echo $value."<br>";
   }
 }
 //funcion que calcula la media de los valores
 public function Calcular()
 {
   $total=0;
   foreach ($this->ventas as $key => $value) {
     $total=$total+$value;
   }
   echo "el ticket medio es".$total/count($this->ventas);

 }

 }






 ?>
