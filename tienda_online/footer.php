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

		<a href="#0" class="checkout-btn">Pagar</a>
	</div> <!-- cd-cart -->
</body>
</html>