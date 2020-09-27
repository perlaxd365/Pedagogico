
<?php 
	if ($peticionAjax) {
			require_once '../core/mainModel.php';
		}else{
			require_once './core/mainModel.php';
		}
	class lineasModelo extends mainModel{
		
		protected function agregar_linea_modelo($datos){
			$query=mainModel::conectar()->prepare("INSERT INTO lineasinvestigacion (id_carrera,id_area,nombre_linea,estado) VALUES(:id_carrera,:id_area,:nombre_linea,'Activo')");
			$query->bindParam("id_carrera",$datos['id_carrera']);
			$query->bindParam("id_area",$datos['id_area']);
			$query->bindParam("nombre_linea",$datos['nombre_linea']);
			$query->execute();
			return $query;
		}

		protected function eliminar_linea_modelo($id_lineas){
			
			$query=mainModel::conectar()->prepare("UPDATE lineasinvestigacion SET estado='Inactivo' WHERE id_lineas='$id_lineas'");
			$query->execute();
			return $query;
		}


	}