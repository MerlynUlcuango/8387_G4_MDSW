<?php 

include("con_db.php");

if (isset($_POST['register'])) {
    if (strlen($_POST['usuario']) >= 1 && strlen($_POST['password']) >= 1) {
	    $usuario = trim($_POST['usuario']);
	    $pasword= trim($_POST['password']);
	   
	    $consulta = INSERT INTO `usuario`(`id`, `usuario`, `password`) VALUES ('$id','$usuario','$password')
	    $resultado = mysqli_query($conex,$consulta);
	    if ($resultado) {
	    	?> 
	    	<h3 class="ok">¡Te has inscripto correctamente!</h3>
           <?php
	    } else {
	    	?> 
	    	<h3 class="bad">¡Ups ha ocurrido un error!</h3>
           <?php
	    }
    }   else {
	    	?> 
	    	<h3 class="bad">¡Por favor complete los campos!</h3>
           <?php
    }
}

?>