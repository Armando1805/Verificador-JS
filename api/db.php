<?php
// Create connection
$conn = new mysqli("localhost", "root","", "sistema_verificador");
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$query = "SELECT nombre_producto, precio_producto, imagen_producto FROM productos WHERE id_producto=".$codigo;
$result = $conn->query($query);

if ($result->num_rows > 0) {

  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
    }
} else {
  echo "0 results";
}
$conn->close();