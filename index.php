<!-- Pagina Principal

	Creado por: Esteban Ramirez
	Fecha: 26 de sept. 2018
	Version: 1.0
-->

<?php
$sucursal = "Monte Everest"; // Nombre de Sucursal
$semana = 4; //Semana
$promASucursal = 93; // Puntaje promedio de sucursal
$promMarca = 92; // Puntaje promedio de marca
$cambioPromSucursal =0; // Porcentaje contra semana anterior de promedio de surcursal
$cambioPromMarca =0; // Porcentaje contra semana anterior de promedio de marca
$cambioProgreso =6; // Porcentaje contra semana anterior de progreso
$cambioAdopcion = 7; // Porcentaje contra semana anterior de adopcion
$topicosCompletados = 276; // Topicos completados
$topicosDisponibles = 331; // Tópicos disponibles
$activos =28; // adopcion- activos
$registrados = 31; // adopcion - registrados
$promProgreso = 83; // Porcentaje de progreso
$promAdopcion = 90; // Porcentaje de adopcion
$colorPrincipal = "#76006A";
$colorSecundario = "#EB0036";

// El siguiente arreglo se llenará dinamicamente al conectar la base de datos. Solo se conservará el prototipo marcado
// Inicio 
$superheroes =[]; // .
$temp['comparacion'] = 1;
$temp['url_foto'] = "img/usr.png";
$temp['nombre'] = "Victor Reyes Hernandez"; // llenado con BD
$temp['puntuacion'] = 100; // llenado con BD
$temp['medallas'] = array("oro" => 9, // llenado con BD
							"plata" => 0, // llenado con BD
							"bronce" => 0,// llenado con BD
							"dormido" => 0, // llenado con BD
							"zorro" => 0 // llenado con BD
); // .
array_push($superheroes, $temp); // . 
// Fin
$temp['comparacion'] = 1;
$temp['url_foto'] = "img/usr.png";
$temp['nombre'] = "Armando Hernández Márquez"; 
$temp['puntuacion'] = 99; 
$temp['medallas'] = array("oro" => 5,
							"plata" => 0,
							"bronce" => 0,
							"dormido" => 0,
							"zorro" => 0
); 
array_push($superheroes, $temp);
$temp['comparacion'] = 1;
$temp['url_foto'] = "img/usr.png";
$temp['nombre'] = "Jonathan Gutiérrez";
$temp['puntuacion'] = 98; 
$temp['medallas'] = array("oro" => 5,
							"plata" => 0,
							"bronce" => 0,
							"dormido" => 0,
							"zorro" => 0
);
array_push($superheroes, $temp);

// Inicio 
$shittyheroes =[]; // .
$temp['comparacion'] = 0;
$temp['url_foto'] = "img/usr.png";
$temp['nombre'] = "María de Jesús Ordoñez Sánchez"; // llenado con BD
$temp['puntuacion'] = 77; // llenado con BD
$temp['medallas'] = array("oro" => 1, // llenado con BD
							"plata" => 0, // llenado con BD
							"bronce" => 0,// llenado con BD
							"dormido" => 0, // llenado con BD
							"zorro" => 0 // llenado con BD
); // .
array_push($shittyheroes, $temp); // . 
// Fin
$temp['comparacion'] = 0;
$temp['url_foto'] = "img/usr.png";
$temp['nombre'] = "Bartola Chávez Vázquez"; 
$temp['puntuacion'] = 79; 
$temp['medallas'] = array("oro" => 4,
							"plata" => 1,
							"bronce" => 1,
							"dormido" => 0,
							"zorro" => 0
); 
array_push($shittyheroes, $temp);
$temp['comparacion'] = -1;
$temp['url_foto'] = "img/usr.png";
$temp['nombre'] = "Rafael Rodríguez Ramírez";
$temp['puntuacion'] = 80; 
$temp['medallas'] = array("oro" => 6,
							"plata" => 0,
							"bronce" => 0,
							"dormido" => 0,
							"zorro" => 0
);
array_push($shittyheroes, $temp); 

