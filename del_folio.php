<html>
  <head>
    <title>Examen de JIGG</title>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </head>
  <body>
    <div class="container">
      <div class="col-sm-12">
        <?php
          $servername = "mysql.hostinger.mx";
          $username = "u331364540_jigg";
          $password = "j05i07gg";
          $dbname = "u331364540_jigg";
          $folio=$_POST['folio'];


          try {
              $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
              // set the PDO error mode to exception
              $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

              // sql to delete a record
              $sql = "DELETE FROM folios WHERE  folio='$folio'";

              // use exec() because no results are returned
              $conn->exec($sql);
              }
          catch(PDOException $e)
              {
                echo $sql . "<br>" . $e->getMessage();
                echo "<a href=folios.php><center><h1>Regresar</h1></a>";
              }

          $conn = null;

          $conn = new mysqli($servername, $username, $password, $dbname);
          // Check connection
          if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
          }

          // sql to create table
          $sql = "DROP TABLE $folio";

          if ($conn->query($sql) === TRUE) {
            header("Location: folios.php");
          } else {
            echo "Error creando tabla: " . $conn->error;
            echo "<a href=folios.php><center><h1>Regresar</h1></a>";
          }
          ?>
      </div>
  </body>
</html>
