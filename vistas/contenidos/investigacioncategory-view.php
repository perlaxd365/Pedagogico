 <section class=" bg-light" id="investigacion">
      <div class="container" >
        <div class="row justify-content-center mb-5 mt-5">
          <div class="col-md-7 text-center heading-section ">
            <span class="subheading">Inicia tu Búsqueda !!</span>
            <h2 class="mb-4">Buscar</h2>
            <p>Reazliza tu búsqueda en nuestro repositorio público </p>
          </div>
        </div>

        <?php 

        if (isset($_POST['busqueda_inicial'])) {
          $_SESSION['busqueda']=$_POST['busqueda_inicial'];
        }else{
          $_SESSION['busqueda']="";
        }

        if (isset($_POST['eliminar_busqueda_libro'])) {
          unset($_SESSION['busqueda_libro']);
        }


          ?>


        <div class="row justify-content-center">
          <div class="col-md-8 ">
            <form action="<?php echo SERVERURL?>investigacionsearch/" method="POST" class="domain-form">
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
            <?php if (isset($_POST['busqueda_inicial']) && !empty($_POST['busqueda_inicial']) ): ?>

            <h4  class="domain-price text-center bg-light">Su busqueda fue: "<?php echo $_POST['busqueda_inicial']; ?>"</h4>
            <?php else: ?>
            <?php endif ?>
          </div>
          <div class="sidebar-box ">
            <div class="categories">
              <h3>Categorias</h3>
              <?php
              $consulta=mainModel::ejecutar_consulta_simple("SELECT * FROM tipo_doc");
              while ($campos=$consulta->fetch()) {

                 $pagina=explode("/",$_GET['views']);
               ?>

              <li><a <?php  if($pagina[1]==$campos[0]){echo 'style="color: #333333;"';} ?> href="<?php echo SERVERURL ?>investigacioncategory/<?php echo $campos[0]?>/"><?php echo $campos['nombre_tipo_doc'];?>
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

          if (isset($_POST['categoria']) && !empty($_POST['categoria']) ){
            $categoria=$_POST['categoria'];
          }elseif (isset($pagina[1]) && !empty($pagina[1]) ){
            $categoria=$pagina[1];
          }else{
            $categoria="";
          }

          echo $doc->catalago_principal($pagina[2],12,"",$categoria);
          ?>
          

        </div>
        
      </div>
    </section>
  </div>
  <br>
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