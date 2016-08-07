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

	if (isset($_GET['id'])) {
		$idProducto = $_GET['id'];
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
<?php require_once("header.php"); ?> 
	<main>

  <div class="row">
  <center>
  <div class="col-md-8">
    <div class="thumbnail">
      <img src="<?php echo $producto['foto'];?>" alt="...">
      <div class="caption">
        <h3><?php echo $producto['prod_nombre'];?></h3>
        <p><?php echo $producto['descripcion'];?></p>
        <p>
          <label>Precio (c/u): </label>
          <?php echo $producto['precio'];?>
        </p>
        <p>
          <label>Cantidad: </label>
          <input type="number" id="<?php echo $producto['id']; ?>" max="<?php echo $producto['cant_disp'];?>" min="1" value="1"></p>
        <p>
      </div>
    </div>
    <div>
        <a class="cd-add-to-cart" role="button">Agregar al carrito</a>
      </div>
  </div>
  </center>
</div>

	</main>
<?php require_once("footer.php"); ?> 