$examen['nombre'] = "GEM";
$examen['promedio_sucursal'] = 88;
$examen['promedio_marca'] = 87;
$examen['cambio_promedio_sucursal'] = -1;
$examen['cambio_promedio_marca'] = -1;
$encuestas = [];
$encuesta['titulo'] = "De Japón a tu corazón";
$encuesta['subtitulo'] = "Encuesta con 5 preguntas de servicio y un NPS";
$encuesta['numero'] = 69;
$encuesta['num_comparacion'] = -1;
$encuesta['puntuacion'] = 65;
$encuesta['comparacion'] = -4;
$encuesta['detractores'] = 2;
$encuesta['pasivos'] = 20;
$encuesta['promotores'] = 47;
$encuesta['palabra'] = "Excelente";

array_push($encuestas, $encuesta);

$encuesta['titulo'] = "NPS";
$encuesta['subtitulo'] = "Encuesta con pregunta única de NPS";
$encuesta['numero'] = 75;
$encuesta['num_comparacion'] = 7;
$encuesta['puntuacion'] = -50;
$encuesta['comparacion'] = -19;
$encuesta['detractores'] = 0;
$encuesta['pasivos'] = 31;
$encuesta['promotores'] = 44;
$encuesta['palabra'] = "Bien";

$fechaInicial = "30/07/18";
$fechaFinal = "05/08/18";

array_push($encuestas, $encuesta);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Hero Guest - <?= $sucursal; ?></title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.4.1/jspdf.debug.js" integrity="sha384-THVO/sM0mFD9h7dfSndI6TS0PgAGavwKvB5hAxRRvc0o9cPLohB0wb/PTA7LdUHs" crossorigin="anonymous"></script>
	<script type="text/javascript" src="main.js"></script>

