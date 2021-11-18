<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Procesar</title>
</head>
<body>
<?php //Iniciar Sintaxis.
$conexion=mysqli_connect("127.0.0.1","root","","dinosauriosdb");
if(mysqli_connect_errno()){
  echo "Conexion Falló:".mysqli_connect_error();
}
else{
  //Seleccionar Base de Datos
  mysqli_select_db($conexion,"dinosauriosdb") or die("No se selecciono Base de Datos");

  //Consulta
  $SQL="INSERT INTO  ofertas (id_dino,valor,nombres,apellidos,direccion,correo) VALUES ('".$_POST["id"]."','".$_POST["valor"]."','".$_POST["nombres"]."','".$_POST["apellidos"]."','".$_POST["direccion"]."','".$_POST["correo"]."')";
  $resultado=mysqli_query($conexion,$SQL);
  if(!$resultado){
    echo "Error al Ingresar".mysqli_error($conexion);    
  }
  else{
    $SQL2="UPDATE dinos SET ofertas = '".$_POST["oferta"]."'+1 WHERE id ='".$_POST["id"]."'";
    $resultado2=mysqli_query($conexion,$SQL2);
    header('Location: ./listardinos.php');
  }
  //echo "Conexion Correcta";
}
?> <!-- //Finalizar  Sintaxis. -->
</body>
</html>