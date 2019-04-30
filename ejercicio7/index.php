<?php 
/*
Escribir código PHP que inicialice un arreglo con los números del 1 al 365. Determine a que mes pertenece el día del año. Y luego calcule cuántos días faltan para que se acabe el año con cada día del año, y muestre el mensaje “Falta poco para el año nuevo” solo si faltan menos de 5 días.

*/



?>
<!DOCTYPE html>
<html>
<head>
	<title>Ejercicio7</title>
</head>
<body>

	<div class = "container">
        <h1 class = 'page-header'>Meses del Año</h1>
        <form action = "numeros.php" method = "POST"> 
            <div class = "form-group">
                <label>Ingrese un numero</label>
                <input type = "text" name = "numero" class = "form-control"/>
            </div>
            <div class = "form-group">
               
               <button class="btn btn-primary" type="submit">Enviar</button>

            </div>
        </form>
    </div>


</body>
</html>