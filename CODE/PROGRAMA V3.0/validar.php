<?php

include('db.php');

$USUARIO=$_POST['usuario'];
$PASSWORD=$_POST['password'];


$consulta = "SELECT* FROM Personal where usuario = '$USUARIO' and password ='$PASSWORD' ";
$resultado= mysqli_query($conexion, $consulta);

$filas=mysqli_num_rows($resultado);

if($filas){
    header("location:home.html");
    ?>
    <script>
   alert("BIENVENIDO AL SISTEMA");
   </script>
     <?php


}else{
    include("index.html");
     ?>
    <script>
   alert("USUARIO O CONTRASEÑA INCORRECTOS");
   </script>
     <?php

    
}
mysqli_free_result($resultado);
mysqli_close($conexion);





?>