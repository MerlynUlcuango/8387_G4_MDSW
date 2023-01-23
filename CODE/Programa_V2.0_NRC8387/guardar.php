<?php
$usuario = $_POST["user"];
$password = $_POST["pass"];
$con =mysqli_connect('localhost','root','','user');
if ($con->connect_errno) {
    echo "Falló la conexión a MySQL: (" . $con->connect_errno . ") " . $con->connect_error;
}else{
    $query = "INSERT INTO usuarios(usuario, pass) VALUES ('$usuario','$password');";
    $resultado = $con->query($query);
    if($resultado){   
        header("Location: index.html"); 
    }else{
        echo 'Sentencia incorrecta, <a href="index.html">Vuelva a intenarlo</a>.<br/>';
    }
}
?>