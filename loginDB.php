<?php
include('conn.php');

require_once "conn.php";
$email=$_POST['email'];
$contraseña=$_POST['contraseña'];
session_start();
$_SESSION['email']=$email;

//conexion a db
$dbUser = "root";
$dbPass = "";
$server = "localhost";
$dbName = "tracking";
$conexion = mysqli_connect($server,$dbUser,$dbPass,$dbName);
if($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
    echo "<script>console.log( 'Fallo de conexion' ); </script>";
}
echo "<script>console.log( 'Conexion exitosa' ); </script>";

$consulta="SELECT*FROM usuario where email='$email' and contraseña='$contraseña'";
$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_num_rows($resultado);

if($filas){
    header("Location:home.php");
		//exit();
}else{
    
    header("Location:login.php");
    '<script>console.log("Error de autenticacion")</script>';
    echo '<script>alert("ERROR DE AUTENTICACION")</script>';
    //exit();
}
mysqli_free_result($resultado);
mysqli_close($conexion);
?>