<?php
include("conexion.php");
include("nav.php");
?>
<!DOCTYPE html>
<html>

<head>
  <title></title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
    integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="select2/select2.min.css">
  <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
    crossorigin="anonymous"></script>
  <script src="select2/select2.min.js"></script>
</head>

<body>
<!-- Formulario -->
  <form action="procesar.php" method="POST" class="container mt-5">
    

    <div class="col">
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Nombre</label>
        <input type="text" class="form-control" placeholder="Nombre" autocomplete="off" name="nombre">
      </div>
    </div>
    <P></P>

    <div class="col-12">
      <label for="exampleFormControlInput1" class="form-label">Ciudad</label>
      <select id="ciudad" style="width: 100%" name="apellido">
        <option value="Hermosillo">Hermosillo</option>
        <option value="Obregon">Obregon</option>
        <option value="Navojoa">Navojoa</option>
        <option value="Empalme">Empalme</option>
      </select>
    </div>
    
    <P></P>

    <div class="col-12">
      <label for="exampleFormControlInput1" class="form-label">Colonia</label>
      <select id="Colonias" style="width: 100%" name="colonia">
        <?php while ($ver=mysqli_fetch_row($result)) {?>

        <option value="<?php echo $ver[1] ?>">
          <?php echo $ver[1] ?>
        </option>
        <?php  }?>
      </select>
    </div>

    <p></p>

    <div class="col">
      <button type="submit" class="btn btn-info" name="guardar">Guardar</button>
      <button type="button" class="btn btn-danger">Cancelar</button>
      <a href="mostrar.php"><button type="button" class="btn btn-success">Mostrar</button></a>
    </div>
  </form>
</body>
</html>




<script type="text/javascript">
  $(document).ready(function () {
    $('#Colonias').select2();
  });
  $(document).ready(function () {
    $('#ciudad').select2();
  });
</script>