<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Procesar</title>
</head>
<body>
<?php
$conexion=mysqli_connect("127.0.0.1","root","","dinosauriosdb");
if(mysqli_connect_errno()){
  echo "Conexion Falló:".mysqli_connect_error();
}
else {
  //Seleccionar Base de Datos
  mysqli_select_db($conexion,"dinosauriosdb") or die("No se selecciono Base de Datos");

  //Consulta
  $SQL="INSERT INTO  dinos (nombre,descripcion,nombre_cientifico,velocidad,clase,filo,peso,altura,imagen) VALUES ('".$_POST["nombre"]."','".$_POST["descripcion"]."','".$_POST["nombre_cientifico"]."','".$_POST["velocidad"]."','".$_POST["clase"]."','".$_POST["filo"]."','".$_POST["peso"]."','".$_POST["altura"]."','".$_POST["imagen"]."')";
  $resultado=mysqli_query($conexion,$SQL);
  if(!$resultado){
    echo "Error al Ingresar".mysqli_error($conexion);    
  }
  else{
    header('Location: ./listardinos.php');
  }
}
?> 
</body>
</html>
