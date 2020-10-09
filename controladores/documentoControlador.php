
<?php 
if ($peticionAjax) {
	require_once "../modelos/documentoModelo.php";
}else{
	require_once "./modelos/documentoModelo.php";
}

class documentoControlador extends documentoModelo{

	public function agregar_documento_controlador(){


		$titulo=mainModel::limpiar_cadena($_POST['titulo-reg']);
		$nombre=mainModel::limpiar_cadena($_POST['nombre-reg']);
		$apellido=mainModel::limpiar_cadena($_POST['apellido-reg']);
		$dni=mainModel::limpiar_cadena($_POST['dni-reg']);
		$correo=mainModel::limpiar_cadena($_POST['correo-reg']);
		$telefono=mainModel::limpiar_cadena($_POST['telefono-reg']);
		$id_lineas=mainModel::limpiar_cadena($_POST['linea-reg']);
		$resumen=mainModel::limpiar_cadena($_POST['resumen-reg']);
		$id_tipo_autor=mainModel::limpiar_cadena($_POST['id_tipo_autor']);

		if ($id_tipo_autor==1) {
			$id_tipo_inv=mainModel::limpiar_cadena($_POST['id-tipo-doc-es']);
			$especialidad=mainModel::limpiar_cadena($_POST['especialidad-es']);
		}elseif ($id_tipo_autor==2) {
			$id_tipo_inv=mainModel::limpiar_cadena($_POST['id-tipo-doc-for']);
			$especialidad="no tiene";
		}elseif ($id_tipo_autor==3) {
			

			$id_tipo_inv=mainModel::limpiar_cadena($_POST['id-tipo-doc-cog']);
			$especialidad=mainModel::limpiar_cadena($_POST['especialidad-cog']);

		}

		$consulta1=mainModel::ejecutar_consulta_simple("SELECT id_autor FROM autor ");
							//numero para guardar el total de registros que hay en la bd,  que lo contamos en la consulta 4
		$numero=($consulta1->rowCount()+1);

							//generar codigo para cada cuenta
		$codigo=mainModel::generar_codigo_aleatorio("AU", 7 , $numero);

		$dataAU=[
			"id_autor"=>$codigo,
			"id_tipo_autor"=>$id_tipo_autor,
			"nombre"=>$nombre,
			"apellido"=>$apellido,
			"dni"=>$dni,
			"correo"=>$correo,
			"telefono"=>$telefono,
			"especialidad"=>$especialidad
		];

		$guardar=documentoModelo::agregar_autor_modelo($dataAU);
		if ($guardar->rowCount()>=1) {

			$consulta1=mainModel::ejecutar_consulta_simple("SELECT id_documento FROM documento ");
							//numero para guardar el total de registros que hay en la bd,  que lo contamos en la consulta 4
			$numero=($consulta1->rowCount()+1);

							//generar codigo para cada cuenta
			$id_doc=mainModel::generar_codigo_aleatorio("DO", 7 , $numero);
			$dataDOC=[
				"id_documento"=>$id_doc,
				"id_tipo_doc"=>$id_tipo_inv,
				"titulo"=>$titulo,
				"resumen"=>$resumen,
				"id_lineas"=>$id_lineas,
				"estado"=>"Activo"
			];
			$guardarDoc=documentoModelo::agregar_documento_modelo($dataDOC);
			if ($guardarDoc->rowCount()>=1) {
				
				$dataINV=[

					"id_documento"=>$id_doc,
					"id_autor"=>$codigo
				];

				$guardarINV=documentoModelo::agregar_investigacion_modelo($dataINV);

				if ($guardarINV->rowCount()>=1) {

					if (isset($_FILES["archivo"]) && $_FILES["archivo_pdf"]["error"]>0) {
						//GUARDAR SOLO IMAGEN

						if($_FILES["archivo"]["error"]>0 ){

							$alerta=[
								"Alerta"=>"redireccionar",
								"Titulo"=>"Datos guardados",
								"Texto"=>"El documento fue guardado correctamente ",
								"Tipo"=>"success",
								"Contenido"=>"invlist",
								"Variable"=>""
							];
						} else {

							$permitidos = array("image/jpg","image/jpeg","image/gif","image/png");
							$limite_kb = 10000;

							if(in_array($_FILES["archivo"]["type"], $permitidos) && $_FILES["archivo"]["size"] <= $limite_kb * 1024 ){
								$server=SERVERURL;
								$nombreImagen=str_replace("-", "", $_FILES["archivo"]["name"]);
								$nombreImagen=str_replace(" ", "", $nombreImagen);
								$nombreImagen=str_replace("(", "", $nombreImagen);
								$nombreImagen=str_replace(")", "", $nombreImagen);
								$ruta_img ='../vistas/images/fotoportada/'.$id_doc.'/';
								$archivo_img = $ruta_img.$nombreImagen;

								if(!file_exists($ruta_img)){

									mkdir($ruta_img,0777,true);
								}

								if(!file_exists($archivo_img) ){

									$resultado_img = move_uploaded_file($_FILES["archivo"]["tmp_name"], $archivo_img);

									if($resultado_img == true ){
										$alerta=[
											"Alerta"=>"redireccionar",
											"Titulo"=>"Datos guardados",
											"Texto"=>"El documento fue guardado correctamente ",
											"Tipo"=>"success",
											"Contenido"=>"invlist",
											"Variable"=>""
										];
									} else {
										$eliminarINV=documentoModelo::eliminar_investigacion_modelo($id_doc);
										$eliminarDoc=documentoModelo::eliminar_documento_modelo($id_doc);
										$eliminarAu=documentoModelo::eliminar_autor_modelo($codigo);
										if ($eliminarDoc->rowCount()>=1 && $eliminarAu->rowCount()>=1 && $eliminarINV->rowCount()>=1) {
											$alerta=[
												"Alerta"=>"simple",
												"Titulo"=>"Algo salió mal",
												"Texto"=>"No se pudo archivar el documento. ¡Ups!",
												"Tipo"=>"error"
											];
										}
									}

								} else {
									$alerta=[
										"Alerta"=>"simple",
										"Titulo"=>"Algo salió mal",
										"Texto"=>"El archivo ya existe. ¡Ups!",
										"Tipo"=>"error"
									];
								}

							} else {

								$eliminarINV=documentoModelo::eliminar_investigacion_modelo($id_doc);
								$eliminarDoc=documentoModelo::eliminar_documento_modelo($id_doc);
								$eliminarAu=documentoModelo::eliminar_autor_modelo($codigo);
								if ($eliminarDoc->rowCount()>=1 && $eliminarAu->rowCount()>=1 && $eliminarINV->rowCount()>=1) {
									$alerta=[
										"Alerta"=>"simple",
										"Titulo"=>"Algo salió mal",
										"Texto"=>"El archivo no es compatible ó excede el limite de tamaño. ¡Ups!",
										"Tipo"=>"error"
									];
								}
							}

						}

						//FIN DE GUARDAR SOLO IMANE
					}elseif(isset($_FILES["archivo_pdf"]) && $_FILES["archivo"]["error"]>0){
						//guardar solo pdf



						if($_FILES["archivo_pdf"]["error"]>0 ){
							echo "Error al cargar archivo";	
						} else {

							$permitidos = array("application/pdf");
							$limite_kb = 10000;

							if(in_array($_FILES["archivo_pdf"]["type"], $permitidos) && $_FILES["archivo_pdf"]["size"] <= $limite_kb * 1024 ){
								$server=SERVERURL;

								
								$nombrePdf=str_replace("-", "", $_FILES["archivo_pdf"]["name"]);
								$nombrePdf=str_replace(" ", "", $nombrePdf);
								$nombrePdf=str_replace("(", "", $nombrePdf);
								$nombrePdf=str_replace(")", "", $nombrePdf);
								$ruta_pdf ='../vistas/images/pdf/'.$id_doc.'/';
								$archivo_pdf = $ruta_pdf.$nombrePdf;

								if(!file_exists($ruta_pdf)){

									mkdir($ruta_pdf,0777,true);
								}

								if(!file_exists($archivo_pdf) ){

									$resultado_pdf = move_uploaded_file($_FILES["archivo_pdf"]["tmp_name"], $archivo_pdf);

									if($resultado_pdf == true ){
										$alerta=[
											"Alerta"=>"redireccionar",
											"Titulo"=>"Datos guardados",
											"Texto"=>"El documento fue guardado correctamente ",
											"Tipo"=>"success",
											"Contenido"=>"invlist",
											"Variable"=>""
										];
									} else {
										$eliminarINV=documentoModelo::eliminar_investigacion_modelo($id_doc);
										$eliminarDoc=documentoModelo::eliminar_documento_modelo($id_doc);
										$eliminarAu=documentoModelo::eliminar_autor_modelo($codigo);
										if ($eliminarDoc->rowCount()>=1 && $eliminarAu->rowCount()>=1 && $eliminarINV->rowCount()>=1) {
											$alerta=[
												"Alerta"=>"simple",
												"Titulo"=>"Algo salió mal",
												"Texto"=>"No se pudo archivar el documento. ¡Ups!",
												"Tipo"=>"error"
											];
										}
									}

								} else {
									$alerta=[
										"Alerta"=>"simple",
										"Titulo"=>"Algo salió mal",
										"Texto"=>"El archivo ya existe. ¡Ups!",
										"Tipo"=>"error"
									];
								}

							} else {

								$eliminarINV=documentoModelo::eliminar_investigacion_modelo($id_doc);
								$eliminarDoc=documentoModelo::eliminar_documento_modelo($id_doc);
								$eliminarAu=documentoModelo::eliminar_autor_modelo($codigo);
								if ($eliminarDoc->rowCount()>=1 && $eliminarAu->rowCount()>=1 && $eliminarINV->rowCount()>=1) {
									$alerta=[
										"Alerta"=>"simple",
										"Titulo"=>"Algo salió mal",
										"Texto"=>"El archivo no es compatible ó excede el limite de tamaño. ¡Ups!",
										"Tipo"=>"error"
									];
								}
							}

						}

						//fin de guardar solo pdf
					}elseif (isset($_FILES["archivo"]) && isset($_FILES["archivo_pdf"])) {
						//guardar ambos


						if($_FILES["archivo"]["error"]>0 && $_FILES["archivo_pdf"]["error"]>0){
							echo "Error al cargar archivo";	
						} else {

							$permitidos = array("application/pdf","image/jpg","image/jpeg","image/gif","image/png");
							$limite_kb = 10000;

							if(in_array($_FILES["archivo"]["type"], $permitidos) && $_FILES["archivo"]["size"] <= $limite_kb * 1024 && in_array($_FILES["archivo_pdf"]["type"], $permitidos) && $_FILES["archivo_pdf"]["size"] <= $limite_kb * 1024 ){
								$server=SERVERURL;
								$nombreImagen=str_replace("-", "", $_FILES["archivo"]["name"]);
								$nombreImagen=str_replace(" ", "", $nombreImagen);
								$nombreImagen=str_replace("(", "", $nombreImagen);
								$nombreImagen=str_replace(")", "", $nombreImagen);

								$nombrePdf=str_replace("-", "", $_FILES["archivo_pdf"]["name"]);
								$nombrePdf=str_replace(" ", "", $nombrePdf);
								$nombrePdf=str_replace("(", "", $nombrePdf);
								$nombrePdf=str_replace(")", "", $nombrePdf);
								$ruta_img ='../vistas/images/fotoportada/'.$id_doc.'/';
								$ruta_pdf ='../vistas/images/pdf/'.$id_doc.'/';
								$archivo_img = $ruta_img.$nombreImagen;
								$archivo_pdf = $ruta_pdf.$nombrePdf;

								if(!file_exists($ruta_img)){

									mkdir($ruta_img,0777,true);
									if(!file_exists($ruta_pdf)){

										mkdir($ruta_pdf,0777,true);

									}

								}

								if(!file_exists($archivo_img) && !file_exists($archivo_pdf) ){

									$resultado_img = move_uploaded_file($_FILES["archivo"]["tmp_name"], $archivo_img);
									$resultado_pdf = move_uploaded_file($_FILES["archivo_pdf"]["tmp_name"], $archivo_pdf);

									if($resultado_img == true && $resultado_pdf == true  ){
										$alerta=[
											"Alerta"=>"redireccionar",
											"Titulo"=>"Datos guardados",
											"Texto"=>"El documento fue guardado correctamente ",
											"Tipo"=>"success",
											"Contenido"=>"invlist",
											"Variable"=>""
										];
									} else {
										$eliminarINV=documentoModelo::eliminar_investigacion_modelo($id_doc);
										$eliminarDoc=documentoModelo::eliminar_documento_modelo($id_doc);
										$eliminarAu=documentoModelo::eliminar_autor_modelo($codigo);
										if ($eliminarDoc->rowCount()>=1 && $eliminarAu->rowCount()>=1 && $eliminarINV->rowCount()>=1) {
											$alerta=[
												"Alerta"=>"simple",
												"Titulo"=>"Algo salió mal",
												"Texto"=>"No se pudo archivar el documento. ¡Ups!",
												"Tipo"=>"error"
											];
										}
									}

								} else {
									$alerta=[
										"Alerta"=>"simple",
										"Titulo"=>"Algo salió mal",
										"Texto"=>"El archivo ya existe. ¡Ups!",
										"Tipo"=>"error"
									];
								}

							} else {

								$eliminarINV=documentoModelo::eliminar_investigacion_modelo($id_doc);
								$eliminarDoc=documentoModelo::eliminar_documento_modelo($id_doc);
								$eliminarAu=documentoModelo::eliminar_autor_modelo($codigo);
								if ($eliminarDoc->rowCount()>=1 && $eliminarAu->rowCount()>=1 && $eliminarINV->rowCount()>=1) {
									$alerta=[
										"Alerta"=>"simple",
										"Titulo"=>"Algo salió mal",
										"Texto"=>"El archivo no es compatible ó excede el limite de tamaño. ¡Ups!",
										"Tipo"=>"error"
									];
								}
							}

						}


					}


				}else{

					$alerta=[
						"Alerta"=>"simple",
						"Titulo"=>"Algo salió mal",
						"Texto"=>"No se pudo archivar la investigacion. ¡Ups!",
						"Tipo"=>"error"
					];

				}

			}else{
				$alerta=[
					"Alerta"=>"simple",
					"Titulo"=>"Algo salió mal",
					"Texto"=>"No se pudo archivar el documento. ¡Ups!",
					"Tipo"=>"error"
				];

			}
			
		} else { 
			$alerta=[
				"Alerta"=>"simple",
				"Titulo"=>"Algo salió mal",
				"Texto"=>"No se pudo archivar el autor. ¡Ups!",
				"Tipo"=>"error"
			];
		}
		return mainModel::sweet_alert($alerta);

		
	}
	public function paginador_administrador_controlador($pagina,$registros,$busqueda){

		$pagina=mainModel::limpiar_cadena($pagina);
		$registros=mainModel::limpiar_cadena($registros);
		$busqueda=mainModel::limpiar_cadena($busqueda);
		$tabla="";

		$pagina=(isset($pagina) && $pagina>0) ? (int) $pagina :1;
		$inicio=($pagina>0) ? (($pagina*$registros)-$registros) : 0;

		if (isset($busqueda) && $busqueda!="") {
			$consulta="SELECT SQL_CALC_FOUND_ROWS inv.estado_investigacion, inv.id_investigacion, doc.id_documento,au.id_autor, SUBSTRING(doc.titulo, 1, 60) AS titulo,td.nombre_tipo_doc,li.nombre_linea,au.nombre,au.apellido,au.especialidad FROM investigacion inv INNER JOIN documento doc on inv.id_documento=doc.id_documento INNER JOIN autor au ON inv.id_autor=au.id_autor INNER JOIN tipo_doc td ON doc.id_tipo_doc=td.id_tipo_doc INNER JOIN lineasinvestigacion li ON doc.id_lineas=li.id_lineas  WHERE inv.estado_investigacion='Activo' and (doc.titulo LIKE '%$busqueda%' or nombre_tipo_doc LIKE '%$busqueda%' or nombre LIKE '%$busqueda%' or apellido LIKE '%$busqueda%' or especialidad LIKE '%$busqueda%' or carrera LIKE '%$busqueda%') ORDER BY inv.fecha DESC LIMIT $inicio,$registros";
			$paginaurl="invsearch";
		}else{
			$consulta="SELECT SQL_CALC_FOUND_ROWS inv.estado_investigacion, inv.id_investigacion, doc.id_documento,au.id_autor, SUBSTRING(doc.titulo, 1, 60) AS titulo,td.nombre_tipo_doc,li.nombre_linea,au.nombre,au.apellido,au.especialidad FROM investigacion inv INNER JOIN documento doc on inv.id_documento=doc.id_documento INNER JOIN autor au ON inv.id_autor=au.id_autor INNER JOIN tipo_doc td ON doc.id_tipo_doc=td.id_tipo_doc INNER JOIN lineasinvestigacion li ON doc.id_lineas=li.id_lineas  WHERE inv.estado_investigacion='Activo' ORDER BY inv.fecha DESC LIMIT $inicio,$registros";
			$paginaurl="invlist";
		}

		$conexion=mainModel::conectar();

		$datos=$conexion->query($consulta);
		$datos=$datos->fetchAll();

		$total=$conexion->query("SELECT FOUND_ROWS()");
		$total=(int) $total->fetchColumn();

		$Npaginas=ceil($total/$registros);

		$tabla.='
		<div class="table-responsive">
		<table class="table" >
		<thead class="thead-primary">
		<tr>
		<th class="text-center">#</th>
		<th class="text-center">TITULO</th>
		<th class="text-center">TIPO DE INVESTIGACION.</th>
		<th class="text-center">LINEA INV.</th>
		<th class="text-center">AUTOR</th>
		<th class="text-center">ESPECIALIDAD</th>
		<th class="text-center">IMAGEN</th>
		<th class="text-center">ACTUALIZAR INVESTIGACION</th>
		<th class="text-center">ACTUALIZAR AUTOR</th>
		<th class="text-center">ELIMINAR</th>';



		$tabla.='			</tr>
		</thead>
		<tbody>
		';

		if ($total>=1 && $pagina<=$Npaginas) {
			$contador=$inicio+1;
			foreach ($datos as $rows) {
				$tabla.='
				<tr >
				<td>'.$contador.'</td>
				<td>'.$rows['titulo'].'...</td>
				<td>'.$rows['nombre_tipo_doc'].'</td>
				<td>'.$rows['nombre_linea'].'</td>
				<td>'.$rows['nombre'].'</td>
				<td>'.$rows['especialidad'].'</td>
				<td>';
				$path ="././vistas/images/fotoportada/".$rows['id_documento'];
				$pathDelete =".././vistas/images/fotoportada/".$rows['id_documento'];
				$pdfDelete =".././vistas/images/pdf/".$rows['id_documento'];
				if(file_exists($path)){
					$directorio = opendir($path);
					while ($archivo = readdir($directorio))
					{
						$data=mainModel::encryption($path."/".$archivo);
						if (!is_dir($archivo)){
							
							
							$tabla.='
							<img src="'.SERVERURL.'vistas/images/fotoportada/'.$rows['id_documento'].'/'.$archivo.'" width="40">';

							
							

						}
					}
				}else{
					$tabla.='
					<img src="'.SERVERURL.'vistas/images/sin-imagen.jpg" width="100">';
				}



				$tabla.='<td>
				<a href="'.SERVERURL.'docup/'.mainModel::encryption($rows['id_investigacion']).'" class="btn  btn-primary ">
				<span>A. inv.</span>
				</a>
				</td>
				<td>
				<a href="'.SERVERURL.'autorup/'.mainModel::encryption($rows['id_investigacion']).'" class="btn  btn-primary ">
				<span>A. Autor</span>
				</a>
				</td>
				<td>
				<form action="'.SERVERURL.'/ajax/documento.php" method="POST" class="FormularioAjax" data-form="delete" entype="multipart/form-data" autocomplete="off">
				<input type="hidden" value="'.mainModel::encryption($rows['id_investigacion']).'" name="id_documento_del">
				<input type="hidden" value="'.$pathDelete.'" name="pathDelete">
				<input type="hidden" value="'.$pdfDelete.'" name="pdfDelete">
				<input type="submit" class="btn btn-warning" value="Eliminar">
				<div class="RespuestaAjax"></div>
				</form>
				</td>
				</tr>';



				$contador++;
			}
		}else{

			if ($total>=1) {
				$tabla.='
				<tr>
				<td colspan="5">
				<a href="'.SERVERURL.''.$paginaurl.'/" class="btn btn-sm btn-info btn-raised"> 
				Haga click para recargar el listado
				</a>
				</td>
				</tr>
				';
			}else{
				$tabla.='
				<tr>
				<td colspan="5">No hay registros</td>
				</tr>
				';
			}

			
		}

		$tabla.='</tbody></table></div>';



		if ($total>=1 && $pagina<=$Npaginas) {
			$tabla.='<div class="row mt-5">
			<div class="col text-center">
			<div class="block-27">
			<ul>';
			if ($pagina==1) {
				$tabla.='<li class="disabled"><a>&lt;</a></li>';
			}else{
				$tabla.='<li><a class="ir-inve" href="'.SERVERURL.$paginaurl.'/'.($pagina-1).'">&lt;</a></li>';
			}


			for ($i=1; $i < 1; $i++) { 
				if ($pagina==$i) {
					$tabla.='<li class="active"><a href="'.SERVERURL.$paginaurl.'/'.($i).'"><span>'.$i.'</span></a></li>';
				}else{
					$tabla.='<li><a href="'.SERVERURL.$paginaurl.'/'.($i).'">'.$i.'</a></li>';

				}
			}

			
			if ($pagina==$Npaginas) {
				$tabla.='<li class="disabled"><a>&gt;</a></li>';
			}else{
				$tabla.='<li><a href="'.SERVERURL.$paginaurl.'/'.($pagina+1).'">&gt</a></li>';
			}


			$tabla.='</ul> 
			</div>
			</div>
			</div>';
		}

		return $tabla;
	}


