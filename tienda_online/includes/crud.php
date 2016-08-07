<?php 

class Crud{

	private $db;

	function __construct($db_con){
		$this->db = $db_con;
	}

	public function buscar_todo(){
		$query = $this->db->prepare("SELECT * FROM productos");
		$query->execute();
		$columnas = array();
		//en la posicion 0 se encuentran los registros
		$columnas[0] = $query->fetchAll();
		//en la posicion 1 esta la cantidad de filas que se obtuvieron
		$columnas[1] = $query->rowCount();
		return $columnas;
	}

	public function buscar_por_ids($ids){
		if ($ids != '') {
			$sql = "SELECT * FROM productos WHERE id IN (".$ids.")";
			$query = $this->db->prepare($sql);
			$query->execute();
			$columnas=$query->fetchAll();
			return $columnas;
		}
		else{
			return false;
		}
	}

	public function buscar_por_id($id){
			$sql = "SELECT * FROM productos WHERE id=".$id;
			$query = $this->db->prepare($sql);
			$query->execute();
			$columnas=$query->fetchAll();
			foreach ($columnas as $columna) {
				$producto = $columna;
			}
			return $producto;
	}

	public function buscar_x_limite($pagina,$items){
		$query = $this->db->prepare("SELECT * FROM productos LIMIT ".($pagina-1) * $items.",".$items);
		$query->execute();
		$columnas = $query->fetchAll();
		return $columnas;
	}
}
?>