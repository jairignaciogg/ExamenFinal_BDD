<html>
  <head>
    <title>Autobuses</title>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <h1 align=center>Administracion de Autobuses</h1>
        <hr width=500><hr width=200>
      </div>
      <div class="row">
        <div class="col-sm-6"><!-- Consulta de autobuses -->
          <h1 align=center>Autobuses</h1>
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

          $sql = "SELECT placas, marca, año, asientos FROM autobuses";
          $result = $conn->query($sql);

          if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
              echo "Placas: " . $row["placas"]. " - Marca: " . $row["marca"]. " - Año:  " . $row["año"]." - Asientos:  " . $row["asientos"]. "<br>";
            }
          } else {
            echo "0 results";
          }
          $conn->close();
          ?>
        </div>
        <div class="col-sm-6"><!-- Consulta de choferes -->
          <h1 align=center>Choferes</h1>
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
              echo "ID: " . $row["id"]." -Nombre: " . $row["nombre"]. "<br>";
            }
          } else {
            echo "0 results";
          }
          $conn->close();
          ?>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-8"><!-- Consulta de folios -->
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

          $sql = "SELECT folio,chofer,autobus,origen,destino,hora,fecha FROM folios";
          $result = $conn->query($sql);

          if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
              echo "Folio: " . $row["folio"]. " - Chofer: " . $row["chofer"]. " - Autobus:  " . $row["autobus"]." - Origen:  " . $row["origen"]." - Destino:  " . $row["destino"]." - Hora:  " . $row["hora"]." - Fecha:  " . $row["fecha"]. "<br>";
            }
          } else {
            echo "0 results";
          }
          $conn->close();
          ?>
        </div>
        <div class="col-sm-4"><!-- Alta de folios -->
          <h1 align=center>Alta</h1>
          <form method="post" action="alta_folio.php">
            Folio :<input type="Text" name="folio"><br>
            Chofer :<input type="number" name="chofer"><br>
            Autobus :<input type="Text" name="autobus"><br>
            Origen :<input type="Text" name="origen"><br>
            Destino :<input type="Text" name="destino"><br>
            Hora :<input type="time" name="hora"><br>
            Fecha :<input type="date" name="fecha"><br>
            <input type="Submit"  value="Aceptar información">
          </form>
        </div>
        <div class="row">
          <div class="col-sm-6"><!-- Modificar de autobuses -->
            <h1 align=center>Modificar</h1>
            <form method="post" action="mod_folio.php">
              Folio :<input type="Text" name="folio"><br>
              Chofer :<input type="number" name="chofer"><br>
              Autobus :<input type="Text" name="autobus"><br>
              Origen :<input type="Text" name="origen"><br>
              Destino :<input type="Text" name="destino"><br>
              Hora :<input type="time" name="hora"><br>
              Fecha :<input type="date" name="fecha"><br>
              <input type="Submit"  value="Aceptar información">
            </form>
          </div>
          <div class="col-sm-6">
            <h1 align=center>Baja</h1><!-- Eliminar de autobuses -->
              <form method="post" action="del_folio.php">
              Folio :<input type="Text" name="folio"><br>
              <input type="Submit"  value="Eliminar">
            </form>
          </div>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-6">
        <h1 align=center>Clientes</h1><!-- Eliminar de autobuses -->
          <form method="post" action="clientes.php">
          Folio :<input type="Text" name="folio"><br>
          <input type="Submit"  value="Consultar Clientes">
        </form>
      </div>
      <div class="col-sm-6">
        <a href=index.html><center><h1>Regresar</h1></a>
      </div>

    </div>
  </body>
</html>
