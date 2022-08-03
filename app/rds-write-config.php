<!DOCTYPE html>
<html>
<head>
  <title>AWS Cloud Practioner Essentials</title>
  <meta http-equiv="refresh" content="10,URL=/index.php" />
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
</head>

  <body>
    <div class="container">

      <div class="row">
      <div class="col-md-12">

      <div class="jumbotron">
<div class="jumbotron" style="background-color:#555; color:#fff">
<?php
include 'rds.conf.php';

	$ep = $_POST['endpoint'];
      	$ep = str_replace(":3306", "", $ep);
      	$db = $_POST['database'];
        $un = $_POST['username'];
        $pw = $_POST['password'];
	$nu = "1";

        $mysql_command = "mysql -u $un -p$pw -h $ep $db < sql/addressbook.sql";
        $mysql_command1 = "mysql -u $un -p******** -h $ep $db < sql/addressbook.sql";

        $connect = mysqli_connect($ep, $un, $pw);
        if(!$connect) {

          echo "<br /><p>Unable to Establish Connection:<i>" . mysqli_error() .  "</i></p>";

        } else {
          // Create database
		$sql = "CREATE DATABASE $db";
		if (mysqli_query($connect, $sql)) {
		    echo "Database criado com sucesso";
	            $dbconnect = mysqli_select_db($connect, $db);
                    if(!$dbconnect) {
                      echo "<br /><p>Unable to Connect to DB:<i>" . mysqli_error($connect) .  "</i></p>";

                    } else {

                      echo "<br /><p>Executing Command: $mysql_command1</p>";
                      echo exec($mysql_command);

            	      echo "<br /><p>Finalizando configurações..... </p>";

            	      $rds_conf_file = 'rds.conf.php';
            	      $handle = fopen($rds_conf_file, 'w') or die('Cannot open file:  '.$rds_conf_file);
                      $data = "<?php \$RDS_URL='" . $ep . "'; \$RDS_DB='" . $db . "'; \$RDS_user='" . $un . "'; \$RDS_pwd='" . $pw . "'; \$AFF_NUM='1'; ?>";
                      fwrite($handle, $data);
                      fclose($handle);
	           }   
	        } else {
	           echo "Error creating database: " . mysqli_error($connect);
	        }	       

        }
        mysqli_close($connect);

        echo "<br /><br /><p><i>Redirecting to rds.php in 10 seconds (or click <a href=rds.php>here</a>)</i></p>";


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
