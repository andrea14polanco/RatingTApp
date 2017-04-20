<?php
    include_once "db.php";
    include_once "db_config.php";
    require('Persistence.php');
    $comment_post_ID = 1;
    $db = new Persistence();
    $comments = $db->get_comments($comment_post_ID);
    $has_comments = (count($comments) > 0);
?>
<!DOCTYPE html>
<html class="no-js">
<html lang="en">

<head>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">

<title>Anadir</title>

<!-- Bootstrap Core CSS -->
<link href="css/bootstrap.css" rel="stylesheet">

<!-- Custom CSS -->
<link rel="stylesheet" href="css/main.css">
<link href="css/custom.css" rel="stylesheet">
<link href="css/rating-system.css" rel="stylesheet">
<link href="css/avatar.css" rel="stylesheet">

<script src="//use.edgefonts.net/bebas-neue.js"></script>

<!-- Custom Fonts & Icons -->
<link
	href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,600,800'
	rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="css/icomoon-social.css">
<link rel="stylesheet" href="css/font-awesome.min.css">
<link rel="stylesheet"
	href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons"
	rel="stylesheet">
<script src="js/modernizr-2.6.2-respond-1.1.0.min.js"></script>

    <style>
        .acces{
            background-color: #CCCCCC;
            border-radius:10px;
            border-style: solid;
            border-width: 5px;
            border-color: black;
            padding: 3% 2% 5% 2%;
            width:25%;
            height:70%;
            margin:auto;
            font-size: 200%;    
            bottom:0;
            top:0;
            left:0;
            right:0;
        }
    
    </style>

</head>

