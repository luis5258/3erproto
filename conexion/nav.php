<!doctype html>
<html lang="es">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
  <link rel="" href="https://cdn.datatables.net/fixedheader/3.1.6/css/fixedHeader.dataTables.min.css">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
    integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

  <!-- css -->
  <link rel="stylesheet" href="{% static 'css/style.css' %}">
  <style>
    * {
      padding: 0px;
      margin: 0px;
    }

    #header {
      margin: auto;
      width: 500px;
      font-family: Arial, Helvetica, sans-serif;
    }

    ul,
    ol {
      list-style: none;
    }

    .nav li a {
      background-color: rgb(255, 255, 255);
      color: rgb(0, 0, 0);
      text-decoration: none;
      padding: 10px 15px;
      display: block;
    }

    .nav li a:hover {
      background-color: #bdb9b9;
    }

    .nav>li {
      float: left;
    }

    .nav li ul {
      display: none;
      position: absolute;
      min-width: 140px;
    }

    .nav li:hover>ul {
      display: block;
    }

    .nav li ul li {
      position: relative;
    }

    .nav li ul li ul {
      right: -140px;
      top: 0px;
    }

    body {
      background-color: rgb(6, 0, 85);
    }

    .container {
      margin-top: 25px;
    }

    /* .carousel{
        margin: auto;
        width: auto;
      } */
    .navbar {
      background-color: rgb(0, 0, 0);
    }

    .vaca {
      width: 100px;
      margin-right: -50px;
    }

    .text-light {
      margin-left: 20px;
      margin-top:5px    }
  </style>
  <title>DATOS GANADO</title>
</head>

<body>

  <nav class="navbar navbar-expand-lg navbar-light">
    <!-- https://cdn.icon-icons.com/icons2/1465/PNG/512/458cow_100744.png -->
    <div class="container">
      <a class="navbar-brand text-light font-weight-bold flex" href="#">
        <img src="images/logo1.png" alt="" class="vaca"> </a>
        <div class="flex alinear">
          <h4 class="text-light">Ganadera Valmo</h4>
        </div>
     


      <button class="navbar-toggler bg-light" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <div id="header">
          <ul class="nav">
            <li><a>Catalogo ↓</a>

              <ul>
                <li><a href="{% url 'clientedate' %}">Clientes</a></li>

                <li><a href="{% url 'corraldate' %}">Corrales</a></li>

                <!-- <li><a href="{% url 'productodate' %}">Productos</a></li> -->
<!-- 
                <li><a href="{% url 'provedordate' %}">Provedores</a></li>

                <li><a href="{% url 'operadordate' %}">Operadores</a></li>

                <li><a href="{% url 'materiaaprimadate' %}">Materias Primas</a></li>
              
                <li><a href="#">Unidad de Medida →</a></li>
                
                <li><a href="{% url 'tipoanimaldate' %}">Tipo de animales</a></li>
                
                <li><a href="{% url 'contenedoresMPdate' %}">Contenedores Materia Prima</a></li>
                
                <li><a href="{% url 'contenedoresProducto' %}">Contenedores Producto</a></li> -->
              </ul>
            </li>
            <li><a>Procesos ↓</a>
              <ul>
                <li><a href="{% url 'registarDatos' %}">Surtidos</a></li>

                <li><a href="{% url 'registarDatos' %}">Recetas</a></li>
                
                <!-- <li><a href="{% url 'EntMatPrima' %}">Entrada Materias Primas</a></li>

                <li><a href="{% url 'SalMatPrima' %}">Salida Materia Prima</a></li>
                
                <li><a href="{% url 'EntProductos' %}">Entrada Productos</a></li>
                
                <li><a href="{% url 'SalProductos' %}">Salida Productos</a></li>
                
                <li><a href="#">Ent-Sal Animales →</a></li>
                <li><a href="#">Ordenes Surtido Animales →</a></li>
                <li><a href="#">Ordenes Surt. Opera Con Tolva →></a>
                  <ul>
                    <li><a href="#">Hab. Ord. Tolva</a></li>
                    <li><a href="#">Subir Ord. Comp.</a></li>
                  </ul>
                </li>
                <li><a href="#">Captura Man de Ordenes Surtidas →</a></li>
                <li><a href="#">Inventario Inicial Materia Prima →</a></li>
                <li><a href="#">Inventario Inicial Productos →</a></li> -->
              </ul>
            </li>
            <li><a href="{% url 'registro' %}">Cerrar sesión</a></li>
            <ul>
              <!-- <li><a href="{% url 'web' %}">web</a></li> -->
            </ul>
            </li>

        </div>
      </div>
    </div>
  </nav>



  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns"
    crossorigin="anonymous"></script>

</body>

</html>