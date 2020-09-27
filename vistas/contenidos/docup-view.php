

<?php 
  
  $datos=explode("/", $_GET['views']);

    require_once "./controladores/documentoControlador.php";
  $classDoc = new documentoControlador();
  $filesL=$classDoc->datos_documento_controlador($datos[1]);
  if ($filesL->rowCount()>=1) {

      $campos=$filesL->fetch();
    
    ?>

    <script type="text/javascript">
      $('.delete').click(function(){
          var parent = $(this).parent().attr('id');
          var service = $(this).parent().attr('data');
          var dataString = 'id='+service;
          
          $.ajax({
            type: "POST",
            url: "eliminarfoto-view.php",
            data: dataString,
            success: function() {     
              location.reload();
            }
          });
        });   
    </script>

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
      <form action="<?php echo SERVERURL;?>ajax/documento.php" method="POST" data-form="update" class="FormularioAjax" autocomplete="off" enctype="multipart/form-data" >
        <input type="hidden" value="<?php echo $campos['id_documento'] ?>" name="documento-up">
        <input type="hidden" value="<?php echo $campos['id_autor'] ?>" name="id_autor">
      
          


            <p>Tipos de investigacion</p>
            <div class="form-group">
              <select class="form-control" name="tipo-investigacion">
                <option  selected="" value="<?php echo $campos['id_tipo_doc'] ?>"><?php echo $campos['nombre_tipo_doc']; ?></option>
                <option value="1">investigaciones con fines de titulación</option>
                <option value="2">investigaciones científicas</option>
                <option value="3">proyecto de innovación</option>
                <option value="4">monografías</option>
                <option value="5">artículos científicos</option>
                <option value="6">producción de libros</option>
                <option value="7">producción de revistas</option>

              </select>
            </div>


            <div class="form-group">
            <p>Carrera</p>
            <select class="form-control" name="id_carrera" id="id_lineas" onchange="obtenerArea();obtenerLinea();" >
             
             <option value="<?php echo $campos['id_carrera'] ?>"><?php echo $campos['nombre_carrera'] ?></option>
              <?php
                $result = mainModel::ejecutar_consulta_simple("SELECT * FROM carrera");

                while ($row= $result->fetch()) {

                  ?>

                  
                  <option value="<?php echo $row["id_carrera"]?>"><?php echo $row["nombre_carrera"]?></option>
                  <?php
                }
                ?>
            </select>
          </div>

            <p>Area</p>
            <div class="form-group">
              <select class="form-control" name="area-reg" id="area-reg" onchange="obtenerLinea();">
                <option value="<?php echo $campos['id_area'] ?>"><?php echo $campos['nombre_area'] ?></option>
                

              </select>
            </div>
            <p>Linea de Investigacion</p>
            <div class="form-group">
              <select class="form-control" name="linea-reg" id="linea-reg">
                <option value="<?php echo $campos['id_lineas'] ?>"><?php echo $campos['nombre_linea'] ?></option>
                

              </select>
            </div>



          <p>Datos de Investigación</p>
          <div class="form-group">

            <input type="text" class="form-control" value="<?php echo $campos['titulo']; ?>" name="titulo-reg" placeholder="Titulo de proyecto">
          </div>
          
          <div class="form-group">
            <div class="form-group">
            
            <p>Adjuntar imagen de carátula</p>
            <input type="file" class="form-control" id="archivo" name="archivo" accept="image/*">
            <?php 
              $path ="././vistas/images/fotoportada/".$campos['id_documento'];
              if(file_exists($path)){
                $directorio = opendir($path);
                while ($archivo = readdir($directorio))
                {
                  $data=$lc->encryption($path."/".$archivo);
                  if (!is_dir($archivo)){
                   $data=str_replace("=", "", $data);
                    echo "<div data='".$path."/".$archivo."'> <a href='".SERVERURL.$path."/".$archivo."' title='Ver Archivo Adjunto'><span class='glyphicon glyphicon-picture'>Ver imagen</span></a>";
                    echo "<br>Nombre de Imagen: $archivo <br><a href='".SERVERURL."eliminarfoto/".$data."' title='Ver Archivo Adjunto' ><span  class='glyphicon glyphicon-trash' aria-hidden='true'>Eliminar</span></a></div>";?>
                     <img src="<?php echo SERVERURL?>vistas/images/fotoportada/<?php echo $campos['id_documento']?>/<?php echo $archivo ?>" width='300'>
                     <script type="text/javascript">

                       $(document).ready(function() {

                       document.getElementById("archivo").style.display="none";
  
                      });


                      </script>
                    <?php
                  }
                }
              }
              
            ?>
            
        </div>

         </div>


          <div class="form-group">
            <div class="form-group">
            
            <p>Adjuntar pdf de investigacion</p>
            <input type="file" class="form-control" id="archivo_pdf" name="archivo_pdf" accept="application/pdf">
            <?php 
              $path ="././vistas/images/pdf/".$campos['id_documento'];
              if(file_exists($path)){
                $directorio = opendir($path);
                while ($archivo = readdir($directorio))
                {
                  $data=$lc->encryption($path."/".$archivo);
                  if (!is_dir($archivo)){
                   $data=str_replace("=", "", $data);
                    echo "<div data='".$path."/".$archivo."'> <a href='".SERVERURL.$path."/".$archivo."' title='Ver Archivo Adjunto'><span class='glyphicon glyphicon-picture'>Descargar adjunto de pdf</span></a>";
                    echo "<br>Nombre de Imagen: $archivo <br><a href='".SERVERURL."eliminarfoto/".$data."' title='Ver Archivo Adjunto' ><span  class='glyphicon glyphicon-trash' aria-hidden='true'>Eliminar adjunto de pdf</span></a></div>";?>
                     <script type="text/javascript">

                       $(document).ready(function() {

                       document.getElementById("archivo_pdf").style.display="none";
  
                      });


                      </script>
                    <?php
                  }
                }
              }
              
            ?>
            
        </div>

         </div>


            <p>Resumen de investigacion</p>
          <div class="form-group">
            <textarea name="resumen-reg" id="" cols="50" rows="14" class="form-control" placeholder="Resumen de investigacion"><?php echo $campos['resumen']; ?>.</textarea>
          </div>
          <div class="form-group">
            <input type="submit" value="Actualizar investigacion" class="btn btn-primary py-3 px-5">
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
  <script type="text/javascript">
  
  function obtenerArea() {
  var id_lineas = $("#id_lineas").val();
  $.ajax({
    url: "<?php echo SERVERURL;?>ajax/lineasAjax.php",
    method: "POST",
    data: {
      "id_lineas_search":id_lineas
    },
    success: function(respuesta){
      $("#area-reg").attr("disabled", false);
      $("#area-reg").html(respuesta);
    }
  })
}
  
  function obtenerLinea() {
  var id_area_reg = $("#area-reg").val();
  var id_carrera_search = $("#id_lineas").val();
  $.ajax({
    url: "<?php echo SERVERURL;?>ajax/lineasAjax.php",
    method: "POST",
    data: {
      "area-reg":id_area_reg,
      "id_carrera":id_carrera_search

    },
    success: function(respuesta){
      $("#linea-reg").attr("disabled", false);
      $("#linea-reg").html(respuesta);
    }
  })
}
</script>

















  