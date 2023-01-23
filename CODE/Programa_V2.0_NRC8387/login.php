<?php
$usuario = $_POST["user"];
$password = $_POST["pass"];
$con =mysqli_connect('localhost','root','','user');
if ($con->connect_errno) {
    echo "Falló la conexión a MySQL: (" . $con->connect_errno . ") " . $con->connect_error;
}else{
    $query = "SELECT * FROM usuarios WHERE usuario='$usuario' AND pass='$password';";
    $resultado = $con->query($query);
    $num = $resultado->num_rows;
    if($num>0){   
        header("Location: pagina_principal.html"); 
    }else{
        echo 'El usuario o password es incorrecto, <a href="index.html">Vuelva a intenarlo</a>.<br/>';
    }
}



?>