</head>
<body>
	<div class="contenedor-principal" id="content">
		<header>
			<div class="header-sec head-sucursal"><h2 class="titulo"><?= $sucursal; ?></h2></div>
			<div class="header-sec head-semana"><h3 class="">Semana <?= $semana; ?></h3></div>
			<div class="logos header-sec">
				<img src="img/heroguestlogo.png">
				<img src="img/itto.png">
			</div><!--/logos -->
		</header><!--/ header -->
		<div class="sec1 seccion">
			<div class="subsec puntaje">
				<h4>Puntaje</h4>
				<div class="contenedor">
					<div class="subcontenedor">
						<p>Promedio Sucursal</h5></p>
						<p class="promedio promedio-sucursal"><?= $promASucursal; ?> <span class="porcentaje-logo">%</span></p>
						<p>
							<span class="marca">
								<?php 
								if($cambioPromSucursal> 0){
									echo "<img src='img/pro.png'>";
								}else if($cambioPromSucursal < 0){
									echo "<img src='img/con.png'>";
								}
								?>
							</span>
							<span><?= abs($cambioPromSucursal); ?></span>% vs semana anterior
						</p>
					</div><!--/subcontenedor-->
					<div class="subcontenedor">
						<p>Promedio Marca</p>
						<p class="promedio promedio-marca"><?= $promMarca; ?> <span class="porcentaje-logo">%</span></p>
						<p>
							<span class="marca">
							<?php 
							if($cambioPromMarca> 0){
								echo "<img src='img/pro.png'>";
							}else if($cambioPromMarca < 0){
								echo "<img src='img/con.png'>";
							}
							?>
							</span>
							<span><?= abs($cambioPromMarca); ?></span>% vs semana anterior
						</p>
					</div><!--/subcontenedor-->

				</div>
			</div><!--/subsec-->
			<div class="subsec progreso" id ="progreso">
				<h4>Progreso</h4>
				<div class="semicirc">
					<canvas class="barra" id="barra-prog" width="400" height="200" data-porcentaje="<?=$promProgreso;?>"></canvas>
					<!--<p class="promedio promedio-progreso"><?= $promProgreso; ?> <span class="porcentaje-logo">%</span></p>-->
				</div>
					
				<div class="inferior">
					<p>Tópicos completados<span><?= $topicosCompletados; ?></span></p>
					<p>Tópicos disponibles<span><?= $topicosDisponibles; ?></span></p>
				</div><!--/inferior-->
				<p class="cambio">
					<span class="marca">
					<?php 
					if($cambioProgreso> 0){
						echo "<img src='img/pro.png'>";
					}else if($cambioProgreso < 0){
						echo "<img src='img/con.png'>";
					}
					?>
					</span>
					<span><?= abs($cambioProgreso); ?></span>% vs semana anterior
				</p>
			</div><!--/subsec-->
			<div class="subsec adopcion" id="adopcion">
				<h4>Adopcion</h4>
				<div class="semicirc">
					<canvas class="barra" id="barra-adopcion" width="400" height="200" data-porcentaje="<?=$promAdopcion;?>" ></canvas>
					<!--<p class="promedio promedio-adopcion"><?= $promAdopcion; ?> <span class="porcentaje-logo">%</span></p>-->
				</div>
				<div class="inferior">
					<p>Activos<span><?= $activos; ?></span></p>
					<p>Registrados<span><?= $registrados; ?></span></p>
				</div><!--/inferior-->
				<p class="cambio">
					<span class="marca">
						<?php 
						if($cambioAdopcion> 0){
							echo "<img src='img/pro.png'>";
						}else if($cambioAdopcion < 0){
							echo "<img src='img/con.png'>";
						}
						?>
					</span>
					<span><?= abs($cambioAdopcion); ?></span>% vs semana anterior</p>
			</div><!--/subsec-->
			<div class="subsec superheroes">
				<h4>Superhéroes</h4>
				<table class="superheroes">
					<tr>
						<th></th>
						<th></th>
						<th></th>
						<th></th>
						<th><img src="img/oro.png"></th>
						<th><img src="img/plata.png"></th>
						<th><img src="img/bronce.png"></th>
						<th><img src="img/dormido.png"></th>
						<th><img src="img/zorro.png"></th>
					</tr>
					<?php
					foreach ($superheroes as $super) {
						echo "<tr>";
						echo "<td>";
						if($super['comparacion'] > 0){
							echo "<img src='img/pro.png'>";
						}else if($super['comparacion'] < 0){
							echo "<img src='img/con.png'>";
						}
						echo "</td>";
						echo "<td>";
						echo "<img src='" . $super['url_foto'] . "'>";
						echo "</td>";
						echo "<td class='nombre'>";
						echo "<h5>" . $super['nombre'] . "</h5>";
						echo "</td>";
						echo "<td>";
						echo "<h2>" . $super['puntuacion'] . "%</h2>";
						echo "</td>";
						foreach ($super['medallas'] as $medalla) {
							echo "<td class ='medalla'>";
							echo "<h2>" . $medalla . "</h2>";
							echo "</td>";
						}
						echo "</tr>";	
					}

					?>
				</table>
			</div><!--/superheroes-->
			<div class="subsec shittyheroes">
				<h4>Héroes en Entrenamiento</h4>
				<table class="shittyheroes">
					<tr>
						<th></th>
						<th></th>
						<th></th>
						<th></th>
						<th><img src="img/oro.png"></th>
						<th><img src="img/plata.png"></th>
						<th><img src="img/bronce.png"></th>
						<th><img src="img/dormido.png"></th>
						<th><img src="img/zorro.png"></th>
					</tr>
					<?php
					foreach ($shittyheroes as $super) {
						echo "<tr>";
						echo "<td>";
						if($super['comparacion'] > 0){
							echo "<img src='img/pro.png'>";
						}else if($super['comparacion'] < 0){
							echo "<img src='img/con.png'>";
						}
						echo "</td>";
						echo "<td>";
						echo "<img src='" . $super['url_foto'] . "'>";
						echo "</td>";
						echo "<td class='nombre'>";
						echo "<h5>" . $super['nombre'] . "</h5>";
						echo "</td>";
						echo "<td>";
						echo "<h2>" . $super['puntuacion'] . "%</h2>";
						echo "</td>";
						foreach ($super['medallas'] as $medalla) {
							echo "<td class ='medalla'>";
							echo "<h2>" . $medalla . "</h2>";
							echo "</td>";
						}
						echo "</tr>";	
					}

					?>
				</table>
			</div><!--/shittyheroes-->
		</div><!--/ sec1 -->
		<div class="sec2 seccion">
			<div class="header-sec head-semana"><h3 class=""><?= $examen['nombre']; ?></h3></div>
			<div class="subsec examen-puntaje">
				<div class="contenedor">
					<div class="subcontenedor">
						<p>Promedio Sucursal</h5></p>
						<p class="promedio promedio-sucursal"><?=  $examen['promedio_sucursal']; ?> <span class="porcentaje-logo">%</span></p>
						<p>
							<span class="marca">
							<?php 
								if($examen['cambio_promedio_marca'] > 0){
									echo "<img src='img/pro.png'>";
								}else if($examen['cambio_promedio_marca'] < 0){
									echo "<img src='img/con.png'>";
								}
							?>
							</span>
							<span><?= $examen['cambio_promedio_sucursal']; ?></span>% vs semana anterior</p>
					</div><!--/subcontenedor-->
					<div class="subcontenedor">
						<p>Promedio Marca</p>
						<p class="promedio promedio-sucursal"><?=  $examen['promedio_marca']; ?> <span class="porcentaje-logo">%</span></p>
						<p>
							<span class="marca">
							<?php 
							if($examen['cambio_promedio_marca'] > 0){
								echo "<img src='img/pro.png'>";
							}else if($examen['cambio_promedio_marca'] < 0){
								echo "<img src='img/con.png'>";
							}
							?>
							</span>
							<span><?= $examen['cambio_promedio_marca']; ?></span>% vs semana anterior</p>
					</div><!--/subcontenedor-->

				</div>
			</div><!--/subsec-->

			<?php 
			$tag =0;
			$flag = 0;
			$colorActual = "";
			foreach ($encuestas as $enc) {
				?>
			<div class="subsec encuesta">
				<div class="cabeceras">
					<h4><?= $enc['titulo'];?></h4>
					<h5><?= $enc['subtitulo'];?></h5>
				</div><!--/cabeceras -->
				<div class="info-encuestas">
					<p><span class="numero"><?= $enc['numero'];?></span> Encuestas</p>
					<p>
						<?php 
						$
						$keyword = '';
						if($enc['num_comparacion'] > 0){
							echo "<img src='img/pro.png'>";
							$keyword = 'arriba';
						}else if($enc['num_comparacion'] < 0){
							echo "<img src='img/con.png'>";
							$keyword = 'abajo';
						}
						echo abs($enc['num_comparacion']);
						?>
						% <?= $keyword; ?> de la meta
					</p>
					<?php
					if($flag == 0){
						$colorActual = $colorPrincipal;
						$flag = 1;
					}else{
						$colorActual = $colorSecundario;
						$flag = 1;
					}
					?>
					<canvas width="1100" height="1100" id="rollo-<?= $tag; ?>" class="rollo" data-porcentaje="<?=$enc['puntuacion']?>" data-color="<?=$colorActual?>" data-palabra="<?=$enc['palabra']?>"></canvas>
					<p class="cambio">
						<span class="marca">
						<?php 
						if($enc['comparacion']> 0){
							echo "<img src='img/pro.png'>";
						}else if($enc['comparacion'] < 0){
							echo "<img src='img/con.png'>";
						}
						?>
						</span>
						<span><?= abs($enc['comparacion']); ?></span>% vs semana anterior
					</p>
				</div><!--/info-encuestas-->
				<div class="detalles">
					<table class="tabla-detalles">
						<tr>
							<th>
								Detractores (0-6)
							</th>
							<th>
								Pasivos (7-8)
							</th>
							<th>
								Promotores (9-10)
							</th>
						</tr>
						<tr>
							<td>
								<?= $enc['detractores']; ?>
							</td>
							<td>
								<?= $enc['pasivos']; ?>
							</td>
							<td>
								<?= $enc['promotores']; ?>
							</td>
						</tr>
					</table>
				</div><!--/detalles-->
			</div><!--/subsec-->
				<?php
				$tag = $tag +1;
			}
			?>
			<div class="guardar-PDF ignora-pdf">
				<button id="boton-guardar-pdf">Exportar a PDF </button>
				<div id="editor"></div>
			</div><!--/guardar-PDF -->
		</div><!--/ sec2 -->
		<footer>
			<p>
				Periodo de tiempo evaluado: <?= $fechaInicial; ?> - <?= $fechaFinal; ?>
				<br>
				Puntaje, progreso y adopción están ligados a tópicos completados. Puede haber usuarios activos sin finalizar un tópico.  
				<br>
				Califican como "Superhéroes" usuarios con 100% de progreso y como “Héroes en entrenamiento” usuarios con la calificación más baja y por lo menos un tópico completado.
			</p>
		</footer>
	</div><!--/contenedor-principal-->

</body>
</html>
