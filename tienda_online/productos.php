<?php
	include 'includes/dbconfig.php';
	include 'includes/session.php';
	$cantidadTotal = 0;
	$precioTotal = 0;

	$session->crear_sesion("carrito",true);

	if (isset($_POST['borrar_item'])) {
		$id = $_POST['idProducto'];
		$session->eliminar_item("carrito",$id);
	}

	if (!empty($_SESSION['carrito'])) {
		$arrayIds = array();
		foreach ($_SESSION['carrito'] as $key => $value) {
			//cargamos el array con todos los ids
			array_push($arrayIds,$key);
		}
		//armamos el query en una variable string con los ids separado con (,)
		$idIN = implode(',',$arrayIds);
		//funcion para obtener todos los productos segundo los id's
		$columnas = $crud->buscar_por_ids($idIN);
	}

?>
<?php require("header.php"); ?>  
	<main>
		<ul id="cd-gallery-items" class="cd-container">
			<?php 
				//Todos los productos
				$p_columnas = $crud->buscar_todo();
				foreach($p_columnas as $p_columna):
					echo "<li><img id=".$p_columna['id']." src='img/thumb.jpg' alt='Preview image'><br/><span>".$p_columna['prod_nombre']."</span></li>";
				endforeach; 
			?>	
		</ul>
	</main>	
<?php require("footer.php"); ?> 