// $(document).on('change','#cantidad_producto',function(){
// 	var productoCant = $(this).val();
// 	alert(productoCant);
// });

$(document).ready(function () {
	$('.agregar').click(function(){
		var productoId = $(this).val();
		// $('.cantidad_producto').each(function(){
		// 	if ($(this).attr('name') == productoId) {
		// 		alert(productoCant);
		// 		var productoCant = $(this).val();
		// 		alert(productoCant);
		// 	}
		// });
		var productoCant = $('select[id='+productoId+'] option:selected').val();
		var nombreProd = $('td[id='+productoId+']').html();
		$.ajax({	
			type : 'POST',
			url  : 'productos.php',
			data : {
				"agregar" : 1,
				"idProducto" : productoId,
				"cantProducto" : productoCant
			},
			success: function( data, textStatus, jQxhr ){
					//todo bien

					//Indicando la cantidad de items agregados
					if (productoCant == "1") {
						$('#respuesta').text(productoCant+" item agregado al carrito");	
					}
					else{
						$('#respuesta').text(productoCant+" items agregado al carrito");	
					}

					//Cargando el carrito en productos.php - div(carrito)
					if ($('p[id='+productoId+']').attr('id')) {
						$('p[id='+productoId+']').html(nombreProd + " -- Cantidad = " +productoCant);
					}	
					else{
						$('#items').append("<p id="+productoId+">"+nombreProd+" -- Cantidad = "+productoCant+"</p>");
					}
			},
			error: function( jqXhr, textStatus, errorThrown ){
				console.log( errorThrown );
				alert("error");
			}
		});
	});
	$('#limpiar').click(function(){
		$.ajax({	
			type : 'POST',
			url  : 'productos.php',
			data : {
				"limpiar" : 1,
			},
			success: function( data, textStatus, jQxhr ){
				//todo bien	
				$('#respuesta').html("Carrito limpiado");
				//Para eliminar los <p> con los productos agregados	
				$('#items').empty();

			},
			error: function( jqXhr, textStatus, errorThrown ){
				console.log( errorThrown );
				alert("error");
			}
		});		
	});
});