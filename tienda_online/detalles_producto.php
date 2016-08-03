<?php
	include 'includes/dbconfig.php';
	include 'includes/session.php';

	$cantidadTotal = 0;
	$precioTotal = 0;

	$session->crear_sesion("carrito",true);

	if(isset($_POST['agregar_item'])){
		$id = $_POST['idProducto'];
		$cant_prod = $_POST['cantProducto'];
		$session->agregar_item("carrito",$id,$cant_prod);
	}

	if (isset($_GET['q'])) {
		$idProducto = $_GET['q'];
		// echo "GET exitoso, id = ".$idProducto;
		$producto = $crud->buscar_por_id($idProducto);
	}
	else{
		return false;
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
	<div id="header">
		<h1><?php echo $producto['prod_nombre'];?></h1>
	</div>
	<br/>
	<div id="body">
		<div id="descripcion">
			<p>
			<label>Descripcion: </label>
				<?php echo $producto['descripcion'];?>
			</p>
		</div>
		<div id="precio">
			<p>
			<label>Precio (c/u): </label>
				<?php echo $producto['precio'];?>
			</p>
		</div>
		<div id="cantidad">
			<p><label>Cantidad: </label><?php
				echo "<select id=".$producto['id'].">";
					for ($i=1; $i <= $producto['cant_disp']; $i++) { 
						echo "<option value=".$i.">".$i."</option>";
					}
				echo "</select>";?>
			</p>
		</div>
	<div>
		<a class="cd-add-to-cart">Agregar al carrito</a>
	</div>
	</main>
<?php require("footer.php"); ?> 