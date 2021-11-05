<?php
echo "Solicitud en proceso...";

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

$db = mysqli_select_db($enlace, $basededatos) or die("No se ha podido seleccionar la base de datos");

$consulta = "SELECT R.inicio, R.fin, hour(now()),CONVERT(r.inicio, time),time(now())
FROM riego R INNER JOIN agenda A on A.idagenda=R.idagenda and day(A.dia)=day(now()) and time(now())>=CONVERT(r.inicio, time) and time(now())<=CONVERT(r.fin, time);";


$resultado = mysqli_query($enlace, $consulta);
$cantidad     = mysqli_num_rows($resultado);
if ($cantidad >= 1)
    echo "REGAR";
else
    echo "PARAR";
/*

foreach ($resultado as $datos) {
    echo "inicio:".$datos['inicio']."\n";
    echo "fin:".$datos['fin']."\n";
}

*/

mysqli_close($enlace);
