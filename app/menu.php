<?php include('s3-conf.php'); ?>
<nav class="navbar navbar-default" role="navigation" style="border:0px">

<div class="navbar-header">
<a class="navbar-brand" href="/"><img width="50" src="<?php echo $linkestatico?>/<?php echo $bucket ?>/<?php echo $arqName ?>" /></a>
</div>

<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1"  style="background-color:#000">
  <ul class="nav navbar-nav" style="padding:5px 0 5px 0" >
    <li class="list-group-item" style="background-color:#555;border:2px solid #000">
      <a class=".text-white" style="color:#fff" href="index.php">Home</a>
    </li>
    <li class="list-group-item" style="background-color:red; border:2px solid #000">
        <a class=".text-white" style="color:#fff" href="load.php"><b>Pulo do Gato</b></a>
    </li>
    <li class="list-group-item" style="background-color:#555;border:2px solid #000">
      <a class=".text-white" style="color:#fff" href="rds.php">Banco de Dados</a>
    </li>
    <li class="list-group-item" style="background-color:#555;border:2px solid #000">
      <a class=".text-white" style="color:#fff" href="imagem.php">Imagens</a>
    </li>
    <li class="list-group-item" style="background-color:#555;border:2px solid #000">
      <a class=".text-white" style="color:#fff" href="s3-input.php">S3</a>
    </li>
  </ul>
</div>

</nav>
