<?php 

include("conexion.php");

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>mostrar datos</title>
	<link href="style/estilos2.css" rel="stylesheet">
	<style>
		*{
    font-family: Arial, Helvetica, sans-serif;
  }
  table th {
      background-color: #9e9e9e;
      color: rgb(255, 0, 0);
    }
  
    body {
      background-color: #fff8f8;
      margin-right: 10;
    }
  
    h6 {
      text-align: center;
    }
  
    h1 {
      text-align: center;
      color: rgb(38, 0, 255);
    }
  
    .table-rwd {
      font-size: .85em;
      border: 1px solid rgba(181, 213, 144, 0.5);
      color: rgb(0, 0, 0);
      border-collapse: collapse;
      margin-left: auto;
      margin-right: auto;
    }
  
    .table-rwd td,
    .table-rwd th {
      padding: .8em;
      border-bottom: 1px solid rgba(59, 185, 243, 0.87);
    }
  
    .table-rwd th {
      background: #000000;
      color: rgb(255, 255, 255);
      font-weight: normal;
      text-align: center;
    }
  
    .table-rwd td {
      text-align: center;
    }
  
    .table-rwd td:first-of-type:before {
      content: "";
    }
  
    .table-rwd td:first-of-type:after {
      content: "";
    }
  
    .table-rwd tr:hover {
      background: rgba(181, 213, 144, 0.2);
    }
  
    .table-rwd tr td:nth-child(2n) {
      background: rgba(181, 213, 144, 0.2);
    }
  
    .table-container {
      overflow-x: auto;
    }
  
    .table-rwd {
      min-width: 900px;
    }
  
    .table-rwd td:second-child {
      position: absolute;
      background: rgb(255, 0, 0);
      width: 8em;
    }
  
    .table-rwd th:first-child {
      width: 8em;
    }
  
    .table-rwd tr:hover td:first-child {
      background: #6faeee;
      color: #fff;
    }
  
    /* .table-rwd tr:nth-child(2) td:first-child {
      box-shadow: 0 -2.7em 0 -6px #1A8CFF, -6px -2.7em 0 -6px #1A8CFF;
    } */
	</style>
</head>
<body>

<br>

<div class=" table-container container-center mt-5">

<table id="example" class="table-rwd" style="width: 40%">

  <thead>
	<h1>PRUEBA</h1>
 
	<tr>
	  <th scope="col">ID</th>
	  <th scope="col">NOMBRE</th>
	  <th scope="col">APELLIDO</th>
	  <th scope="col">COLONIA</th>
	
	<?php 
		$sql="SELECT * from php";
		$result=mysqli_query($conexion,$sql);
		while($mostrar=mysqli_fetch_array($result)){
		 ?>

		<tr>
			<td><?php echo $mostrar['id'] ?></td>
			<td><?php echo $mostrar['nombre'] ?></td>
			<td><?php echo $mostrar['apellido'] ?></td>
			<td><?php echo $mostrar['colonia'] ?></td>
			
		</tr>
	<?php 
	}
	 ?>
	</table>

</body>
</html>



	  
