<!DOCTYPE html>
<html>
<head>
  <title>Inicio</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="view/css/estilo.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body background="view/imagenes/descarga.jpg">
<div class="formulario">
<div class="container">
  <h2>Iniciar Sesion</h2>
  <form action="" class="was-validated">
    <div class="form-group">
      <label for="" class="text-white">Usuario:</label>
      <input type="text" class="form-control" placeholder="Ingrese su correo" name="uname" required>
      <div class="valid-feedback">Correcto.</div>
      <div class="invalid-feedback">Por favor ingrese su correo electronico.</div>
    </div>
    <div class="form-group">
      <label for="" class="text-white">Contraseña:</label>
      <input type="password" class="form-control" placeholder="Ingrese su contraseña" name="" required>
      <div class="valid-feedback">Correcto.</div>
      <div class="invalid-feedback">Por favor ingrese su contraseña.</div>
    </div>
    <div class="form-group form-check">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="" required><div class="text-white"> Recordarme</div>
      </label>
    </div>
    <button type="submit" class="btn btn-success">Ingresar</button>
    <p></p>
    <div class="form-group">
                        <div class="col-sm-12"><div class="text-white">¿No tienes cuenta?</div>
                            <a href=""><p class="txt-info">Registrar Usuario</p></a>
                            
                        </div>
  </form>
</div>
</div>
</body>
</html>