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

			<div class="jumbotron" style="background-color:#555; color:#fff">
      <a  href="/"><img width="400" src="<?php echo $linkestatico?>/<?php echo $bucket ?>/<?php echo $arqName ?>" /></a>
            <div class="form-group">
      
    </div>
    <div class="navbar-header">
     
        
    </div>
    <form  form name="teste" method="post" enctype="multipart/form-data">
          <input type="file" name="arquivo">
          <input class="btn btn-primary btn-sm" type="submit">
        </form>
    
     <?php

        if ( $_FILES['arquivo']['name'] ) {
            // Carrega a classe do S3
            require 'S3.php';
            require 's3-conf.php';
            // Autentica no S3
            S3::setAuth( $accessKey, $secretKey );
            // S3::setAuth('AKIAVY4TABZMCXENW76H', 'ANe90NrZ9QVA4VuUynKDllQQ3nrLjVMCFF+a5A11');
                S3::setRegion( $region );
            // S3::setSignatureVersion( 'v4' );
            $arqTemp = $_FILES['arquivo']['tmp_name'];
            // Tenta subir o arquivo
        if ( S3::putObject( S3::inputFile( $arqTemp), $bucket, $arqName, S3::ACL_PUBLIC_READ, array(), array( 'Content-Type' => $_FILES['arquivo']['type'] ) ) )
                
            // Arquivo "ok"
                    echo "arquivo salvo com sucesso!" ;
        else
                // Erro
                echo "erro ao salvar arquivo! " ;
        }
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
