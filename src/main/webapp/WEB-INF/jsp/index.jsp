<!DOCTYPE html>
<html class="no-js">
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Pagina Principal</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Custom CSS -->
	<link rel="stylesheet" href="css/main.css">
    <link href="css/custom.css" rel="stylesheet">
	
	<script src="//use.edgefonts.net/bebas-neue.js"></script>

    <!-- Custom Fonts & Icons -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,600,800' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="css/icomoon-social.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<script src="js/modernizr-2.6.2-respond-1.1.0.min.js"></script>
	

</head>

<body>
       
    <header class="navbar navbar-inverse navbar-fixed-top" role="banner">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/RatingTapp/"><img src="img/ratintapp.png" alt="RatingTApp"></a>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li class="active"><a href="index.jsp">Principal</a></li>
                    <li><a href="about-us.jsp">Sobre Nosotros</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"> Profesores <i class="icon-angle-down"></i></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Anadir Profesor</a></li>
                            <li><a href="#">Evaluar Profesor</a></li>
                            <li><a href="#">Lista de profesores</a></li>
                            <li class="divider"></li>
                            <li><a href="#"></a></li>
                            <li><a href="#"></a></li>
                        </ul>
                    </li>
					<li><a href="ranking.jsp">Ranking de profesores</a></li>
                    <li><a href="foro.jsp">Foro</a></li> 
                    <li><a href="contacto.jsp">Contacto</a></li>
					<div class="input-group">
						<input type="text" class="form-control" placeholder="Buscar Profesor">
						<div class="input-group-btn">
						<button class="btn btn-default" type="submit">
							<i class="glyphicon glyphicon-search"></i>
						</button>
                </ul>
            </div>
        </div>
    </header><!--/header-->


	
	
    <section id="main-slider" class="no-margin">
        <div class="carousel slide">
            <ol class="carousel-indicators"> <!--Estas son unas bolitas especiales que muestra en el slide actrual que se esat-->
                <li data-target="#main-slider" data-slide-to="0" class="active"></li>
                <li data-target="#main-slider" data-slide-to="1"></li>
            </ol>
            <div class="carousel-inner">
                <div class="item active" style="background-image: url(img/slides/slide1Profesores.jpg)">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="carousel-content centered">
                                    <h2 class="animation animated-item-1">
												¡Bienvenidos a RatingTApp!
												Una aplicacion para estudiantes del INTEC
									</h2>
									<!--Se puede anadir mas texto pero es opcional-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--/.item-->
					<!--carrousel2 -->
                <div class="item" style="background-image: url(img/slides/slide2Intec.jpg)">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="carousel-content centered">
                                    <h2 class="animation animated-item-1" style="color:#2A120A"> Esta es una aplicacion donde podras expresar tu opinion sin filtro</h2>
                                    <!-- <p class="animation animated-item-2"> BARAJADO </p> -->
                                    <br>
									<a class="btn btn-md animation animated-item-3" href="about-us.jsp">Saber mas</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--/.item-->
            </div><!--/.carousel-inner-->
        </div><!--/.carousel-->
        <a class="prev hidden-xs" href="#main-slider" data-slide="prev">
            <i class="icon-angle-left"></i>
        </a>
        <a class="next hidden-xs" href="#main-slider" data-slide="next">
            <i class="icon-angle-right"></i>
        </a>
    </section><!--/#main-slider-->

	


		<!-- Funcionalidades -->
        <div class="section section-white">
	        <div class="container">
	        	<div class="row">
	        		<div class="col-md-4 col-sm-6">
	        			<div class="service-wrapper">
		        			<i class="fa fa-bar-chart"></i>
		        			<h3>Calificar a los profesores</h3>
		        			<p>Es esta seccion podremos evaluar a los maestros y profesores segun criterios establecidos en las encuestas realizadas en el INTEC.</p>
		        			<a href="#" class="btn">Calificar</a>
		        		</div>
	        		</div>
	        		<div class="col-md-4 col-sm-6">
	        			<div class="service-wrapper">
		        			<i class="material-icons">forum</i>
		        			<h3>Foro de discusion</h3>
		        			<p>Aqui podras abrir y discutir temas acerca de los profesores y maestros que imparten clases en el INTEC.</p>
		        			<a href="#" class="btn">Discutir en foro</a>
		        		</div>
	        		</div>
	        		<div class="col-md-4 col-sm-6">
	        			<div class="service-wrapper">
		        		<i class="material-icons">add_circle_outline</i>
		        			<h3>Agregar profesor</h3>
		        			<p>En esta seccion se podra agregar nuevos profesores que no esten en nuestra base de datos.</p>
		        			<a href="#" class="btn">Agregar profesor</a>
		        		</div>
	        		</div>
	        	</div>
	        </div>
	    </div>
	    <!-- End Services -->


<hr>
	    <!-- Footer -->
	    <div class="footer">
	    	<div class="container">
			
		    	<div class="row">
				
		    		<div class="col-footer col-md-4 col-xs-6">
		    			<h3>Contactanos</h3>
		    			<p class="contact-us-details">
	        				<b>Direccion:</b> Avenida de Los Próceres #49, Los Jardines del Norte 10602, Santo Domingo, República Dominicana<br/>
	        				<b>Telefono:</b> 829-446-2568 <br/>
	        				<b>Email:</b> <a href="mailto:proyectogestion@gmail.com">proyectogestion@gmail.com</a>
	        			</p>
		    		</div>				
		    		<div class="col-footer col-md-4 col-xs-6">
		    			<h3>Nuestras redes sociales</h3>
						<p>Aqui podran contactarnos y charlar con nosotros</p>
		    			<div>
		    				<img src="img/icons/facebook.png" width="32" alt="Facebook">
		    				<img src="img/icons/twitter.png" width="32" alt="Twitter">
		    				<img src="img/icons/instagram.png" width="32" alt="Instagram">
							
						</div>
		    		</div>
		    		<div class="col-footer col-md-4 col-xs-6">
		    			<h3>Sobre nuestro proyecto</h3>
		    				<p>Esta pagina web es un pequeño proyecto de la Materia Gestion de Proyectos del INTEC.</p>
		    		</div>

		    	</div>
		    	<div class="row">
		    		<div class="col-md-12">
		    			<div class="footer-copyright">&copy; 2017, Diseño original de <a href="http://www.vactualart.com">Vactual Art</a>.</div>
		    		</div>
		    	</div>
		    </div>
	    </div>

        <!-- Javascripts -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/jquery-1.9.1.min.js"><\/script>')</script>
        <script src="js/bootstrap.min.js"></script>
		
		<!-- Scrolling Nav JavaScript -->
		<script src="js/jquery.easing.min.js"></script>
		<script src="js/scrolling-nav.js"></script>		

    </body>
</html>