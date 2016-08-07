<?php
	include 'includes/dbconfig.php';
	include 'includes/session.php';
	$cantidadTotal = 0;
	$precioTotal = 0;
	$items_x_pagina = 9;

	$pagina = 1;

	if(isset($_GET['pagina'])){
		$pagina = intval($_GET['pagina']);
	}

	$p_columnas = $crud->buscar_x_limite($pagina,$items_x_pagina);
	$array_todos = $crud->buscar_todo();
	$num_total = $array_todos[1];

	$num_paginas = ceil($num_total/$items_x_pagina);
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
				// $p_columnas = $crud->buscar_todo();
				foreach($p_columnas as $p_columna):
					echo "<li><img id=".$p_columna['id']." src='img/thumb.jpg' alt='Preview image'><br/><span>".$p_columna['prod_nombre']."</span></li>";
				endforeach; 
			?>	
		</ul>
		<nav aria-label="Page navigation">
		  <ul class="pagination">
		  <?php if($pagina > 1){ ?>
		    <li>
		      <a href="productos.php?pagina=<?php echo $pagina-1;?>" aria-label="Previous">
		        <span aria-hidden="true">&laquo;</span>
		      </a>
		    </li><?php } ?>
				<?php for($i = 0;$i<$num_paginas;$i++){ 
						$estilo = "";
						if ($pagina == $i+1) {
							$estilo = "class=\"active\"";
						}
		    		?>
		    	<li <?php echo $estilo; ?>><a href="productos.php?pagina=<?php echo $i+1; ?>"><?php echo $i+1;?></a></li>
		    	<?php } ?>
			<?php if($pagina <= $num_paginas-1 ){ ?>
		    <li>
		      <a href="productos.php?pagina=<?php echo $pagina+1;?>" aria-label="Next">
		        <span aria-hidden="true">&raquo;</span>
		      </a>
		    </li><?php } ?>
		  </ul>
		</nav>
	</main>	
<?php require("footer.php"); ?> 