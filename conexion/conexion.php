<?php
$conexion = mysqli_connect("localhost","root","12345","aprendiendophp");
$sql="SELECT id, colonia from php";
$result=mysqli_query($conexion,$sql);
?>
