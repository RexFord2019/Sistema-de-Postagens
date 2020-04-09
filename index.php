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
          <a class="navbar-brand" href="index.php">BLOGANDO &#10148;</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li><a href="#inicio">NOTÍCIAS §</a></li>
            <li><a href="#about">SOBRE &#10004;</a></li>
            <li><a href="#agora">AGORA &#8986;</a>
            <li><a href="#programação">TECNOLOGIA 💻</a> 
            <li><a href="#contact">CONTATO &#10004;</a></li>
            
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
				<li data-target="#myCarousel" data-slide-to="3"></li>
			</ol>
			<div class="carousel-inner" role="listbox">
				<div class="item active">
					<img class="first-slide" src="imagens/photo-1507296528318-bc143f239ac7.jpg" alt="First slide">
					<div class="container">
						<div class="carousel-caption">
                        <h1>Saca Só esse Novo Lançamento da Apple no Brasil!</h1>
						<h2>Novo Mac 387- a sua nova Apple marca</h2>
						<p><a class="btn btn-lg btn-primary" href="" role="button">Ver mais</a></p>
						</div>
					</div>
				</div>
				<div class="item">
					<img class="second-slide" src="https://images.unsplash.com/photo-1512446387219-99c19f8fe95f?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" alt="Second slide" style:rgba(0,0,0,.2);>
					<div class="container">
						<div class="carousel-caption">
							<h1>O que á Amazom tem para você hoje</h1>
							<p>Nas compras de uma sala de servidor dedicado, você tem mais 10 gigas</p>
						    <p><a class="btn btn-lg btn-primary" href="" role="button">Ver mais</a></p>
						</div>
					</div>
				</div>
				<div class="item">
					 <img class="third-slide" src="https://images.unsplash.com/photo-1551808525-51a94da548ce?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" alt="Third slide" style="background-color: style:rgba(0,0,0,.2);">
					<div class="container">
						<div class="carousel-caption">
							<h1>Essa Gigante esta mais perto do que você pode imaginar!></h1>
							<p>A Google no Brasil, novos escritórios, estilo playground</p>
							<p><a class="btn btn-lg btn-primary" href="" role="button">Ver mais</a></p>
						</div>
					</div>
				</div>
				<div class="item">
					 <img class="third-slide" src="https://images.unsplash.com/photo-1558401549-29b4893f4d9a?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" alt="Third slide">
					<div class="container">
						<div class="carousel-caption">
							<h1><bloquote>Quem é e o que é MYZZY TECNOLOGIA?</blocote></h1>
							<h2><u>"A nossa satisfação é o cliente"</u></h2>
							<h3><bloquote>Uma empresa Lotada no Brasil, atendendo ao Mundo!</bloquote></h3>
							<p><a class="btn btn-lg btn-primary" href="" role="button">Ver mais</a></p>
						</div>
					</div>
				</div>
			</div>
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
        
    	<ul class="boxposts">
  <a name="inicio"></a>
<?php

echo "<h1><span style='color:red;'>POSTS NOVOS AQUI&#9749;</span><h1>";

if(empty($_GET['pg'])){}
else{ 
$pg =$_GET['pg'];
if(!is_numeric($pg)){
	
	echo '<script language= "JavaScript">
					location.href="index.php";
		</script>';
}

}

if(isset($pg)){ $pg = $_GET['pg'];}else{ $pg = 1;}

$quantidade = 3;
$inicio = ($pg*$quantidade) - $quantidade;


	$sql = "SELECT * from tb_postagens WHERE exibir='Sim' ORDER BY id DESC LIMIT $inicio, $quantidade";
	try{
		$resultado = $conexao->prepare($sql);
		$resultado->execute();
		$contar = $resultado->rowCount();
		
		if($contar > 0 ){
			while($exibe = $resultado->fetch(PDO::FETCH_OBJ)){
?>        
        	<li>            	
                <span class="thumb">
                	<img src="upload/postagens/<?php echo $exibe->imagem;?>" alt="<?php echo $exibe->titulo;?>" title="<?php echo $exibe->titulo;?>" width="700" height="180">
                </span>                
                <span class="content">
                	<h1><?php echo $exibe->titulo;?></h1>
                    <p><?php echo limitarTexto($exibe->descricao, $limite=380)?></p> 
                    <div class="footer_post"><br>
                    	<a href="post.php?id=<?php echo $exibe->id;?>">Leia o artigo completo</a>
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
           
                  
        </ul>
        
        
        
        


<!-- inicio botoes -->

<style>
/* paginacao */

.paginas{width:100%;padding:10px 0;text-align:center;background:#fff;height:auto;margin:10px auto;}
.paginas a{width:auto;padding:4px 10px;background:#eee;color:#333;margin:0px 2.5px;text-decoration:none;font-family:tahoma, "Trebuchet Ms", arial;font-size:13px; }
.paginas a:hover{text-decoration:none;background:#00BA8B; color:#fff;}

<?php
	if(isset($_GET['pg'])){
		$num_pg = $_GET['pg'];	
	}else{$num_pg = 1;}
?>

.paginas a.ativo<?php echo $num_pg;?>{background:#00BA8B; color:#fff;}

</style>


<?php
	$sql = "SELECT * from tb_postagens";
	try{
			$result = $conexao->prepare($sql);			
			$result->execute();
			$totalRegistros = $result->rowCount();
		}catch(PDOException $e){
			echo $e;
		}
		
		if($totalRegistros <=$quantidade){}
		else{
			$paginas = ceil($totalRegistros/$quantidade);
			if($pg > $paginas){
				echo '<script language= "JavaScript">
					location.href="index.php";
					</script>';}
			$links = 5;	
			
			if(isset($i)){}
			else{$i = '1';}

?>

<div class="paginas">

	<a href="index.php?pg=1">Primeira Página</a>
    
    <?php
		if(isset($_GET['pg'])){
			$num_pg = $_GET['pg'];	
		}
		
		for($i = $pg-$links; $i <= $pg-1; $i++){
			if($i<=0){}
			else{ 
	?>
     
    <a href="index.php?pg=<?php echo $i;?>"  class="ativo<?php echo $i;?>"><?php echo $i;?></a>
     
         
<?php  }} ?>
    
    
    <a href="index.php?pg=<?php echo $pg;?>" class="ativo<?php echo $i;?>"><?php echo $pg;?></a>
    

<?php
	for($i = $pg+1; $i <= $pg+$links; $i++){
		if($i>$paginas){}
		else{
?>
			
	<a href="index.php?pg=<?php echo $i;?>" class="ativo<?php echo $i;?>"><?php echo $i;?></a>		
		
<?php
		}
	}
?>

<a href="index.php?pg=<?php echo $paginas;?>">Última página</a>		

    

</div><!-- paginas -->





<?php
		}
?>

<!-- fim botoes paginacao -->            
        
        
        
        
        
        
    	
    
    </div><!-- div center -->
    
 </body>
</html>