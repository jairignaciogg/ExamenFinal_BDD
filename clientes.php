<html>
  <head>
    <title>Clientes</title>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <h1 align=center>Clientes del viaje: <?php $folio=$_POST['folio']; echo $folio ?> </h1>
        <hr width=500><hr width=200>
      </div>
      <div class="row">
        <div class="col-sm-6"><!-- Consulta de clientes -->
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

          $sql = "SELECT asiento, cliente FROM $folio";
          $result = $conn->query($sql);

          if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
              echo "Asiento: " . $row["asiento"]. " - Cliente: " . $row["cliente"]. "<br>";
            }
          } else {
            echo "0 results";
          }
          $conn->close();
          ?>
        </div>
        <div class="col-sm-6"><!-- Alta de clientes -->
          <h1 align=center>Alta</h1>
          <form method="post" action="alta_clien.php">
            Folio: <input type="Text" name="db" value="<?php echo $folio ?>"><br>
            Asiento :<input type="number" name="asiento"><br>
            Cliente :<input type="Text" name="cliente"><br>
            <input type="Submit"  value="Aceptar información">
          </form>
        </div>
        <div class="row">
          <div class="col-sm-6"><!-- Modificar de autobuses -->
            <h1 align=center>Modificar</h1>
            <form method="post" action="mod_clien.php">
              Folio: <input type="Text" name="db" value="<?php echo $folio ?>"><br>
              Asiento :<input type="number" name="asiento"><br>
              Cliente :<input type="Text" name="cliente"><br>
              <input type="Submit"  value="Aceptar información">
            </form>
          </div>
          <div class="col-sm-6">
            <h1 align=center>Baja</h1><!-- Eliminar de autobuses -->
            <form method="post" action="del_clien.php">
              Folio: <input type="Text" name="db" value="<?php echo $folio ?>"><br>
              Asiento :<input type="number" name="asiento"><br>
              <input type="Submit"  value="Eliminar">
            </form>
          </div>
      </div>
    </div>
    <div class="row">
      <a href=folios.php><center><h1>Regresar</h1></a>
    </div>
  </body>
</html>
