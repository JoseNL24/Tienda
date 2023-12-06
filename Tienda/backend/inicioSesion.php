<?php
include("conexion.php");

session_start();

  $usuario=$_POST['usuario'];
  $contrasena=$_POST['contrasena'];



  $consulta="SELECT *FROM usuarios WHERE user='$usuario' AND password='$contrasena'";
  $resultado=mysqli_query($conexion,$consulta);

  $filas=mysqli_fetch_array($resultado);


  if (!empty($resultado) AND mysqli_num_rows($resultado) > 0) {
    $_SESSION['usuario']=$usuario;
    header('Location:../index.html');
  }else{
    echo "¡Algo ha fallado! Consulte sus datos";
  }


  
    
    mysqli_free_result($resultado);
  

mysqli_close($conexion);

?>