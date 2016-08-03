<?php 

class Crud{

	private $db;

	function __construct($db_con){
		$this->db = $db_con;
	}

	public function buscar_todo(){
		$query = $this->db->prepare("SELECT * FROM productos");
		$query->execute();
		$columnas=$query->fetchAll();
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
}
?>