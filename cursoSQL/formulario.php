<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="style.css">
  <title>Formulario</title>
</head>
<body>
<h2>Formulario de Registro</h2>
  <form method="POST" action="">
    <label for="nombre">Nombre<span><em>(requerido)</em></span>:</label>
    <input type="text" id="nombre" name="nombre" required><br><br>

    <label for="apellido">Apellido<span><em>(requerido)</em></span>:</label>
    <input type="text" id="apellido" name="apellido" required><br><br>

    <label for="email">Email<span><em>(requerido)</em></span>:</label>
    <input type="email" id="email" name="email" required><br><br>

    <input type="submit" value="Subscríbete">

    <?php

      if($_POST) {
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $email = $_POST['email'];

        $server = "localhost";
        $username = "root";
        $pass = "";
        $dbname = "cursosql";

        $connection = new mysqli($server, $username, $pass, $dbname);

        if($connection->connect_error) {
          die("Conexión fallida: " . $connection->connect_error);
        }

        $sql = "INSERT INTO Usuarios(nombre, apellido, email)
                VALUES ('$nombre', '$apellido', '$email')";

        if ($connection->query($sql) === TRUE ) {
          echo "Nuevo registro creado exitosamente.";
        } else {
          echo "Error: " . $sql . "<br>" . $connection->error;
        }

        $connection->close();
      }
    ?>
  </form>
  <script src="script.js"></script>
</body>
</html>