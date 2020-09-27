

<div id="registro" >  
<section class="ftco-section contact-section ftco-degree-bg">
  <div class="container">


    <div class="row d-flex mb-5 contact-info">
      <div class="col-md-12 mb-4">
        <h2 class="h4">Selecciona Formulario de Registro</h2>
      </div>
    </div>
    <div class="row block-9">
      <div class="col-md-6 pr-md-5">
        <div class="form-group" style="padding-bottom:  100px">
            <select onchange="SeleccionarForm();"  id="selectForm" class="form-control">
              <option value="1">Registrar Investigacion</option>
              <option value="2">Registrar Linea de Investigación</option>

            </select>
          </div>
        </div>
      </div>


 <!--Inicio de Formulario de investigacion -->
    <div id="formInvestigacion">
    <div class="row d-flex mb-5 contact-info">
      <div class="col-md-12 mb-4">
        <h3 class="h4">Registro de investigacion</h3>
      </div>
      <div class="w-100"></div>
    </div>
    <div class="row block-9">
      <div class="col-md-6 pr-md-5">
      <form action="<?php echo SERVERURL;?>ajax/documento.php" method="POST" data-form="save" class="FormularioAjax" autocomplete="off" enctype="multipart/form-data">
        <input type="hidden" name="documento-reg">
          <p>Tipo de investigadores cientificos</p>
          <div class="form-group">
            <select onchange="ocultar();" id="selecto" name="id_tipo_autor" class="form-control">
              <option value="1">Estudiante</option>
              <option value="2">Formador</option>
              <option value="3">Cogestionado</option>

            </select>
          </div>
          <div id="estudiante">
            <p>Tipos de investigacion</p>
            <div class="form-group">
              <select class="form-control" name="id-tipo-doc-es">
                <option value="1">investigaciones con fines de titulación</option>
                <option value="2">investigaciones científicas</option>
                <option value="3">proyecto de innovación</option>
                <option value="4">monografías</option>
                <option value="5">artículos científicos</option>

              </select>
            </div>
            <p>Especialidad</p>
            <div class="form-group">
              <select class="form-control" name="especialidad-es">
                <option selected="">no tiene</option>
                <option>educación primaria</option>
                <option>educación secundaria</option>
                <option>educación fisica</option>
                <option>ingles</option>
                <option>computación informática</option>

              </select>
            </div>
          </div>
          <div id="formador" style="display: none;">
            <p>Tipos de investigacion</p>
            <div class="form-group">
              <select class="form-control" name="id-tipo-doc-for">
                <option value="2">investigaciones científicas</option>
                <option value="3">proyecto de innovación</option>
                <option value="4">monografías</option>
                <option value="5">artículos científicos</option>
                <option value="6">producción de libros</option>
                <option value="7">producción de revistas</option>

              </select>
            </div>
          </div>

          <div id="cogestionadas" style="display: none;">
            <p>Tipos de investigacion</p>
            <div class="form-group">
              <select class="form-control" name="id-tipo-doc-cog">
                <option value="2">investigaciones cientificas</option>
                <option value="3">proyecto de innovación</option>
                <option value="4">monografías</option>
                <option value="5">artículos científicos</option>

              </select>
            </div>
            <p>Especialidad</p>
            <div class="form-group">
              <select class="form-control" name="especialidad-cog">
                <option selected="">no tiene</option>
                <option>educación inicial</option>
                <option>educación primaria</option>
                <option>educación secundaria</option> 
                <option>educación fisica</option>
                <option>ingles</option>
                <option>computación informática</option>

              </select>
            </div>
          </div>

          <p>Datos de Investigación</p>
          <div class="form-group">
            <input type="text" class="form-control" name="titulo-reg" placeholder="Titulo de proyecto">
          </div>
          <p>Datos Personales</p>
          <div class="form-group">
            <input type="text" class="form-control" name="nombre-reg" placeholder="Nombres">
          </div>
          <div class="form-group">
            <input type="text" class="form-control" name="apellido-reg" placeholder="Apellidos">
          </div>
          <div class="form-group">
            <input type="text" class="form-control" maxlength="8" name="dni-reg" placeholder="DNI">
          </div>
          <div class="form-group">
            <input type="text" class="form-control" maxlength="12" name="telefono-reg" placeholder="Telefono">
          </div>
          <div class="form-group">
            <input type="text" class="form-control" name="correo-reg" placeholder="Correo">
          </div>
          <div class="form-group">
            <p>Carrera</p>
            <select class="form-control" name="id_carrera" id="id_lineas" onchange="obtenerArea();obtenerLinea();" >
             
             <option>Seleccionar...</option>
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
                <option value="">Seleccionar</option>
                

              </select>
            </div>
            <p>Linea de Investigacion</p>
            <div class="form-group">
              <select class="form-control" name="linea-reg" id="linea-reg">
                <option value="">Seleccionar</option>
                

              </select>
            </div>
          <div class="form-group">
            <p>Adjuntar imagen de carátula</p>
            <input type="file" class="form-control" id="archivo" name="archivo" accept="image/*">
          </div>
          <div class="form-group">
            <p>Adjuntar pdf de invtigacion</p>
            <input type="file" class="form-control" id="archivo_pdf" name="archivo_pdf" accept="application/pdf">
          </div>
          <div class="form-group">
            <textarea name="resumen-reg" id="" cols="50" rows="14" class="form-control" placeholder="Resumen de investigacion"></textarea>
          </div>
          <div class="form-group">
            <input type="submit" value="Guardar investigacion" class="btn btn-primary py-3 px-5">
          </div>

        <div class="RespuestaAjax">
          
        </div>
        </form>


      </div>

      <div class="col-md-6" id="map"></div>
    </div>
    </div>


 <!--Inicio de Formulario de lineas de  investigacion -->


