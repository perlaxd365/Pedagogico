
<?php

$peticionAjax=true;
require_once '../core/configGeneral.php';

require_once '../controladores/lineasControlador.php';
$instancearLineas= new lineasControlador();

if (isset($_POST['id_carrera_reg'])&&isset($_POST['id_area_reg'])&&isset($_POST['nombre_linea_reg'])) {


	echo $instancearLineas->agregar_lineas_controlador();


}elseif(isset($_POST['id_lineas']) ) {
	
	echo $instancearLineas->eliminar_linea_controlador();

}elseif(isset($_POST['id_lineas_search'])) {
	
	echo $instancearLineas->select_carrera_controlador();
	
}elseif(isset($_POST['area-reg']) && isset($_POST['id_carrera'])) {
	
	echo $instancearLineas->select_area_controlador();
	
}else{

	echo '<script> window.location.href="'.SERVERURL.'login/"</script>';
}