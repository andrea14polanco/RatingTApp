<?php
    include_once "db.php";
    include_once "db_config.php";
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
				<a class="navbar-brand" href="home.html"><img
					src="img/ratintapp.png" alt="RatingTApp"></a>
			</div>
			<div class="collapse navbar-collapse">
				<ul class="nav navbar-nav navbar-right">
					<li class="active"><a href="home.html">Principal</a></li>
					<li><a href="sobre-nosotros.php">Sobre Nosotros</a></li>
					<li class="dropdown"><a href="#" class="dropdown-toggle"
						data-toggle="dropdown"> Profesores <i class="icon-angle-down"></i></a>
						<ul class="dropdown-menu">
							<li><a href="#">Anadir Profesor</a></li>
						
						</ul></li>
					<li><a href="ranking.html">Ranking de profesores</a></li>
					<li><a href="foro.html">Foro</a></li>
					<li><a href="contacto.html">Contacto</a></li>
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


	<div class="section section-breadcrumbs">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h1> Para conocer tus profesores:</h1>
				</div>
			</div>
		</div>
	</div>


	 <section class="fondo">                
                <div class="container">
                    
                    </table>
                
                    <br><br>
                    <h1>Tabla de Profesores:</h1>
                    <table>
                        <tr>
                             <th>Rating</th>
                             <th>Nombre</th>
                             <th>Area</th>
                             <th>Horario</th>
                             <th>Metodologia</th>
                        </tr>
                        <?php
                            $query = "SELECT p.*, a.nombre AS id_area FROM profesores p, area a WHERE p.id_area=a.id ORDER BY p.promedio ASC";
                        
                            $resultado = getDataArray($query);
            
                            foreach ($resultado as $profes){
                        ?>
                        <tr>
                             <td><?php echo $profes['promedio'] ?></td>
                             <td>
                                 <a href="http://ratingtapp.co.nf/profesor.php?nombre=<?php $profes['nombre']?>">
                                 <?php echo $profes['nombre'] ?>
                            </td>
                             <td><?php echo $profes['id_area'] ?></td>
                             <td><?php echo $profes['horario'] ?></td>
                             <td><?php echo $profes['metodologia'] ?></td>
                        </tr>
                        <?php 
                            }
                        ?>
                    </table>
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

	<!-- Scrolling Nav JavaScript -->
	<script src="js/jquery.easing.min.js"></script>
	<script src="js/scrolling-nav.js"></script>

</body>
</html>