$(document).ready(function() {
	var idP = $("#progreso").find("canvas").attr("id");
	var porcentajeP = $("#progreso").find("canvas").attr("data-porcentaje");
	var idA = $("#adopcion").find("canvas").attr("id");
	var porcentajeA = $("#adopcion").find("canvas").attr("data-porcentaje");
	drawCircle(idP, porcentajeP, "#D91D45"); // Usar angular para sacar los valores
	drawCircle(idA, porcentajeA, "#6C296E");
	$(".encuesta").each(function(e){
		var id = $(this).find("canvas").attr("id");
		var porcentaje = $(this).find("canvas").attr("data-porcentaje");
		var color = $(this).find("canvas").attr("data-color");
		var palabra = $(this).find("canvas").attr("data-palabra");
		drawRoll(id, porcentaje, color, palabra);
	});

	$("#boton-guardar-pdf").click(function(e){
		var doc = new jsPDF();
		var specialElementHandlers = {
		    '#editor': function (element, renderer) {
		        return true;
		    }
		};
		 doc.fromHTML($('#content').html(), 10, 10, {
		        'width': 170,
		            'elementHandlers': specialElementHandlers
		    }, function(c){
		    	doc.save('sample-file.pdf');
		    });
		    
	});
});

function drawCircle(id, porcentaje, color){
	var set = 0;
	var canvas = document.getElementById(id);
	var ctx = canvas.getContext("2d");
	window.requestAnimationFrame(function req(timestamp){
		if(set <= porcentaje){
			ctx.clearRect(0,0,400,200);
			ctx.beginPath();
			
			ctx.arc(200, 200, 150, Math.PI, 0);
			
			ctx.arc(200, 200, 110, 0, Math.PI, true);
			ctx.lineTo(50, 200);
			ctx.fillStyle = '#D6D6D6';
			ctx.fill();
			ctx.beginPath();
			ctx.arc(200, 200, 150, Math.PI, Math.PI + set*0.01*Math.PI);
			ctx.arc(200, 200, 110, Math.PI + set*0.01*Math.PI, Math.PI, true);
			ctx.fillStyle = color;
			ctx.fill();
			ctx.font = 'bold 50px Poppins';
			ctx.textAlign ="center";
			
			ctx.fillText(set.toString(), 200, 200);

			set = set +1;
			window.requestAnimationFrame(req);
		}
		
	});
	
}

