<?php
/*
- Escribir código PHP que inicialice un arreglo con los números del 1 al 365. Determine a que mes pertenece cada día del año (suponiendo un año no bisiesto) y muestre por pantalla la lista con el mes como encabezado seguido de la lista de los días que pertenecen a ese mes. 
- Utilizar HTML y CSS para dar estilo a la lista. Cada mes debe mostrarse de diferente color junto con la lista de días. Los meses deben aparecer con negrita. Pista: se puede utilizar elementos ul y li para mostrar la lista.
*/
function diasAño(){
    $Arreglo_Dias = array(" ",);
    for ($i=1; $i <=31 ; $i++) { 
        
        $Arreglo_Dias [] = $i;
    };
	foreach ($Arreglo_Dias as $Dias => $Dias_Mes) {
	    echo '<th>'.$Dias_Mes.'</th>';
	}
}


$Arreglo_Numeros = array();
    
for ($i = 1; $i <= 365 ; $i++) { 
        $Arreglo_Numeros[] = $i;
};
   
function Enero(){
    
    global $Arreglo_Numeros;
    $Enero = array_slice($Arreglo_Numeros,0,31);
    
    foreach ($Enero as $Dia => $numero) {
        echo '<th>'."Dia ".$numero.'</th>';
    }
}
function Febrero(){
    global $Arreglo_Numeros;
    $Enero = array_slice($Arreglo_Numeros,31,28);
    
    foreach ($Enero as $Dia => $numero) {
        echo '<th>'."Dia ".$numero.'</th>';
    }
}
function Marzo(){
    global $Arreglo_Numeros;
    $Enero = array_slice($Arreglo_Numeros,59,31);
    
    foreach ($Enero as $Dia => $numero) {
        echo '<th>'."Dia ".$numero.'</th>';
    }
}
function abril(){
    global $Arreglo_Numeros;
    $Enero = array_slice($Arreglo_Numeros,90,30);
    
    foreach ($Enero as $Dia => $numero) {
        echo '<th>'."Dia ".$numero.'</th>';
    }
}
function mayo(){
    global $Arreglo_Numeros;
    $Enero = array_slice($Arreglo_Numeros,120,31);
    
    foreach ($Enero as $Dia => $numero) {
        echo '<th>'."Dia ".$numero.'</th>';
    }
}
function junio(){
    global $Arreglo_Numeros;
    $Enero = array_slice($Arreglo_Numeros,151,30);
    
    foreach ($Enero as $Dia => $numero) {
        echo '<th>'."Dia ".$numero.'</th>';
    }
}
function julio(){
    global $Arreglo_Numeros;
    $Enero = array_slice($Arreglo_Numeros,181,31);
    
    foreach ($Enero as $Dia => $numero) {
        echo '<th>'."Dia ".$numero.'</th>';
    }
}
function agosto(){
    global $Arreglo_Numeros;
    $Enero = array_slice($Arreglo_Numeros,212,31);
    
    foreach ($Enero as $Dia => $numero) {
        echo '<th>'."Dia ".$numero.'</th>';
    }
}
function septiembre(){
    global $Arreglo_Numeros;
    $Enero = array_slice($Arreglo_Numeros,243,30);
    
    foreach ($Enero as $Dia => $numero) {
        echo '<th>'."Dia ".$numero.'</th>';
    }
}
function octubre(){
    global $Arreglo_Numeros;
    $Enero = array_slice($Arreglo_Numeros,273,31);
    
    foreach ($Enero as $Dia => $numero) {
        echo '<th>'."Dia ".$numero.'</th>';
    }
}
function noviembre(){
    global $Arreglo_Numeros;
    $Enero = array_slice($Arreglo_Numeros,304,30);
    
    foreach ($Enero as $Dia => $numero) {
        echo '<th>'."Dia ".$numero.'</th>';
    }
}
function Diciembre(){
    global $Arreglo_Numeros;
    $Enero = array_slice($Arreglo_Numeros,334,31);
    
    foreach ($Enero as $Dia => $numero) {
        echo '<th>'."Dia ".$numero.'</th>';
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<table border="2" align="center">
    <thead style ="Background-color : blue; color: white">
        <tr>
            <?php
              echo diasAño();
            ?>
        </tr>
    </thead>
    <tbody>
    <tr>
      <th scope="row" style="background-color: #FE6B9C; color: black">Enero</th>
          <?php
            echo Enero();
          ?> 
    </tr>
    <tr>
      <th scope="row" style="background-color: #FE1B4C; color: black">Febrero</th>
          <?php
            echo Febrero();
          ?> 
    </tr>
    <tr>
      <th scope="row" style="background-color: #FEDC9C; color: black">Marzo</th>
          <?php
            echo Marzo();
          ?> 
    </tr>
    <tr>
      <th scope="row" style="background-color: #E0FE0C; color: black">Abril</th>
          <?php
            echo Abril();
          ?> 
    </tr>
    <tr>
      <th scope="row" style="background-color: #ACCA4C; color: black">Mayo</th>
          <?php
            echo mayo();
          ?> 
    </tr>
    <tr>
      <th scope="row" style="background-color: #4CCE50; color: black">Junio</th>
          <?php
            echo junio();
          ?> 
    </tr>
    <tr>
      <th scope="row" style="background-color: #4CFEC7; color: black">Julio</th>
          <?php
            echo julio();
          ?> 
    </tr>
    <tr>
      <th scope="row" style="background-color: #4CFEA5; color: black">Agosto</th>
          <?php
            echo agosto();
          ?> 
    </tr>
    <tr>
      <th scope="row" style="background-color: #4CB6DD; color: black">Septiembre</th>
          <?php
            echo septiembre();
          ?> 
    </tr>
    <tr>
      <th scope="row" style="background-color: #45DCFE; color: black">Octubre</th>
          <?php
            echo octubre();
          ?> 
    </tr>
    <tr>
      <th scope="row" style="background-color: #8B0DFE; color: black">Noviembre</th>
          <?php
            echo noviembre();
          ?> 
    </tr>
    <tr>
      <th scope="row" style="background-color: #FA35DD; color: black">Diciembre</th>
          <?php
            echo Diciembre();
          ?> 
    </tr>
        
    </tbody>
</table>



</body>
</html>