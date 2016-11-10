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
        $chofer = $_POST['chofer'];
        $autobus = $_POST['autobus'];
        $origen = $_POST['origen'];
        $destino = $_POST['destino'];
        $hora = $_POST['hora'];
        $fecha = $_POST['fecha'];
            try {
              $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
              // set the PDO error mode to exception
              $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

              $sql = "UPDATE folios SET chofer='$chofer',autobus='$autobus',origen='$origen',destino='$destino',hora='$hora',fecha='$fecha' WHERE  folio='$folio'";

              // Prepare statement
              $stmt = $conn->prepare($sql);

              // execute the query
              $stmt->execute();

              // echo a message to say the UPDATE succeeded
              header("Location: folios.php");
            }
            catch(PDOException $e)
            {
              echo $sql . "<br>" . $e->getMessage();
              echo "<a href=folios.php><center><h1>Regresar</h1></a>";
            }

            $conn = null;
           ?>
      </div>
  </body>
</html>
