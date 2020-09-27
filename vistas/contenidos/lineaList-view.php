
<section class="ftco-section contact-section ftco-degree-bg">
  <div class="container " >
    <div class="row d-flex mb-5 contact-info">
      <div id="invlist" class="col-md-12 mb-4">
        <h2 class="h4">Listado de Lines de investigacion</h2>
      </div>
    </div>

    <div class="row block-9">
      <div class="col-md-6 pr-md-5">
        <div class="form-group" >
            <select onchange="location.href=this.value"  id="selectForm" class="form-control">
              <?php
                $result = mainModel::ejecutar_consulta_simple("SELECT * FROM carrera");

                while ($row= $result->fetch()) {

                  ?>

                  
                  <option <?php 

            $pagina=explode("/",$_GET['views']);

                  if($pagina[1]==$row["id_carrera"]){echo "selected";} 
                    ?> value="<?php echo $row["id_carrera"]?>"><?php echo $row["nombre_carrera"]?></option>

                  <?php
                }
                ?>

            </select>
          </div>
        </div>
      </div>

    <div class="container"  >

<?php require_once './controladores/lineasControlador.php';
        $doc = new lineasControlador();
     ?>
   
      <div class="container">
        <div class="row">
          <div class="col-md-12 ">

            <?php 
            $pagina=explode("/",$_GET['views']);

            echo $doc->paginador_lineas_controlador(1,5,$pagina[1]);
          ?>

          </div>
        </div>
      </div>

        

      </div>
  </div>
</section>

   <section class=" bg-light">
      
    </section>



 <script type="text/javascript">
    $(document).ready(function() {
   $('html,body').animate({
            scrollTop: $("#invlist").offset().top
        }, 400);
    $(".ir-inve").click(function () {

        $('html,body').animate({
            scrollTop: $("#invlist").offset().top
        }, 400);
    });

});
  </script>