<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="assets/css/stl.css">
		<script src="jquery-3.2.1.min.js"></script>
	<meta name="viewport" content="width=device-width,user-scalable=no">
</head>
<body id="bod">
			<!-- Menuu -->

	<ul class="barra">
		
        <li><a id="btn_ir_a" class="aa">Inicio</a></li>
       <li><a id="hidd" class="f" href="fn_sesion.php">Cerrar Sesion</a></li>
        <div id="icon_list" class="icon ">
        	<img src="imagenes/list.png">
        </div>
	</ul>
					<!-- Menuu -->
</body>
</html>
<script type="text/javascript">
	$(document).ready(function(){
	 var contador = 0;
    document.getElementById("icon_list").onclick = function(){
        contador++;
        if (contador == 1) {
        	document.getElementById("hidd").style.display = "block";
        }else if (contador == 2) {
        	document.getElementById("hidd").style.display = "none";
        	contador =0;
        }      
    }
	});
</script>