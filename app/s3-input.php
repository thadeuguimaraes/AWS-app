<!DOCTYPE html>
<html>
  <head>
    <title>AWS Cloud Practioner Essentials</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
  </head>

  <body style="background-color:black">
    <div class="container">

	<div class="row">
		<div class="col-md-12">
      <?php include('menu.php'); ?>




   <div  class="container" style="background-color:#555; margin-top: 40px; color:#fff">
      
            <div class="form-group">
       
      
    </div>
    <div class="navbar-header" >
     
        
    </div>
   <form name="input" action="s3-write-config.php" method="post" class="form-horizontal">
  <div class="form-group" style="margin-top: 50px;" >
    <div class="col-sm-10">
    </div>
  </div>

  <div class="form-group">
    <label for="database" class="col-sm-2 control-label">Bucket</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="database">
    </div>
  </div>

  <div class="form-group">
    <label for="regiao" class="col-sm-2 control-label">Região</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="regiao">
    </div>
  </div>

  <div class="form-group">
    <label for="username" class="col-sm-2 control-label">AccessKey</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="username">
    </div>
  </div>

  <div class="form-group">
    <label for="password" class="col-sm-2 control-label">SecretKey</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" name="password">
    </div>
  </div>

  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <input class="btn btn-primary btn-sm" type="submit" value="Enviar" class="btn btn-default"/>
    </div>
  </div>
</form>
 

	</div>
  </div>
</div>
</div>

<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/scripts.js"></script>

</body>
</html>
