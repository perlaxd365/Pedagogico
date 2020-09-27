
<?php

$peticionAjax=true;
require_once '../core/configGeneral.php';

require_once '../controladores/documentoControlador.php';
$insDoc= new documentoControlador();

if (isset($_POST['documento-reg'])) {

	echo $insDoc->agregar_documento_controlador();


}elseif(isset($_POST['documento-up'])){

	echo $insDoc->actualizar_documento_controlador();

}elseif(isset($_POST['id_autor'])){

	echo $insDoc->actualizar_autor_controlador();

}elseif(isset($_POST['id_documento_del'])){

	echo $insDoc->eliminar_documento_controlador();
}

else{

	echo '<script> window.location.href="'.SERVERURL.'login/"</script>';
}