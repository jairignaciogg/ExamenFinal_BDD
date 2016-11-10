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
        <div class="col-sm-6"><!-- Alta de autobuses -->
          <h1 align=center>Alta</h1>
          <form method="post" action="alta_auto.php">
            Placas :<input type="Text" name="placas"><br>
            Marca :<input type="Text" name="marca"><br>
            Año :<input type="number" name="año"><br>
            Asientos :<input type="number" name="asientos"><br>
            <input type="Submit"  value="Aceptar información">
          </form>
        </div>
        <div class="row">
          <div class="col-sm-6"><!-- Modificar de autobuses -->
            <h1 align=center>Modificar</h1>
            <form method="post" action="mod_auto.php">
              Placas :<input type="Text" name="placas"><br>
              Marca :<input type="Text" name="marca"><br>
              Año :<input type="number" name="año"><br>
              Asientos :<input type="number" name="asientos"><br>
              <input type="Submit"  value="Aceptar información">
            </form>
          </div>
          <div class="col-sm-6">
            <h1 align=center>Baja</h1><!-- Eliminar de autobuses -->
            <form method="post" action="del_auto.php">
              Placas :<input type="Text" name="placas"><br>
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
