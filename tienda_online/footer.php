<div id="cd-shadow-layer"></div>
	<div id="cd-cart">
		<h2>Carrito</h2>
		<ul class="cd-cart-items">
			<?php
				if(isset($columnas)){
					foreach($columnas as $columna):
						echo "<li id=".$columna['id']."><span id='cant_prod'class='cd-qty'>".$_SESSION['carrito'][$columna['id']]."x</span>".$columna['prod_nombre']."<div id='precio_prod' class='cd-price'>$".$columna['precio']." c/u</div><a href='#0' id=".$columna['id']." class='cd-item-remove cd-img-replace'>Eliminar</a></li>";
						$precioTotal = $precioTotal + ($columna['precio']*$_SESSION['carrito'][$columna['id']]);
						$precioTotal = number_format($precioTotal,2);
						endforeach;
				}
				else{
					echo "<li>No tiene items en su carrito.</li>";
				}
			?>
		</ul> <!-- cd-cart-items -->
		<div id="precioT" class="cd-cart-total">
			<p>Total <span id="precio_total"><?php echo "$".$precioTotal; ?></span></p>
		</div> <!-- cd-cart-total -->

		<a href="#0" id="pagar" data-toggle="modal" data-target="#myModal" class="checkout-btn">Pagar</a>
		</div> <!-- cd-cart -->
	<div class="container">
	  <!-- Modal -->
	  <div class="modal fade" id="myModal" role="dialog">
	    <div class="modal-dialog modal-lg">
	      <div class="modal-content">
	        <div class="modal-header">
	          <button type="button" class="close" data-dismiss="modal">&times;</button>
	          <h4 class="modal-title">Orden de compra</h4>
	          </div>
	          <div class="modal-body">

				<form class="form-horizontal">

        <div class="row">

        <div class="col-md-3"></div>
        <div class="col-md-6">

        <div class="panel panel-primary">
          <div class="panel-heading">
            <h3 class="panel-title">Datos Personales</h3>
          </div>
          <div class="panel-body">
            <div class="form-group">
            <div class="col-sm-10">
              <input type="text" class="form-control" id="nombre" placeholder="Nombre(s)">
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-10">
              <input type="text" class="form-control" id="apellido" placeholder="Apellido(s)">
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-10">
              <input type="email" class="form-control" id="email" placeholder="Email">
            </div>
          </div>
          </div>
        </div>

        </div>
        <div class="col-md-3"></div>

        </div>

        <!-- comentario separador de panleles-->
        
        <div class="row">

        <div class="col-md-3"></div>
        <div class="col-md-6">

        <div class="panel panel-primary">
          <div class="panel-heading">
            <h3 class="panel-title">Datos de Residencia</h3>
          </div>
          <div class="panel-body">
            <div class="form-group">
            <div class="col-sm-10">
              <input type="text" class="form-control" id="direccion" placeholder="Direccion">
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-10">
              <input type="text" class="form-control" id="ciudad" placeholder="Ciudad">
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-10">
              <input type="text" class="form-control" id="pais" placeholder="Pais">
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-10">
              <input type="text" class="form-control" id="telefono" placeholder="Telefono">
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
              <div class="checkbox">
                <label>
                  <input type="checkbox"> Remember me
                </label>
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
              <button type="submit" class="btn btn-default">Comprar</button>
            </div>
          </div>
          </div>
        </div>

        </div>
        <div class="col-md-3"></div>

        </div>
				  
				</form>

				</div>
	        </div>
	      </div>
	    </div>
	  </div>
	</div>
</body>
</html>