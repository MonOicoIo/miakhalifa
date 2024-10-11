
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<?php

$alumnos = [
    "Juan" => 8,
    "María" => 9,
    "Pedro" => 7,
    "Ana" => 10,
    "Luis" => 6
];


foreach ($alumnos as $alumno => $calificacion) {
    echo "La calificación de " . $alumno . " es " . $calificacion . "<br>";
}

asort($alumnos);

echo "<br>" . "Después de ordenar: " . "<br>" . "<br>";

foreach ($alumnos as $alumno => $calificacion) {
    echo "La calificación de $alumno es $calificacion" . "<br>";
}

?>


</body>
</html>