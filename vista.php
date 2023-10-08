<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Formulario de Datos</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f4f4f4;
      text-align: center; 
      margin: 50px;
    }

    form {
      display: inline-block;
      text-align: left;
    }

    label {
      display: block;
      margin-bottom: 10px;
    }

    input, select {
      margin-bottom: 10px;
    }

    button {
      display: block;
    }
  </style>
</head>
<body>

  <form action="controlador.php" method="post">
    <label for="nombres">Nombres:</label>
    <input type="text" id="nombres" name="nombres" required>

    <label for="ap_paterno">Ap.Paterno:</label>
    <input type="text" id="ap_paterno" name="ap_paterno" required>

    <label for="ap_materno">Ap.Materno:</label>
    <input type="text" id="ap_materno" name="ap_materno" required>

    <label for="direccion">Direccion:</label>
    <input type="text" id="direccion" name="direccion" required>

    <label for="fecha_nacimiento">Fecha de nacimiento:</label>
    <input type="date" id="fecha_nacimiento" name="fecha_nacimiento" required>

    <label for="telefono">Telefono:</label>
    <input type="number" id="telefono" name="telefono" required>

    <label for="celular">Celular:</label>
    <input type="number" id="celular" name="celular" required>

    <label for="lugar_nacimiento">Lugar de nacimiento:</label>
    <input type="text" id="lugar_nacimiento" name="lugar_nacimiento" required>

    <label for="pais">País:</label>
    <input type="text" id="pais" name="pais" required>

    <label for="correo">Correo electrónico:</label>
    <input type="email" id="correo" name="correo" required>

    <label for="carrera">Carrera:</label>
    <input type="text" id="carrera" name="carrera" required>

    <button type="submit">Enviar</button>
  </form>

</body>
</html>
