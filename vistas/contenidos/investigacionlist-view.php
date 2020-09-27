
 <section class=" bg-light" id="investigacion">
      <div class="container" >
        <div class="row justify-content-center mb-5 mt-5">
          <div class="col-md-7 text-center heading-section ">
            <span class="subheading">Inicia tu Búsqueda !!</span>
            <h2 class="mb-4">Buscar</h2>
            <p>Reazliza tu búsqueda en nuestro repositorio público </p>
          </div>
        </div>


        <div class="row justify-content-center">
          <div class="col-md-8 ">
            <form action="<?php echo SERVERURL;?>investigacionsearch/" method="POST" class="domain-form">
              <div class="form-group d-md-flex">
                <input type="text" name="busqueda_inicial" class="form-control px-4" placeholder="Ingresa tu búsqueda...">
                <input type="submit" class="search-domain btn btn-primary px-5" value="Buscar inves.">
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
          <div class="sidebar-box ">
            <div class="categories">
              <h3>Categorias</h3>
              <?php
              $consulta=mainModel::ejecutar_consulta_simple("SELECT * FROM tipo_doc");
              while ($campos=$consulta->fetch()) {

               ?>

              <li><a  href="<?php echo SERVERURL ?>investigacioncategory/<?php echo $campos[0]?>/"><?php echo $campos['nombre_tipo_doc'];?>

              <span>
                <?php 

                $consulta2=mainModel::ejecutar_consulta_simple("SELECT * FROM investigacion inv inner join documento doc on inv.id_documento=doc.id_documento where  id_tipo_doc='$campos[0]'  and inv.estado_investigacion='Activo' ");
              
              $numero=$consulta2->rowCount();
              echo $numero;
                 ?>

              </span></a></li>
              <?php
              }
              ?>

              
            </div>
          </div>
        </div>
      </div>

    
    </section>
    <section class=" bg-light">

   <div id="">
      <div class="container">
        
        <div class="row">


    <?php require_once './controladores/documentoControlador.php';
        $doc = new documentoControlador();
 
            $pagina=explode("/",$_GET['views']);

            echo $doc->catalago_principal($pagina[1],12 ,"","");
          ?>
          

        </div>
        
      </div>
    </section>
        <br>
    </div>

 <script type="text/javascript">
    $(document).ready(function() {
   $('html,body').animate({
            scrollTop: $("#investigacion").offset().top
        }, 400);
    $(".ir-inv").click(function () {

        $('html,body').animate({
            scrollTop: $("#investigacion").offset().top
        }, 400);
    });

});
  </script>