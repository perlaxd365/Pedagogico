
<?php 

    $pagina=explode("/",$_GET['views']);
    $file = $lc->decryption($pagina[1]);

    require_once "./controladores/documentoControlador.php";
  $classDoc = new documentoControlador();
  $filesL=$classDoc->datos_detalle_controlador($file);
  if ($filesL->rowCount()>=1) {

      $campos=$filesL->fetch();
    
 ?>

 <section class="ftco-section ftco-degree-bg bg-light" id="investigacion">
      <div class="container">
        <div class="row d-md-flex">

          <?php 
              $path ="././vistas/images/fotoportada/".$file;
              if(file_exists($path)){
                $directorio = opendir($path);
                while ($archivo = readdir($directorio))
                {
                  $data=$lc->encryption($path."/".$archivo);
                  if (!is_dir($archivo)){   
                    ?>
                    <div class="col-md-6  img about-image" style="background-image: url(<?php echo SERVERURL?>vistas/images/fotoportada/<?php echo $file?>/<?php echo $archivo ?>);">
                     

                    
  
                    <?php
                  }
                }
              }else{
                ?>
                 <div class="col-md-6  img about-image" style="background-image: url(<?php echo SERVERURL?>vistas/images/sin-imagen.jpg);">
                  <?php
              }
              
            ?>
          </div>
          <div class="col-md-6  p-md-5">
            <div class="row">
              <div class="col-md-12 nav-link-wrap mb-5">
                <div class="nav  nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">



            <?php 
              $path ="././vistas/images/pdf/".$file;
              if(file_exists($path)){
                $directorio = opendir($path);
                while ($archivo = readdir($directorio))
                {
                  $data=$lc->encryption($path."/".$archivo);
                  if (!is_dir($archivo)){
                   $data=str_replace("=", "", $data);
                    echo " <a href='".SERVERURL.$path."/".$archivo."' class='nav-link ' id='v-pills-whatwedo-tab'  role='tab' aria-controls='v-pills-whatwedo' aria-selected='true'>Descargar PDF</a>";
                     
                    
                 
                  }
                }
              }
              
            ?>
 
                  <a class="nav-link active" id="v-pills-mission-tab" data-toggle="pill" href="#v-pills-mission" role="tab" aria-controls="v-pills-mission" aria-selected="false">Informacion</a>


                  <a class="nav-link" id="v-pills-goal-tab" data-toggle="pill" href="#v-pills-goal" role="tab" aria-controls="v-pills-goal" aria-selected="false">Inf. autor</a>
                </div>

              </div>
              <div class="col-md-12 d-flex align-items-center">
                
                <div class="tab-content " id="v-pills-tabContent">

                  <div class="tab-pane fade show active" id="v-pills-whatwedo" role="tabpanel" aria-labelledby="v-pills-whatwedo-tab">
                    
                    <div>
                      <div> Autor: <a href="#"><span class="icon-person"></span>  <?php echo  $campos['nombre']; ?> <?php echo  $campos['apellido']; ?></a></div>
                      <h2 class="mb-4"><?php echo  $campos['titulo']; ?></h2>
                      <p><?php echo  $campos['resumen']; ?></p>                    
                        <div> Categoria: <a href="#">  <?php echo  $campos['nombre_tipo_doc']; ?> </a></div>
                        <div> Linea de Investigacion: <a href="#">  <?php echo  $campos['nombre_linea']; ?> </a></div>
            
                    </div>
                  </div>

                  <div class="tab-pane fade" id="v-pills-mission" role="tabpanel" aria-labelledby="v-pills-mission-tab">
                    <div>


                      <div> Autor :<a href="#"><span class="icon-person"></span> <?php echo  $campos['nombre']; ?> <?php echo  $campos['apellido']; ?></a></div>
                      <h2 class="mb-4"><?php echo  $campos['titulo']; ?></h2>
                      <p><?php echo  $campos['resumen']; ?></p>
                      
                    </div>
                  </div>

                  <div class="tab-pane fade" id="v-pills-goal" role="tabpanel" aria-labelledby="v-pills-goal-tab">
                    <div>
                     <h2 class="mb-4">Informacion de autor</h2>
                      <p>Tipo de Investigador: <?php echo  $campos['nombre_tipo']; ?> </p>
                      <p>Nombres: <?php echo  $campos['nombre']; ?> </p>
                      <p>Apellidos: <?php echo  $campos['apellido']; ?></p>
                      <p>Especialidad: <?php echo  $campos['especialidad']; ?></p>
                      <p>Correo: <?php echo  $campos['correo']; ?></p>
                    </div>
                  </div>

                </div>

              </div>

            </div>

          </div>

        </div>

      </div>

      <div class="container">
        <div class="row">
          <div class="col-md-8 ">
            <div class="sidebar-box ">
              <h3>Lineas de Investigacion</h3>
              <div class="tagcloud">
                <a href="#" class="tag-cloud-link">Linea 1</a>
                <a href="#" class="tag-cloud-link">Linea 2</a>
                <a href="#" class="tag-cloud-link">Linea 3</a>
                <a href="#" class="tag-cloud-link">Linea 4</a>
                <a href="#" class="tag-cloud-link">Linea 1</a>
                <a href="#" class="tag-cloud-link">Linea 2</a>
                <a href="#" class="tag-cloud-link">Linea 3</a>
                <a href="#" class="tag-cloud-link">Linea 4</a>
              </div>
            </div>

            <div class="pt-5 mt-5">
              <h3 class="mb-5">2 Comentarios</h3>
              <ul class="comment-list">
                <li class="comment">
                  <div class="vcard bio">
                    <img src="<?php echo SERVERURL;?>vistas/images/person_1.jpg" alt="Image placeholder">
                  </div>
                  <div class="comment-body">
                    <h3>John Doe</h3>
                    <div class="meta">Junio 27, 2018 at 2:21pm</div>
                    <p>Me parece una increíble tesis</p>
                    <p><a href="#" class="reply">Responder</a></p>
                  </div>
                </li>

                <li class="comment">
                  <div class="vcard bio">
                    <img src="<?php echo SERVERURL;?>vistas/images/person_2.jpg" alt="Image placeholder">
                  </div>
                  <div class="comment-body">
                    <h3>John Doe</h3>
                    <div class="meta">June 27, 2018 at 2:21pm</div>
                    <p>Muy buen marco teórico!!</p>
                    <p><a href="#" class="reply">Responder</a></p>
                  </div>
                </li>
              </ul>
              <!-- END comment-list -->
              
              <div class="comment-form-wrap pt-5">
                <h3 class="mb-5">Agregar Comentario</h3>
                <form action="#" class="p-5 bg-light">
                  <div class="form-group">
                    <label for="name">Nombre *</label>
                    <input type="text" class="form-control" id="name">
                  </div>
                  <div class="form-group">
                    <label for="email">Email *</label>
                    <input type="email" class="form-control" id="email">
                  </div>
                  <div class="form-group">
                    <label for="website">Website</label>
                    <input type="url" class="form-control" id="website">
                  </div>

                  <div class="form-group">
                    <label for="message">Mensaje</label>
                    <textarea name="" id="message" cols="30" rows="10" class="form-control"></textarea>
                  </div>
                  <div class="form-group">
                    <input type="submit" value="Post Comment" class="btn py-3 px-4 btn-primary">
                  </div>

                </form>
              </div>
            </div>

          </div> <!-- .col-md-8 -->
          <div class="col-md-4 sidebar ">
            
              <form action="#" class="search-form">
                <div class="form-group">
                  <span class="icon fa fa-search"></span>
                  <input type="text" class="form-control" placeholder="Buscar con palabras clave">
                </div>
              </form>


          


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


            <div class="sidebar-box ">
              <h3>Publicaciones Recientes</h3>
              <?php require_once './controladores/documentoControlador.php';
        $doc = new documentoControlador();
     ?>
              
         <?php 
            $pagina=explode("/",$_GET['views']);

            echo $doc->mini_catalago();
          ?>
            </div>
            </div>


          </div>

        </div>
      </div>
    </section> <!-- .section -->

   
  <?php  }else{

    echo "<h4>No se pudo recuperar los datos</h4>";
} 
?>
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