	public function datos_documento_controlador($id){
		$id_investigacion=mainModel::decryption($id);
		return documentoModelo::datos_documento_modelo($id_investigacion);

	}

	public function datos_detalle_controlador($id){
		return documentoModelo::datos_detalle_modelo($id);

	}

	public function actualizar_autor_controlador(){
		$id_autor=mainModel::limpiar_cadena($_POST['id_autor']);
		$id_tipo_autor=mainModel::limpiar_cadena($_POST['id_tipo_autor']);
		$nombre=mainModel::limpiar_cadena($_POST['nombre-reg']);
		$apellido=mainModel::limpiar_cadena($_POST['apellido-reg']);
		$dni=mainModel::limpiar_cadena($_POST['dni-reg']);
		$correo=mainModel::limpiar_cadena($_POST['correo-reg']);
		$telefono=mainModel::limpiar_cadena($_POST['telefono-reg']);
		$especialidad=mainModel::limpiar_cadena($_POST['especialidad-reg']);
		$dataAU=[
			"id_autor"=>$id_autor,
			"id_tipo_autor"=>$id_tipo_autor,
			"nombre"=>$nombre,
			"apellido"=>$apellido,
			"dni"=>$dni,
			"correo"=>$correo,
			"telefono"=>$telefono,
			"especialidad"=>$especialidad
		];
		$guardarAu=documentoModelo::actualizar_autor_modelo($dataAU);
		if($guardarAu->rowCount()>=1){

			
			$alerta=[
				"Alerta"=>"redireccionar",
				"Titulo"=>"Datos Actualizados",
				"Texto"=>"El documento fue actualizado correctamente ",
				"Tipo"=>"success",
				"Contenido"=>"invlist",
				"Variable"=>""
			];
		}else{

			$alerta=["Alerta"=>"simple",
			"Titulo"=>"Algo salió mal",
			"Texto"=>"Por favor actualiza algun campo",
			"Tipo"=>"error"
		];
	}
	return mainModel::sweet_alert($alerta);

}

public function actualizar_documento_controlador(){

	$id_documento=mainModel::limpiar_cadena($_POST['documento-up']);
	$titulo=mainModel::limpiar_cadena($_POST['titulo-reg']);

	$id_lineas=mainModel::limpiar_cadena($_POST['linea-reg']);
	$resumen=mainModel::limpiar_cadena($_POST['resumen-reg']);
	$id_tipo_doc=mainModel::limpiar_cadena($_POST['tipo-investigacion']);

	$dataDOC=[
		"id_tipo_doc"=>$id_tipo_doc,
		"id_documento"=>$id_documento,
		"titulo"=>$titulo,
		"id_lineas"=>$id_lineas,
		"resumen"=>$resumen
	];

	$guardarDoc=documentoModelo::actualizar_documento_modelo($dataDOC);
	if($guardarDoc->rowCount()>=1 ){



		if(!isset($_FILES["archivo"]) &&  !isset($_FILES["archivo_pdf"])){
			$alerta=[
				"Alerta"=>"redireccionar",
				"Titulo"=>"Datos guardados",
				"Texto"=>"El documento fue guardado correctamente ",
				"Tipo"=>"success",
				"Contenido"=>"invlist",
				"Variable"=>""
			];
		} elseif (isset($_FILES["archivo"]) && $_FILES["archivo_pdf"]["error"]>0) {

				//INICIO DE IMAGEN


			$permitidos = array("image/jpg","image/jpeg","image/gif","image/png","application/pdf");
			$limite_kb = 12000;

			if(in_array($_FILES["archivo"]["type"], $permitidos) && $_FILES["archivo"]["size"] <= $limite_kb * 1024 ){
				$server=SERVERURL;
				$ruta_img ='../vistas/images/fotoportada/'.$id_documento.'/';
				$archivo_img = $ruta_img.$_FILES["archivo"]["name"];

				if(!file_exists($ruta_img)){

					mkdir($ruta_img,0777,true);
				}

				if(!file_exists($archivo_img) ){

					$resultado_img = move_uploaded_file($_FILES["archivo"]["tmp_name"], $archivo_img);
					if($resultado_img == true){
						$alerta=[
							"Alerta"=>"redireccionar",
							"Titulo"=>"Datos guardados",
							"Texto"=>"El documento fue guardado correctamente ",
							"Tipo"=>"success",
							"Contenido"=>"invlist",
							"Variable"=>""
						];
					} else {
						$alerta=[
							"Alerta"=>"simple",
							"Titulo"=>"Algo salió mal",
							"Texto"=>"No se pudo archivar el documento. ¡Ups!",
							"Tipo"=>"error"
						];

					}

				} else {
					$alerta=[
						"Alerta"=>"simple",
						"Titulo"=>"Algo salió mal",
						"Texto"=>"El archivo ya existe. ¡Ups!",
						"Tipo"=>"error"
					];
				}

			} else {

				$alerta=[
					"Alerta"=>"redireccionar",
					"Titulo"=>"Datos guardados",
					"Texto"=>"El documento fue guardado correctamente ",
					"Tipo"=>"success",
					"Contenido"=>"invlist",
					"Variable"=>""
				];

			}

				//FIN DE IMAGEN

		} elseif (isset($_FILES["archivo_pdf"]) && $_FILES["archivo"]["error"]>0) {

				//INICIO DE PDF




			$permitidos = array("image/jpg","image/jpeg","image/gif","image/png","application/pdf");
			$limite_kb = 12000;

			if(in_array($_FILES["archivo_pdf"]["type"], $permitidos) && $_FILES["archivo_pdf"]["size"] <= $limite_kb * 1024 ){
				$server=SERVERURL;
				$ruta_img ='../vistas/images/pdf/'.$id_documento.'/';
				$archivo_img = $ruta_img.$_FILES["archivo_pdf"]["name"];

				if(!file_exists($ruta_img)){

					mkdir($ruta_img,0777,true);
				}

				if(!file_exists($archivo_img) ){

					$resultado_img = move_uploaded_file($_FILES["archivo_pdf"]["tmp_name"], $archivo_img);
					if($resultado_img == true){
						$alerta=[
							"Alerta"=>"redireccionar",
							"Titulo"=>"Datos guardados",
							"Texto"=>"El documento fue guardado correctamente ",
							"Tipo"=>"success",
							"Contenido"=>"invlist",
							"Variable"=>""
						];
					} else {
						$alerta=[
							"Alerta"=>"simple",
							"Titulo"=>"Algo salió mal",
							"Texto"=>"No se pudo archivar el documento. ¡Ups!",
							"Tipo"=>"error"
						];

					}

				} else {
					$alerta=[
						"Alerta"=>"simple",
						"Titulo"=>"Algo salió mal",
						"Texto"=>"El archivo ya existe. ¡Ups!",
						"Tipo"=>"error"
					];
				}

			} else {

				$alerta=[
					"Alerta"=>"simple",
					"Titulo"=>"Algo salió mal",
					"Texto"=>"El archivo no es compatible ó excede el limite de tamaño. ¡Ups!",
					"Tipo"=>"error"
				];

			}

				//FIN DE PDF

		}elseif ( (!isset($_FILES["archivo"]) && $_FILES["archivo"]["error"] ) && (!isset($_FILES["archivo_pdf"]) && $_FILES["archivo_pdf"]["error"] )) {

				//INICIO DE PDF e IMAGEN


			$alerta=[
				"Alerta"=>"redireccionar",
				"Titulo"=>"Datos guardados",
				"Texto"=>"El documento fue guardado correctamente ",
				"Tipo"=>"success",
				"Contenido"=>"invlist",
				"Variable"=>""
			];


				//FIN DE PDF IMAAGEN
			return mainModel::sweet_alert($alerta);

		}  

		else{


				//INICIO DE AMBOS



			$permitidos = array("image/jpg","image/jpeg","image/gif","image/png","application/pdf");
			$limite_kb = 10000;
			$limite_kb_pdf = 10000;

			if(in_array($_FILES["archivo"]["type"], $permitidos) && $_FILES["archivo"]["size"] <= $limite_kb * 1024 && in_array($_FILES["archivo_pdf"]["type"], $permitidos) && $_FILES["archivo_pdf"]["size"] <= $limite_kb_pdf * 1024){
				$server=SERVERURL;
				$ruta_img ='../vistas/images/fotoportada/'.$id_documento.'/';
				$ruta_pdf ='../vistas/images/pdf/'.$id_documento.'/';
				$archivo_img = $ruta_img.$_FILES["archivo"]["name"];
				$archivo_pdf = $ruta_pdf.$_FILES["archivo_pdf"]["name"];

				if(!file_exists($ruta_img)){

					mkdir($ruta_img,0777,true);
					if (!file_exists($ruta_pdf)) {

						mkdir($ruta_pdf,0777,true);
					}
				}

				if(!file_exists($archivo_img) && !file_exists($archivo_img)){

					$resultado_img = move_uploaded_file($_FILES["archivo"]["tmp_name"], $archivo_img);
					$resultado_pdf = move_uploaded_file($_FILES["archivo_pdf"]["tmp_name"], $archivo_pdf);

					if($resultado_img == true && $resultado_pdf== true){
						$alerta=[
							"Alerta"=>"redireccionar",
							"Titulo"=>"Datos guardados",
							"Texto"=>"El documento fue guardado correctamente ",
							"Tipo"=>"success",
							"Contenido"=>"invlist",
							"Variable"=>""
						];
					} else {
						$alerta=[
							"Alerta"=>"simple",
							"Titulo"=>"Algo salió mal",
							"Texto"=>"No se pudo archivar el documento. ¡Ups!",
							"Tipo"=>"error"
						];

					}

				} else {
					$alerta=[
						"Alerta"=>"simple",
						"Titulo"=>"Algo salió mal",
						"Texto"=>"El archivo ya existe. ¡Ups!",
						"Tipo"=>"error"
					];
				}

			} else {

				$alerta=[
					"Alerta"=>"simple",
					"Titulo"=>"Algo salió mal",
					"Texto"=>"El archivo no es compatible ó excede el limite de tamaño. ¡Ups!",
					"Tipo"=>"error"
				];

			}

				//FIN DE AMBOS
		}

	}

	return mainModel::sweet_alert($alerta);

}

public function eliminar_documento_controlador(){

	$id_documento=mainModel::decryption($_POST['id_documento_del']);
	$carpeta=$_POST['pathDelete'];
	$pdf=$_POST['pdfDelete'];
	$eliminar=documentoModelo::desactivar_investigacion_modelo($id_documento);
	
	if ($eliminar->rowCount()>=1) {

		foreach(glob($carpeta . "/*") as $archivos_carpeta){             
			if (is_dir($archivos_carpeta)){
			  rmDir_rf($archivos_carpeta);
			} else {
			unlink($archivos_carpeta);
			}
		  }
		  rmdir($carpeta);

		  foreach(glob($pdf . "/*") as $archivos_carpeta){             
			  if (is_dir($archivos_carpeta)){
				rmDir_rf($archivos_carpeta);
			  } else {
			  unlink($archivos_carpeta);
			  }
			}
			rmdir($pdf);

		$alerta=[
			"Alerta"=>"recargar",
			"Titulo"=>"Datos Eliminador",
			"Texto"=>"El documento fue eliminado correctamente ",
			"Tipo"=>"success"
		];
	}else{

		$alerta=["Alerta"=>"simple",
		"Titulo"=>"Algo salió mal",
		"Texto"=>"No se pudo eliminar la investigacion ",
		"Tipo"=>"error"
	];
}

return mainModel::sweet_alert($alerta);

}

public function catalago_investigaciones(){

	$tabla="";
	$datos=mainModel::ejecutar_consulta_simple("SELECT inv.estado_investigacion,doc.id_documento,SUBSTRING(doc.titulo, 1, 80) AS titulo,inv.fecha,au.nombre FROM investigacion inv INNER JOIN documento doc on inv.id_documento=doc.id_documento INNER JOIN autor au on inv.id_autor=au.id_autor where estado_investigacion='Activo' ORDER BY fecha DESC LIMIT 3");
	while ( $rows=$datos->fetch()) {
		$tabla.=' <div class="col-md-4 ">
		<div class="blog-entry" data-aos-delay="200">';
		$path ="././vistas/images/fotoportada/".$rows['id_documento'];
		if(file_exists($path)){
			$directorio = opendir($path);
			while ($archivo = readdir($directorio))
			{
				$data=mainModel::encryption($path."/".$archivo);
				if (!is_dir($archivo)){
					$tabla.='
					<a href="'.SERVERURL.'detalles/'.mainModel::encryption($rows['id_documento']).'" class="block-20" style="background-image: url('.SERVERURL.'vistas/images/fotoportada/'.$rows['id_documento'].'/'.$archivo.');">
					</a>';

				}
			}
		}else{
			$tabla.='
					<a href="'.SERVERURL.'detalles/'.mainModel::encryption($rows['id_documento']).'" class="block-20" style="background-image: url('.SERVERURL.'vistas/images/sin-imagen.jpg);">
					</a>';
		}



		$tabla.='<div class="text p-4 d-block">
		<div class="meta mb-3">
		<div><a href="'.SERVERURL.'detalles/'.mainModel::encryption($rows['id_documento']).'">'.$rows['fecha'].'</a></div>
		<div><a href="'.SERVERURL.'detalles/'.mainModel::encryption($rows['id_documento']).'">'.$rows['nombre'].'</a></div>
		<div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
		</div>
		<h3 class="heading"><a href="'.SERVERURL.'detalles/'.mainModel::encryption($rows['id_documento']).'">'.$rows['titulo'].'</a></h3>
		</div>
		</div>
		</div> ';
	}

	return $tabla;
}






// inicio prin 

public function catalago_principal($pagina,$registros,$busqueda,$idcat){

	$pagina=mainModel::limpiar_cadena($pagina);
	$registros=mainModel::limpiar_cadena($registros);
	$busqueda=mainModel::limpiar_cadena($busqueda);
	$tabla="";

	$pagina=(isset($pagina) && $pagina>0) ? (int) $pagina :1;
	$inicio=($pagina>0) ? (($pagina*$registros)-$registros) : 0;

	if (isset($busqueda) && $busqueda!="") {
		$consulta=" SELECT SQL_CALC_FOUND_ROWS tidoc.nombre_tipo_doc ,  inv.estado_investigacion,doc.id_documento,SUBSTRING(doc.titulo, 1, 80) AS titulo,inv.fecha,au.nombre FROM investigacion inv INNER JOIN documento doc on inv.id_documento=doc.id_documento INNER JOIN autor au on inv.id_autor=au.id_autor INNER JOIN tipo_doc tidoc on doc.id_tipo_doc=tidoc.id_tipo_doc where   estado_investigacion='Activo' and (doc.titulo LIKE '%$busqueda%' or tidoc.nombre_tipo_doc LIKE '%$busqueda%' or au.nombre LIKE '%$busqueda%' or au.apellido LIKE '%$busqueda%') ORDER BY fecha DESC LIMIT $inicio,$registros";
		$paginaurl="investigacionsearch/";
	}elseif(isset($idcat) && $idcat!=""){
		$consulta=" SELECT SQL_CALC_FOUND_ROWS tidoc.nombre_tipo_doc , inv.estado_investigacion,doc.id_documento,SUBSTRING(doc.titulo, 1, 80) AS titulo,inv.fecha,au.nombre FROM investigacion inv INNER JOIN documento doc on inv.id_documento=doc.id_documento INNER JOIN autor au on inv.id_autor=au.id_autor INNER JOIN tipo_doc tidoc on doc.id_tipo_doc=tidoc.id_tipo_doc where estado_investigacion='Activo' and tidoc.id_tipo_doc ='$idcat' ORDER BY fecha DESC LIMIT $inicio,$registros";
		$paginaurl="investigacioncategory/".$idcat."/";
	}else{
		$consulta=" SELECT SQL_CALC_FOUND_ROWS tidoc.nombre_tipo_doc , inv.estado_investigacion,doc.id_documento,SUBSTRING(doc.titulo, 1, 80) AS titulo,inv.fecha,au.nombre FROM investigacion inv INNER JOIN documento doc on inv.id_documento=doc.id_documento INNER JOIN autor au on inv.id_autor=au.id_autor INNER JOIN tipo_doc tidoc on doc.id_tipo_doc=tidoc.id_tipo_doc where estado_investigacion='Activo' ORDER BY fecha DESC LIMIT $inicio,$registros";
		$paginaurl="investigacionlist/";
	}


	$conexion=mainModel::conectar();

	$datos=$conexion->query($consulta);
	$datos=$datos->fetchAll();

	$total=$conexion->query("SELECT FOUND_ROWS()");
	$total=(int) $total->fetchColumn();

	$Npaginas=ceil($total/$registros);


	if ($total>=1 && $pagina<=$Npaginas) {
		$contador=$inicio+1;


		foreach ($datos as $rows) {
			$tabla.=' <div class="col-md-4 ">
			<div class="blog-entry">';
			$path ="././vistas/images/fotoportada/".$rows['id_documento'];
			if(file_exists($path)){
				$directorio = opendir($path);
				while ($archivo = readdir($directorio))
				{
					$data=mainModel::encryption($path."/".$archivo);
					if (!is_dir($archivo)){



						if ($archivo!="") {
							
							$tabla.='
							<a href="'.SERVERURL.'detalles/'.mainModel::encryption($rows['id_documento']).'"  class="block-20" style="background-image: url('.SERVERURL.'vistas/images/fotoportada/'.$rows['id_documento'].'/'.$archivo.');">
							</a>';

						}



					}
				}
			}else{
				$tabla.='
				<a href="'.SERVERURL.'detalles/'.mainModel::encryption($rows['id_documento']).'"  class="block-20" style="background-image: url('.SERVERURL.'vistas/images/sin-imagen.jpg);">
				</a>';
			}



			$tabla.='
			<div class="text p-4 d-block">
			<div class="meta mb-3">
			<div><a href="#">'.$rows['fecha'].'</a></div>
			<div><a href="#">'.$rows['nombre'].'</a></div>
			<div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
			</div>
			<h3 class="heading"><a href="'.SERVERURL.'detalles/'.mainModel::encryption($rows['id_documento']).'">'.$rows['titulo'].'</a></h3>

			<div class="meta mb-3">
			<div><a href="#">Categoria: '.$rows['nombre_tipo_doc'].'</a></div>
			</div>
			</div>
			</div>
			</div>';	
			$contador++;
		}



	}else{

		if ($total>=1) {
			$tabla.='
			<tr>
			<td colspan="5">
			<a href="'.SERVERURL.''.$paginaurl.'" class="btn btn-sm btn-info btn-raised"> 
			Haga click para recargar el listado
			</a>
			</td>
			</tr>
			';
		}else{
			$tabla.='
			<tr>
			<td colspan="5">No se encontraron resultados</td>
			</tr>
			';
		}


	}

	$tabla.='</tbody></table></div>';




	if ($total>=1 && $pagina<=$Npaginas) {
		$tabla.='<div class="row mt-5">
		<div class="col text-center">
		<div class="block-27">
		<ul>';
		if ($pagina==1) {
			$tabla.='<li class="disabled"><a>&lt;</a></li>';
		}else{
			$tabla.='<li><a class="ir-inve" href="'.SERVERURL.$paginaurl.'/'.($pagina-1).'">&lt;</a></li>';
		}


		for ($i=1; $i < 1; $i++) { 
			if ($pagina==$i) {
				$tabla.='<li class="active"><a href="'.SERVERURL.$paginaurl.'/'.($i).'"><span>'.$i.'</span></a></li>';
			}else{
				$tabla.='<li><a href="'.SERVERURL.$paginaurl.'/'.($i).'">'.$i.'</a></li>';

			}
		}


		if ($pagina==$Npaginas) {
			$tabla.='<li class="disabled"><a>&gt;</a></li>';
		}else{
			$tabla.='<li><a  href="'.SERVERURL.$paginaurl.'/'.($pagina+1).'">&gt</a></li>';
		}


		$tabla.='</ul> 
		</div>
		</div>
		</div>';
	}

	return $tabla;
}

// fin prin








public function eliminar_foto_controlador($data){
	if ($data=="true") {
		$alerta=[
			"Alerta"=>"redireccionar",
			"Titulo"=>"Foto Eliminada",
			"Texto"=>"El archivo fue eliminado correctamente ",
			"Tipo"=>"success",
			"Contenido"=>"invlist",
			"Variable"=>""
		];
	}else{
		$alerta=[
			"Alerta"=>"simple",
			"Titulo"=>"Algo salió mal",
			"Texto"=>"No se pudo  eliminar el archivo. ¡Ups!",
			"Tipo"=>"error"
		];
	}
	
	return mainModel::sweet_alert($alerta);
}


public function mini_catalago(){

	$tabla="";
	$datos=mainModel::ejecutar_consulta_simple("SELECT inv.estado_investigacion,doc.id_documento,SUBSTRING(doc.titulo, 1, 60) AS titulo,inv.fecha,au.nombre FROM investigacion inv INNER JOIN documento doc on inv.id_documento=doc.id_documento INNER JOIN autor au on inv.id_autor=au.id_autor where estado_investigacion='Activo' ORDER BY fecha DESC LIMIT 3");
	while ( $rows=$datos->fetch()) {
		$tabla.=' <div class="block-21 mb-4 d-flex">';
		$path ="././vistas/images/fotoportada/".$rows['id_documento'];


		if(file_exists($path)){
			$directorio = opendir($path);
			while ($archivo = readdir($directorio))
			{
				$data=mainModel::encryption($path."/".$archivo);
				if (!is_dir($archivo)){



					if ($archivo!="") {

						$tabla.='
						<a href="'.SERVERURL.'detalles/'.mainModel::encryption($rows['id_documento']).'"  class="blog-img mr-4" style="background-image: url('.SERVERURL.'vistas/images/fotoportada/'.$rows['id_documento'].'/'.$archivo.');">
						</a>';

					}



				}
			}
		}else{
			$tabla.='
			<a href="'.SERVERURL.'detalles/'.mainModel::encryption($rows['id_documento']).'"  class="blog-img mr-4" style="background-image: url('.SERVERURL.'vistas/images/sin-imagen.jpg);">
			</a>';
		}


		$tabla.='
		<div class="text">
		<h3 class="heading"><a href="'.SERVERURL.'detalles/'.mainModel::encryption($rows['id_documento']).'">'.$rows['titulo'].'...</a></h3>
		<div class="meta">
		<div><a href="'.SERVERURL.'detalles/'.mainModel::encryption($rows['id_documento']).'"><span class="icon-calendar"></span> '.$rows['fecha'].'</a></div>
		<div><a href="'.SERVERURL.'detalles/'.mainModel::encryption($rows['id_documento']).'"><span class="icon-person"></span> '.$rows['nombre'].'</a></div>
		<div><a href="'.SERVERURL.'detalles/'.mainModel::encryption($rows['id_documento']).'"><span class="icon-chat"></span> 19</a></div>
		</div>
		</div>
		</div>';
	}

	return $tabla;
}


}