<div id="formLineaInvestigacion" style="display: none;">  
      <div class="row d-flex mb-5 contact-info">
        <div class="col-md-12 mb-4">
          <h2 class="h4">Registro de Lineas</h2>
        </div>
        <div class="w-100"></div>
      </div>
      <div class="row block-9">
        <div class="col-md-6 pr-md-5">
          <form action="<?php echo SERVERURL;?>ajax/lineasAjax.php" method="POST" data-form="save" class="FormularioAjax" autocomplete="off" enctype="multipart/form-data">
            <input type="hidden" name="documento-reg">
            <p>Carrera</p>
            <div class="form-group">
              <select   name="id_carrera_reg" class="form-control">
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
            <div id="estudiante">
              <p>Area</p>
              <div class="form-group">
                <select class="form-control" name="id_area_reg">
                  <?php
                $result = mainModel::ejecutar_consulta_simple("SELECT * FROM area");

                while ($row= $result->fetch()) {

                  ?>

                  
                  <option value="<?php echo $row["id_area"]?>"><?php echo $row["nombre_area"]?></option>
                  <?php
                }
                ?>
                </select>
              </div>

            </div>

            <p>Datos de Investigación</p>
            <div class="form-group">
              <input type="text" class="form-control" required="" name="nombre_linea_reg" placeholder="Linea de Investigacion">
            </div>
            <div class="form-group">
              <input type="submit" value="Guardar investigacion" class="btn btn-primary py-3 px-5">
            </div>

            <div class="RespuestaAjax">

            </div>
          </form>

        </div>

        <div class="col-md-6" id="map"></div>
      
  </section>
</div>




  </div>
</section>
</div>




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

  function ocultar(){

    var valorSeleccionado=document.getElementById("selecto").value;
    switch (valorSeleccionado!="") {
      case valorSeleccionado=="1":
      document.getElementById("estudiante").style.display="block";
      document.getElementById("formador").style.display="none";
      document.getElementById("cogestionadas").style.display="none";
      break;
      case valorSeleccionado=="2":

      document.getElementById("estudiante").style.display="none";
      document.getElementById("formador").style.display="block";
      document.getElementById("cogestionadas").style.display="none";
      break;
      case valorSeleccionado=="3":

      document.getElementById("estudiante").style.display="none";
      document.getElementById("formador").style.display="none";
      document.getElementById("cogestionadas").style.display="block";
      break;

    }
  }
  function SeleccionarForm(){

    var valorSeleccionado1=document.getElementById("selectForm").value;
    switch (valorSeleccionado1!="") {
      case valorSeleccionado1=="1":
      document.getElementById("formInvestigacion").style.display="block";
      document.getElementById("formLineaInvestigacion").style.display="none";
      break;
      case valorSeleccionado1=="2":

      document.getElementById("formInvestigacion").style.display="none";
      document.getElementById("formLineaInvestigacion").style.display="block";
      break;

    }
  }
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