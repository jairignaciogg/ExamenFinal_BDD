<html>
  <head>
    <title>Choferes</title>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <h1 align=center>Administracion de Choferes</h1>
        <hr width=500><hr width=200>
      </div>
      <div class="row">
        <div class="col-sm-8"><!-- Consulta de choferes -->
          <h1 align=center>Consultar</h1>
          <?php
          $servername = "mysql.hostinger.mx";
          $username = "u331364540_jigg";
          $password = "j05i07gg";
          $dbname = "u331364540_jigg";

          // Create connection
          $conn = new mysqli($servername, $username, $password, $dbname);
          // Check connection
          if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
          }

          $sql = "SELECT id, nombre, direccion, edad, telefono FROM choferes";
          $result = $conn->query($sql);

          if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
              echo "ID: " . $row["id"]." -Nombre: " . $row["nombre"]. " -Direccion: " . $row["direccion"]. " - Edad:  " . $row["edad"]." - Telefono:  " . $row["telefono"]. "<br>";
            }
          } else {
            echo "0 results";
          }
          $conn->close();
          ?>
        </div>
        <div class="col-sm-4"><!-- Alta de autobuses -->
          <h1 align=center>Alta</h1>
          <form method="post" action="alta_chof.php">
            ID :<input type="number" name="id"><br>
            Nombre :<input type="Text" name="nombre"><br>
            Direccion :<input type="Text" name="direccion"><br>
            Edad :<input type="number" name="edad"><br>
            Telefono :<input type="number" name="telefono"><br>
            <input type="Submit"  value="Aceptar información">
          </form>
        </div>
        <div class="row">
          <div class="col-sm-6"><!-- Modificar de autobuses -->
            <h1 align=center>Modificar</h1>
            <form method="post" action="mod_chof.php">
              ID :<input type="number" name="id"><br>
              Nombre :<input type="Text" name="nombre"><br>
              Direccion :<input type="Text" name="direccion"><br>
              Edad :<input type="number" name="edad"><br>
              Telefono :<input type="number" name="telefono"><br>
              <input type="Submit"  value="Aceptar información">
            </form>
          </div>
          <div class="col-sm-6">
            <h1 align=center>Baja</h1><!-- Eliminar de autobuses -->
            <form method="post" action="del_chof.php">
              ID :<input type="number" name="id"><br>
              <input type="Submit"  value="Eliminar">
            </form>
          </div>
      </div>
    </div>
    <div class="row">
      <a href=index.html><center><h1>Regresar</h1></a>
    </div>
  </body>
</html>
