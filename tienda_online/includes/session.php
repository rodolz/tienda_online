<?php

class Session{

	function __construct(){
		session_start();
	}

	public function crear_sesion( $nombre_sesion , $array = false ){
		if( !isset($_SESSION[$nombre_sesion])  ){
			if( $array == true ){
				$_SESSION[$nombre_sesion] = array();
			}
			else{
				$_SESSION[$nombre_sesion] = '';
			}
		}
		else{
			return true;
		}
	}
	public function eliminar_item($nombre_sesion,$id_item){
		if(isset($_SESSION[$nombre_sesion])){
			//Segun el iditem borramos el item en la variable de session
			unset($_SESSION[$nombre_sesion][$id_item]);
			return true;
		}
		else{
			return false;
		}
	}

	public function agregar_item($nombre_sesion,$id_item,$cant_item){
		if(isset($_SESSION[$nombre_sesion])){
			$_SESSION[$nombre_sesion][$id_item] = $cant_item;
			//ordernar el array en id's ascendente con ksort()
			ksort($_SESSION[$nombre_sesion]);
			return true;
		}
		else{
			return false;
		}
	}
}
$session = new Session();
?>