function drawRoll(id, porcentaje, color, palabra){
	var set = 0;
	var canvas = document.getElementById(id);
	var ctx = canvas.getContext("2d");
	window.requestAnimationFrame(function req2(timestamp){
		if(Math.abs(set) <= Math.abs(porcentaje)){
			// Limpiar Imagen
			ctx.clearRect(0,0,1100,1100);
			ctx.shadowBlur=0;
			ctx.shadowColor="transparent";
			// Empezar dibujo 1
			ctx.beginPath();	
			var radioExt = 450;
			ctx.arc(550, 550, radioExt, (126/180)*Math.PI, (54/180)*Math.PI); // Arco exterior	
			ctx.arc(550, 550, 0, (54/180)*Math.PI, (126/180)*Math.PI, true); // Arco interior
			ctx.fillStyle = color;
			ctx.fill();
			// Empezar dibujo 2 - Lineas de circulo
			ctx.beginPath();
			ctx.moveTo(550,550);
			ctx.lineTo(550 + radioExt*Math.cos(198*Math.PI/180), 550  +radioExt*Math.sin(198*Math.PI/180));
			ctx.moveTo(550,550);
			ctx.lineTo(550,0);
			ctx.moveTo(550,550);
			ctx.lineTo(550 + radioExt*Math.cos(342*Math.PI/180), 550  +radioExt*Math.sin(342*Math.PI/180));
			ctx.lineWidth=10;
			ctx.strokeStyle = "white";
			ctx.stroke();
			// Empezar dibujo 3- "dial"
			ctx.beginPath();
			var radio = 220; // radio del dial
			ctx.moveTo(1100,550);
			ctx.arc(550, 550, radio, 0, 2*Math.PI); // Circulo del dial
			var longTriangulo = 100;
			theta = ((-1.44)*set +90)*Math.PI/180; // Cálculo de angulo dependiendo del valor de porcentaje
			var longTriangulo = 65;
			var anglChange = 15;
			var theta2 = ((-1.44)*set +90 - anglChange)*Math.PI/180;
			var theta3 = ((-1.44)*set +90 + anglChange)*Math.PI/180;
			var posisionX = 550 + radio*Math.cos(theta);
			var posisionY = 550 - radio*Math.sin(theta);
			var posisionXref = 550 + radio*Math.cos(theta) + longTriangulo*Math.cos(theta);
			var posisionYref = 550 - radio*Math.sin(theta) - longTriangulo*Math.sin(theta);
			var posisionXrefIzq = 550 + radio*Math.cos(theta2);
			var posisionYrefIzq = 550 - radio*Math.sin(theta2);
			var posisionXrefDer = 550 + radio*Math.cos(theta3);
			var posisionYrefDer = 550 - radio*Math.sin(theta3);
			

			//ctx.arc(posisionX, posisionY, 20, 0, 2*Math.PI);
			// Dibujar triangulo

			ctx.moveTo(posisionXref, posisionYref);
			ctx.lineTo(posisionXrefIzq, posisionYrefIzq);
			ctx.lineTo(posisionXrefDer, posisionYrefDer);


			ctx.shadowBlur=30;
			ctx.shadowColor="#aaa";
			ctx.fillStyle = "#fff";
			ctx.fill();
			// Dibujar texto de porcentaje
			ctx.beginPath();
			ctx.shadowBlur=0;
			ctx.shadowColor="transparent";
			var fontSize = 100;
			ctx.font = 'bold ' + fontSize +'px Poppins';
			ctx.fillStyle = "#424242";
			ctx.fillText(set.toString(), 550, 550);
			ctx.textAlign ="center";
			// Dibujar texto de "Excelente"
			ctx.beginPath();
			ctx.shadowBlur=0;
			ctx.shadowColor="transparent";
			var fontSize2 = 50;
			ctx.font = 'bold ' + fontSize2 +'px Poppins';
			ctx.fillText(palabra, 550, 670);
			ctx.textAlign ="center";
			// Dibujar marcas de texto
			ctx.beginPath();
			var angulosTexto = [54, 126, 198, 270, 342];
			var textos = ["100","-100", "-50", "0", "50"];
			ctx.font = fontSize2 +'px Poppins';	
			ctx.textAlign ="center";		
			for(var ii = 0; ii<= 5; ii++){
				//ctx.fillText(textos[ii],550 + radioExt*Math.cos(angulosTexto[ii]*Math.PI/180), 550  +radioExt*Math.sin(angulosTexto[ii]*Math.PI/180));
				if(ii == 0 || ii == 1){
					ctx.fillText(textos[ii],550 + radioExt*Math.cos(angulosTexto[ii]*Math.PI/180), 550  +radioExt*Math.sin(angulosTexto[ii]*Math.PI/180) + 50);
				}else if(ii == 2){
					ctx.fillText(textos[ii],550 + radioExt*Math.cos(angulosTexto[ii]*Math.PI/180) - 50, 550  +radioExt*Math.sin(angulosTexto[ii]*Math.PI/180));
				}else if(ii == 4){
					ctx.fillText(textos[ii],550 + radioExt*Math.cos(angulosTexto[ii]*Math.PI/180) + 50, 550  +radioExt*Math.sin(angulosTexto[ii]*Math.PI/180));
				}else{
					ctx.fillText(textos[ii],550 + radioExt*Math.cos(angulosTexto[ii]*Math.PI/180), 550  +radioExt*Math.sin(angulosTexto[ii]*Math.PI/180) -10);
				}
			}
			
			if(porcentaje >= 0){
				set = set +1;
			}else{
				set = set -1;
			}
			/*ctx.beginPath();
			ctx.arc(200, 200, 150, Math.PI, Math.PI + set*0.01*Math.PI);
			ctx.arc(200, 200, 110, Math.PI + set*0.01*Math.PI, Math.PI, true);
			ctx.fillStyle = color; */
			/*ctx.fill();
			ctx.font = '50px Poppins';
			ctx.font = '';
			ctx.clearRect(150,150,100,50);
			ctx.fillText(set.toString(), 170, 190);
			*/
			
			window.requestAnimationFrame(req2);
		}
		
	});
	
}