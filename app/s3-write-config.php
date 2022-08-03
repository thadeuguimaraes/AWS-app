<!DOCTYPE html>
<html>
<head>
  <title>AWS Cloud Practioner Essentials</title>
  <meta http-equiv="refresh" content="10,URL=/imagem.php" />
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
</head>

  <body>
    <div class="container">

      <div class="row">
      <div class="col-md-12">
      <?php include('menu.php'); ?>

      <div class="jumbotron">

      <?php
      	$db = $_POST['database'];
        $rg = $_POST['regiao'];
        $un = $_POST['username'];
        $pw = $_POST['password'];
        $ar = 'logo.jpg';

         

        $rds_conf_file = 's3-conf.php';
        $handle = fopen($rds_conf_file, 'w') or die('Cannot open file:  '.$rds_conf_file);
        $data = "<?php \$accessKey='" . $un . "'; \$secretKey='" . $pw . "'; \$region='" . $rg . "'; \$bucket='" . $db . "'; \$arqName='" . $ar . "'; \$linkestatico='https://s3.amazonaws.com' ?>";
        fwrite($handle, $data);
        fclose($handle);
        
        echo "<br /><br /><p><i>Redirecting to imagem.php in 10 seconds (or click <a href=imagem.php>here</a>)</i></p>";


      ?>

    </div>
    </div>
  </div>
  </div>

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
  </body>
</html>
