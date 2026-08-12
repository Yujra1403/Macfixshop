<?php
$nombre = $_POST["nombre"];
$correo = $_POST["correo"];
$consulta = $_POST["consulta"];

$servicios = [
    "Examen de vista - Bs 50",
    "Armazón clásico - Bs 180",
    "Lentes de sol - Bs 120"
];
echo "<h2>Cita reservada en Óptica Mirasol</h2>";

echo "<p><strong>Nombre:</strong> $nombre</p>";
echo "<p><strong>Correo:</strong> $correo</p>";
echo "<p><strong>Consulta:</strong> $consulta</p>";
echo "<hr>";
echo "<h3>Lista de servicios:</h3>";
echo "<ul>";
foreach ($servicios as $servicio) {
    echo "<li>$servicio</li>";
}
echo "</ul>";
echo "<br>";
echo "<p><strong>Te atiende Samuel David Yujra Nina</strong></p>";
?>