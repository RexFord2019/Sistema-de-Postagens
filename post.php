<?php
	require_once("admin/conexao/conecta.php");
	require("admin/functions/limita-texto.php");
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>BLOGANDO</title>
<link rel="stylesheet" type="text/css" href="css/reset.css" media="all">
<link rel="stylesheet" type="text/css" href="css/estilo.css" media="all">
<!-- carousel-->
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="description" content="">
      <meta name="author" content="Douglas Pereira Lacerda">
      <link rel="icon" href="imagens/images.jpg">
      <link href="css/bootstrap.css" rel="stylesheet">
      <link href="css/carousel.css" rel="stylesheet">
</head>

<body role="document">

  <!-- carousel -->
 
    <!-- Fixed navbar -->
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">BLOGANDO &#10148;</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li><a href="index.php">NOTÍCIAS §</a></li>
            <li><a href="#about">SOBRE &#10004;</a></li>
            <li><a href="#agora">AGORA &#8986;</a>
            <li><a href="#programação">TECNOLOGIA 💻</a> 
            <li><a href="#contact">CONTATO &#10004;</a></li>
            <img src="imagens/logo.png" style="width: 50px">
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">PAGINAS &#9660;<span class=""></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">Enviar Notícias</a></li>
                <li><a href="#">Conhecer nossa causa</a></li>
                <li><a href="#">Sobre nosso BLOGANDO</a></li>
                <li role="separator" class="divider"></li>
                <li class="dropdown-header">EXTENÇÃO</li>
                <li><a href="#">Falar Conosco</a></li>
                <li><a href="admin/index.php">Escritores &#9997;</a></li>
              </ul>
            </li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <!-- Carousel
    ================================================== -->

    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img class="first-slide" src="imagens/photo-1507296528318-bc143f239ac7.jpg" alt="First slide">
          <div class="container">
            <div class="carousel-caption">
            <!--  <p><a class="btn btn-lg btn-primary" href="" role="button">Ver mais</a></p>-->
            </div>
          </div>
        </div>
        <div class="item">
          <img class="second-slide" src="imagens/photo-1552581234-26160f608093.jpg" alt="Second slide">
          <div class="container">
            <div class="carousel-caption">
            <!--  <p><a class="btn btn-lg btn-primary" href="" role="button">Ver mais</a></p>-->
            </div>
          </div>
        </div>
        <div class="item">
           <img class="third-slide" src="imagens/photo-1558403194-611308249627.jpg" alt="Third slide">
          <div class="container">
            <div class="carousel-caption">
              <!--<p><a class="btn btn-lg btn-primary" href="" role="button">Ver mais</a></p>-->
            </div>
          </div>
        </div>
        <div class="item">
           <img class="third-slide" src="imagens/logo-myzzy.jpg" alt="Third slide">
          <div class="container">
            <div class="carousel-caption">
              <!--<p><a class="btn btn-lg btn-primary" href="" role="button">Ver mais</a></p>-->
            </div>
          </div>
        </div>
      </div><img src="imagens/logo.png" style="position: right"><!--referencia aos anuncios do carousel-->
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div><!-- /.carousel -->

    <!-- Bootstrap core JavaScript
    ================================================== -->
        <script src="js/jquery.min.js"></script>    
    <script src="js/bootstrap.min.js"></script>
  <!-- /carousel-->

	<div class="divcenter">
    
    
    	<ul class="boxposts" id="pgPost">
        
<?php

  echo "<h1><span style='color:red;'>Detalhes dessa Postagem 📢</span><h1></a>";

	if(isset($_GET['id'])){
		$idUrl = $_GET['id'];
	}
	$sql = "SELECT * from tb_postagens WHERE exibir='Sim' AND id=:id LIMIT 1";
	try{
		$resultado = $conexao->prepare($sql);
		$resultado->bindParam('id',$idUrl, PDO::PARAM_INT);
		$resultado->execute();
		$contar = $resultado->rowCount();
		
		if($contar > 0 ){
			while($exibe = $resultado->fetch(PDO::FETCH_OBJ)){
?>        
        	<li>            	
                <span class="thumb">
                	<img src="upload/postagens/<?php echo $exibe->imagem;?>" alt="<?php echo $exibe->titulo;?>" title="<?php echo $exibe->titulo;?>" width="166" height="166">
                </span>                
                <span class="content">
                	<h1><?php echo $exibe->titulo;?></h1>
                    <p><?php echo ($exibe->descricao)?></p> 
                    <div class="footer_post">
                    	<a href="javascript:history.back()">Voltar para página anterior</a>
                        <span class="datapost">Data de Publicação: <strong><?php echo $exibe->data;?></strong></span>                        
                    </div><!-- footer post -->                    
                </span>                
            </li>  
<?php
}//while
	}else{
		echo '<li>Não existe post cadastrados no sistema</li>';
	}
				
	}catch(PDOException $erro){ echo $erro;}
?>            
        
        <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.5";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>


<div class="fb-comments" data-href="https://douglaspereiralacerda.com.br/post.php?id=<?php echo $idUrl;?>" data-width="100%" data-numposts="5"></div>        
        
        
           
                  
        </ul>
        


        
    
    </div><!-- div center -->


</body>
</html>