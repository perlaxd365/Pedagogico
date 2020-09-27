<?php 
if ($peticionAjax) {
	require_once '../modelos/loginModelo.php';
}else{
	require_once './modelos/loginModelo.php';
}

class loginControlador extends loginModelo
{
	
	public function iniciar_sesion_controlador(){

		$usuario=mainModel::limpiar_cadena($_POST["Usuario"]);
		$clave=mainModel::limpiar_cadena($_POST["Clave"]);

		$datosLogin=[

			"Usuario"=>$usuario,
			"Clave"=>$clave
		];

		$datosCuenta=loginModelo::iniciar_sesion_modelo($datosLogin);
		if ($datosCuenta->rowCount()==1) {


			session_start(['name'=>'SRP']);

				$UserData=$datosCuenta->fetch();

				$_SESSION['tipo_usuario_srp']=$UserData['tipo_usuario'];
				$_SESSION['token_srp']=md5(uniqid(mt_rand(),true));
				$url=SERVERURL."registro/";
				return $urlLocation='<script>window.location="'.$url.'"</script>';
			
		}
		else{

			$alerta=[
				"Alerta"=>"simple",
				"Titulo"=>"Algo salió mal",
				"Texto"=>"El usuario y contraseña no son correctos / Cuenta inactiva. ¡Ups!",
				"Tipo"=>"error"
			];	
		}

			return mainModel::sweet_alert($alerta);	

	}

	public function cerrar_sesion_controlador(){

		session_start(['name'=>'SRP']);
		$token=mainModel::decryption($_GET['Token']);
		$datos=[
			"Token_S"=>$_SESSION['token_srp'],
			"Token"=>$token
		];
		return loginModelo::cerrar_sesion_modelo($datos);

	}

	public function forzar_cierre_sesion_controlador(){
		
		session_start(['name'=>'SRP']);
		session_destroy(); 
		return header("location:".SERVERURL."login/");
	}
}