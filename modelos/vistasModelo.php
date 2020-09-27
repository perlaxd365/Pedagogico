<?php 
	class vistasModelo{
		protected function obtener_vistas_modelo($vistas){
			$listaBlanca=["home","registro","blog","investigacionlist","login","invlist","docup","invsearch","autorup","eliminarfoto","detalles","investigacionsearch","investigacioncategory","lineaList"];
			if(in_array($vistas, $listaBlanca)){
				if(is_file("./vistas/contenidos/".$vistas."-view.php")){
					$contenido="./vistas/contenidos/".$vistas."-view.php";
				}else{
					$contenido="home";
				}
			}
			return $contenido;
		}
	}