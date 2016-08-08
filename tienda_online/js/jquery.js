$(document).ready(function () {
	//boton de agregar al carrito, se agrega el iditem y cantprod en $_SESSION['carrito']
	$('.cd-add-to-cart').click(function(){
		var productoId = $('input').attr('id');
		var productoCant = $('input').val();
		$("input[id="+productoId+"]").attr({
			"max" : 100,        // substitute your own
			"min" : 1          // values (or variables) here
			});
		$.ajax({	
			type : 'POST',
			url  : 'detalles_producto.php',
			data : {
				"agregar_item" : 1,
				"idProducto" : productoId,
				"cantProducto" : productoCant
			},
			success: function( data, textStatus, jQxhr ){
					//todo bien
					window.location.href = "productos.php";
			},
			error: function( jqXhr, textStatus, errorThrown ){
				console.log( errorThrown );
				alert("Error");
			}
		});
	});
	//funcion onclick para las imagines de los productos
	$('img[id]').click(function(){
		var idProducto = $(this).attr('id');
		if (idProducto !== null) {
			window.location.href = "detalles_producto.php" +"?id="+idProducto;
		}
		else{
			alert("Error");
		}
	});
	$('a[id]').click(function(){
		var idProducto = $(this).attr('id');
		$.ajax({	
			type : 'POST',
			url  : 'productos.php',
			data : {
				"borrar_item" : 1,
				"idProducto" : idProducto
			},
			success: function( data, textStatus, jQxhr ){
				//todo bien	
				//Eliminando el li del producto a eliminar
				$('#cd-cart').find('li[id='+idProducto+']').remove();
				//recargando div #cd-cart-items
				$("#cd-cart-items").load(location.href + " #cd-cart-items>*", "");
				//recargando div #precioT
				$("#precioT").load(location.href + " #precioT>*", "");
			},
			error: function( jqXhr, textStatus, errorThrown ){
				console.log( errorThrown );
				alert("error");
			}
		});
	});
	$('#pagar').click(function(){
			var num_prod = $('li[id]').size();
			if(num_prod == 0){
				$('#error').html('<div class="alert alert-danger"><strong>Error!</strong> No tiene items en su carrito.</div>');
				return false;
			}
	});
	$('#form-compra').submit(function(){
		event.preventDefault();
	    $.post("productos.php", {vaciar_carrito: 1}, function(data, status){					
			$("#respuestas").html("<div class='alert alert-success fade in'><strong>Compra exitosa!</strong> Se le enviara un email con los datos de su compra.</div>");
			setTimeout(function(){ window.location.href = "productos.php"; }, 3000);
   		 });
	});
});
