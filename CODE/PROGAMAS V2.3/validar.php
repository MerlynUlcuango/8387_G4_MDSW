<?php
$usuario=$_POST['usuario'];
$password=$_POST['password'];

//conectar base de datos
$conexio= mysqli_connect("localhost","root","","user");
$consulta="SELECT* FORM usuario WHERE usuario='$usuario' and password='$password'";
$resultado=mysqli,query($conexion,$consulta);

$filas= mysqlo_num_rows($resultado);

if($filas>0){
header("location:bienvenido.html");
}
else{
    echo"Error";
}
mysqli_free_result($resultado);
mysqli_close($conexion);