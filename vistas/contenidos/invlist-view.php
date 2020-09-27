
    
    
   <section class=" bg-light">
      <div class="container" id="invlist" >
        <div class="row justify-content-center mb-5 mt-5">
          <div class="col-md-7 text-center heading-section ">
            <span class="subheading">Buscar</span>
            <h2 class="mb-4">Buscar Investigacion</h2>
            <p>Introduce el titulo,autor,resumen o alguna palabra clave</p>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-md-8 ">
            <form action="<?php echo SERVERURL?>invsearch" method="POST" class="domain-form">
              <div class="form-group d-md-flex">
                <input type="text" class="form-control px-4" name="buscar-inv" placeholder="Buscar Investigacion . . . ">
                <input type="submit" class="search-domain btn btn-primary px-5" value="Buscar Investigacion">
              </div>
            </form>
            <p class="domain-price text-center">
              <?php 
              $consulta=mainModel::ejecutar_consulta_simple("SELECT * FROM tipoautor ");
              while ( $data=$consulta->fetch()) {
                ?>
              <span><small><?php echo $data['1'];?>
              </small>
              <?php  $consulta2=mainModel::ejecutar_consulta_simple("SELECT * FROM investigacion inv inner join autor au on inv.id_autor=au.id_autor where inv.estado_investigacion='Activo' and au.id_tipo_autor='$data[0]'"); 
                    $numero2=$consulta2->rowCount();
                    echo    $numero2;
              ?>
              </span> 

                <?php
              }

              ?>    
              

            </p>
          </div>
        </div>
      </div>
    </section>


    <?php require_once './controladores/documentoControlador.php';
        $doc = new documentoControlador();
     ?>
    <section class="">
      <div class="container">
        <div class="row">
          <div class="col-md-12 ">

            <?php 
            $pagina=explode("/",$_GET['views']);

            echo $doc->paginador_administrador_controlador($pagina[1],5,"");
          ?>

          </div>
        </div>
      </div>

        
    </section>
    <br>
    <br>

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