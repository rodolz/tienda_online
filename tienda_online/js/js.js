var obj = [];
    function storeItem(value) {
		var productoCant = $('select[id='+value+'] option:selected').val();
		var nombreProd = $('td[id='+value+']').html();
        sessionStorage.setItem('myItem'+value, nombreProd);
        sessionStorage.setItem('cant'+value, productoCant);
    	var nombre = sessionStorage.getItem('myItem'+value);
    	var cant = sessionStorage.getItem('cant'+value);
    	var tag = "<p id="+value+">"+nombre+" -- Cantidad = "+cant+"</p>"
    	obj[value] = tag;
    	sessionStorage.setItem('myObj', JSON.stringify(obj));
		if ($('p[id='+value+']').attr('id')) {
			$('p[id='+value+']').html(nombre + " -- Cantidad = " +cant);
		}	
		else{
			var x = $('#items').append(tag);
		}
    }
    function refresh(value) {
		// if ($('p[id='+value+']').attr('id')) {
		// 	$('p[id='+value+']').html(nombre + " -- Cantidad = " +cant);
		// }	
		// else{
		// 	var x = $('#items').append("<p id="+value+">"+nombre+" -- Cantidad = "+cant+"</p>");
		// }
		// if(x !== null){
		// 	obj.push(x);
		// 	for (i = 0; i < obj.length; i++) {
		// 		var x = obj[i];
		// 	}
		// 	alert("asd");
		// }
		// obj.push($('#items').append("<p id="+value+">"+nombre+" -- Cantidad = "+cant+"</p>"));
		var x = JSON.parse(sessionStorage.getItem('myObj'));
		if (x == null) {
			return false;
		}
		else{
			for (i = 1; i < x.length; i++) {
				$('#items').append(x[i]);
			}
		}
    }

    function limpiarSesion(){
		delete sessionStorage.myObj;
    }
$(function () { refresh(); });