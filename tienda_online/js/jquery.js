$(document).ready(function () {
	//boton de agregar al carrito, se agrega el iditem y cantprod en $_SESSION['carrito']
	$('.cd-add-to-cart').click(function(){
		var productoId = $('select').attr('id');
		var productoCant = $('select option:selected').val();
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
			window.location.href = "detalles_producto.php" +"?q="+idProducto;
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
});
