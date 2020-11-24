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

  
  <div class="container">
      <div class="row justify-content-center">
          <form class="mt-3" action="registrarProductos.php" method="POST">
              <h1 class="text-center">REGISTRO DE PRODUCTOS</h1>
                <div class="row">
                  <div class="col">
                      <input type="text" class="form-control" placeholder="Referencia_Producto" name="referencia_producto">
                  </div>
                  <div class="col">
                      <input type="text" class="form-control" placeholder="Marca_Producto" name="marca">
                  </div>
                </div>
                <br>
                <div class="col">
                  <input type="number" class="form-control" placeholder="Precio_Producto" name="precio">
                </div>
                      
                <div class="row mt-3">
                  <div class="col">
                      <label class="font-weight-bold text-light">Foto:</label>
                      <input type="text" class="form-control" placeholder="Foto URL" name="foto">
                  </div>
                </div>
                <br>
                <div class="form-group col">
                    <label class="font-weight-bold text-light">Descripción:</label>
                  <textarea class="form-control" placeholder="Descripcion del producto" name="descripcion" rows="3"></textarea>
                </div>
                <button type="submit" class="btn btn-primary mt-3 btn-block" name="botonRegistrar">REGISTRAR</button>
          </form>
      </div>
  </div>



  <footer class="footer" id="footerindex">
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