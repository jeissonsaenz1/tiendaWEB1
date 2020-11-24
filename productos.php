<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jogo</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" href="img/core-img/favicon.ico">
</head>
<body>
  <div class="sidebar-container">
    <div class="sidebar-logo">
      <a href="index.php"><img src="img/core-img/logo.png" alt=""></a>
    </div>
    <ul class="sidebar-navigation">
      <li class="header">Navegador</li>
      <li>
        <a href="index.php">
          <i class="fa fa-home" aria-hidden="true"></i> Inicio
        </a>
      </li>
      <li>
        <a href="#">
          <i class="fa fa-tachometer" aria-hidden="true"></i> Tienda
        </a>
      </li>
      <li>
        <a href="productos.php">
          <i class="fa fa-users" aria-hidden="true"></i> Productos
        </a>
      </li>
      <li>
        <a href="#">
          <i class="fa fa-cog" aria-hidden="true"></i> Carrito
        </a>
      </li>
      <li>
        <a href="#">
          <i class="fa fa-info-circle" aria-hidden="true"></i> Pagar
        </a>
      </li>
    </ul>
  </div>

  <?php
  include("BaseDatos.php");

  $consultaSQL="SELECT * FROM productos WHERE 1";

  $transaccion=new Basedatos();
  $productos=$transaccion->buscarDatos($consultaSQL);
  
  ?>


<div class="container">
    <div class="row row-cols-1 row-cols-md-3">  
    <?php foreach($productos as $producto):?>

        <div class="col mb-4">
            <div class="card h-100">
                <img src="<?php echo($producto)["foto"]?>" class="card-img-top" alt="imagen">
                <div class="card-body">
                    <h3 class="card-title">$ <?php echo($producto["precio"])?></h3>
                    <h5 class="card-title">Referencia: <?php echo($producto["referencia"])?></h5>
                    <h5 class="card-title">Marca: <?php echo($producto["marca"])?></h5>
                    <p class="card-text">Descripcion: <?php echo($producto["descripcion"])?></p>
                    <a href="eliminarProductos.php?id=<?php echo($producto["idProducto"])?>" class="btn btn-danger">Eliminar</a>
                    <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#editar<?php echo($producto["idProducto"]) ?>">
                        Editar
                    </button>
                </div>
            </div>
            <div class="modal fade" id="editar<?php echo($producto["idProducto"]) ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Editando producto</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="editarProducto.php?id=<?php echo($producto["idProducto"]) ?>" method="POST">
                                <div class="form-group">
                                    <label>Precio</label>
                                    <input type="number" class="form-control" name="precioEditar" value="<?php echo($producto["precio"])?>">
                                </div>
                                <div class="form-group">
                                    <label>Referencia</label>
                                    <input type="text" class="form-control" name="referenciaEditar" value="<?php echo($producto["referencia"])?>">
                                </div>
                                <div class="form-group">
                                    <label>marca</label>
                                    <input type="text" class="form-control" name="marcaEditar" value="<?php echo($producto["marca"])?>">
                                </div>
                                <div class="form-group">
                                    <label>Descripción:</label>
                                    <textarea class="form-control" name="descripcionEditar"> <?php echo($producto["descripcion"])?>  </textarea>
                                </div>
                                <button type="submit" class="btn btn-info" name="botonEditar">Editar</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach?>
    </div>
</div>
  


  <footer class="footer">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-lg-4">
                    <div class="single_widget_area">
                        <div class="footer-logo mr-50">
                            <a href="index.php"><img src="img/core-img/logo3.png" alt=""></a>
                        </div>
                        <p class="copywrite">
                        Copyright &copy;<script>document.write(new Date().getFullYear());</script> Todos los derechos reservados | Esta pagina esta hecha <i class="fa fa-heart-o" aria-hidden="true"></i> por <a href="" target="_blank">JEISSON BETANCUR</a>
                    </div>
                </div>
    
                <div class="col-12 col-lg-8">
                        <div>
                            <nav class="navbar navbar-expand-lg justify-content-end">
                                <div>
                                    <ul class="navbar-nav ml-auto">
                                        <li class="nav-item active">
                                            <a class="nav-link" href="index.php">Inicio</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="">Tienda</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="productos.php">Productos</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="">Carrito</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="">Pagar</a>
                                        </li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                </div>
            </div>
        </div>
  </footer>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</body>
</html>