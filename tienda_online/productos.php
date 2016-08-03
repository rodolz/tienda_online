<<<<<<< HEAD
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
=======
<?php 
	include_once 'dbconfig.php';
	
	session_start();

	if (empty($_SESSION['carrito'])) {
		$_SESSION['carrito'] = array();
	}

	if(isset($_POST['agregar'])){
		$_SESSION['carrito'][$_POST['idProducto']] = $_POST['cantProducto'];
	}

	if (isset($_POST['limpiar'])) {
		unset($_SESSION['carrito']);
	}

	//Ordenar el array con los ids ascendente
	ksort($_SESSION['carrito']);
	//debugeando el array asociativo carrito
	// var_dump($_SESSION['carrito']);

	//query de todos los productos de la DB
	$sql = "SELECT * FROM productos";
	$query = $db_con->prepare($sql);
	$query->execute();
	$columnas=$query->fetchAll();
	$n_columnas = $query->rowCount();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Productos - Tienda Online</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="ajax.js"></script>
</head>
<body>
	<center>
	<div>
		<table  width="700" border=0 align="center" cellpadding="5" cellspacing="2">
			<thead>
				<tr>
					<td>ID-Producto</td>
					<td>Producto</td>
					<td>Descripcion</td>
					<td>Cantidad Disp.</td>
					<td>Precio</td>
					<td>Cantidad</td>
				</tr>
			</thead>
			<tbody>		
					<?php 
						foreach($columnas as $columna):
							echo "<tr>";
							echo "<td>".$columna['id']."</td>";
							echo "<td id=".$columna['id'].">".$columna['prod_nombre']."</td>";
							echo "<td>".$columna['descripcion']."</td>";
							echo "<td>".$columna['cant_disp']."</td>";
							echo "<td>".$columna['precio']."</td>";
							echo "<td>
								<select class='cantidad_producto' id=".$columna['id'].">
									";
									for ($i=1; $i <= $columna['cant_disp']; $i++) { 
										echo "<option value=".$i.">".$i."</option>";
									}
								echo "</select>
							</td>";
							echo "<td><button type='button' class='agregar' value=".$columna['id'].">Agregar al carrito</button></td>";
							echo "</tr>";
						endforeach; 
					?>	
			</tbody>
		</table>
	</div>
	<p id="respuesta">
		<!-- data de jquery -->
	</p>
	<div id="carrito">
		<div id="items">
			
		</div>
		<div id="botones">
			<button id="limpiar">Limpiar carrito</button>
			<button onclick="window.location.href='carrito.php'">Resumen de compra</button>
		</div>
	</div>
	</center>
</body>
</html>
>>>>>>> 87a8127cf627c81e5bf38a011bec943033360312
