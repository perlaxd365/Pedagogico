<?php 
if ($peticionAjax) {
	require_once "../modelos/lineasModelo.php";
}else{
	require_once "./modelos/lineasModelo.php";
}

class lineasControlador extends lineasModelo{

	public function agregar_lineas_controlador(){


		$idCarrera=mainModel::limpiar_cadena($_POST['id_carrera_reg']);
		$idArea=mainModel::limpiar_cadena($_POST['id_area_reg']);
		$nombreLinea=mainModel::limpiar_cadena($_POST['nombre_linea_reg']);

		if ($idCarrera!=null&&$idArea!=null&&$nombreLinea!=null) {
			$dataLinea=[
				"id_carrera"=>$idCarrera,
				"id_area"=>$idArea,
				"nombre_linea"=>$nombreLinea,
			];
			$guardar=lineasModelo::agregar_linea_modelo($dataLinea);
			if ($guardar->rowCount()>=1) {
				$alerta=[
					"Alerta"=>"recargar",
					"Titulo"=>"Exito al registrar",
					"Texto"=>"La linea de investigacion fue registrada",
					"Tipo"=>"success"
				];
			}else{
				$alerta=["Alerta"=>"simple",
				"Titulo"=>"Algo salió mal",
				"Texto"=>"No se pudo agregar la linea de investigacion ",
				"Tipo"=>"error"
			];
		}

	}

	return mainModel::sweet_alert($alerta);
}

public function paginador_lineas_controlador($pagina,$registros,$busqueda){

		$pagina=mainModel::limpiar_cadena($pagina);
		$registros=mainModel::limpiar_cadena($registros);
		$busqueda=mainModel::limpiar_cadena($busqueda);
		$tabla="";

		$pagina=(isset($pagina) && $pagina>0) ? (int) $pagina :1;
		$inicio=($pagina>0) ? (($pagina*$registros)-$registros) : 0;

		if (isset($busqueda) && $busqueda!="") {
			$consulta=" SELECT SQL_CALC_FOUND_ROWS id_lineas,c.id_carrera, c.nombre_carrera,a.id_area,a.nombre_area,GROUP_CONCAT(nombre_linea SEPARATOR ', ')as linea FROM lineasinvestigacion l INNER JOIN carrera c on l.id_carrera=c.id_carrera INNER JOIN area a ON l.id_area= a.id_area WHERE c.id_carrera='$busqueda' and estado='Activo' GROUP BY a.nombre_area  DESC LIMIT $inicio,$registros";
			$paginaurl="lineaList";
		}else{
			$consulta=" SELECT SQL_CALC_FOUND_ROWS id_lineas,c.id_carrera, c.nombre_carrera,a.id_area,a.nombre_area,GROUP_CONCAT(nombre_linea SEPARATOR ', ')as linea FROM lineasinvestigacion l INNER JOIN carrera c on l.id_carrera=c.id_carrera INNER JOIN area a ON l.id_area= a.id_area WHERE c.id_carrera='1' and estado='Activo' GROUP BY a.nombre_area  DESC LIMIT $inicio,$registros";
			$paginaurl="lineaList";
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
		<th class="text-center">NOMBRE DE CARRERA</th>
		<th class="text-center">NOMBRE DE AREA</th>
		<th class="text-center">LINEA DE INVESTIGACION.</th>';



		$tabla.='</tr>
		</thead>
		<tbody>
		';

		if ($total>=1 && $pagina<=$Npaginas) {
			$contador=$inicio+1;
			foreach ($datos as $rows) {
				$tabla.='
				<tr >
				<td>'.$contador.'</td>
				<td>'.$rows['nombre_carrera'].'</td>
				<td>'.$rows['nombre_area'].'</td>
				<td><div class="tagcloud">';

				$id_carrera=$rows['id_carrera'];
				$id_area=$rows['id_area'];

                $result = mainModel::ejecutar_consulta_simple("SELECT id_lineas, nombre_linea FROM lineasinvestigacion WHERE id_carrera='$id_carrera' and id_area='$id_area' and estado='Activo'");

                while ($row= $result->fetch()) {

                  

                  
                 $tabla.='

				<form action="'.SERVERURL.'/ajax/lineasAjax.php" method="POST" class="FormularioAjax" data-form="delete" entype="multipart/form-data" autocomplete="off">
				<input type="hidden" value='.$row['id_lineas'].' name="id_lineas">
                 <input type="submit" class="tag-cloud-link" value="'.$row['nombre_linea'].'">
                 <div class="RespuestaAjax"></div>
				</form>';
                  
                }
               
				
				$tabla.='</div></td>
				
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

	public function eliminar_linea_controlador(){


		$id_lineas=mainModel::limpiar_cadena($_POST['id_lineas']);

		if ($id_lineas!=null) {
			
			$eliminar=lineasModelo::eliminar_linea_modelo($id_lineas);
			if ($eliminar->rowCount()>=1) {
				$alerta=[
					"Alerta"=>"recargar",
					"Titulo"=>"Exito al eliminar",
					"Texto"=>"La linea de investigacion fue eliminada",
					"Tipo"=>"success"
				];
			}else{
				$alerta=["Alerta"=>"simple",
				"Titulo"=>"Algo salió mal",
				"Texto"=>"No se pudo eliminar linea de investigacion ",
				"Tipo"=>"error"
			];
		}

	}

	return mainModel::sweet_alert($alerta);
}


public function select_carrera_controlador(){
	
		$idCarrera=mainModel::limpiar_cadena($_POST['id_lineas_search']);

		$result = mainModel::ejecutar_consulta_simple("SELECT DISTINCT  a.id_area,a.nombre_area  FROM lineasInvestigacion li INNER JOIN area a ON li.id_area = a.id_area WHERE li.id_carrera='$idCarrera' and estado='Activo'");

				$select="";

				$select.=' <option value="">Seleccionar</option>';
                foreach ($result as $key => $row) {
                
                $select.= '
                
                <option value="'.$row["id_area"].'">'.$row["nombre_area"].'</option>';
               
              
                }
            return $select;
}

public function select_area_controlador(){
	
		$id_area=mainModel::limpiar_cadena($_POST['area-reg']);
		$idCarrera=mainModel::limpiar_cadena($_POST['id_carrera']);

		$result = mainModel::ejecutar_consulta_simple("SELECT * FROM lineasInvestigacion WHERE id_area='$id_area' and id_carrera='$idCarrera' and estado='Activo'");

				$select="";

				$select.=' <option value="">Seleccionar</option>';
                


                foreach ($result as $key => $row) {
                
                $select.='<option value="'.$row["id_lineas"].'">'.$row["nombre_linea"].'</option>';
               
              
                }


            return $select;
}




}

