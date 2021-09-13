<?php
include("conexion.php");

if (isset($_POST['guardar'])) {
    if (strlen($_POST['nombre']) >= 1 && strlen($_POST['apellido']) >= 1 && strlen($_POST['colonia']) >= 1) {
	    $nombre = trim($_POST['nombre']);
	    $apellido = trim($_POST['apellido']);
	    $colonia = trim($_POST['colonia']);
	    $consulta = "INSERT INTO php(nombre, apellido, colonia) VALUES ('$nombre','$apellido','$colonia')";
	    $resultado = mysqli_query($conexion,$consulta);
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