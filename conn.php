<?php 
	$dbUser = "root";
	$dbPass = "";
	$server = "localhost";
	$dbName = "tracking";
	$conn = mysqli_connect($server,$dbUser,$dbPass,$dbName);
	if($conn->connect_error){
		die("Connection failed: " . $conn->connect_error);
		echo "<script>console.log( 'Fallo de conexion' ); </script>";
	}
	echo "<script>console.log( 'Conexion exitosa' ); </script>";
?>