<?php
$conn = new mysqli('localhost', 'usuario', 'contraseña', 'mi_tienda');
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
$sql = "SELECT * FROM productos";
$result = $conn->query($sql);
while($row = $result->fetch_assoc()) {
    echo "<div class='producto'>
            <h3>{$row['nombre']}</h3>
            <p>{$row['precio']}</p>
          </div>";
}
$conn->close();
?>
