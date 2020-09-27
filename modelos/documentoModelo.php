
<?php 
	if ($peticionAjax) {
			require_once '../core/mainModel.php';
		}else{
			require_once './core/mainModel.php';
		}
	class documentoModelo extends mainModel{
		
		protected function agregar_autor_modelo($datos){
			$query=mainModel::conectar()->prepare("INSERT INTO autor (id_autor,id_tipo_autor,especialidad,nombre,apellido,dni,telefono,correo) VALUES(:id_autor,:id_tipo_autor,:especialidad,:nombre,:apellido,:dni,:telefono,:correo)");
			$query->bindParam("id_autor",$datos['id_autor']);
			$query->bindParam("id_tipo_autor",$datos['id_tipo_autor']);
			$query->bindParam("especialidad",$datos['especialidad']);
			$query->bindParam("nombre",$datos['nombre']);
			$query->bindParam("apellido",$datos['apellido']);
			$query->bindParam("dni",$datos['dni']);
			$query->bindParam("telefono",$datos['telefono']);
			$query->bindParam("correo",$datos['correo']);
			$query->execute();
			return $query;
		}
		protected function actualizar_autor_modelo($datos){
			$query=mainModel::conectar()->prepare("UPDATE autor SET id_tipo_autor=:id_tipo_autor,
				especialidad=:especialidad,
				nombre=:nombre,
				apellido=:apellido,
				dni=:dni,
				telefono=:telefono,
				correo=:correo 
				WHERE id_autor=:id_autor");
			$query->bindParam(":id_autor",$datos['id_autor']);
			$query->bindParam(":id_tipo_autor",$datos['id_tipo_autor']);
			$query->bindParam(":especialidad",$datos['especialidad']);
			$query->bindParam(":nombre",$datos['nombre']);
			$query->bindParam(":apellido",$datos['apellido']);
			$query->bindParam(":dni",$datos['dni']);
			$query->bindParam(":telefono",$datos['telefono']);
			$query->bindParam(":correo",$datos['correo']);
			$query->execute();
			return $query;
		}
		

		protected function agregar_documento_modelo($datos){
			$query=mainModel::conectar()->prepare("INSERT INTO documento (id_documento,id_tipo_doc,titulo,resumen,id_lineas,fecha,estado) VALUES(:id_documento,:id_tipo_doc,:titulo,:resumen,:id_lineas,now(),'Activo')");
			$query->bindParam(":id_documento",$datos['id_documento']);
			$query->bindParam(":id_tipo_doc",$datos['id_tipo_doc']);
			$query->bindParam(":titulo",$datos['titulo']);
			$query->bindParam(":resumen",$datos['resumen']);
			$query->bindParam(":id_lineas",$datos['id_lineas']);
			$query->execute();
			return $query;
		}

		protected function agregar_investigacion_modelo($datos){

			$query=mainModel::conectar()->prepare("INSERT INTO investigacion (id_documento,id_autor,fecha,estado_investigacion) VALUES(:id_documento,:id_autor,now(),'Activo')");
			$query->bindParam(":id_documento",$datos['id_documento']);
			$query->bindParam(":id_autor",$datos['id_autor']);
			$query->execute();
			return $query;
		}

		protected function datos_documento_modelo($id){
			$sql=mainModel::conectar()->prepare("
				SELECT doc.id_documento, au.id_autor, td.id_tipo_doc,td.nombre_tipo_doc,ta.nombre_tipo,ta.id_tipo_autor,au.especialidad,doc.titulo,au.nombre,au.apellido,au.dni,au.telefono,au.correo,ca.id_carrera,ca.nombre_carrera,are.id_area,are.nombre_area,li.id_lineas,li.nombre_linea,doc.resumen FROM investigacion inv INNER JOIN documento doc on inv.id_documento=doc.id_documento INNER JOIN autor au ON inv.id_autor=au.id_autor INNER JOIN tipo_doc td ON doc.id_tipo_doc=td.id_tipo_doc INNER JOIN tipoautor ta ON au.id_tipo_autor=ta.id_tipo_autor INNER JOIN lineasinvestigacion li ON doc.id_lineas=li.id_lineas INNER JOIN carrera ca ON li.id_carrera=ca.id_carrera INNER JOIN area are ON li.id_area=are.id_area  WHERE  doc.estado='Activo' and  id_investigacion=:id_investigacion ");
			$sql->bindParam(":id_investigacion",$id);
			$sql->execute();
			return $sql;
		}

		protected function datos_detalle_modelo($id){
			$sql=mainModel::conectar()->prepare("
				SELECT  doc.id_documento, au.id_autor, td.id_tipo_doc,td.nombre_tipo_doc,ta.nombre_tipo,ta.id_tipo_autor,au.especialidad,doc.titulo,au.nombre,au.apellido,au.dni,au.telefono,au.correo,li.nombre_linea,doc.resumen
				 FROM investigacion inv INNER JOIN documento doc on inv.id_documento=doc.id_documento INNER JOIN autor au ON inv.id_autor=au.id_autor INNER JOIN tipo_doc td ON doc.id_tipo_doc=td.id_tipo_doc INNER JOIN tipoautor ta ON au.id_tipo_autor=ta.id_tipo_autor INNER JOIN lineasInvestigacion li on doc.id_lineas=li.id_lineas WHERE doc.estado='Activo' and  doc.id_documento=:id_documento");
			$sql->bindParam(":id_documento",$id);
			$sql->execute();
			return $sql;
		}

		protected function actualizar_documento_modelo($datos){
			$query=mainModel::conectar()->prepare("UPDATE documento SET 
				id_tipo_doc=:id_tipo_doc,
				titulo=:titulo,
				resumen=:resumen,
				id_lineas=:id_lineas WHERE id_documento=:id_documento");
			$query->bindParam(":id_tipo_doc",$datos['id_tipo_doc']);
			$query->bindParam(":id_documento",$datos['id_documento']);
			$query->bindParam(":titulo",$datos['titulo']);
			$query->bindParam(":resumen",$datos['resumen']);
			$query->bindParam(":id_lineas",$datos['id_lineas']);
			$query->execute();
			return $query;
		}
		protected function desactivar_investigacion_modelo($id){

			$query=mainModel::conectar()->prepare("UPDATE investigacion SET estado_investigacion='Inactivo' where id_investigacion='$id'");
			$query->execute();
			return $query;
		}
		protected function eliminar_documento_modelo($id){

			$query=mainModel::conectar()->prepare("DELETE FROM documento where id_documento='$id'");
			$query->execute();
			return $query;
		}
		
		protected function eliminar_autor_modelo($id){

			$query=mainModel::conectar()->prepare("DELETE FROM autor where id_autor='$id'");
			$query->execute();
			return $query;
		}
		protected function eliminar_investigacion_modelo($iddoc){

			$query=mainModel::conectar()->prepare("DELETE FROM investigacion where id_documento='$iddoc'");
			$query->execute();
			return $query;
		}
	}