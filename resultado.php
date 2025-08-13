<?php 
    include("Operaciones.php");
    $miCalculadora = new Aritmetica(); //Declaramos el Objeto 
	if ($_POST ["valor1"] !="" and $_POST ["valor2"]!=""){
		if ($_POST["operador"] == "suma") {
            $miCalculadora->suma($_POST["valor1"],$_POST["valor2"]);
		} elseif ($_POST["operador"] == "resta") {
			
		} elseif ($_POST["operador"] == "multiplicacion") {
			
		} elseif ($_POST["operador"] == "division") {
			
		}
	} else {
		print("Ingresa algún valor");
		print ('<br /><a href="index.php">Volver</a>');
	}
?>