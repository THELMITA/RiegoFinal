<?php
echo "lecturas de sensor Para riego <br>";


$lectura = $_GET['lect'];


echo "El sensor tiene la siguiente lectura : ".$lectura."<br>";

$usuario = "root";
$contrasena = "admin";
$servidor = "localhost";
$basededatos = "riego2";


$enlace = mysqli_connect($servidor, $usuario, $contrasena, $basededatos);

if (!$enlace) {
	echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
    echo "errno de depuración: " . mysqli_connect_errno() . PHP_EOL;
    echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
    die('Error de Conexión (' . mysqli_connect_errno() . ') '
            . mysqli_connect_error());
			
}

echo 'Éxito... ' . mysqli_get_host_info($enlace) . "\n";

$db = mysqli_select_db( $enlace, $basededatos ) or die ( "No se ha podido seleccionar la base de datos" );


$consulta = "INSERT INTO sensor (modelo, lectura,tipoLectura) VALUES ('DHT11', $lectura,'Temperatura');";


$resultado = mysqli_query( $enlace, $consulta );

echo "Resultado de la consulta".$resultado;


mysqli_close($enlace);
?>