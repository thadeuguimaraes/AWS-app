
<form name="input" action="s3-write-config.php" method="post" class="form-horizontal">

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
