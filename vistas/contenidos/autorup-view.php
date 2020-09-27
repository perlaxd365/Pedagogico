

<?php 
  
  $datos=explode("/", $_GET['views']);

    require_once "./controladores/documentoControlador.php";
  $classDoc = new documentoControlador();
  $filesL=$classDoc->datos_documento_controlador($datos[1]);
  if ($filesL->rowCount()>=1) {

      $campos=$filesL->fetch();
    
    ?>


<div id="registro">  
<section class="ftco-section contact-section ftco-degree-bg">
  <div class="container">
    <div class="row d-flex mb-5 contact-info">
      <div class="col-md-12 mb-4">
        <h2 class="h4">Registro de investigacion</h2>
      </div>
      <div class="w-100"></div>
    </div>
    <div class="row block-9">
      <div class="col-md-6 pr-md-5">
      <form action="<?php echo SERVERURL;?>ajax/documento.php" method="POST" data-form="update" class="FormularioAjax">
        <input type="hidden" value="<?php echo $campos['id_autor'] ?>" name="id_autor">
       

          <p>Tipo de investigadores cientificos</p>

          <div class="col-xs-12 col-sm-6">
                      <div class="form-group">
                        <div class="radio radio-primary">
                          <label>
                            <input type="radio" name="id_tipo_autor"<?php if ($campos['id_tipo_autor']=="1") {
                              echo'checked=""';
                            } ?>
                            value="1">
                            &nbsp; Estudiante   
                          </label>
                        </div>
                        <div class="radio radio-primary">
                          <label>
                            <input type="radio" name="id_tipo_autor"
                             value="2" <?php if ($campos['id_tipo_autor']=="2") {
                              echo'checked=""';
                            } ?>>
                             &nbsp; Formador
                          </label>
                        </div>
                        <div class="radio radio-primary">
                          <label>
                            <input type="radio" name="id_tipo_autor"
                             value="3" <?php if ($campos['id_tipo_autor']=="3") {
                              echo'checked=""';
                            } ?>>
                            &nbsp; Cogestionado
                          </label>
                        </div>
                      </div>
                    </div>
          <?php $numero = 4;
$fecha = DateTime::createFromFormat('!m', $numero);
$mes = $fecha->format('F');
echo $mes; ?>
            <p>Especialidad</p>
            <div class="form-group">
              <select class="form-control" name="especialidad-reg">
              <option selected=""><?php echo $campos['especialidad'] ?></option>
                <option >no tiene</option>
                <option>educación inicial</option>
                <option>educación primaria</option>
                <option>educación fisica</option>
                <option>ingles</option>
                <option>computación informática</option>

              </select>
            </div>
          <p>Datos Personales</p>
          <div class="form-group">
            <input type="text" class="form-control" value="<?php echo $campos['nombre']; ?>" name="nombre-reg" placeholder="Nombres">
          </div>
          <div class="form-group">
            <input type="text" class="form-control" value="<?php echo $campos['apellido'];?>" name="apellido-reg" placeholder="Apellidos">
          </div>
          <div class="form-group">
            <input type="text" class="form-control" value="<?php echo $campos['dni'];?>" name="dni-reg" placeholder="DNI">
          </div>
          <div class="form-group">
            <input type="text" class="form-control" value="<?php echo $campos['telefono'];?>" name="telefono-reg" placeholder="Telefono">
          </div>
          <div class="form-group">
            <input type="text" class="form-control" value="<?php echo $campos['correo'];?>" name="correo-reg" placeholder="Correo">
          </div>
          <div class="form-group">
            <input type="submit" value="Actualizar Autor" class="btn btn-primary py-3 px-5">
          </div>

        <div class="RespuestaAjax">
          
        </div>
        </form>

      </div>

      <div class="col-md-6" id="map"></div>
    </div>
  </div>
</section>
</div>

<?php  }else{

    echo "<h4>No se pudo recuperar los datos</h4>";
} 
?>

<script type="text/javascript">
    $(document).ready(function() {
   $('html,body').animate({
            scrollTop: $("#registro").offset().top
        }, 400);
    $(".ir-reg").click(function () {

        $('html,body').animate({
            scrollTop: $("#registro").offset().top
        }, 400);
    });

});
  </script>