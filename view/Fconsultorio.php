<!DOCTYPE html>
<html>
<head>
  <title>Principal</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<nav class="navbar navbar-expand-sm bg-info navbar-info">
  <a class="navbar-brand" href="#">
    <img src="imagenes\icono.png" alt="logo" style="width:40px;">
  </a>
  
  
  <ul class="navbar-nav">
    <li class="nav-item">
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#registroC">Consultorios</button>   
    </li>
    <li class="nav-item">
      <a class="nav-link text-dark" href="#">Medicos</a>
    </li>
    <li class="nav-item">
      <a class="nav-link text-dark" href="#">Pacientes</a>
    </li>
    <li class="nav-item">
      <a class="nav-link text-dark" href="#">Citas</a>
    </li>
  </ul>
  <ul class="nav navbar-nav ml-auto">
    <button class="btn btn-danger navbar-btn">Cerrar Sesion</button>
  </ul>
</nav>
<div id="registroC" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
        <h3 align="center">Registrar Consultorio</h3>
        <form action="../controller/controladorconsultorio.php" method="POST">
          <div class="gorm-group">
            <label>No. de Consultorio:</label>
            <input type="number" class="form-control" name="txtnumconsul" placeholder="Ingrese el numerodel consultorio">
          </div>
          <div class="gorm-group">
            <label>Nombre de Consultorio:</label>
            <input type="text" class="form-control" name="txtnomconsul" placeholder="Ingrese el nombre del consultorio">
          </div>
          <br>
          <button type="submit" class="btn btn-success" name="registroconsul">Registrar</button>
        </form>
    </div>
  </div>
</div>
</div>
<!--<div class="container-fluid">
  <h3>Brand / Logo</h3>
  <p>When using the .navbar-brand class on images, Bootstrap 4 will automatically style the image to fit the navbar.</p>
</div>-->

<div class="content" style="text-align: center;">
          <div class="justify-content-center">
            <div class="col-auto mt-5">
              <table class="table table-dark table-hover">
                <tr>
                  <th width="40%">Codigo consultorio</th>
                  <th width="40%">Nombre del consultorio</th>
                  <th width="10%">Editar</th>
                  <th width="10%">Eliminar</th>
                </tr>
                <?php
                require_once '../model/consultorio.php';
                $obj1=new Consultorio();
                $datos= $obj1->listarconsultorios();

                foreach($datos as $key){

                ?>
                <tr>
                  <td><?php echo $key["ConNumero"]?></td>
                  <td><?php echo $key["ConNombre"]?></td>
                  <td><a href="" class="btn btn-success">Actualizar</td>
                  <td><a href="" class="btn btn-danger">Eliminar</td>
                </tr>
                <?php}?>
              </table>
            </div>
          </div>
</div>
</body>
</html>