<h1>INGRESAR:</h1>
<!-- COMENTARIO NUEVA RAMA: -->
<!-- THIS IS NEW ok-->
	<form method="post" action="">
		
		<input type="text" placeholder="Usuario" name="usuarioIngreso" required>

		<input type="password" placeholder="Contraseña" name="passwordIngreso" required>

		<input type="submit" value="Enviar">

	</form>


<?php

$ingreso = new MvcController();
$ingreso -> ingresoUsuarioController();

if(isset($_GET["action"])){
    if($_GET["action"] == "fallo"){
        echo "Fallo al ingresar";
    }
}

?>
