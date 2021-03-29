<!DOCTYPE html>
<html lang="es">
<head>
	<title>AJE Gases Medicinales</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="estilos.css">
	<link rel="shortcut icon" href="logomini.png">
	<link href="fontawesome-free-5.15.1-web/css/all.css" rel="stylesheet">
	<link rel="stylesheet" href="css/lightbox.min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">

</head>
	<body>
		<header>
			<div id="cabezerasecundaria">
				<div id="contactocabezera">
					<a href="tel:+5493416167930" id="contactotelcabezera"><span>URGENCIAS</span>: Comuníquese al <span>+5493416167930</span></a>
					<a href="mailto:ajegases@hotmail.com" id="contactomailcabezera"> o escríbanos a <span>ajegases@hotmail.com</span></a>
				</div>
				<div id="contactocabezeraresponsive">
					<a href="tel:+5493416167930" id="contactotelcabezeraresponsive"><span>URGENCIAS</span>: <i class="fab fa-whatsapp"></i> <span>+5493416167930</span></a>
					<a href="mailto:ajegases@hotmail.com" id="contactomailcabezeraresponsive"> <i class="far fa-envelope"></i> <span>ajegases@hotmail.com</span></a>
				</div>
			</div>
			<div id=maincabezera>	
				<a href="#slide1"><img src="AjeLogov2sinfondo.png" id="imglogo"></a>
				<nav id="botonera1">
					<ul id="listabotonera1">
						<li><a href="#somostitulo" class="botones1">¿Quienes Somos?</a></li>
						<li><a href="#titulohacemos" class="botones1">¿A qué nos dedicamos?</a></li>
						<li><a href="#titulotrayectoria" class="botones1">Historia</a></li>
					</ul>
				</nav>
				<nav id="botonera2">
					<ul id="listabotonera2">
						<li><a href="#serviciostitulo" class="botones2">SERVICIOS</a></li>
						<li><a href="#clientestitulo" class="botones2">CLIENTES</a></li>
						<li><a href="#contactotitulo" class="botones2">CONTACTO</a></li>
					</ul>
				</nav>
			</div>

			<div class="respmenu">
				<a href="#slide1" id="logoresp"><img src="AjeLogov2sinfondo.png" id="imglogo"></a>
				<input type="checkbox">
				<i class="fas fa-bars"></i>
				<i class="fas fa-times"></i>
				<nav>
				  <ul>
					<li><a href="#somostitulo">¿Quienes Somos?</a></li>
					<li><a href="#titulohacemos">¿A qué nos dedicamos?</a></li>
					<li><a href="#titulotrayectoria">Historia</a></li>
					<li><a href="#serviciostitulo">SERVICIOS</a></li>
					<li><a href="#clientestitulo">CLIENTES</a></li>
					<li><a href="#contactotitulo">CONTACTO</a></li>
				  </ul>
				</nav>
			  </div>

		</header>
		<section id="Ginfo">
			<div id="fotosginfo">
				<div class="slider">
					<ul>
						<li id="slide1">
						  <div>
						  		<h1>Bienvenidos a <span>AJE Gases Medicinales<span></h1>
						  		<p>Photo by Samuel Ramos on Unsplash</p>
						  </div>
						 </li>
						 <li id="slide2">
						  <div>
						  	    <h1>Los <span>gases medicinales</span> son aquellos que por sus características <br> son utilizados para consumo humano y aplicaciones medicinales</h1>
						  	    <p>Photo by Terry Vlisidis on Unsplash</p>
						  </div>
						 </li>
						 <li id="slide3">
						  <div>
						  	    <h1>Nos encargamos de la <span>instalación y mantenimiento</span> de equipos de gases medicinales</h1>
						  	    <p>Photo by Ümit Yıldırım on Unsplash</p>
						  </div>
						 </li>
						 <li id="slide4">
						  <div>
						  		<h1>Bienvenidos a <span>AJE Gases Medicinales<span></h1>
						  		<p>Photo by Samuel Ramos on Unsplash</p>
						  </div>
						 </li>
					</ul>
				</div>
			</div>
		</section>
		<section id="nosotros">
			<div id="somos">
			<div>
								<?php

								if(isset($_GET["id"])) {  
								switch ($_GET["id"]) {
								
									case 'mis':
										$titulo = " Misión";
										$atribucion = "<span>Photo by <a href='https://unsplash.com/@scdisilviabrazzoduro?utm_source=unsplash&amp;utm_medium=referral&amp;utm_content=creditCopyText' target='new'>Silvia Brazzoduro</a> on <a href='https://unsplash.com/s/photos/construction?utm_source=unsplash&amp;utm_medium=referral&amp;utm_content=creditCopyText' target='new'>Unsplash</a></span>";
										$imagen = "background-image:url(misionimagen.jpg);";
										$icono = "fas fa-briefcase";
										$desarrollo = 'Brindar servicios de instalación y mantenimiento de equipos de gases medicinales de forma rápida, segura, eficaz y eficiente, con la más alta calidad en la atención al cliente, en la realización del trabajo y en la prestación del servicio, llevado a cabo por personal idóneo, predispuesto a afrontar y a resolver dificultades y con un alto grado de responsabilidad y de conciencia de la vinculación de nuestras prestaciones con el interés general de la comunidad en materia de salud.';
									   
										break;

									case 'vis':
									    $titulo = " Visión";
										$imagen = "background-image:url(imgvision.jpg);";
										$icono = "fas fa-eye";
										$desarrollo = 'Buscamos mantener nuestro liderazgo en las zonas de influencia de la Provincia de Santa Fe, este de la Provincia de Córdoba y norte de la Provincia de Buenos Aires y ampliar nuestra relevancia a otras regiones del país mediante la generación de relaciones duraderas con nuestros eventuales clientes fruto del impacto positivo en la gestión de sus servicios producto de nuestro trato personalizado para con ellos, de la innovación y preferencia a las soluciones requeridas y de la calidad en la prestación ofrecida.';
										$atribucion = "<span>Photo by <a href='https://unsplash.com/@mcnoble?utm_source=unsplash&amp;utm_medium=referral&amp;utm_content=creditCopyText' target='new'>Matt Noble</a> on <a href='https://unsplash.com/s/photos/vision?utm_source=unsplash&amp;utm_medium=referral&amp;utm_content=creditCopyText' target='new'>Unsplash</a></span>";
										break;


									case 'varl':
										$titulo = " Valores";
										$imagen = "background-image:url(valoresimagen.jpg);";
										$icono = "far fa-handshake";
										$desarrollo = 'Nuestros valores se centran en el <strong>respeto</strong> a nuestros empleados, su <strong>seguridad</strong> y <strong>bienestar</strong>; la <strong>transparencia</strong> y <strong>honestidad</strong> en el desempeño de nuestra actividad; en la máxima <strong>calidad</strong> posible como meta; en la <srong>responsabilidad</strong> y <strong>conciencia</strong> de la vinculación de nuestras prestaciones con la salud de la comunidad; en la capacidad de análisis y <strong>autocrítica</strong>; en el <strong>aprendizaje</strong> y <strong>adaptabilidad</strong> a las cambiantes circunstancias; y en la promoción de <strong>confianza</strong> a nuestros clientes y al público en general.';
										$atribucion= "<span>Photo by <a href='https://unsplash.com/@sincerelymedia?utm_source=unsplash&amp;utm_medium=referral&amp;utm_content=creditCopyText' target='new'>Sincerely Media</a> on <a href='https://unsplash.com/s/photos/handshake?utm_source=unsplash&amp;utm_medium=referral&amp;utm_content=creditCopyText' target='new'>Unsplash</a></span>"; 
										break;

									case 'som':
										$titulo = "";
										$atribucion = "<span>Photo by <a href='https://unsplash.com/@vladimirbruzon?utm_source=unsplash&amp;utm_medium=referral&amp;utm_content=creditCopyText' target='new'>Vladimir Velázquez</a> on <a href='https://unsplash.com/s/photos/rosario?utm_source=unsplash&amp;utm_medium=referral&amp;utm_content=creditCopyText' target='new'>Unsplash</a></span>";
										$imagen = "background-image: url(rosario.jpg);";
										$icono = "";
										$desarrollo = "<p style= 'font-style: italic; font-family: calibri;
										font-size: 19px;
										text-align: justify;
										margin-top: 10px;
										margin-bottom: 0px;
										margin-left:0;
										letter-spacing: 1px;
										line-height: 140%;
		
										padding: 20px;' >Somos la <strong>empresa líder</strong> en las zonas de influencia de la Provincia de Santa Fe, este de la Provincia de Córdoba y norte de la Provincia de Buenos Aires <strong>especializada en la instalación y mantenimiento de equipos de gases medicinales</strong></p>";
									break;
								}

							}  else {
								$titulo="";
								$atribucion = "<span>Photo by <a href='https://unsplash.com/@vladimirbruzon?utm_source=unsplash&amp;utm_medium=referral&amp;utm_content=creditCopyText' target='new'>Vladimir Velázquez</a> on <a href='https://unsplash.com/s/photos/rosario?utm_source=unsplash&amp;utm_medium=referral&amp;utm_content=creditCopyText'>Unsplash</a></span>";
								$desarrollo = "<p style= 'font-style: italic; font-family: calibri;
								font-size: 19px;
								text-align: justify;
								margin-top: 10px;
								margin-bottom: 0px;
								margin-left:0;
								letter-spacing: 1px;
								line-height: 140%;

								padding: 20px;'>Somos la <strong>empresa líder</strong> en las zonas de influencia de la Provincia de Santa Fe, este de la Provincia de Córdoba y norte de la Provincia de Buenos Aires <strong>especializada en la instalación y mantenimiento de equipos de gases medicinales</strong></p>";
							}
								?>
			</div>
				<div id="somostitulo">
					<h2><a style="color:#37a147;" href="proyectoajegases.php?id=som#nosotros"><i class="fas fa-hand-holding-medical"></i>&nbsp;¿Quienes somos?</a></h2>
				</div>
				<nav id="somosnav">
					<ul>
						<li><a href="proyectoajegases.php?id=mis#nosotros"><i class="fas fa-briefcase"></i> Misión</a></li>
						<li><a href="proyectoajegases.php?id=vis#nosotros"><i class="fas fa-eye"></i> Visión</a></li>
						<li><a href="proyectoajegases.php?id=varl#nosotros"><i class="far fa-handshake"></i> Valores</a></li>
					</ul>
					</nav>
				<div id="somosvision">
					<h3><i class="<?php echo $icono; ?>"></i><?php echo $titulo;?></h3>
					<p><?php echo $desarrollo;?></p>
				</div>
				<div id="puente" style="<?php echo $imagen; ?>">
				</div>
			    <p id="atribucionpuente"> <?php echo $atribucion;?></p>
			</div>
			<div id="hacemos">
				<div id="titulohacemos">
					<h2><i class="fas fa-hand-holding-medical"></i>&nbsp;¿A qué nos dedicamos?</h2>
				</div>
				<div id="textohacemos">
					<p><strong>Ofrecemos servicios de instalación y mantenimiento de equipos de gases medicinales en sanatorios, clínicas y hospitales de la Ciudad de Rosario y zonas de influencia</strong> bajo estándares de calidad en la atención, gran cantidad de unidades móviles disponibles y excelencia, seguridad, eficiencia y celeridad en la prestación del servicio; con reconocida experticia y renombre en el rubro.</p>
				</div>
				</div>
				<div id="imagenhacemos">
					<img src="imagenquehacemos.jpg" alt="foto de guantes de trabajo y equipos de seguridad">
					<a id="atribucionhacemos" href="https://www.freepik.com" target="new">designed by Freepik</a>
				</div>
            </div>
			<div id="trayectoria">
				<div id="titulotrayectoria">
					<h2><i class="fas fa-hand-holding-medical"></i>&nbsp;Nuestra Historia</h2>
				</div>
				<div id="textotrayectoria">
					<p><strong>Nuestro origen se remonta al año 1998</strong>, cuando, ante la falta de una empresa dedicada exclusivamente a la instalación y mantenimiento de equipos de gases medicinales y teniendo vínculos con entidades sanatoriales, decidimos especializarnos en este rubro a efectos de satisfacer las necesidades no cubiertas hasta ese entonces con la mirada puesta en el perfeccionamiento y progreso del sistema de salud regional. A su vez, con el tiempo y en función de la experiencia adquirida, mejoramos nuestra eficiencia con la implementación de diferentes tecnologías y materiales, adaptadas a las nuevas problemáticas, desafíos y circunstancias que la actualidad nos impone.</p>
				</div>
			</div>
		</section>
		<section id="servicios">
			<div id="serviciostitulo">
				<h2><i class="fas fa-hand-holding-medical"></i>&nbsp;Nuestros Servicios</h2>
			</div>
			      <div class="grisesservicios">
				  <a href="imagenesbox/1a.JPG" data-lightbox="servicios" data-title="Provisión e instalación de poliductos en salas de terapia, habitaciones y quirófanos."><div id="servicioimg1">
						<h3>Provisión e instalación de poliductos en salas de terapia, habitaciones y quirófanos.</h3>
					</div></a>
					<a href="imagenesbox/2b.JPG" data-lightbox="servicios" data-title="Instalación y puesta en funcionamiento de Sistemas de producción de aire comprimido medicinal, de pequeño y gran consumo."><div id="servicioimg2">
						<h3>Instalación y puesta en funcionamiento de Sistemas de producción de aire comprimido medicinal, de pequeño y gran consumo.</h3>
					</div></a>
				  </div>
				  <a href="imagenesbox/3a.JPG" data-lightbox="servicios" data-title="Instalación y puesta en funcionamiento de Sistemas de producción de vacío (aspiración) de pequeño y gran consumo."><div id="servicioimg3">
						<h3>Instalación y puesta en funcionamiento de Sistemas de producción de vacío (aspiración) de pequeño y gran consumo.</h3>
					</div></a>
					<a href="imagenesbox/4b.JPG" data-lightbox="servicios" data-title="Instalación de gases especiales."><div id="servicioimg4">
						<h3>Instalación de gases especiales</h3>
					</div></a>
				  <div class="grisesservicios">
				  <a href="imagenesbox/5.JPG" data-lightbox="servicios" data-title="Contamos con personal preparado para el acondicionamiento de salas para hacer frente a la pandemia del COVID-19 en hospitales y sanatorios."><div id="servicioimg5">
						<h3>Contamos con personal preparado para el acondicionamiento de salas para hacer frente a la pandemia del COVID-19 en hospitales y sanatorios.</h3>
					</div></a>
					<a href="imagenesbox/6a.JPG" data-lightbox="servicios" data-title="Disponemos de unidades móviles de servicio."><div id="servicioimg6">
							<h3>Disponemos de unidades móviles de servicio.</h3>
					</div></a>
				  </div>
		</section>

		<section id="clientes">
			<div id="clientestitulo">
				<h2><i class="fas fa-hand-holding-medical"></i>&nbsp;Clientes</h2>
			</div>
			  <div id="clientesnube">
				<ul class="cloud">
					<li>Municipalidad de Rosario: Hospital Carrasco, Hospital J. Vilela, Hospital R. Peña, Maternidad Martin</li>
					<li>Grupo Oroño: Sanatorio Parque, Sanatorio de niños, Fertya, Maternidad</li>
					<li>Grupo Gamma: Hospital HPR, Clínica Gamma</li>
					<li>Grupo Perinat: Sanatorio de la mujer, Fisherton Mujer, Libertad Mujer</li>
					<li>Hospital Eva-Perón</li>
					<li>Policlínico Pami l</li>
					<li>Policlínico Pami ll</li>
					<li>Hospital de niños Zona Norte</li>
					<li>Sanatorio Británico</li>
					<li>Centro Ipam</li>
					<li>Sanatorio Rosendo García</li>
					<li>Instituto Prepa de recuperación</li>
					<li>Sanatorio Norte</li>
					<li>Clínica pergamino</li>
					<li>Clínica de San Nicolás</li>
					<li>Clínica de Alcorta</li>
					<li>Cruz Azul</li>
					<li>Clínica de Gálvez</li>
					<li>Hospital de Gálvez</li>
					<li>Hospital Amstrong</li>
					<li>Hospital Casilda</li>
					<li>Hospital Cañada de Gómez</li>
					<li>Clínica Litmanovich</li>
					<li>Clínica portuarios San Lorenzo</li>
					<li>Sanco Alcorta</li>
					<li>Sanco Amstrong</li>
					<li>Sanco Arteaga</li>
					<li>Sanco Venado</li>
					<li>Sanco San Javier</li>
					<li>Sanatorio San Martín de Venado Tuerto</li>
					<li>Sanatorio Uom de Casilda</li>
					<li>Centro de urología de Casilda</li>
					<li>Centro de urología Rosario</li>
				</ul>
			</div>
		</section>
		<section id="contacto">
			<div id="contactotitulo">
				<form class="form" action="proyectoajegases.php" method="post">
					  <h2>Contacto</h2>
					  <p type="Nombre*:"><input name="na" placeholder="Escriba su nombre aquí" required></input></p>
					  <p type="Email*:"><input name="de" placeholder="Escriba su Email aquí" required></input></p>
					  <p type="Teléfono:"><input name="tel" placeholder="Escriba su teléfono aquí"></input></p>
					  <p type="Mensaje*:"><input name="msg" placeholder="Escriba su mensaje aqui" required></input></p>
					  <input type="submit" name="submit" value="Enviar" id="btnSend"></input>
					  <div>
					    <span class="fa fa-phone"></span>+5493416167930
					    <span class="fa fa-envelope-o"></span> ajegases@hotmail.com
					  </div>
				</form>
			</div>

			<?php
						    
							if (isset($_POST["submit"])) {
			
								$nombre = $_POST["na"];
								$telefono = $_POST["tel"];
								$mail = $_POST["de"];
							
								$para      = "marianogoncevatt@gmail.com";
								$titulo    = "Consulta de  ".$nombre . "  desde la web de Aje";
								$mensaje   = $nombre . " realizó la siguiente consulta: " . $_POST["msg"];
								$cabeceras = "De: ". $nombre . "\r\n"; 
								$cabeceras .="Responder a: ". $mail . " o llamar al " . $telefono . "\r\n";
						
				
								 mail($para, $titulo, $mensaje, $cabeceras);
								 
								 
								 $servername = "localhost";
								 $username = "root";
								 $password = "";
								 $database = "progwebinicial";
								 
	  							 $conn = mysqli_connect($servername, $username, $password, $database) or exit ("No se puede conectar con la base de datos");
				
								 mysqli_query($conn, "INSERT INTO interesados (id_interesados, nombre,	telefono, mail) VALUES (default, '$nombre', '$telefono', '$mail')");


                                 function alert($msg) {
                                       echo "<script type='text/javascript'>alert('$msg');</script>";
                                 }
				                 
								 alert("Su mensaje ha sido enviado con éxito!");
							}
	            ?>

		</section>
		<footer>
			 <div>
				<h4>&copy; AJE GASES MEDICINALES de Esteban José Alberto (CUIT: 20-23521552-8) - Todos los Derechos Reservados 2020</h4>
			</div>
		</footer>
	<script src="js/lightbox-plus-jquery.min.js"></script>
	</body>
</html>