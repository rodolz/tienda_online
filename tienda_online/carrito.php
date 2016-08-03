<?php 
	include_once 'dbconfig.php';
	session_start();

	if (empty($_SESSION['carrito'])) {
		echo "No tiene items en el carrito";
		echo'
		<div>
			<a href="productos.php">Volver a productos</a>		
		</div>';
	}
	$arrayIds = array();
	foreach ($_SESSION['carrito'] as $key => $value) {
		array_push($arrayIds,$key);
	}
	$idIN = implode(',',$arrayIds);
	$sql = "SELECT * FROM productos WHERE id IN (".$idIN.")";
	$query = $db_con->prepare($sql);
	$query->execute();
	$columnas=$query->fetchAll();
	$n_columnas = $query->rowCount();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Carrito - Tienda Online</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="ajax.js"></script>
</head>
<body >
<center>
<table width="700" border=0 align="center" cellpadding="5" cellspacing="2">
	<thead>
		<tr>
			<td>ID-Producto</td>
			<td>Producto</td>
			<td>Descripcion</td>
			<td>Precio</td>
			<td>Cantidad</td>
		</tr>
	</thead>
	<tbody>		
			<?php 
				foreach($columnas as $columna):
					echo "<tr>";
					echo "<td>".$columna['id']."</td>";
					echo "<td>".$columna['prod_nombre']."</td>";
					echo "<td>".$columna['descripcion']."</td>";
					echo "<td>".$columna['precio']."</td>";
					echo "<td>".$_SESSION['carrito'][$columna['id']]."</td>";
					echo "</tr>";
					$cantidadTotal = $cantidadTotal + $_SESSION['carrito'][$columna['id']];
					$precioTotal = $precioTotal + ($columna['precio']*$_SESSION['carrito'][$columna['id']]);
					$precioTotal = number_format($precioTotal,2);
				endforeach; 
			?>
			<tr><td>&nbsp;</td></tr>
			<tr>
				<td>Precio Total</td>
				<td></td>
				<td></td>
				<td><?php echo $precioTotal; ?></td>
				<td><?php echo "Cantidad total: ".$cantidadTotal; ?></td>
			</tr>			
	</tbody>
</table>
<button onclick="window.location.href='productos.php'">Volver a la lista de productos</button>
</center>
</body>
</html>
