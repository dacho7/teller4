<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulario Modificación</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
  <div class="container card pb-3">
    <div class="container">
      <h2 class="text-center">Realizar Oferta <? echo $_POST["nombre"];?></h2>
    </div>
    <form action="./procesarOfertar.php" method="POST">
      <div class="form-group">
        <div class=" mb-3">
          <input type="hidden" name="id" value="<?php echo $_POST["id"];?>">
          <input type="hidden" name="oferta" value="<?php echo $_POST["oferta"];?>">
          <input type="text" disabled class="form-control" name="id" id="idd" value="<?php echo $_POST["nombre"];?>">
        </div>
        <h4>Datos de Registro</h4>
        <div class="mb-3">
          <label for="valor" class="form-label">Valor A Ofertar en BTC</label>
          <input type="number" class="form-control" name="valor">
        </div>
        <div class="row">
          <div class="col">
            <label for="nombre" class="form-label">Nombres</label>
            <input type="text" class="form-control" name="nombres">
          </div>
          <div class="col">
            <label for="nombre" class="form-label">Apellidos</label>
            <input type="text" class="form-control" name="apellidos">
          </div>
        </div>
        <div class="mb-3">
          <label for="correo" class="form-label">Correo</label>
          <input type="email" class="form-control" name="correo">
        </div>
        <div class="mb-3">
          <label for="fecha" class="form-label">Dirección</label>
          <input type="text" class="form-control" name="direcicon">
        </div>

        <button type="submit" class="btn btn-primary">Actualizar</button>
      </div>

    </form>
  </div>
  <script src="./js/jquery/jquery-3.6.0.min.js"></script>
  <script src="./js/script.js"></script>
</body>

</html>