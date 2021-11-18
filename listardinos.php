<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lista</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<div class="card">
  <div class="card-body">
    <h2 class="text-center">Bienvenidos a Nuestro Sitio para conseguir tu Dino Digital 2031</h2>
    <h6 class="text-center">Creado por Brayan Tobar && Juan Meneses</h6>
  </div>
</div> <br>
<div class="container">
  <h3 >Dinos Disponibles</h3> <br>
<div class="row">
<?php 
$conexion=mysqli_connect("127.0.0.1","root","","dinosauriosdb");
if(mysqli_connect_errno()){
  echo "Conexion Falló:".mysqli_connect_error();
}
else{
  //Seleccionar Base de Datos
  mysqli_select_db($conexion,"dinosauriosdb") or die("No se selecciono Base de Datos");

  //Consulta
  $SQL="SELECT * FROM dinos ORDER BY id desc";
  $resultado=mysqli_query($conexion,$SQL);
  if(!$resultado){
    echo "Error al consultar".mysqli_error($conexion);    
  }
  else{
    while($datos=mysqli_fetch_assoc($resultado)){
      echo '
          <div class="col-sm-6">
            <div class="card">
              <div class="card-body">           
                <h6 class="card-subtitle mb-2 text-muted"><b>'.$datos["nombre"].'</b></h6>      
                <p class="card-text">'.$datos["descripcion"].'</p> 
                <div class="row">
                  <div class="col"> <p class="card-text"><b>Filo:</b> '.$datos["filo"].'</p> </div>
                  <div class="col"> <p class="card-text"><b>Clase:</b> '.$datos["clase"].'</p> </div>
                </div>
                <div class="row">
                  <div class="col"> <p class="card-text"><b>Velocidad Maxima:</b> '.$datos["velocidad"].' Km/h</p> </div>
                  <div class="col"> <p class="card-text"><b>Altura:</b> '.$datos["altura"].' metros</p> </div>
                </div> <br>     
                <p class="card-text"><b>Peso: </b>'.$datos["peso"].' Toneladas</p>
                <img class="center" width="200px" src="'.$datos["imagen"].'" alt="Los Tejos" /> <br /><br />
                <button type="button" class="btn btn-primary" disabled>
                  <p class="card-text" color="green">'.$datos["ofertas"].' Ofertas</p>
                </button>
                </div>
                <button type="button" class="btn btn-success" data-id="'.$datos["id"].'" data-nombre="'.$datos["nombre"].'" data-oferta="'.$datos["ofertas"].'">Ofertar</button>
            </div>
          </div>';
    }
    //print_r($datos);
    mysqli_free_result($resultado);
  }
  //echo "Conexion Correcta";
}


?> 
</div>
</div>
<script src="./js/jquery/jquery-3.6.0.min.js"></script>
<script src="./js/scriptOfertar.js"></script>
</body>
</html>