<body>

	<header class="navbar navbar-inverse navbar-fixed-top" role="banner">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse"
					data-target=".navbar-collapse">
					<span class="sr-only">Toggle navigation</span> <span
						class="icon-bar"></span> <span class="icon-bar"></span> <span
						class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="home.php"><img
					src="img/ratintapp.png" alt="RatingTApp"></a>
			</div>
			<div class="collapse navbar-collapse">
				<ul class="nav navbar-nav navbar-right">
					<li class="active"><a href="home.php">Principal</a></li>
					<li><a href="sobre-nosotros.php">Sobre Nosotros</a></li>
					<li class="dropdown"><a href="#" class="dropdown-toggle"
						data-toggle="dropdown"> Profesores <i class="icon-angle-down"></i></a>
						<ul class="dropdown-menu">
							<li><a href="anadir-profesor.php">Anadir Profesor</a></li>
						
						</ul></li>
					<li><a href="consulta-profesor.php">Ranking de profesores</a></li>
				</ul>
				<form class="form-inline my-2 my-lg-0">
					<input class="form-control mr-sm-2" type="text"
						placeholder="Search">
					<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
				</form>
			</div>
		</div>
	</header>
	<!--/header-->
    
    <?php

        if(isset($_GET["id"])){
            $id = $_GET["id"];
            //$query = "SELECT p.* FROM profesores p WHERE p.id=$id";
            
            $query = "SELECT p.*, a.nombre AS id_area FROM profesores p, area a WHERE p.id=$id AND p.id_area=a.id";
                   
            $resultado = getDataArray($query);
        }

    ?>

	<div class="section section-breadcrumbs">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h1>Profesor: <?php echo $resultado['0']['nombre']?></h1>
				</div>
			</div>
		</div>
	</div>


		
   <section class="fondo">
       <div class="acces">
       
           <img style="display: block; margin-left: auto; margin-right: auto" src="./img/silueta.png" > 
           
           
           
            <?php  foreach ($resultado as $resultado2){
            ?>
           
           <h4>Rating: <?php echo $resultado2['promedio'] . "<br>"; ?></h4>
           <h4>Nombre: <?php echo $resultado2['nombre'] . "<br>"; ?></h4>
           <h4>Area: <?php echo $resultado2['id_area'] . "<br>"; ?></h4>
           <h4>Horario: <?php echo $resultado2['horario'] . "<br>"; ?></h4>
           <h4>Metodologia: <?php echo $resultado2['metodologia'] . "<br>"; ?></h4>
           <h4>Historial Laboral: <?php echo $resultado2['historial_laboral'] . "<br>"; ?></h4>
           
           <?php 
                }
            ?>

       </div>
       
       <div></div>
       
    <section id="comments" class="body">
	  
	  <header>
			<h2>Comentarios</h2>
		</header>

    <ol id="posts-list" class="hfeed<?php echo($has_comments?' has-comments':''); ?>">
      <li class="no-comments">Se el primero en comentar</li>
      <?php
        foreach ($comments as &$comment) {
          ?>
          <li><article id="comment_<?php echo($comment['id']); ?>" class="hentry">	
    				<footer class="post-info">
    					<abbr class="published" title="<?php echo($comment['date']); ?>">
    						<?php echo( date('d F Y', strtotime($comment['date']) ) ); ?>
    					</abbr>

    					<address class="vcard author">
    						By <a class="url fn" href="#"><?php echo($comment['comment_author']); ?></a>
    					</address>
    				</footer>

    				<div class="entry-content">
    					<p><?php echo($comment['comment']); ?></p>
    				</div>
    			</article></li>
          <?php
        }
      ?>
		</ol>
		
		<div id="respond">

      <h3>Deja un comentario</h3>

      <form class="acces" action="post_comment.php" method="post" id="commentform" enctype="multipart/form-data">

        <label for="comment_author" class="required">Your name</label>
        <input type="text" name="comment_author" id="comment_author" value="" tabindex="1" required="required">
        
        <label for="email" class="required">Your email</label>
        <input type="email" name="email" id="email" value="" tabindex="2" required="required">

        <label for="comment" class="required">Your message</label>
        <textarea name="comment" id="comment" rows="10" tabindex="4"  required="required"></textarea>

        <input type="hidden" name="comment_post_ID" value="<?php echo($comment_post_ID); ?>" id="comment_post_ID" />
        <input name="submit" type="submit" value="Submit comment" />
        
      </form>
      
    </div>
			
	</section>  

    <input type="hidden" value="HERE COME THE PRODUCT ID" id="product_id">
    <div class="container">
        <div id="star-container">
            <i class="fa fa-star fa-3x star" id="star-1"></i>
            <i class="fa fa-star fa-3x star" id="star-2"></i>
            <i class="fa fa-star fa-3x star" id="star-3"></i>
            <i class="fa fa-star fa-3x star" id="star-4"></i>
            <i class="fa fa-star fa-3x star" id="star-5"></i>
        </div>
        <div id="result"></div>
    </div>

       
            </section>
	
	
	<hr>












	<div class="footer">
		<div class="container">

			<div class="row">

				<div class="col-footer col-md-4 col-xs-6">
					<h3>Contactanos</h3>
					<p class="contact-us-details">
						<b>Direccion:</b> Avenida de Los Pr�ceres #49, Los Jardines del
						Norte 10602, Santo Domingo, Rep�blica Dominicana<br /> <b>Telefono:</b>
						829-446-2568 <br /> <b>Email:</b> <a
							href="mailto:proyectogestion@gmail.com">proyectogestion@gmail.com</a>
					</p>
				</div>
				<div class="col-footer col-md-4 col-xs-6">
					<h3>Nuestras redes sociales</h3>
					<p>Aqui podran contactarnos y charlar con nosotros</p>
					<div>
						<img src="img/icons/facebook.png" width="32" alt="Facebook">
						<img src="img/icons/twitter.png" width="32" alt="Twitter"> <img
							src="img/icons/instagram.png" width="32" alt="Instagram">

					</div>
				</div>
				<div class="col-footer col-md-4 col-xs-6">
					<h3>Sobre nuestro proyecto</h3>
					<p>Esta pagina web es un peque�o proyecto de la Materia Gestion
						de Proyectos del INTEC.</p>
				</div>

			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="footer-copyright">
						&copy; 2017, Dise�o original de <a
							href="http://www.vactualart.com">Vactual Art</a>.
					</div>
				</div>
			</div>
		</div>
	</div>
	<script>
var btnCust = '<button type="button" class="btn btn-default" title="Add picture tags" ' + 
    'onclick="alert(\'Call your custom code here.\')">' +
    '<i class="glyphicon glyphicon-tag"></i>' +
    '</button>'; 
$("#avatar-1").fileinput({
    overwriteInitial: true,
    maxFileSize: 1500,
    showClose: false,
    showCaption: false,
    browseLabel: '',
    removeLabel: '',
    browseIcon: '<i class="glyphicon glyphicon-folder-open"></i>',
    removeIcon: '<i class="glyphicon glyphicon-remove"></i>',
    removeTitle: 'Cancel or reset changes',
    elErrorContainer: '#kv-avatar-errors-1',
    msgErrorClass: 'alert alert-block alert-danger',
    defaultPreviewContent: '<img src="../img/silueta.png" alt="Foto" style="width:160px">',
    layoutTemplates: {main2: '{preview} ' +  btnCust + ' {remove} {browse}'},
    allowedFileExtensions: ["jpg", "png", "gif"]
});
</script>

	<!-- Javascripts -->
	<script
		src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="js/jquery-1.9.1.min.js"><\/script>')</script>
	<script src="js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script type="text/javascript" src="main.js"></script>	
	<!-- Scrolling Nav JavaScript -->
	<script src="js/jquery.easing.min.js"></script>
	<script src="js/scrolling-nav.js"></script>

</body>
</html>