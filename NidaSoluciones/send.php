<?php

// **Conexión a la base de datos**
include("conexion.php");

// **Validación de datos del formulario**
$nombre = isset($_POST['nombre']) ? trim($_POST['nombre']) : '';
$telefono = isset($_POST['telefono']) ? trim($_POST['telefono']) : '';
$email = isset($_POST['email']) ? trim($_POST['email']) : '';
$mensaje = isset($_POST['mensaje']) ? trim($_POST['mensaje']) : '';

// **Validación de campos vacíos**
if (empty($nombre) || empty($telefono) || empty($email) || empty($mensaje)) {
  echo "<p>**Error:** Todos los campos son obligatorios.</p>";
  exit;
}

// **Validación de formato de email**
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  echo "<p>**Error:** El formato del email no es válido.</p>";
  exit;
}

// **Escaping data for security**
$nombre = mysqli_real_escape_string($conex, $nombre);
$telefono = mysqli_real_escape_string($conex, $telefono);
$email = mysqli_real_escape_string($conex, $email);
$mensaje = mysqli_real_escape_string($conex, $mensaje);

// **Componemos la sentencia SQL con prepared statements**
$stmt = $conex->prepare("INSERT INTO datos (nombre, telefono, email, mensaje) VALUES (?, ?, ?, ?)");
$stmt->bind_param("ssss", $nombre, $telefono, $email, $mensaje);

// **Ejecutamos la sentencia y comprobamos si ha ido bien**
if ($stmt->execute()) {
  echo "<p>**Registro insertado con éxito**</p>";
} else {
  echo "<p>**Hubo un error al ejecutar la sentencia de inserción: " . $conex->error . "</p>";
}

$stmt->close();
$conex->close();

?>