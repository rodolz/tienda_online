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
  <div class="col-md-7">
    <div class="thumbnail">
      <img src="<?php echo "img/productos/{$producto['foto']}";?>" alt="...">
      <div class="caption">

      <div class="panel panel-primary">
        <div class="panel-heading">
          <h3 class="panel-title"><?php echo $producto['prod_nombre'];?></h3>
        </div>
        <div class="panel-body">
        <div class="well">
          <?php echo $producto['descripcion'];?>
        </div>
          
          <h1>
          <span class="label label-primary">
            Precio (c/u): $<?php echo $producto['precio'];?>
          </span>
          </h1>
          <hr>
          <div class="row">
          <div class="col-md-4"></div>
          <div class="col-md-4">
          <div class="input-group">
            <span class="input-group-addon" id="basic-addon1">Cantidad</span> 
            <input type="number" id="<?php echo $producto['id']; ?>" value="1" aria-describedby="basic-addon1">
          </div>
          </div>
          <div class="col-md-5"></div>
          </div> 
        </div>
      </div>

        
      </div>
    </div>
    <div>
        <a class="cd-add-to-cart" role="button">Agregar al carrito</a>
      </div>
  </div>
  </center>
</div>

	</main>

  <script type="text/javascript">
    var limite = parseInt(<?php echo $producto['cant_disp'];?>);
    var inputCantidad = document.getElementById(<?php echo $producto['id'];?>);
    inputCantidad.onchange = inputCheck;
    console.log(inputCantidad, limite);

    function inputCheck (){
      let value = parseInt(inputCantidad.value);
      if (value <= 0) {
        inputCantidad.value = "1";
      } else if (value > limite) {
        inputCantidad.value = "1";
        alert('Inventario insuficiente');
      }
    }
  </script>
<?php require_once("footer.php"); ?> 