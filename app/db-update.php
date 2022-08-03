<!DOCTYPE html>
<html>
  <head>
    <title>AWS Cloud Practioner Essentials</title>
    <link href="style.css" media="all" rel="stylesheet" type="text/css" />
  </head>

  <body>
    <div id="wrapper">

      <?php include('menu.php'); ?>

      <?php
        include 'rds.conf.php';

        if ($RDS_URL == "") {
          include 'rds-config.php';
        }
        else {
          include 'rds-read-data.php';
        }

      ?>

    </div>
  </body>
</html>
