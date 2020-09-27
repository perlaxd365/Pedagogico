<?php 
	require_once './controladores/documentoControlador.php';
        $doc = new documentoControlador();
    
         $pagina=explode("/",$_GET['views']);
		$file = $lc->decryption($pagina[1]);
	
			if(is_file($file)){
				chmod($file,0777);
				if(!unlink($file)){
					echo $doc->eliminar_foto_controlador("false");
				}else{
					echo $doc->eliminar_foto_controlador("true");
				}
			}
	
