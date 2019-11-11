<?php
$banco = "crud";
$senha = "";
$servidor ="localhost";
$usuario ="root";

$con = mysqli_connect ($servidor, $usuario, $senha, $banco);
if (!$con) {
	echo "ERRO" . PHP_EOL;
	echo "Debugging errno:" . mysqli_connect_errno () . PHP_EOL;
	echo "Debugging error:" . mysqli_connect_error () . PHP_EOL;
	exit;
}
?>